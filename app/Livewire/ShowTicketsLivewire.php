<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class ShowTicketsLivewire extends Component
{
    public function render()
    {

        $tickets = Ticket::all();
        return view('livewire.show-tickets-livewire', compact('tickets'));
    }
}
