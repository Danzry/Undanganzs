<?php

namespace App\Livewire;

use App\Models\FootballGuest;
use Illuminate\Support\Facades\Gate;
use LivewireUI\Modal\ModalComponent;
use TallStackUi\Traits\Interactions;

class DeleteModal extends ModalComponent
{
    use Interactions; 
    public $guest;
    public FootballGuest $footballGuest;


    public function mount($guest)
    {
        $this->guest = $guest;
    }

    public function delete()
    {
 
        $footballGuest = FootballGuest::findOrFail($this->guest);

        if ($footballGuest) {

            $footballGuest->delete();
            $this->closeModal();

            $this->dispatch('pg:eventRefresh-FootballManageTable');
            $this->dispatch('pg:eventRefresh-FootballListTable');
            
            $this->toast()->success('Success', '<b>' . $footballGuest->guest_name . '</b> has been successfully deleted.')->send();
            
        } else {
    
            session()->flash('error', 'Guest not found.');
        }
    }

    public function render()
    {
        return view('livewire.delete-modal');
    }
}
