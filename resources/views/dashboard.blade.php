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
                        My Tickets
                    </div>
                    
                    <div class="grid grid-cols-12">
                        
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
