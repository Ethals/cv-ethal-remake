
	// import React from 'react';
import {info} from "../info/Info";

import React, { useState, useCallback } from 'react';
import { render } from 'react-dom';
import ImageViewer from 'react-simple-image-viewer';
import s1 from "../img/s1.pdf";

function Portofolio() {
	const [currentImage, setCurrentImage] = useState(0);
	const [isViewerOpen, setIsViewerOpen] = useState(false);
	const images = [
		'https://v2-cv.ethalsss.site/static/media/porto/photoshop_1.jpg',
		'https://v2-cv.ethalsss.site/static/media/porto/photoshop_2.jpg',
		'https://v2-cv.ethalsss.site/static/media/porto/photoshop_3.jpg',
		'https://v2-cv.ethalsss.site/static/media/porto/1.png',
		'https://v2-cv.ethalsss.site/static/media/porto/2.png',
		'https://v2-cv.ethalsss.site/static/media/porto/3.png',
		'https://v2-cv.ethalsss.site/static/media/porto/4.png',
		'https://v2-cv.ethalsss.site/static/media/porto/5.png',
		'https://v2-cv.ethalsss.site/static/media/porto/6.png',
	];

	const openImageViewer = useCallback((index) => {
		setCurrentImage(index);
		setIsViewerOpen(true);
	}, []);

	const closeImageViewer = () => {
		setCurrentImage(0);
		setIsViewerOpen(false);
	};

	return (
		<div className='m-8' data-aos="fade-right" data-aos-duration="1200">
			<div className='grid grid-cols-2 lg:grid-cols-4'>
				{images.map((src, index) => (
					<div className='h-[100px] lg:h-[180px] xl:h-[200px] m-2'>
						<img
							src={ src }
							onClick={ () => openImageViewer(index) }
							// width="300"
							key={ index }
							style={{ margin: '8px' }}
							alt=""
							className='absolute object-cover object-top w-full h-full relative filtered'
						/>
					</div>
				))}
			</div>

			{isViewerOpen && (
			<div className='m-4 ml-[256px] fixed font-primary'>
				<ImageViewer
					src={ images }
					currentIndex={ currentImage }
					disableScroll={ false }
					closeOnClickOutside={ true }
					onClose={ closeImageViewer }
				/>
			</div>
			)}
		</div>
	);
}

export default Portofolio;

