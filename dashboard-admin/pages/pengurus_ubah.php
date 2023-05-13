<?php 
     $page = "Pengurus";
     include("../config.php");

     $id = $_GET['id'];
     $sql = "SELECT * FROM pengurus WHERE id = '$id'";
     $query = mysqli_query($conn, $sql);
     $load_driver = mysqli_fetch_assoc($query);
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
                              <h1>Ubah Pengurus</h1>
                         </div>

                         <div class="row">
                              <div class="col-lg-12 col-md-12 d-flex">
                                   <div class="form w-100 table-all">

                                        <form method="post" enctype="multipart/form-data">
                                             <!-- <h5 class="title">Tambah Data Pengurus PPK Ormawa</h5> -->
                                             <div class="row">
                                                  <div class="col-xl-6 col-sm-6 col-12 mb-xl-0 mb-4 px-5">
                                                       <div class="form-control-new">
                                                            <input type="text" name="nama_pengurus" value="<?php echo $load_driver['nama_pengurus']?>" required="">
                                                            <label>
                                                                 <span style="transition-delay:0ms">J</span><span style="transition-delay:50ms">u</span><span style="transition-delay:100ms">d</span><span style="transition-delay:150ms">u</span><span style="transition-delay:200ms">l</span>
                                                            </label>
                                                       </div>
                                                       <div class="form-control-new">
                                                            <input type="number" name="no_hp" value="<?php echo $load_driver['no_hp']?>" required="">
                                                            <label>
                                                                 <span style="transition-delay:0ms">L</span><span style="transition-delay:50ms">o</span><span style="transition-delay:100ms">k</span><span style="transition-delay:150ms">a</span><span style="transition-delay:200ms">s</span><span style="transition-delay:250ms">i</span>
                                                            </label>
                                                       </div>
                                                  </div>
                                             
                                                  <div class="col-xl-6 col-sm-6 col-12 mb-xl-0 mb-4 px-5">
                                                       <div class="form-control-new">
                                                            <input type="text" name="jabatan" value="<?php echo $load_driver['jabatan']?>" required="">
                                                            <label>
                                                                 <span style="transition-delay:0ms">L</span><span style="transition-delay:50ms">o</span><span style="transition-delay:100ms">k</span><span style="transition-delay:150ms">a</span><span style="transition-delay:200ms">s</span><span style="transition-delay:250ms">i</span>
                                                            </label>
                                                       </div>
                                                       <p class="label3">Foto :</p>
                                                       <div class="form-group" style="padding-top: 0; padding-bottom: 0;">
                                                            <input type="file" name="foto" required="required" style="color: #0e0e52; font-size: small;">
                                                       </div>
                                                  </div>
                                             </div>
                                             <input type="submit" name="ubah" value="Ubah" class="submit">
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

     </body>
</html>


<?php
     if (isset($_POST['ubah'])){
          $nama_pengurus = $_POST['nama_pengurus'];
          $no_hp = $_POST['no_hp'];
          $jabatan = $_POST['jabatan'];
          
          $rand = rand();
          $ekstensi =  array('png','jpg','jpeg','gif');
          $filename = $_FILES['foto']['name'];
          $ukuran = $_FILES['foto']['size'];
          $ext = pathinfo($filename, PATHINFO_EXTENSION);

               $xx = $rand.'_'.$filename;
               move_uploaded_file($_FILES['foto']['tmp_name'], '../dist/img/pengurus/'.$rand.'_'.$filename);
               mysqli_query($conn, "UPDATE pengurus SET nama_pengurus = '$nama_pengurus', no_hp = '$no_hp', jabatan = '$jabatan', foto = '$xx' WHERE id = '$id'");
               
?>

     <script type="text/javascript">
          window.location.href="pengurus.php";
     </script>

<?php } ?>
