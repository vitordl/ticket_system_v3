<div>

  
    <button id="finish" class="text-white bg-emerald-500 p-2 rounded">
        Finalizar chamado 
    </button>

    <form id="finish-form" action="{{route('finish-ticket', $ticketId)}}">

    </form>

    <script>
        document.querySelector('#finish').addEventListener('click', function(){
             
             Swal.fire({
                title: "Você quer finalizar o chamado?",
                showCancelButton: true,
                confirmButtonText: "Sim",
                cancelButtonText: 'Cancelar',
                customClass: {
                    confirmButton: 'bg-emerald-500',
                    cancelButton: 'bg-red-500',
                }

             }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Chamado finalizado!", "", "success");
                    document.querySelector('#finish-form').submit();
                } 
             })

         })


    </script>
</div>


