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
                                             <span class="button_top">Tambah</span>
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
                                                            <th scope="col">
                                                                 <label class="custom-control custom-checkbox m-0 p-0">
                                                                      <input type="checkbox" class="custom-control-input table-select-all">
                                                                      <span class="custom-control-indicator"></span>
                                                                 </label>
                                                            </th>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Gambar</th>
                                                            <th scope="col">Judul</th>
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col">Lokasi</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Aksi</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                            <tr style="display: none;">
                                                                 <th scope="row">
                                                                 <label class="custom-control custom-checkbox m-0 p-0">
                                                                      <input type="checkbox" class="custom-control-input table-select-row">
                                                                      <span class="custom-control-indicator"></span>
                                                                 </label>
                                                                 </th>
                                                                 <td>Larry</td>
                                                                 <td>the Bird</td>
                                                                 <td>@twitter</td>
                                                                 <td>
                                                                 </td>
                                                                 <td>
                                                                 
                                                                 </td>
                                                            </tr>
                                                       <?php
                                                       $query = mysqli_query($conn, $sql);
                                                       while ($data = mysqli_fetch_array($query)){
                                                       ?>
                                                            <tr>
                                                                 <th scope="row">
                                                                      <label class="custom-control custom-checkbox m-0 p-0">
                                                                           <input type="checkbox" class="custom-control-input table-select-row">
                                                                           <span class="custom-control-indicator"></span>
                                                                      </label>
                                                                 </th>
                                                                 <td><?php echo $no++; ?></td>
                                                                 <td class="align-middle text-center text-xs font-weight-bold mb-0">
                                                                      <div style="width: 60px;height: 80px; border-radius: 0.5rem; background-position: center; background-image: url(../assets/img/kegiatan_ppk_ormawa/<?php echo $data['foto'] ?>); background-size: cover;}"></div>
                                                                 </td>
                                                                 <td><?php echo $data['nama_berita']; ?></td>
                                                                 <td><?php echo $data['tanggal']; ?></td>
                                                                 <td><?php echo $data['lokasi']; ?></td>
                                                                 <td style="text-align: justify !important; white-space: inherit;">
                                                                      <div class="kode-jagoan" jagoan-kode=<?php echo $data['id']; ?>>
                                                                           <div style="text-align: justify !important; white-space: inherit; font-size: 0.75rem !important;font-weight: 600 !important;">
                                                                                <span class="jagoankodekeren"></span><span class="more" style="display: none;"><?php echo $data['deskripsi']; ?></span><button onclick="readMore(<?php echo $data['id']; ?>)" class="jagoankodemantap badge badge-sm bg-gradient-success" style="border: none;padding: 0.55rem 0.9em;">Baca Lengkap...</button>
                                                                           </div>
                                                                      </div>
                                                                 </td> 
                                                                 <td>
                                                                      <a href= "ubah/ubah_berita.php?id=<?php echo $data['id']; ?>"><span class="badge badge-sm bg-gradient-success">Ubah</span></a>
                                                                      <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" href= "hapus/hapus_berita.php?id=<?php echo $data['id']; ?>"><span class="badge badge-sm bg-gradient-warning">hapus</span></a>
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
          let btnText = document.querySelector(`.kode-jagoan[jagoan-kode="${jagoankodeganteng}"] .jagoankodemantap`);

          if (jagoankodekeren.style.display === "none") {
               jagoankodekeren.style.display = "inline";
               btnText.textContent = "Baca Lengkap...";
               moreText.style.display = "none";
          } else {
               jagoankodekeren.style.display = "none";
               btnText.textContent = "Sembunyikan...";
               moreText.style.display = "inline";
          }
          }
     </script>

     </body>
</html>