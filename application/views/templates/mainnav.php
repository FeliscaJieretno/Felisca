    <!-- Main navigation -->
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary">
        <div class="container">

            <!-- Company name shown on mobile -->
            <a class="navbar-brand" href="<?= base_url()?>Home"><span>Chinese's</span>Blog</a>

            <!-- Mobile menu toggle -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main navigation items -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url()?>Home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="<?= base_url()?>AdatBudaya">Adat dan Budaya</a>
                    </li>

                    
                    <li class="nav-item">
                            <a class="nav-link" href="<?= base_url()?>Tentangsaya">About Me</a>
                    </li>

                </ul>
                <ul class="navbar-nav mr-auto">

                  <?php
                    if (isset($this->session->userdata['logged_in'])) {
                      $data = $this->session->userdata['logged_in'];
                  ?><li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan</a>
                        <div class="dropdown-menu navbar-dark bg-primary">
                            <a class="dropdown-item" href='<?= base_url()?>AdatBudaya/daftarblog'>Adat & Budaya</a>
                        </div>
                  </li>
                    <li class="nav-item"><a  class="nav-link" href=""> <?= $data['nama'] ?></a></li>
                    <li class="nav-item"><a  class="nav-link" href='<?= base_url()?>login/logout'> Logout</a></li>
                  <?php
                      }else{
                  ?>
                      <li class="nav-item"><a  class="nav-link" href='<?= base_url()?>Login'>Login</a></li>
                  <?php
                      }
                  ?>

              </ul>
            </div>



        </div>
    </nav>
