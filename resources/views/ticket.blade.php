<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="uppercase text-2xl mb-4">
                        ticket [{{$ticket->id}}]
                    </div>
                    
                    <div class="grid grid-cols-12">
                        
                        <div class="col-span-8">

                            <div class="border p-4">
                                <h4 class="font-bold text-xl">{{$ticket->title}}</h4>
                                
                                <div class="mt-3">{{$ticket->description}}</div>
                                
                                <p class="text-xs mt-5">{{$ticket->created_at->format('d/m/y H:i')}}</p>
                                
                                <p class="text-sm mt-5">{{$ticket->user->name}}</p>
                            </div>
                            
                            <div class="border  p-4 my-4 ">  
                                <h4 class="uppercase font-bold">Replies Section</h4>

                                <div>
                                    <livewire:reply-ticket-livewire :ticketId="$ticket->id"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-4 mx-2 ">
                           
                            boa noite
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
