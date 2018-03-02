<!-- Main content area -->
<div class="card-container">
    <div class="container">

        <div class="text-center padded-box pb-0">
          <h2>Daftar Konten Adat & Budaya</h2><br>
          <a href="<?= base_url()?>adatbudaya/forminput" class="btn btn-primary">Tambah Data</a>
          <table class="text-center padded-box pb-0" style="border: 1px solid black;" align="center">
            <tr>
              <th width="50px" ><h4 style="color :#ffffff;" >No.</h4></th>
              <th width="200px" ><h4 style="color :#ffffff;" >Judul Konten</h4></th>
              <th width="500px" ><h4 style="color :#ffffff;" >Penjelasan</h4></th>
              <th width="100px" ><h4 style="color :#ffffff;" >Edit</h4></th>
            </tr>
            <?php
      		    $no = 1;
      		    foreach($adat as $u){
            ?>
            <tr>
              <th style="background-color: #ffffff;border: 1px solid black" width="50px" ><font color="black" ><?= $no ?></font></th>
              <th style="background-color: #ffffff;border: 1px solid black" width="150px" ><font color="black"><?= $u->nama_adat ?></font></th>
              <th style="background-color: #ffffff;border: 1px solid black" width="400px" ><font color="black">
              <?php  $wordlimit = word_limiter($u->deskripsi,25);
                echo $wordlimit;?></font></th>
              <th style="background-color: #ffffff;border: 1px solid black"  width="100px" ><font color="black"><a href='<?= base_url()?>adatbudaya/hapusadatbudaya/<?= $u->id_adatbudaya?>'>Hapus </a></font></th>
            </tr>

              <?php
            $no = $no+1;
            } ?>
          </table>
        </div>
    </div>
</div>
