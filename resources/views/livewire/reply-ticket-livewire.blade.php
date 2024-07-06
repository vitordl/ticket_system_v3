<div>
    <form wire:submit.prevent='saveReply()'>
        <textarea wire:model='reply' class="w-full border-gray-400" cols="30" rows="3"></textarea>
        
        <div class="text-xs text-amber-600">
            @error('reply')
                {{$message}}
            @enderror
        </div>
        
        <div class="mt-4">
            <x-primary-button type="submit">Reply</x-primary-button>
        </div>

    </form>


    <div class="mt-8 text-sm">
        @if($replies)
            @foreach ($replies as $r)
              <div class="border p-4 rounded-lg mt-4">{{$r->reply}}</div>  
            @endforeach
        @else
            Waiting for replies...
        @endif

    </div>

</div>
