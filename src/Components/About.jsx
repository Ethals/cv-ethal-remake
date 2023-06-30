import React from 'react';
import {info} from "../info/Info";

import p2 from "../img/p2.jpg";

function About() {
	return (
		<div className='mx-auto my-8 p-4'>
			<div data-aos="fade-right" data-aos-duration="1200">
				<div className='text-left mb-4 border-bottom-line'>
					<h2 className='title-halaman text-3xl text-realWhite-100'>Tentang Saya</h2>
					<div className='w-full h-[300px] lg:h-[500px] block'>
						<img className='absolute object-cover object-top w-full h-full relative' src={p2} alt="" />
					</div>
					<h3 className='text-2xl mt-4 text-realWhite-100 font-black'>Bait Almaqdis</h3>
					<h5 className='text-xm mb-4'>Full Stack Web Developer</h5>
				</div>
				<div className='mb-4 border-bottom-line'>
					<h5 className='text-justify tracking-wider text-sm leading-8 mb-4'>{info.deskLengkap}</h5>
				</div>
				<div className='mb-4 border-bottom-line'>
					<div className='text-left text-sm leading-8 mb-4'>
						<ul className='grid lg:grid-cols-2 '>
							{info.identitas.map((identitas, index) => (
								<li className='w-full' key={index}>
									<span className='w-1/4 inline-block text-realWhite-100 font-semiBold'>{identitas.title} :</span>
									<span>{identitas.value}</span>
								</li>
							))}
						</ul>
					</div>
				</div>
			</div>
		</div>
	);
};

export default About;
