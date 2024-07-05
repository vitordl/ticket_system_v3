<?php

namespace App\Livewire;

use App\Jobs\SendInfoTicketJob;
use App\Jobs\SendInfoTicketMail;
use App\Models\Ticket;
use Livewire\Component;

class CreateTicketLivewire extends Component
{
    public string $title, $description, $support_id;
    

    public function render()
    {
        return view('livewire.create-ticket-livewire');
    }

    public function saveTicket(){


        $user = auth()->user();

        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'support_id' => 'required|numeric',
        ]);

        Ticket::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => auth()->user()->id,
            'support_id' => $this->support_id,
        ]);
        
        
        SendInfoTicketJob::dispatch($this->title, $this->description, $user);
        //aqui estou passando p.e    oi ,     ola tudo bem?
        
        $this->reset([
        'title', 'description', 'support_id'
        ]);



        // processo a resolver..

 
    }
}
