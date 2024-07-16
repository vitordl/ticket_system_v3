<?php

namespace App\Livewire;

use App\Jobs\TicketRepliedJob;
use App\Models\Reply;
use App\Models\Ticket;
use Livewire\Component;

class ReplyTicketLivewire extends Component
{

    public string $reply;
    public $ticketId;
    public $ticketStatus;

    public function render()
    {
        $replies = Reply::where('ticket_id', '=', $this->ticketId)->latest()->get();
        return view('livewire.reply-ticket-livewire', compact('replies'));
    }

    public function saveReply(){

        $ticket = Ticket::find($this->ticketId);

        if($ticket->status == 'closed'){
            return redirect()->route('dashboard');
        }


        $this->validate([
            'reply' => 'required'
        ]);

    
        $reply = Reply::create([
            'reply' => $this->reply,
            'ticket_id' => $this->ticketId,
            'user_id' => auth()->user()->id
        ]);


        $this->reset('reply');

        
        
        TicketRepliedJob::dispatch($this->ticketId, $reply->reply, 
        $ticket->user->email, $reply->user->email,
        $ticket->user->id, $reply->user->id
    
        );
        
    }


}
