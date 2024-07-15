<div>

  
    <button id="finish" class="text-white bg-emerald-500 p-2 rounded">
        Finish ticket
    </button>

    <form id="finish-form" action="{{route('finish-ticket', $ticketId)}}">

    </form>

    <script>
        document.querySelector('#finish').addEventListener('click', function(){
             
             Swal.fire({
                title: "Do you want to finish the ticket?",
                showCancelButton: true,
                confirmButtonText: "Yes",
                customClass: {
                    confirmButton: 'bg-emerald-500',
                    cancelButton: 'bg-red-500'

                }

             }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Ticket finished!", "", "success");
                    document.querySelector('#finish-form').submit();
                } 
             })

         })


    </script>
</div>


