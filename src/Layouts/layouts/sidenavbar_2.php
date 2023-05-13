<!-- Sidebar -->
<div class="adminx-sidebar expand-hover push">
     <ul class="sidebar-nav">
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a href="../index.php" <?php if ($page == "Home") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link'>
                    <span class="sidebar-nav-icon">
                         <i data-feather="home"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Dashboard
                    </span>
                    <span class="sidebar-nav-end"></span>
               </a>
          </li>
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a href="artikel.php" <?php if ($page == "Artikel") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link'>
                    <span class="sidebar-nav-icon">
                         <i data-feather="layout"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Artikel
                    </span>
               </a>
          </li>
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a href="kegiatan.php" <?php if ($page == "Kegiatan") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link'>
                    <span class="sidebar-nav-icon">
                         <i data-feather="pie-chart"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Kegiatan
                    </span>
               </a>
          </li>          
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a <?php if ($page == "Donasi") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link collapsed' data-toggle="collapse" href="#example2" aria-expanded="false" aria-controls="example2">
                    <span class="sidebar-nav-icon">
                         <i data-feather="heart"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Donasi
                    </span>
                    <span class="sidebar-nav-end">
                         <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                    </span>
               </a>
               <ul class="sidebar-sub-nav collapse" id="example2">
                    <li class="sidebar-nav-item">
                         <a href="donasi.php" class="sidebar-nav-link">
                              <span class="sidebar-nav-abbr">
                                   <i data-feather="minus"></i>
                              </span>
                              <span class="sidebar-nav-name">
                                   Transaksi Donasi
                              </span>
                         </a>
                    </li>
                    <li class="sidebar-nav-item">
                         <a href="donasi_terkumpul.php" class="sidebar-nav-link">
                              <span class="sidebar-nav-abbr">
                                   <i data-feather="minus"></i>
                              </span>
                              <span class="sidebar-nav-name">
                                   Donasi Terkumpul
                              </span>
                         </a>
                    </li>
               </ul>
          </li>
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a href="galeri.php" <?php if ($page == "Galeri") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link'>
                    <span class="sidebar-nav-icon">
                         <i data-feather="camera"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Galeri
                    </span>
               </a>
          </li>          
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a href="pengurus.php" <?php if ($page == "Pengurus") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link'>
                    <span class="sidebar-nav-icon">
                         <i data-feather="users"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Pengurus
                    </span>
               </a>
          </li>
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a href="komentar.php" <?php if ($page == "Pertanyaan") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link'>
                    <span class="sidebar-nav-icon">
                         <i data-feather="message-square"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Pertanyaan
                    </span>
               </a>
          </li>
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a href="saran.php" <?php if ($page == "Saran") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link'>
                    <span class="sidebar-nav-icon">
                         <i data-feather="edit-3"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Saran & Kritik
                    </span>
               </a>
          </li>
          <!-- Batas ================================================================================== -->
          <li class="sidebar-nav-item">
               <a <?php if ($page == "Mailling") echo "class='sidebar-nav-link active'"; ?> class='sidebar-nav-link collapsed' data-toggle="collapse" href="#example3" aria-expanded="false" aria-controls="example3">
                    <span class="sidebar-nav-icon">
                         <i data-feather="mail"></i>
                    </span>
                    <span class="sidebar-nav-name">
                         Mailling
                    </span>
                    <span class="sidebar-nav-end">
                         <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                    </span>
               </a>
               <ul class="sidebar-sub-nav collapse" id="example3">
                    <li class="sidebar-nav-item">
                         <a href="mailling.php" class="sidebar-nav-link">
                              <span class="sidebar-nav-abbr">
                                   <i data-feather="minus"></i>
                              </span>
                              <span class="sidebar-nav-name">
                                   Kirim Mailling
                              </span>
                         </a>
                    </li>
                    <li class="sidebar-nav-item">
                         <a href="mailling_list.php" class="sidebar-nav-link">
                              <span class="sidebar-nav-abbr">
                                   <i data-feather="minus"></i>
                              </span>
                              <span class="sidebar-nav-name">
                                   Tambah Email
                              </span>
                         </a>
                    </li>
                    <li class="sidebar-nav-item">
                         <a href="mailling_riwayat.php" class="sidebar-nav-link">
                              <span class="sidebar-nav-abbr">
                                   <i data-feather="minus"></i>
                              </span>
                              <span class="sidebar-nav-name">
                                   Riwayat Mailling
                              </span>
                         </a>
                    </li>
               </ul>
          </li>
          <!-- Batas ================================================================================== -->
     </ul>
</div><!-- Sidebar End -->