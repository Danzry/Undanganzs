<?php

namespace App\Livewire;

use App\Models\FootballGuest;
use LivewireUI\Modal\ModalComponent;
use TallStackUi\Traits\Interactions;
use Twilio\Rest\Client;
use Exception;

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

        $sid = config('services.twilio.sid');
        $token = config('services.twilio.token');
        $from = config('services.twilio.whatsapp_from');
        $message = "test";

        foreach ($this->selectedGuests as $id) {
            $to = FootballGuest::findOrFail($id);

            if ($to && $to->phone_number) {
               
                try {
                    $twilio = new Client($sid, $token);

                    $res = $twilio->messages->create(
                        'whatsapp:' . $to->phone_number,
                        // 'whatsapp:+601117871890',
                        array(
                            "from" => 'whatsapp:' . $from,
                            "body" => $message
                        )
                    );
                    // dd($res);
                } catch (Exception $e) {
                    return back()->with(['error' => $e->getMessage()]);
                }

            } else {
                session()->flash('error', 'Guest not found.');
            }
           
        }
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.bulk-invite-modal');
    }
}
