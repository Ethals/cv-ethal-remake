import React from 'react';
import {info} from "../info/Info";

function Portofolio() {
	return (
		<div className='m-8' data-aos="fade-right" data-aos-duration="1200">
			<div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
						<div class="col-12 text-center">
							<h1 class="display-5 mb-5">Galeri Tentang Organisasi Ini</h1>

							<ul class="list-inline bg-secondary rounded mb-5" id="portfolio-flters">
									<li class="mx-2 active" data-filter="*">Semua</li>
									<li class="mx-2" data-filter=".first">Kegiatan</li>
									<li class="mx-2" data-filter=".second">Jenis Kerajinan</li>
									<li class="mx-2" data-filter=".ketiga">Belanja</li>
									<li class="mx-2" data-filter=".keempat">Berita</li>
							</ul>
						</div>
            </div>
            <div class="row g-4 portfolio-container">
					<div class="col-lg-3 col-md-4 col-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
						<div class="portfolio-inner rounded">
							<div class="responsive-belanja" ></div>
							<div class="portfolio-text">
									<h4 class="text-white mb-4">wkwkwkwkwkwkw</h4>
									<div class="d-flex">
										<a class="btn btn-lg-square rounded-circle mx-2" href="dashboard_admin/assets/img/kegiatan_ppk_ormawa/<?php echo $data['foto'] ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
										<a class="btn btn-lg-square rounded-circle mx-2" href="pages/kegiatan_rincian.php?id=<?php echo $data['id']; ?>"><i class="fa fa-link"></i></a>
									</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
						<div class="portfolio-inner rounded">
							<div class="responsive-belanja" ></div>
							<div class="portfolio-text">
									<h4 class="text-white mb-4">huhuhuhuuhhuhu</h4>
									<div class="d-flex">
										<a class="btn btn-lg-square rounded-circle mx-2" href="dashboard_admin/assets/img/jenis_jenis_kerajinan/<?php echo $data['foto'] ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
										<a class="btn btn-lg-square rounded-circle mx-2" href="pages/jenis_kerajinan_rincian.php?id=<?php echo $data['id']; ?>"><i class="fa fa-link"></i></a>
									</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 portfolio-item ketiga wow fadeInUp" data-wow-delay="0.1s">
						<div class="portfolio-inner rounded">
							<div class="responsive-belanja" ></div>
							<div class="portfolio-text">
									<h4 class="text-white mb-4">hohohohohoh</h4>
									<div class="d-flex">
										<a class="btn btn-lg-square rounded-circle mx-2" href="dashboard_admin/assets/img/harga_kerajinan/<?php echo $data['foto'] ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
										<a class="btn btn-lg-square rounded-circle mx-2" href="#"><i class="fa fa-link"></i></a>
									</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-4 col-6 portfolio-item keempat wow fadeInUp" data-wow-delay="0.1s">
						<div class="portfolio-inner rounded">
							<div class="responsive-belanja" ></div>
							<div class="portfolio-text">
							<h5 class="text-white mb-4">ahahahahh</h5>
									<div class="d-flex">
										<a class="btn btn-lg-square rounded-circle mx-2" href="dashboard_admin/assets/img/kegiatan_ppk_ormawa/<?php echo $data['foto'] ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
										<a class="btn btn-lg-square rounded-circle mx-2" href="#"><i class="fa fa-link"></i></a>
									</div>
							</div>
						</div>
					</div>
            </div>
         </div>
		</div>
	);
};

export default Portofolio;
