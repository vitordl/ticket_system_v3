<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Novo Ticket') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="uppercase text-2xl mb-4">
                        Novo Ticket
                    </div>
                    
                    <div class="md:grid grid-cols-12">
                        
                        <div class="col-span-8">
                            <livewire:create-ticket-livewire/>
                        </div>
                        <div class="col-span-4 mx-2 ">
                           {{-- building ideas  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
