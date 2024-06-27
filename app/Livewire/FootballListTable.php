<?php

namespace App\Livewire;

use App\Enums\AttendanceStatus;
use App\Models\FootballGuest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Livewire\Attributes\On;

final class FootballListTable extends PowerGridComponent
{
    public string $tableName = 'FootballListTable';

    use WithExport;
    public bool $showFilters = false;

    public function boot(): void
    {
        config(['livewire-powergrid.filter' => 'outside']);
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function header(): array
    {
        return [
            Button::add('bulk-invite')
            ->render(
                fn($FootballManageTable) => Blade::render(
                    '<x-ts-button x-text="\'Bulk Invite ( \' + window.pgBulkActions.count(\'' . $this->tableName . '\') + \' )\'" color="white" 
                wire:click="$dispatch(\'openModal\', { component: \'bulk-invite-modal\', arguments: { selectedGuests: window.pgBulkActions.get(\'' . $this->tableName . '\') } })" />'
                )
            )
        ];
    }

    public function datasource(): Builder
    {
        return FootballGuest::query()->where('user_id', auth()->id());
    }


    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('guest_name', fn($FootballManageTable) => ucwords($FootballManageTable->guest_name))
            ->add('phone_number')
            ->add('invitation', fn($FootballManageTable) => match ($FootballManageTable->invitation) {
                0 => Blade::render('<x-ts-badge text="Not Yet Invited" color="yellow" light/>'),
                1 => Blade::render('<x-ts-badge text="Invited" color="green" light/>'),
                default => Blade::render('<x-ts-badge text="Error" color="red" light/>'),
            })
            ->add('status', fn($FootballManageTable) => match ($FootballManageTable->status) {
                'pending' => Blade::render('<x-ts-badge text="Pending" color="blue" light/>'),
                'accepted' => Blade::render('<x-ts-badge text="Accepted" color="green" light/>'),
                'declined' => Blade::render('<x-ts-badge text="Declined" color="red" light/>'),
                default => Blade::render('<x-ts-badge text="Error" color="red" light/>'),
            })
            ->add('guests_attended')
            ->add('response_at')
            ->add('response_at_formatted', fn($FootballManageTable) => Carbon::parse($FootballManageTable->response_at)->format('d/m/Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('Guest name', 'guest_name')
                ->sortable()
                ->searchable(),

            Column::make('Phone number', 'phone_number')
                ->sortable()
                ->searchable(),

            Column::make('Invitation', 'invitation')
                ->sortable()
                ->searchable(),

            Column::make('Status', 'status')
                ->sortable()
                ->searchable(),

            Column::make('Guests attended', 'guests_attended')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('Response at')
                ->field('response_at_formatted')
                ->sortable(),


        ];
    }

    public function filters(): array
    {
        return [
            Filter::boolean('invitation')->label('Invited', 'Not Yet Invited'),

            Filter::enumSelect('status', 'Status')
                ->datasource(AttendanceStatus::cases())
                ->optionLabel('labels'),
        ];
    }

    #[On('bulkInvite.{tableName}')]
    public function bulkInvite(): void
    {
        $this->js('alert(window.pgBulkActions.get(\'' . $this->tableName . '\'))');
    }
}
