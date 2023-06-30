

import React from 'react';
import {info} from "../info/Info";
import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

import p2 from "../img/p2.jpg";

function Kontak() {

	return (
		<div className='mx-auto my-8 p-4'>
			<div data-aos="fade-right" data-aos-duration="1200">
				
				<div className='mb-4 border-bottom-line'>
					<h5 className='text-justify tracking-wider text-sm leading-8 mb-4'>{info.deskLengkap}</h5>
				</div>
				<div className='mb-4 border-bottom-line'>
					<div className='text-left text-sm leading-8 mb-4'>
						<ul className='grid lg:grid-cols-2 '>
							<li className='w-full'>
								<span className='mr-3 inline-block text-realWhite-100 font-semiBold'>Nomor WhatsApp :</span>
								<span>082149166762</span>
							</li>
							<li className='w-full'>
								<span className='mr-3 inline-block text-realWhite-100 font-semiBold'>Email :</span>
								<span>bait.almaqdis2017@gmail.com</span>
							</li>
							{/* <li>
								<button onClick={this.copyText} className="copy-icon-container" ><i className="material-icons copy-icon">content_copy</i>Copy</button>
								<code id="text-container">press the button to copy this text here...</code>
							</li> */}
						</ul>
					</div>
				</div>
			</div>
		</div>
	);
};

export default Kontak;






// return (
// 	<div className='mx-auto my-8 p-4'>
// 		<div data-aos="fade-right" data-aos-duration="1200">
			
// 			<div className='mb-4 border-bottom-line'>
// 				<h5 className='text-justify tracking-wider text-sm leading-8 mb-4'>{info.deskLengkap}</h5>
// 			</div>
// 			<div className='mb-4 border-bottom-line'>
// 				<div className='text-left text-sm leading-8 mb-4'>
// 					<ul className='grid lg:grid-cols-2 '>
// 						<li className='w-full'>
// 							<span className='mr-3 inline-block text-realWhite-100 font-semiBold'>Nomor WhatsApp :</span>
// 							<span>082149166762</span>
// 						</li>
// 						<li className='w-full'>
// 							<span className='mr-3 inline-block text-realWhite-100 font-semiBold'>Email :</span>
// 							<span>bait.almaqdis2017@gmail.com</span>
// 						</li>
// 					</ul>
// 				</div>
// 			</div>
// 		</div>
// 	</div>
// );