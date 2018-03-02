<!-- Main content area -->
<div class="card-container">
    <div class="container">

        <div class="text-center padded-box pb-0">
          <h2>Form Input Konten Adat & Budaya</h2><br>
          <form  class="text-left padded-box pb-0" action="<?= base_url()?>adatbudaya/input_data" method="post"  enctype="multipart/form-data">
            <table style="border: 1px solid black;width:800px;" align="center">
              <tr>
                <th style = "width:800px;" colspan ="2" ><h4 style="color :#ffffff;"><center><?=$this->session->flashdata('pesan')?></center></h4></th>
              </tr>
              <tr>
                <th style = "width:100px;border: 1px solid black;"><h6 style="color :#ffffff;"> Judul Konten</h6></th>
                <th style = "width:700px;border: 1px solid black;"><h6 style="color :#ffffff;"><font color="black"><input type="text" name="inputJudul" placeholder="Judul" size="70" ></font></h6></th>
              </tr>
              <tr>
                <th style = "width:100px;border: 1px solid black;"><h6 style="color :#ffffff;"> Deskripsi</h6></th>
                <th style = "width:700px;border: 1px solid black;"><h6 style="color :#ffffff;"><font color="black"><textarea rows="10" cols="70" name = "inputIsi" id="Isi"  placeholder="Isi"></textarea></font></h6></th>
              </tr>
              <tr>
                <th style = "width:100px;border: 1px solid black;"><h6 style="color :#ffffff;"> Gambar</h6></th>
                <th style = "width:100px;border: 1px solid black;"><input type="file" class="form-control" name = "inputFoto" accept="image/*"></th>
              </tr>
              <input type="hidden" name="inputTanggal" value="<?php echo date('Y-m-d h:i:s '); ?>" readonly="readonly">
              <tr>
                <th style = "width:800px;" colspan ="2">  <button type="reset" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button></th>
              </tr>

            </table>
          </form>

        </div>
    </div>
</div>
