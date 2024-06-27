<?php

namespace App\Livewire;

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

final class FootballManageTable extends PowerGridComponent
{

    public string $tableName = 'FootballManageTable';

    use WithExport;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function header(): array
    {
        return [
            Button::add('bulk-delete')
                ->render(
                    fn($FootballManageTable) => Blade::render(
                        '<x-ts-button x-text="\'Bulk Delete ( \' + window.pgBulkActions.count(\'' . $this->tableName . '\') + \' )\'" color="white" 
                    wire:click="$dispatch(\'openModal\', { component: \'bulk-delete-modal\', arguments: { selectedGuests: window.pgBulkActions.get(\'' . $this->tableName . '\') } })" />'
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
            // ->add('id', fn($FootballManageTable, $index) => $index + 1)
            ->add('guest_name', fn($FootballManageTable) => ucwords($FootballManageTable->guest_name))
            ->add('phone_number')
            ->add('created_at')
            ->add('created_at_formatted', fn($FootballManageTable) => Carbon::parse($FootballManageTable->created_at)->format('d/m/Y'))
            ->add('updated_at')
            ->add('updated_at_formatted', fn($FootballManageTable) => Carbon::parse($FootballManageTable->updated_at)->format('d/m/Y'));
    }

    public function columns(): array
    {

        return [

            Column::make('Guest name', 'guest_name')
                ->sortable()
                ->searchable()
                ->editOnClick(hasPermission: true),

            Column::add()
                ->title('Phone Nummber')
                ->field('phone_number')
                ->sortable()
                ->searchable()
                ->editOnClick(hasPermission: true),

            Column::add()
                ->title('created at')
                ->field('created_at_formatted')
                ->sortable(),
            // ->searchable(),

            Column::add()
                ->title('updated at')
                ->field('updated_at_formatted')
                ->sortable(),
            // ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    public function actions(FootballGuest $row): array
    {
        return [
            // Button::add('edit')
            //     ->slot('Edit: ' . $row->id)
            //     ->id()
            //     ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
            //     ->dispatch('edit', ['rowId' => $row->id]),

            // Button::add('delete')
            //     ->slot('Delete: ' . $row->id)
            //     ->id()
            //     ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
            //     ->dispatch('edit', ['rowId' => $row->id]),

            Button::add('edit')
                ->id()
                ->can(allowed: auth()->check())
                ->render(fn($FootballManageTable) => Blade::render('<x-ts-button sm text="Edit" color="blue" wire:click="$dispatch(\'openModal\', { component: \'edit-modal\', arguments: { guest: ' . $row->id . ' } })" />')),


            Button::add('delete')
                ->id()
                ->can(allowed: auth()->check())
                ->render(fn($FootballManageTable) => Blade::render('<x-ts-button sm text="Delete" color="red" wire:click="$dispatch(\'openModal\', { component: \'delete-modal\', arguments: { guest: ' . $row->id . ' } })" />')),
        ];
    }

    // public function actionRules($row): array
    // {
    //    return [
    //         // Hide button edit for ID 1
    //         Rule::button('edit')
    //             ->when(fn($row) => $row->id === 1)
    //             ->hide(),
    //     ];
    // }


}