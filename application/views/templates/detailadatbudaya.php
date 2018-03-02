<!-- Main content area -->

<main class="container">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-8">
            <article>

                <h2 class="article-title"><?= $nama_adat ?></h2>
                <p class="article-meta">Posted on  <time datetime="<?= $tgl_edit ?>"><?= $tgl_edit ?></time></p>
                <center><img src="<?= base_url()."".$link_foto ?>" ></center>
                <p><?= $deskripsi ?></p>
            </article>
        </div>
    </div>
</main>
