<?php 
     $page = "Pertanyaan"; 
     include("../config.php");
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
                         <div class="pb-2">
                              <h1>Pertanyaan</h1>
                         </div>
                         <div class="row mt-3">
                              <div class="col">
                                   <div class="card mb-grid">
                                        <div id="komentar" class="container-xxl py-3">
                                             <div class="container">
                                                  <h4 class="mb-3 mt-3">Komentar :</h4>
                                                  <span id="message"></span>

                                                  <?php
                                                       // Query untuk mengambil data komentar utama
                                                       $query = "SELECT * FROM komentar WHERE id_parent IS NULL ORDER BY waktu DESC";
                                                       $result = mysqli_query($conn, $query);
                                                  
                                                       // Tampilkan data komentar utama
                                                       while ($row = mysqli_fetch_assoc($result)) {
                                                            $id_komentar = $row['id'];
                                                            echo "<div id='display_comment'>";
                                                  ?>
                                                  
                                                            <div id='to-form-balasan-<?php echo $row['id'] ?>' class="media border px-3 py-2 mt-4" style="border-radius: 10px; box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2); display: -webkit-box;">
                                                                 <div class="row">                               
                                                                      <div class="col-lg-12 col-md-12 col-12 mx-0 d-flex">
                                                                           <div class="card card-area border-0 text-center w-100">
                                                                                <div class="d-flex flex-row align-items-center h-100">
                                                                                <div class="d-flex align-items-start h-100 justify-content-center" style="border-radius: 30px;">
                                                                                     <img src="../dist/img/komen/<?php echo $row['foto'] ?>" alt="foto-user" class="mr-3 mt-1 rounded-circle" style="width:40px; margin-right: 16px;">
                                                                                </div>
                                                                                <div style="text-align: justify;">
                                                                                     <p style="display: inline;"><b><?php echo $row['nama'] ?> :</b></p> <p style="display: inline;"><?php echo $row['komentar'] ?></p> <br>
                                                                                     <small style="font-size: 0.7em;"> Diposting pada <i><?php echo $row['waktu'] ?></i></small> 
                                                                                     <a href='#to-form-balasan-<?php echo $row['id'] ?>' onclick='toggleBalasan(<?php echo $row["id"] ?>)' style="font-size: 0.7em;color: black;margin-left: 1rem;">Balas</a>
                                                                                     <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" href= "komentar_hapus.php?id=<?php echo $row['id']; ?>" style="font-size: 0.7em;color: black;margin-left: 1rem;">Hapus</a>
                                                                                </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>

                                                  <?php
                                                            // Tampilkan form balasan
                                                            // echo "<a href='#form-balasan-$id_komentar' onclick='toggleBalasan($id_komentar)'>Balas</a>";
                                                            echo "<div class='col-sm-12'>";
                                                            echo "<div id='form-balasan-$id_komentar' style='display: none; padding-left: 48px;'>";
                                                            echo "<form method='POST' action='komentar_act.php' class='p-2'>";
                                                            echo '<div class=""><input type="hidden" name="nama" class="" value="Admin" style="font-size: .8rem;line-height: 1;" placeholder="Masukkan Nama Lengkap" /></div>';
                                                            echo '<div class="mb-2"><textarea name="komentar" class="form-control" style="font-size: .8rem;line-height: 1;" placeholder="Tulis Komentar" rows="2"></textarea></div>';
                                                            echo "<input type='hidden' name='id_parent' value='$id_komentar'>";
                                                            echo '<button class="" type="submit"><span class="icon button_top" style="font-size: .8rem;"><i class="fas fa-paper-plane"></i>Kirim Balasan</span></button>';
                                                            echo "</form>";
                                                            echo "</div>";
                                                            echo "</div>";
                                                            echo "</div>";
                                                            echo "</div>";
                                                            
                                                            // Query untuk mengambil data balasan
                                                            // $id_komentar = $row['id'];
                                                            $query_balasan = "SELECT * FROM komentar WHERE id_parent = $id_komentar ORDER BY waktu";
                                                            $result_balasan = mysqli_query($conn, $query_balasan);
                                                            
                                                            // Tampilkan data balasan
                                                            while ($row_balasan = mysqli_fetch_assoc($result_balasan)) {
                                                                 $id_komentar_tingkat = $row_balasan['id'];
                                                  ?>
                                                                 <div id='to-form-balasan-tingkat-<?php echo $row_balasan['id'] ?>' class="media border px-3 py-2 mt-1" style="margin-left: 48px; border-radius: 10px; box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2); display: -webkit-box;">
                                                                      <div class="row">                               
                                                                           <div class="col-lg-12 col-md-12 col-12 mx-0 d-flex">
                                                                                <div class="card card-area border-0 text-center w-100">
                                                                                     <div class="d-flex flex-row align-items-center h-100">
                                                                                     <div class="d-flex align-items-start h-100 justify-content-center" style="border-radius: 30px;">
                                                                                          <img src="../dist/img/komen/<?php echo $row_balasan['foto'] ?>" alt="foto-user" class="mr-3 mt-1 rounded-circle" style="width:40px; margin-right: 16px;">
                                                                                     </div>
                                                                                     <div style="text-align: justify;">
                                                                                          <p style="display: inline;"><b><?php echo $row_balasan['nama'] ?> :</b></p> <p style="display: inline;"><?php echo $row_balasan['komentar'] ?></p> <br>
                                                                                          <small style="font-size: 0.7em;"> Diposting pada <i><?php echo $row_balasan['waktu'] ?></i></small> 
                                                                                          <a href='#to-form-balasan-tingkat-<?php echo $id_komentar_tingkat ?>' onclick='toggleBalasanTingkat(<?php echo $id_komentar_tingkat ?>)' style="font-size: 0.7em;color: black;margin-left: 1rem;">Balas</a>
                                                                                          <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" href= "komentar_hapus.php?id=<?php echo $row_balasan['id']; ?>" style="font-size: 0.7em;color: black;margin-left: 1rem;">Hapus</a>
                                                                                     </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                            <?php

                                                                 // Tampilkan form balasan 
                                                                 echo "<div class='col-sm-12'>";
                                                                 echo "<div id='form-balasan-tingkat-$id_komentar_tingkat' style='display: none; padding-left: 48px;'>";
                                                                 echo "<form method='POST' action='komentar_act.php' class='p-2'>";
                                                                 echo '<div class=""><input type="hidden" name="nama" class="" value="Admin" style="font-size: .8rem;line-height: 1;" placeholder="Masukkan Nama Lengkap" /></div>';
                                                                 echo '<div class="mb-2"><textarea name="komentar" class="form-control" style="font-size: .8rem;line-height: 1;" placeholder="Tulis Komentar" rows="2"></textarea></div>';
                                                                 echo "<input type='hidden' name='id_parent' value='$id_komentar_tingkat'>";
                                                                 echo '<button class="" type="submit"><span class="icon button_top" style="font-size: .8rem;"><i class="fas fa-paper-plane"></i>Kirim Balasan</span></button>';
                                                                 echo "</form>";
                                                                 echo "</div>";
                                                                 echo "</div>";
                                                                 echo "</div>";
                                                                 echo "</div>";
                                                                 

                                                                 // Query untuk mengambil data balasan Kedua
                                                                 @$query_balasan_kedua = "SELECT * FROM komentar WHERE id_parent = $id_komentar_tingkat ORDER BY waktu";
                                                                 @$result_balasan_kedua = mysqli_query($conn, $query_balasan_kedua);
                                                                 
                                                                 // Tampilkan data balasan Kedua
                                                                 while ($row_balasan_kedua = @mysqli_fetch_assoc($result_balasan_kedua)) {
                                                            ?>
                                                                      <div class="media border px-3 py-2 mt-1" style="margin-left: 88px; border-radius: 10px; box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2); display: -webkit-box;">
                                                                           <div class="row">                               
                                                                                <div class="col-lg-12 col-md-12 col-12 mx-0 d-flex">
                                                                                     <div class="card card-area border-0 text-center w-100">
                                                                                          <div class="d-flex flex-row align-items-center h-100">
                                                                                          <div class="d-flex align-items-start h-100 justify-content-center" style="border-radius: 30px;">
                                                                                               <img src="../dist/img/komen/<?php echo $row_balasan_kedua['foto'] ?>" alt="foto-user" class="mr-3 mt-1 rounded-circle" style="width:40px; margin-right: 16px;">
                                                                                          </div>
                                                                                          <div style="text-align: justify;">
                                                                                               <p style="display: inline;"><b><?php echo $row_balasan_kedua['nama'] ?> :</b></p> <p style="display: inline;"><?php echo $row_balasan_kedua['komentar'] ?></p> <br>
                                                                                               <small style="font-size: 0.7em;"> Diposting pada <i><?php echo $row_balasan_kedua['waktu'] ?></i> </small> 
                                                                                               <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" href= "komentar_hapus.php?id=<?php echo $row_balasan_kedua['id']; ?>" style="font-size: 0.7em;color: black;margin-left: 1rem;">Hapus</a>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                        </div>
                                                  <?php
                                                                 }
                                                            }
                                                            echo "</div>";
                                                       }
                                                  ?>
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

     <!-- Munculkan form balas -->
     <script>
          function toggleBalasan(id_komentar) {
               var x = document.getElementById("form-balasan-" + id_komentar);
               if (x.style.display === "none") {
                    x.style.display = "block";
               } else {
                    x.style.display = "none";
               }
          }
          function toggleBalasanTingkat(id_komentar_tingkat) {
               var x = document.getElementById("form-balasan-tingkat-" + id_komentar_tingkat);
               if (x.style.display === "none") {
                    x.style.display = "block";
               } else {
                    x.style.display = "none";
               }
          }
     </script>

     </body>
</html>