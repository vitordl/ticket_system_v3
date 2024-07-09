<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class ShowTicketsLivewire extends Component
{
    // public $status_ticket = 'pending';



    public function render()
    {   
        if(auth()->user()->isAdmin){
            $tickets = Ticket::where('status', '=', 'pending')->latest()->get();
        }else{
            $tickets = Ticket::where('status', '=', 'pending')->where('user_id', '=', auth()->user()->id)->latest()->get();
        }
 
        return view('livewire.show-tickets-livewire', compact('tickets'));
    }


    public function show(Ticket $ticket){
        
        return view('ticket', compact('ticket'));
        
    }


    public function show_only_open_tickets(){
       // $this->status_ticket = 'open';
        
        $tiko = Ticket::where('status', '=', 'open')->latest()->get();

     
        return view('tickets-open', ['tickets' => $tiko]);
    }


    public function changeStatusToOpen(Ticket $ticket){

        $ticket->status = 'open';
        $ticket->save();

        return redirect()->route('dashboard');
    }

    // public function changeStatusToRefused(Ticket $ticket){

    //     $ticket->status = 'closed';
    //     $ticket->save();
    // }


}
