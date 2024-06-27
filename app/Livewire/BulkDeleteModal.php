<?php

namespace App\Livewire;

use App\Models\FootballGuest;
use LivewireUI\Modal\ModalComponent;
use TallStackUi\Traits\Interactions;

class BulkDeleteModal extends ModalComponent
{
    use Interactions;
    public $selectedGuests;

    public FootballGuest $footballGuest;

    public function mount($selectedGuests)
    {
        $this->selectedGuests = $selectedGuests;
    }

    public function delete()
    {

        $countDeleted = 0;

        foreach ($this->selectedGuests as $id) {
            $selectedGuests = FootballGuest::findOrFail($id);
        
            if ($selectedGuests) {
                $selectedGuests->delete();
                $countDeleted++;
                
            } else {
                session()->flash('error', 'Guest not found.');
            }
        }

        $this->closeModal();

        $this->dispatch('pg:eventRefresh-FootballManageTable');
        $this->dispatch('pg:eventRefresh-FootballListTable');

        $this->toast()->success('Success', '<b>' . $countDeleted . '</b> guests have been successfully deleted.')->send();

    }

    public function render()
    {
        return view('livewire.bulk-delete-modal');
    }
}
