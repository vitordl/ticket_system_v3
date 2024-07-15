<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">

                    <div class="uppercase text-2xl mb-4">
                        ticket [{{$ticket->id}}]
                    </div>
                    
                    <div class="md:grid grid-cols-12">
                        
                        <div class="col-span-8">

                            <div>
                                <h4 class="font-bold text-xl">{{$ticket->title}}</h4>
                                
                                <div class="mt-3">{{$ticket->description}}</div>
                                
                                <p class="text-xs mt-5">{{$ticket->created_at->format('d/m/y H:i')}}</p>
                                
                                <p class="text-sm mt-5">{{$ticket->user->name}}</p>
                            </div>

                            @if(auth()->user()->isAdmin && $ticket->status == 'pending')
                            <div class="mt-10">
                            </div>
                            @endif
                            
                            @if(auth()->user()->isAdmin && $ticket->status == 'pending')
                            <div class="flex mb-10 gap-3">
                                <div>
                                    <a href="{{route('accept-ticket', $ticket->id)}}" 
                                        id="accept"
                                        class="bg-emerald-500 px-2 py-2 text-sm text-white rounded">
                                        Accept ticket
                                    </a>
                                  
                                </div>

                                <div>
                                    <a href="{{route('refuse-ticket', $ticket->id)}}" 
                                        id="refuse"
                                        class="bg-red-500 px-2 py-2 text-sm text-white rounded">
                                        Refuse ticket
                                    </a>
                                </div>

                            </div>

                            @endif
                            <hr class="mt-5">
                            
                            @if($ticket->status == 'open' || $ticket->status == 'closed')
                            <div class="mt-10">  
                                <h4 class="uppercase font-bold">Replies Section</h4>

                                <div>
                                    <livewire:reply-ticket-livewire :ticketId="$ticket->id" :ticketStatus="$ticket->status"/>
                                </div>
                            </div>
                            @endif

                            @if(auth()->user()->isAdmin && $ticket->status == 'open')
                            <div class="mt-10">
                                <a href="{{route('finish-ticket', $ticket->id)}}" class="text-white bg-emerald-500 p-2 ">Finish ticket</a>
                            </div>
                            @endif

                        </div>
                        <div class="col-span-4 mx-2 ">
                           
                           {{-- building ideas --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            
            document.querySelector('#accept').addEventListener('click', function(){
             
             Swal.fire({
                 icon: "success",
                 title: "Ticket accepted",
                 text: "Ticked accepted successfully!",
                 showConfirmButton: false,
                 timer: 2000,
             });
         })

         document.querySelector('#refuse').addEventListener('click', function(){
          
             Swal.fire({
                 icon: "error",
                 title: "Ticked refused",
                 text: "Ticked refused successfully!",
                 showConfirmButton: false,
                 timer: 2000,
             });
         })
        </script>
    </div>
</x-app-layout>
