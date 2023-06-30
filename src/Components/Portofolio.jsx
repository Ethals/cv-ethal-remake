// import React from 'react';
import {info} from "../info/Info";

import React, { useState, useCallback } from 'react';
import { render } from 'react-dom';
import ImageViewer from 'react-simple-image-viewer';

// import * as React from 'react';
// import PropTypes from 'prop-types';
// import SwipeableViews from 'react-swipeable-views';
// import { useTheme } from '@mui/material/styles';
// import AppBar from '@mui/material/AppBar';
// import Tabs from '@mui/material/Tabs';
// import Tab from '@mui/material/Tab';
// import Typography from '@mui/material/Typography';
// import Box from '@mui/material/Box';


function Portofolio(props) {
	const [currentImage, setCurrentImage] = useState(0);
	const [isViewerOpen, setIsViewerOpen] = useState(false);
	const images = [
		'http://placeimg.com/1200/800/nature',
		'http://placeimg.com/800/1200/nature',
		'http://placeimg.com/1920/1080/nature',
		'http://placeimg.com/1500/500/nature',
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
			<div className='grid grid-cols-2 lg:grid-cols-3'>
				{images.map((src, index) => (
					<div className='h-[200px] lg:h-[250px] xl:h-[300px] m-2'>
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
			<ImageViewer
				src={ images }
				currentIndex={ currentImage }
				disableScroll={ false }
				closeOnClickOutside={ true }
				onClose={ closeImageViewer }
				className='m-4'
			/>
			)}
		</div>
	);
}

// render(<Portofolio />, document.getElementById('portofolio'));
export default Portofolio;

// function Portofolio() {
	// return (
	// 	<div className='m-8' data-aos="fade-right" data-aos-duration="1200">
	// 	</div>
	// );


// };

// export default Portofolio;