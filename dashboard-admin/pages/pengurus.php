<?php 
     $page = "Pengurus"; 
     include("../config.php");
     $sql = "SELECT * FROM pengurus ";
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
                              <h1>Pengurus</h1>
                         </div>

                         <div class="row">
                              <div class="col-md-6 col-lg-3 d-flex">
                                   <a href="pengurus_tambah.php">
                                        <button>
                                             <span class="button_top"><i data-feather="plus" class="button-icon"></i> Tambah</span>
                                        </button>
                                   </a>
                                   <a href="pengurus_unduh.php" class="ml-4">
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
                                                            <th scope="col">Foto</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">No. Telepon</th>
                                                            <th scope="col">Jabatan</th>
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
                                                                      <img src="../dist/img/pengurus/<?php echo $data['foto'] ?>" alt="" style="object-fit: cover; width: 80px;height: 60px;">
                                                                      <!-- <div style="width: 60px;height: 80px; border-radius: 0.5rem; background-position: center; background-image: url(../dist/img/821147461_Screenshot (8).png); background-size: cover;"></div> -->
                                                                 </td>
                                                                 <td class="kolom-responsive"><?php echo $data['nama_pengurus']; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['no_hp']; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['jabatan']; ?></td>
                                                                 <td>
                                                                      <a href= "pengurus_ubah.php?id=<?php echo $data['id']; ?>"><button class="bg-gradient-warning"><span class="button_top_table" style="border: 1px solid #ffc107">Ubah</span></button></a>
                                                                      <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" href= "pengurus_hapus.php?id=<?php echo $data['id']; ?>"><button class="bg-gradient-danger"><span class="button_top_table" style="border: 1px solid #dc3545">Hapus</span></button></a>
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

     </body>
</html>