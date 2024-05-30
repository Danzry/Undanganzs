<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserEvent;

class AppSidebar extends Component
{

    public $userEvents;

    public function mount()
    {
        $this->userEvents = UserEvent::forUser(auth()->id())->get();
    }

    public function render()
    {
        return view('users.livewire.app-sidebar', [
            'userEvents' => $this->userEvents,
        ]);
    }
}
