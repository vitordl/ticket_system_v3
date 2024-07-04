<div>

    @foreach ($tickets as $t)
    <div class="border bg-orange-200 mb-4 p-2 rounded-lg shadow-xl">
        <h4 class="font-bold">{{$t->title}}</h4>

        <div class="text-gray-700">{{$t->description}}</div>

    </div>
    @endforeach
</div>
