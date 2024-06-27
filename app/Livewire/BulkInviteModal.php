<?php

namespace App\Livewire;

use App\Models\FootballGuest;
use LivewireUI\Modal\ModalComponent;
use TallStackUi\Traits\Interactions;

class BulkInviteModal extends ModalComponent
{
    use Interactions;

    public FootballGuest $footballGuest;

    public $selectedGuests;

    public function mount($selectedGuests)
    {
        $this->selectedGuests = $selectedGuests;
    }

    public function invite()
    {

        dd($this->selectedGuests);
        // foreach ($this->selectedGuests as $id) {
        //     $selectedGuests = FootballGuest::findOrFail($id);


        //     if ($selectedGuests) {
                
        //     } else {
        //         session()->flash('error', 'Guest not found.');
        //     }
        // }


    }

    public function render()
    {
        return view('livewire.bulk-invite-modal');
    }
}
