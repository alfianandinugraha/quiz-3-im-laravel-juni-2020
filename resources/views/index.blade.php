@extends("layouts/master")

@section('title', 'Artikel')

@section('content')
<div class="row">
    <div class="col-lg-6">
        @foreach($result as $artikel)
        <div class="card mb-4">
            <div class="card-body">
                <h3>
                    <a href="/artikel/<?= $artikel->id_artikel ?>">judul: <?= $artikel->judul ?></a>
                    <a href="/artikel/<?= $artikel->id_artikel ?>/edit" class="btn btn-primary">Edit</a>
                    <form action="/artikel/<?= $artikel->id_artikel ?>/delete" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </h3>
                <p>slug: <?= $artikel->slug ?></p>
                <p><?= $artikel->isi ?></p>
                <?php
                $tags = explode(',', $artikel->tag);
                foreach ($tags as $tag) {
                    echo '<button class="btn btn-success mr-2">' . $tag . '</button>';
                }
                ?>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
