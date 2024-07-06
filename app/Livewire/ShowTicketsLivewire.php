<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class ShowTicketsLivewire extends Component
{

    public function render()
    {

        $tickets = Ticket::latest()->get();
        return view('livewire.show-tickets-livewire', compact('tickets'));
    }


    public function show(Ticket $ticket){
        
        return view('ticket', compact('ticket'));
        
        
    }
}
