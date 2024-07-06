<?php

namespace App\Livewire;

use App\Models\Reply;
use Livewire\Component;

class ReplyTicketLivewire extends Component
{

    public string $reply;

    public function render()
    {
        $replies = Reply::where('ticket_id', '=', 70)->latest()->get();
        return view('livewire.reply-ticket-livewire', compact('replies'));
    }

    public function saveReply(){

        $this->validate([
            'reply' => 'required'
        ]);

        Reply::create([
            'reply' => $this->reply,
            'ticket_id' => 70,
            'user_id' => auth()->user()->id
        ]);

        $this->reset('reply');
    }


}
