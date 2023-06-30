// import React from 'react';
import {info} from "../info/Info";

import { ImageViewer } from "react-image-viewer-dv"
import img from '../img/self.png';


function Pencapaian() {
	const images = [
		'http://placeimg.com/1200/800/nature',
		'http://placeimg.com/800/1200/nature',
		'http://placeimg.com/1920/1080/nature',
		'http://placeimg.com/1500/500/nature',
	];

	// export const YourComponent = () => {
	return (
		<div className='grid grid-cols-2 lg:grid-cols-3'>
			<ImageViewer>
				<img src={ images } className="" alt="Your image" />
			</ImageViewer>
			<ImageViewer>
				<img src={ img } className="" alt="Your image" />
			</ImageViewer>
			<ImageViewer>
				<img src={ images } className="" alt="Your image" />
			</ImageViewer>
			<ImageViewer>
				<img src={ img } className="" alt="Your image" />
			</ImageViewer>
		</div>
	)
}

export default Pencapaian;

