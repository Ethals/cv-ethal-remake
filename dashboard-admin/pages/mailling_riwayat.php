<?php 
     $page = "Mailling"; 
     include("../config.php");
     $sql = "SELECT * FROM mailling_riwayat ORDER BY waktu DESC";
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
                              <h1>Riwayat Mailling</h1>
                         </div>
                         <div class="row mt-3">
                              <div class="col">
                                   <div class="card mb-grid">
                                        <div class="table-responsive-md table-all">
                                             <table class="table table-actions table-striped table-hover mb-0" data-table>
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" class="pl-4">No</th>
                                                            <th scope="col">Email Pengirim</th>
                                                            <th scope="col">Subjek</th>
                                                            <th scope="col">Pesan</th>
                                                            <th scope="col">Lampiran file</th>
                                                            <th scope="col">Tanggal</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            $query = mysqli_query($conn, $sql);
                                                            while ($data = mysqli_fetch_array($query)){
                                                       ?>
                                                            <tr>
                                                                 
                                                                 <td class="kolom-no pl-4"><?php echo $no++; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['email_pengirim']; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['subjek']; ?></td>
                                                                 <td class="kolom-responsive">
                                                                      <div class="kode-jagoan" jagoan-kode=<?php echo $data['id']; ?>>
                                                                           <div class="align-middle text-center text-xs font-weight-bold" style="text-align: justify !important; white-space: inherit; font-size: 0.75rem !important;font-weight: 600 !important;">
                                                                                <span class="jagoankodekeren"></span><span class="more" style="display: none; min-width: 200px;"><?php echo $data['pesan']; ?></span><button onclick="readMore(<?php echo $data['id']; ?>)" class="jagoankodemantap"><span class="button_top_table">Baca Lengkap...</span></button>
                                                                           </div>
                                                                      </div>
                                                                 </td> 
                                                                 <td class="kolom-responsive"><?php echo $data['attachment']; ?></td>
                                                                 <td class="kolom-responsive"><?php echo $data['waktu']; ?></td>
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