@extends("layouts/master")

@section('title', $artikel->judul)

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <h3>
                    <a href="/artikel/<?= $artikel->id_artikel ?>">judul: <?= $artikel->judul ?></a>
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
    </div>
</div>
@endsection
