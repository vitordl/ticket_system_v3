<?php

namespace App\Livewire;

use App\Jobs\SendInfoTicketJob;
use App\Jobs\SendInfoTicketMail;
use App\Models\Ticket;
use Livewire\Component;

class CreateTicketLivewire extends Component
{
    public string $title, $description, $user_id, $support_id;
    

    public function render()
    {
        return view('livewire.create-ticket-livewire');
    }

    public function saveTicket(){

        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required|numeric',
            'support_id' => 'required|numeric',
        ]);

        Ticket::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'support_id' => $this->support_id,
        ]);

        $this->reset([
            'title', 'description', 'user_id', 'support_id'
        ]);

        // SendInfoTicketJob::dispatch(que parametros?);
        // processo a resolver..

 
    }
}
