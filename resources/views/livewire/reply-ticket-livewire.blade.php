<div>

    @if($ticketStatus == 'open')
    <form wire:submit.prevent='saveReply()'>
        <textarea wire:model='reply' class="w-full border-gray-300 rounded" cols="30" rows="3"></textarea>
        
        <div class="text-xs text-amber-600">
            @error('reply')
                {{$message}}
            @enderror
        </div>
        
        <div class="mt-4">
            <x-primary-button type="submit">Responder</x-primary-button>
        </div>

    </form>

    @endif

    
    <div class="mt-8 text-sm">
        @if($replies)
            @foreach ($replies as $r)
              <div class="border border-4  bg-gray-50 p-2 rounded-lg mt-4 ">
                @if($r->user->isAdmin)
                    <p class="text-red-600 text-xs bg-red-200 inline-flex px-1 rounded">{{$r->user->name}}</p>
                @else  
                    <p class="text-blue-600 text-xs bg-gray-200 inline-flex px-1 rounded">{{$r->user->name}}</p>
                @endif
                <div class="px-1">{{$r->reply}}</div>
                <div class="text-xs text-end text-gray-600">{{$r->created_at->format('d/m/y H:i')}}</div>
              </div>  
            @endforeach
        @else
            Aguardando respostas...
        @endif

    </div>

</div>
