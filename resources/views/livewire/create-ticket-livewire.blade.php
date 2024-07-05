<div>

    <form method="post" wire:submit.prevent='saveTicket()'>

        <div class="mb-2">
            <input type="text" name="" id="title" wire:model='title' placeholder="what's the title?" class="w-full rounded-lg border-gray-500">
        </div>
        @error('title')
            {{$message}}
        @enderror
    


        <div class="mt-2">
            <input type="text" name="" id="support_id" wire:model='support_id' placeholder="what's the suport-id?" class="w-full rounded-lg border-gray-500">
        </div>
        @error('support_id')
            {{$message}}
        @enderror


        <div class="mt-2">
            <textarea wire:model='description' name="" id="description" cols="30" rows="5" class="w-full rounded-lg border-gray-500">aqui...</textarea>
        </div>
        @error('description')
            {{$message}}
        @enderror

        <div class="mt-2">
            <x-primary-button type="submit">Salvar</x-primary-button>
        </div>

        
    </form>
    
   
</div>
