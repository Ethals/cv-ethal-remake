<?php 
  $page = "Home"; 
  // include_once "../login_secure/cek-akses.php";
  include("../config.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include('layouts/head.php');?> <!-- head -->

  </head>
  <body>
    <div class="adminx-container">
      
      <?php include('layouts/topnavbar.php');?>
      
      <?php include('layouts/sidenavbar.php');?>

      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>

            <div class="row">
              <?php
                  $sql = "SELECT * FROM artikel";
                  $query = mysqli_query($conn, $sql);
                  $jumlah_artikel = mysqli_num_rows($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="layout"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Artikel</div>
                      <h3 class="card-title mb-0">
                      <?php echo $jumlah_artikel ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  $sql = "SELECT * FROM kegiatan";
                  $query = mysqli_query($conn, $sql);
                  $jumlah_kegiatan = mysqli_num_rows($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="pie-chart"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Kegiatan</div>
                      <h3 class="card-title mb-0">
                      <?php echo $jumlah_kegiatan ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  $sql = "SELECT * FROM galeri_lainnya";
                  $query = mysqli_query($conn, $sql);
                  $jumlah_galeri = mysqli_num_rows($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="camera"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">galeri</div>
                      <h3 class="card-title mb-0">
                      <?php echo $jumlah_galeri ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  $sql = "SELECT * FROM pengurus";
                  $query = mysqli_query($conn, $sql);
                  $jumlah_pengurus = mysqli_num_rows($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Pengurus</div>
                      <h3 class="card-title mb-0">
                      <?php echo $jumlah_pengurus ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  $sql = "SELECT * FROM saran";
                  $query = mysqli_query($conn, $sql);
                  $jumlah_saran = mysqli_num_rows($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="edit-3"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Saran & Kritik</div>
                      <h3 class="card-title mb-0">
                      <?php echo $jumlah_saran ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  $sql = "SELECT * FROM donasi_transaksi";
                  $query = mysqli_query($conn, $sql);
                  $jumlah_donasi = mysqli_num_rows($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="heart"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Transaksi Donasi</div>
                      <h3 class="card-title mb-0">
                      <?php echo $jumlah_donasi ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  $sql = "SELECT * FROM donasi_transaksi where status = 'Telah Diterima'";
                  $query = mysqli_query($conn, $sql);
                  $jumlah_donasi_terkumpul = mysqli_num_rows($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="heart"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Donasi Terkumpul</div>
                      <h3 class="card-title mb-0">
                      <?php echo $jumlah_donasi_terkumpul ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  $sql = "SELECT * FROM jumlah_view ORDER BY view DESC LIMIT 1";
                  $query = mysqli_query($conn, $sql);
                  $data = mysqli_fetch_array($query);
              ?>
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card card-dashboard border-0 text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center" style="border-radius: 30px;">
                      <i data-feather="eye"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Pengunjung Website</div>
                      <h3 class="card-title mb-0">
                      <?php echo $data['view'] ?> 
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
  </body>
</html>