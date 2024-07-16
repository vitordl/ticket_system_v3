<?php

namespace App\Livewire;

use App\Events\TicketCreatedEvent;
use App\Jobs\SendInfoTicketJob;
use App\Jobs\SendInfoTicketMail;
use App\Models\Ticket;
use Livewire\Component;

class CreateTicketLivewire extends Component
{
    public string $title, $description;
    

    public function render()
    {
        return view('livewire.create-ticket-livewire');
    }

    public function saveTicket(){


        $user = auth()->user();

        $this->validate([
            'title' => 'required|max:250',
            'description' => 'required',
        ]);

        $ticket = Ticket::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => auth()->user()->id,
        ]);
        
        
        SendInfoTicketJob::dispatch($this->title, $this->description, $user, $ticket->id);
        
        notify()->success('Ticket '.$ticket->id.' was created successfully! And it is waiting for approval');
        
        return redirect()->route('dashboard');
        

        // event(new TicketCreatedEvent());
      
      
        // $this->reset([
        // 'title', 'description'
        // ]);

    }
}
