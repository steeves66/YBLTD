<div wire:ignore.self>
    <div>
        @if($currentPage == USERPAGECREATEFORM)
        @include('livewire.utilisateurs.create')
        @endif

        @if($currentPage == USERPAGEEDITFORM)
        @include('livewire.utilisateurs.edit')
        @endif

        @if($currentPage == USERPAGELIST)
        @include('livewire.utilisateurs.liste')
        @endif
    </div>
</div>

<script>
    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
                position: 'top-end',
                icon: 'success',
                toast:true,
                title: event.detail.message || "Opération effectuée avec succès!",
                showConfirmButton: false,
                timer: 5000
                }
            )
    })
</script>

<script>
    window.addEventListener("showConfirmMessage", event =>{
        Swal.fire({
            title: event.detail.message.title,
            text: event.detail.message.text,
            icon: event.detail.message.icon,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuer',
            cancelButtonText: 'Annuler',
        }).then((result) => {
            if (result.isConfirmed) {
                @this.deleteUser(event.detail.message.data.user_id)
            }
        })
    })
</script>

<script>
    window.addEventListener("showDeleteSuccessMessage", event =>{
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast:true,
            title: event.detail.message || "Opération effectuée avec succès !.",
            showConfirmButton: false,
            timer: 3000
        })
    })
</script>

<script>
    window.addEventListener("showResetPasswordConfirmMessage", event =>{
        Swal.fire({
            title: event.detail.message.title,
            text: event.detail.message.text,
            icon: event.detail.message.icon,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuer',
            cancelButtonText: 'Annuler',
        }).then((result) => {
            if (result.isConfirmed) {
                @this.resetPassword()
            }
        })
    })
</script>
