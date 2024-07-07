<?php

namespace App\Livewire;

use App\Models\Reply;
use Livewire\Component;

class ReplyTicketLivewire extends Component
{

    public string $reply;
    public $ticketId;

    public function render()
    {
        $replies = Reply::where('ticket_id', '=', $this->ticketId)->latest()->get();
        return view('livewire.reply-ticket-livewire', compact('replies'));
    }

    public function saveReply(){

        $this->validate([
            'reply' => 'required'
        ]);

        Reply::create([
            'reply' => $this->reply,
            'ticket_id' => $this->ticketId,
            'user_id' => auth()->user()->id
        ]);

        $this->reset('reply');
    }


}
