<?php 
     $page = "Artikel"; 
     // include_once "../../login_secure/cek-akses.php";
     include("../config.php");
     $sql = "SELECT * FROM artikel ";
     $query = mysqli_query($conn, $sql);
     $data = mysqli_fetch_array($query);
     $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
     <head>

          <?php include('../layouts/head_2.php');?> <!-- head -->
          
     </head>
     <body>
     <div class="adminx-container">
          
          <?php include('../layouts/topnavbar_2.php');?>
          
          <?php include('../layouts/sidenavbar_2.php');?>

          <div class="adminx-content">
               <div class="adminx-main-content">
                    <div class="container-fluid">
                         <div class="pb-3">
                              <h1>Artikel</h1>
                         </div>

                         <div class="row">
                              <div class="col-md-6 col-lg-3 d-flex">
                                   <a href="artikel_tambah.php">
                                        <button>
                                             <span class="button_top"><i data-feather="plus" class="button-icon"></i> Tambah</span>
                                        </button>
                                   </a>
                                   <a href="artikel_unduh.php" class="ml-4">
                                        <button>
                                             <span class="button_top"><i data-feather="printer" class="button-icon"></i> Unduh</span>
                                        </button>
                                   </a>
                              </div>
                         </div>
                         <div class="row mt-3">
                              <div class="col">
                                   <div class="card mb-grid">
                                        <div class="table-responsive-md table-all">
                                             <table class="table table-actions table-striped table-hover mb-0" data-table>
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" class="pl-4">No</th>
                                                            <th scope="col">Gambar</th>
                                                            <th scope="col">Judul</th>
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col">Lokasi</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Aksi</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            $query = mysqli_query($conn, $sql);
                                                            while ($data = mysqli_fetch_array($query)){
                                                       ?>
                                                            <tr>
                                                                 
                                                                 <td class="kolom-no pl-4"><?php echo $no++; ?></td>
                                                                 <td class="align-middle text-center text-xs font-weight-bold mb-0" style="width: 80px;height: 60px;">
                                                                      <img src="../dist/img/artikel/<?php echo $data['foto'] ?>" alt="" style="object-fit: cover; width: 80px;height: 60px;">
                                                                      <!-- <div style="width: 60px;height: 80px; border-radius: 0.5rem; background-position: center; background-image: url(../dist/img/821147461_Screenshot (8).png); background-size: cover;"></div> -->
                                                                 </td>
                                                                 <td class="kolom-responsive" style="min-width: 20%;"><?php echo $data['nama_berita']; ?></td>
                                                                 <td class="kolom-responsive" style="min-width: 10%;"><?php echo $data['tanggal']; ?></td>
                                                                 <td class="kolom-responsive" style="min-width: 15%;"><?php echo $data['lokasi']; ?></td>
                                                                 <td class="kolom-responsive">
                                                                      <div class="kode-jagoan" jagoan-kode=<?php echo $data['id']; ?>>
                                                                           <div class="align-middle text-center text-xs font-weight-bold" style="text-align: justify !important; white-space: inherit; font-size: 0.75rem !important;font-weight: 600 !important;">
                                                                                <span class="jagoankodekeren"></span><span class="more" style="display: none; min-width: 200px;"><?php echo $data['deskripsi']; ?></span><button onclick="readMore(<?php echo $data['id']; ?>)" class="jagoankodemantap"><span class="button_top_table">Baca Lengkap...</span></button>
                                                                           </div>
                                                                      </div>
                                                                 </td> 
                                                                 <td>
                                                                      <a href= "artikel_ubah.php?id=<?php echo $data['id']; ?>"><button class="bg-gradient-warning"><span class="button_top_table" style="border: 1px solid #ffc107">Ubah</span></button></a>
                                                                      <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" href= "artikel_hapus.php?id=<?php echo $data['id']; ?>"><button class="bg-gradient-danger"><span class="button_top_table" style="border: 1px solid #dc3545">Hapus</span></button></a>
                                                                 </td>
                                                            </tr>
                                                       <?php } ?>
                                                  </tbody>
                                             </table>
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
     <script src="../dist/js/vendor.js"></script>
     <script src="../dist/js/adminx.js"></script>

     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
     <script>
          $(document).ready(function() {
          var table = $('[data-table]').DataTable({
               "columns": [
               null,
               null,
               null,
               null,
               null,
               null,
               { "orderable": false }
               ]
          });

          /* $('.form-control-search').keyup(function(){
               table.search($(this).val()).draw() ;
          }); */
          });
     </script>
     
     <!-- Read More -->
     <script>
          function readMore(jagoankodeganteng) {
               let jagoankodekeren = document.querySelector(`.kode-jagoan[jagoan-kode="${jagoankodeganteng}"] .jagoankodekeren`);
               let moreText = document.querySelector(`.kode-jagoan[jagoan-kode="${jagoankodeganteng}"] .more`);
               let btnText = document.querySelector(`.kode-jagoan[jagoan-kode="${jagoankodeganteng}"] .button_top_table`);

               if (jagoankodekeren.style.display === "none") {
                    jagoankodekeren.style.display = "inline";
                    btnText.textContent = "Baca Lengkap...";
                    moreText.style.display = "none";
               } else {
                    jagoankodekeren.style.display = "none",width = "200px";
                    btnText.textContent = "Sembunyikan...";
                    moreText.style.display = "inline";
               }
          }
     </script>

     </body>
</html>