<x-app-layout>
    <x-slot name="header">
        <div class="md:flex">

            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="size-6 fill-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                      
                    {{ __('Pending Tickets') }} 
                </h2>

            </div>

            <div class="flex gap-4 mx-4 text-sm">
             
               
                <a href="{{route('ticket-open')}}" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="size-6 fill-orange-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 13.5 3 3m0 0 3-3m-3 3v-6m1.06-4.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                      
                      Open Tickets
                </a>


                <a href="{{route('ticket-closed')}}" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="size-6 fill-emerald-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                      
                      
                    Closed Tickets
                </a>

            </div>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="uppercase mb-4">
                        <h4 class="text-2xl">My Tickets</h4>
                    </div>

                    
                    <div class="md:grid grid-cols-12">
                        
                        <div class="col-span-8">
                            <livewire:show-tickets-livewire/>
                        </div>
                        <div class="col-span-4 mx-2 ">
                            <div class="bg-gray-200 rounded-lg shadow-xl text-center">
                                <h4 class="font-bold uppercase">Recent activity</h4>
                                <div class="mt-4 text-xs">
                                    <p>You creted a new ticket</p>
                                    <p>You creted a new ticket</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
