@extends("layouts/master")

@section('title', 'Homepage')

@section('content')
<img src="/images/erd.png" alt="">
@endsection

@section('script')
<script src="sbadmin2/js/swal.min.js"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endsection
