@extends("layouts/master")

@section('title', 'Tambah Artikel')

@section('content')
<form action="/artikel" method="POST">
    @csrf
    <div class="form-group">
        <label for="input-judul">Judul</label>
        <input type="text" class="form-control" id="input-judul" name="input-judul">
    </div>
    <div class="form-group">
        <label for="input-isi">Isi</label>
        <textarea class="form-control" id="input-isi" placeholder="Password" rows="10" name="input-isi"></textarea>
    </div>
    <div class="form-group">
        <label for="input-tags">Tags</label>
        <input type="text" class="form-control" id="input-tags" placeholder="Pisahkan dengan koma (,)" name="input-tags">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Artikel</button>
</form>
@endsection
