<!-- Main content area -->

<main class="container">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-8">
          <?php
    		    $no = 0;
    		    foreach($adat as $u){
          ?>
          <article>
              <h2 class="article-title"><?= $u->nama_adat ?></h2>

              <p class="article-meta">Posted on <time datetime="<?= $u->tgl_edit ?>"><?= $u->tgl_edit ?></time></a></p>

              <p><?php  $wordlimit = word_limiter($u->deskripsi,25);
                echo $wordlimit;?>&hellip;</p>

              <a href="<?= base_url()?>AdatBudaya/lihatdetail/<?= $u->id_adatbudaya ?>" class="btn btn-primary">Read more</a>

          </article>

          <?php
          $no = $no+1;
          } ?>

        </div>
    </div>
</main>
