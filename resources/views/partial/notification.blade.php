@if (session('status_error'))
<script>
    Swal.fire({
        title: ' {{ session('status_error') }} ',
        icon: 'error',
        confirmButtonText: `Ok`,

    })

</script>
@endif
@if (session('status_success'))

<script>
    Swal.fire({
        title: ' {{ session('status_success') }} ',
        icon: 'success',
        showConfirmButton: false,
        timer: 2000
    })

</script>

@endif
