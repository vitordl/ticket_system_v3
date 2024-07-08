<div>

    @if($tickets->count() > 0)
        @foreach ($tickets as $t)

            <a href="{{route('ticket', $t->id)}}">
                <div class="border bg-orange-200 mb-4 p-2 rounded-lg shadow-xl">

                    @if(auth()->user()->isAdmin)
                    <p class="text-sm text-amber-600">{{$t->user->name}}</p>
                    @endif
                    <h4 class="font-bold">{{Str::limit($t->title, 100)}}</h4>
            
                    <div class="text-gray-700">{{Str::limit($t->description, 150)}}</div>
                    <div class="text-xs text-end">{{$t->created_at->format('d/m/y H:i')}}</div>
            
                </div>
            </a>

        @endforeach

    @else  
        <div>You don't have tickets yet!</div>

    @endif
</div>
