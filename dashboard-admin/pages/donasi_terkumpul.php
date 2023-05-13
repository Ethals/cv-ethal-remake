<?php 
     $page = "Donasi"; 
     // include_once "../../login_secure/cek-akses.php";
     include("../config.php");
     $status_donasi = "Telah diterima";
     $sql = "SELECT * FROM donasi_transaksi where status = '$status_donasi'";
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
                              <h1>Donasi Terkumpul</h1>
                         </div>
                         <div class="row mt-3">
                              <div class="col">
                                   <div class="card mb-grid">
                                        <div class="table-responsive-md table-all">
                                             <table class="table table-actions table-striped table-hover mb-0" data-table>
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" class="pl-4">No</th>
                                                            <th scope="col">Nama Donatur</th>
                                                            <th scope="col">Nomor Hp/WhatsApp</th>
                                                            <th scope="col">Nominal</th>
                                                            <th scope="col">Kode Pembayaran</th>
                                                            <th scope="col">Waktu</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            $query = mysqli_query($conn, $sql);
                                                            while ($data = mysqli_fetch_array($query)){
                                                       ?>
                                                            <tr>
                                                                 <td class="kolom-no pl-4"><?php echo $no++; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['nama_donatur']; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['no_hp']; ?></td>
                                                                 <td class="kolom-responsive">Rp.<?php echo number_format($data['nominal'], 0, ",", "."); ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['nominalrandom']; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['date']; ?></td>
                                                            </tr>
                                                       <?php } ?>

                                                            <tr>
                                                                 <td class="kolom-no pl-4" style="visibility: hidden;">1000</td>
                                                                 <td></td>
                                                                 <td></td>
                                                                      
                                                                 <?php                                                                 
                                                                      // Cari Total 
                                                                      $query = mysqli_query($conn, $sql);
                                                                      while ($data = mysqli_fetch_array($query)){
                                                                           $cari_jumlah_total[] = $data['nominal'];
                                                                      }
                                                                      $hasil_total_sampah = array_sum($cari_jumlah_total);
                                                                      
                                                                 ?>
                                                                 <td class="kolom-responsive">Total : Rp.<?php echo number_format($hasil_total_sampah, 0, ",", "."); ?></td> 
                                                                 <td></td>
                                                                 <td></td>            
                                                            </tr>
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