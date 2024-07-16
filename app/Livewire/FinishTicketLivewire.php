<?php

namespace App\Livewire;

use Livewire\Component;

class FinishTicketLivewire extends Component
{
    public string $ticketId;

    public function render()
    {
        return view('livewire.finish-ticket-livewire');
    }

}
