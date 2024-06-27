<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FootballGuest;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On; 

use TallStackUi\Traits\Interactions;

class FootballAdd extends Component
{

    use Interactions;
    public FootballGuest $FootballGuest;

    #[Rule('required|string|max:255|regex:/^[^0-9]+$/')]
    public $guest_name;

    #[Rule('required|string|max:30')]
    public $phone_number;

    #[Rule('required|string|max:30')]
    public $full_number;

    #[On('footbal-add')] 
    public function listenFullNumber($fullNumber)
    {
        $this->full_number = $fullNumber;
    }
    
    public function create()
    {
        $this->validate();

        $guest_name = ucwords($this->guest_name);
        $user_id = Auth::id();
        $full_number = $this->full_number;

        $existingGuest = FootballGuest::where('phone_number', $full_number)->first();

        if ($existingGuest) {
            $this->toast()->error('Error', 'Phone number already exists in the database.')->send();
            return;
        }

        FootballGuest::create([
            'guest_name' => $guest_name,
            'phone_number' => $full_number,
            'user_id' => $user_id,
        ]);


        $this->dispatch('pg:eventRefresh-FootballManageTable');
        $this->dispatch('pg:eventRefresh-FootballListTable');

        $this->reset('guest_name'); 
        $this->reset('phone_number'); 

        $this->toast()->success('Success', '<b>' . $guest_name . '</b> has been successfully added.')->send();
    }

    public function render()
    {
        return view('livewire.football-add');
    }
}
