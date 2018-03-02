<!-- Main content area -->
<div class="card-container">
    <div class="container">
      <div class="text-center padded-box pb-0">
        <h2>Registrasi User</h2><br>
        <form  class="text-left padded-box pb-0" action="<?= base_url()?>Login/submit" method="post" >
          <table style="border: 1px solid black;width:800px;" align="center">
            <tr>
              <th style = "width:800px;" colspan ="2" ><h4 style="color :#ffffff;"><center><?=$this->session->flashdata('pesan')?></center></h4></th>
            </tr>
            <tr>
              <th style = "width:100px;border: 1px solid black;"><h6 style="color :#ffffff;"> Nama User</h6></th>
              <th style = "width:700px;border: 1px solid black;"><h6 style="color :#ffffff;"><font color="black"><input type="text" name="inputNama" placeholder="Nama" size="70" ></font></h6></th>
            </tr>
            <tr>
              <th style = "width:100px;border: 1px solid black;"><h6 style="color :#ffffff;">Username</h6></th>
              <th style = "width:700px;border: 1px solid black;"><h6 style="color :#ffffff;"><font color="black"><input type="text" name="inputUsername" placeholder="Username" size="70" ></font></h6></th>
            </tr>
            <tr>
              <th style = "width:100px;border: 1px solid black;"><h6 style="color :#ffffff;">Password</h6></th>
              <th style = "width:700px;border: 1px solid black;"><h6 style="color :#ffffff;"><font color="black"><input type="password" name="inputPassword1" placeholder="Password" size="70" ></font></h6></th>
            </tr>
            <tr>
              <th style = "width:100px;border: 1px solid black;"><h6 style="color :#ffffff;">Confirm Password</h6></th>
              <th style = "width:700px;border: 1px solid black;"><h6 style="color :#ffffff;"><font color="black"><input type="password" name="inputPassword2" placeholder="Password" size="70" ></font></h6></th>
            </tr>
            <tr>
              <th style = "width:800px;" colspan ="2">  <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button></th>
            </tr>

          </table>
        </form>

      </div>
    </div>
</div>
