<div>
    <div class="flex bg-white">
            <button wire:click.prevent="showTickets('pending')" 
        class="flex items-center font-semibold hover:bg-gray-200 bg-white p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="size-6 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                </svg>
                <span class="hidden md:block">Pending Tickets </span>
                <span class="md:hidden">Pending</span>
                 
            </button>
       
            <button wire:click.prevent="showTickets('open')" 
            class="flex items-center font-semibold hover:bg-gray-200 bg-white p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="size-6 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 13.5 3 3m0 0 3-3m-3 3v-6m1.06-4.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                </svg>
                <span class="hidden md:block">Open Tickets</span>
                <span class="md:hidden">Open</span>
            </button>
        
        
            <button wire:click.prevent="showTickets('closed')" 
            class="flex items-center font-semibold hover:bg-gray-200 bg-white p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="size-6 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>   
                  
                <span class="hidden md:block">Closed Tickets</span>
                <span class="md:hidden">Closed</span>
            </button>

          
            @if(auth()->user()->isAdmin)
            <button wire:click.prevent="showTickets('refused')"
            class="hidden md:flex text-xs text-gray-500  items-center mx-5 hover:text-gray-700" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75 14.25 12m0 0 2.25 2.25M14.25 12l2.25-2.25M14.25 12 12 14.25m-2.58 4.92-6.374-6.375a1.125 1.125 0 0 1 0-1.59L9.42 4.83c.21-.211.497-.33.795-.33H19.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25h-9.284c-.298 0-.585-.119-.795-.33Z" />
                </svg>
                    
                Refused Tickets
            </button>
            @endif

   

    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="uppercase mb-4">
                        <h4 class="text-2xl">{{$statusTicket}} Tickets 
                            
                        @if($qtTickets > 0)
                        <span class="text-sm">({{$qtTickets}})</span>
                        @endif
                    </h4>
                    </div>

                    <div class="hidden lg:block">
                        <x-notify::notify />
                    </div>


                    <div class="md:grid grid-cols-12">
                        
                        <div class="col-span-8">


                            @if($tickets->count() > 0)
                                @foreach ($tickets as $t)
                        
                                    <a href="{{route('ticket', $t->id)}}">
                                        
                                        @if($t->status == 'refused')
                                        <div class="border bg-gray-300 mb-4 p-2 rounded-lg shadow-xl">
                                        @elseif($t->status == 'pending')
                                        <div class="border bg-gray-50 mb-4 p-2 rounded-lg shadow-xl">
                                        @else
                                        <div class="border bg-orange-200 mb-4 p-2 rounded-lg shadow-xl">

                                        @endif

                        
                                            @if(auth()->user()->isAdmin)
                                            <p class="text-sm text-amber-600">{{$t->user->name}}</p>
                                            @endif
                                            <h4> <span class="text-sm">#{{$t->id}} |</span>  
                                                <span  class="font-bold">
                                                    {{Str::limit($t->title, 100)}}
                                                </span>
                                            </h4>
                                            <div class="text-gray-700">{{Str::limit($t->description, 150)}}</div>
                                            <p class="text-xs uppercase text-amber-600">Status {{$t->status}}</p>
                                            <div class="text-xs text-end text-amber-500">{{$t->created_at->format('d/m/y H:i')}}</div>
                                            
                                            @if($t->reply->count())
                                            <div class="text-xs">Commennts ({{count($t->reply)}})</div>
                                            @endif
                                        </div>
                                    </a>
                        
                                  
                                    
                                @endforeach
                        
                            @else  
                                <div>You don't have tickets!</div>
                        
                            @endif
                        
                            
                        </div>
                        <div class="col-span-4 mx-2 ">
                            <div class="bg-gray-200 rounded-lg shadow-xl text-center">

                               {{-- <div> building </div> --}}
            
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

   