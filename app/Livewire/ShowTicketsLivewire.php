<?php

namespace App\Livewire;

use App\Jobs\TicketAcceptedJob;
use App\Jobs\TicketRefusedJob;
use App\Models\Ticket;
use Livewire\Component;

class ShowTicketsLivewire extends Component
{

    public $status = 'pending';



    public function render()
    {   
    
        if(auth()->user()->isAdmin){
            $tickets = Ticket::where('status', '=', $this->status)
            ->orderBy('updated_at', 'desc')
            ->get();
        }else{
            $tickets = Ticket::where('status', '=', $this->status)
            ->where('user_id', '=', auth()->user()->id)
            ->orderBy('updated_at', 'desc')
            ->get();
        }

        $statusTicket = $this->status;

        
        return view('livewire.show-tickets-livewire', [
            'tickets' => $tickets,
            'statusTicket' => $statusTicket,
            'qtTickets' => $tickets->count(),
    
        ]);
    }


    public function showItem(Ticket $ticket){
        
        return view('ticket', compact('ticket'));
        
    }
    
   

    public function showTickets($status){
        $this->status = $status;
    }



    public function accept(Ticket $ticket){
       
        $ticket->status = 'open';
        $ticket->save();
     
        notify()->success('Ticket '.$ticket->id.' was approved by '.auth()->user()->name);

        
        TicketAcceptedJob::dispatch($ticket->user->email, $ticket->id, $ticket->title, $ticket->description);

    }


    public function refused(Ticket $ticket){
        
        
        $ticket->status = 'refused';
        $ticket->save();
        
        notify()->warning('Ticket '.$ticket->id.' was refused by '.auth()->user()->name);
        
        TicketRefusedJob::dispatch($ticket->user->email, $ticket->id, $ticket->title, $ticket->description);

    }

    public function finishTicket(Ticket $ticket){

        $ticket->status = 'closed';
        $ticket->save();

        notify()->success('Ticket '.$ticket->id.' was finished by '.auth()->user()->name);

        return redirect()->route('dashboard');

    }

    public function acceptTicket(Ticket $ticket){

        $ticket->status = 'open';
        $ticket->save();

        notify()->success('Ticket '.$ticket->id.' was approved by '.auth()->user()->name);
       
        return redirect()->route('dashboard');

    }

    public function refuseTicket(Ticket $ticket){

        $ticket->status = 'refused';
        $ticket->save();

        notify()->warning('Ticket '.$ticket->id.' was refused by '.auth()->user()->name);

        return redirect()->route('dashboard');

    }

    

}
