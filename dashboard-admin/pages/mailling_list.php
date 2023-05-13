<?php 
     $page = "Mailling"; 
     // include_once "../../login_secure/cek-akses.php";
     include("../config.php");
     $sql = "SELECT * FROM mailling_list";
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
                              <h1>Tambah Email</h1>
                         </div>
                         <div class="row">
                              <div class="col-lg-12 col-md-12 d-flex">
                                   <div class="form w-100 table-all">
                                        <form method="post" enctype="multipart/form-data" style="text-align: start;">
                                             <div class="row">
                                                  <div class="col-xl-5 col-sm-5 col-12 mb-xl-0 mb-4">
                                                       <div class="form-group text-align-start">
                                                            <p class="label3" style="padding-top: 9px;padding-bottom: 12px;">Daftar Email :</p>
                                                            <ul>
                                                                 <?php
                                                                      $query = mysqli_query($conn, $sql);
                                                                      while ($data = mysqli_fetch_array($query)){
                                                                 ?>
                                                                      <li>
                                                                           <?php echo $data['email']; ?>
                                                                           <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ??')" href= "mailling_hapus.php?id=<?php echo $data['id']; ?>" style="font-size: 0.7em;color: black;margin-left: 1rem;">Hapus</a>
                                                                      </li>
                                                                 <?php } ?>
                                                            </ul>
                                                       </div>
                                                  </div>
                                             
                                                  <div class="col-xl-7 col-sm-7 col-12 mb-xl-0 mb-4">
                                                       <div class="form-control-new mb-0">
                                                            <input type="email" name="email" required="">
                                                            <label>
                                                                 <span style="transition-delay:0ms">E</span><span style="transition-delay:50ms">m</span><span style="transition-delay:100ms">a</span><span style="transition-delay:150ms">i</span><span style="transition-delay:200ms">l</span>
                                                            </label>
                                                       </div>
                                                       <input type="submit" name="submit" value="Tambah Email" class="submit">
                                                  </div>
                                             </div>
                                        </form>
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

<?php 
     if (isset($_POST['submit'])){
          $email = $_POST['email'];

          mysqli_query($conn, "INSERT INTO mailling_list VALUES(NULL,'$email')");
               
?>

     <script type="text/javascript">
          window.location.href="mailling_list.php";
     </script>

<?php } ?>
