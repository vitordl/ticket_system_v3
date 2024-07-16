<div>

    <form method="post" wire:submit.prevent='saveTicket()'>

        <div class="mb-2">
            <div>
                <label for="title">Título do chamado</label>
            </div>
            <input type="text" name="title" id="title" wire:model='title' class="w-full rounded-lg border-gray-500">
        </div>
        @error('title')
            <div class="text-xs text-amber-600">{{$message}}</div>
        @enderror


        <div class="mt-2">
            <div>
                <label for="description">Descrição do chamado</label>
            </div>

            <textarea wire:model='description' name="description" id="description" cols="30" rows="5" class="w-full rounded-lg border-gray-500"></textarea>
        </div>
        @error('description')
           <div class="text-xs text-amber-600">{{$message}}</div> 
        @enderror

        <div class="mt-2">
            <x-primary-button type="submit">Salvar</x-primary-button>
        </div>

        
    </form>
    
    <x-notify::notify />
    
    <button  type="button" class="text-xs hidden" id="preencher">Preencher</button>


    <script>
        document.querySelector('#preencher').addEventListener('click', function (){
            document.querySelector('#title').value = 'Lorem ipsum dolor sit amet'
            document.querySelector('#description').value = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo corporis.'

        })
    </script>
   
</div>
