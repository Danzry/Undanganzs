<?php

namespace App\Livewire;

use App\Models\FootballGuest;
use LivewireUI\Modal\ModalComponent;

class EditModal extends ModalComponent
{
    public $guest;
    public FootballGuest $footballGuest;

    public function mount($guest)
    {
        $this->guest = $guest;
    }
    
    public function render()
    {
        return view('livewire.edit-modal');
    }
}
