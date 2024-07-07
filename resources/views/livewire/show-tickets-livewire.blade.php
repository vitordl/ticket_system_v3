<div>

    @if(empty($tickets))
        @foreach ($tickets as $t)

            <a href="{{route('ticket', $t->id)}}">
                <div class="border bg-orange-200 mb-4 p-2 rounded-lg shadow-xl">
                    <h4 class="font-bold">{{$t->title}}</h4>
            
                    <div class="text-gray-700">{{$t->description}}</div>
                    <div class="text-xs">{{$t->created_at->format('d/m/y H:i')}}</div>
            
                </div>
            </a>

        @endforeach
    @else  
        <div>You don't have tickets yet!</div>

    @endif
</div>
