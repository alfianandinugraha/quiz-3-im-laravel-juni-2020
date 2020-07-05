@extends("layouts/master")

@section('title', 'Edit Artikel')

@section('content')
<form action="/artikel/<?= $artikel->id_artikel ?>" method="POST">
    <input type="hidden" name="_method" value="put">
    @csrf
    <div class="form-group">
        <label for="input-judul">Judul</label>
        <input type="text" class="form-control" id="input-judul" name="input-judul" value="<?= $artikel->judul ?>">
    </div>
    <div class="form-group">
        <label for="input-isi">Isi</label>
        <textarea class="form-control" id="input-isi" placeholder="Password" rows="10" name="input-isi"><?= $artikel->isi ?></textarea>
    </div>
    <div class="form-group">
        <label for="input-tags">Tags</label>
        <input type="text" class="form-control" id="input-tags" placeholder="Pisahkan dengan koma (,)" name="input-tags" value="<?= $artikel->tag ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update Artikel</button>
</form>
@endsection
