
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>A Pen by  Zoltan Kohalmy</title>
      <link rel="stylesheet" href="<?= base_url()?>assets/login/css/style.css">
</head>

<body>
<form action="<?= base_url()?>login/masuk" method="post">
  <header>Login</header>
  <center><?=$this->session->flashdata('pesan')?></center>
  <label>Username <span>*</span></label>
  <input type="text" name="user" id="user"/>
  <div class="help">At least 6 character</div>
  <label>Password <span>*</span></label>
  <input type="password" name="pass" id="pass"/>
  <div class="help">Use upper and lowercase lettes as well</div>
  <button>Login</button>
	<div><center> <a href="<?= base_url()?>home"> Back to Home </a></center></div>
  <div><center> <a href="<?= base_url()?>Login/daftar"> Daftar </a></center></div>
</form>

</body>

</html>
