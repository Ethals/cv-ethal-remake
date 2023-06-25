import React from 'react';
import {info} from "../info/Info";
import self from "../img/self.png";
import bait from "../img/bait.png";

import './3d_card.css';

import Typed from "react-typed";

const Home = () => {
	return (
		<div className='my-auto mx-6 lg:mx-16 grid lg:flex gap-x-6' data-aos="fade-right" data-aos-duration="1200">
			<div className='w-full lg:w-1/3'>
				<a className='' href="#" alt="" target="_blank">
					<div class="card-3d">
						<div class="wrapper max-lg:top-0 max-lg:h-[100%] lg:w-[100%]">
							<img src={self} class="cover-image rounded-[50%;] w-[300px]" />
						</div>
						<img src={bait} class="character max-lg:top-0 max-lg:h-[100%] lg:w-[100%]" />
					</div>
				</a>
			</div>
			<div className='w-full lg:w-2/3'>
				<h1 className="text-5xl lg:text-6xl max-lg:mt-10 font-black text-realWhite-100">{info.firstName} {info.lastName}</h1>
				<h2 className='text-2xl'>I'm <span> </span>   
					<Typed
						strings={[
							" Full Stack Developer",
							" Software Development",
							" Subscribers",
						]}
						typeSpeed={150}
						backSpeed={100}
						loop
					/>
				</h2>
				<h5 className='text-justify tracking-wider mt-6 leading-8'>{info.desk}</h5>
				<div className='mt-6'>
					{info.socials.map((social, index) => (
						<a className='link-icon-social' key={index} href={social.link}><span class="icon-social mx-2"><ion-icon name={social.icon}></ion-icon></span></a>
					))}
				</div>
			</div>
		</div>
	);
};

export default Home;




















// import React from 'react';
// import Style from './Home.module.scss';
// import me from '../info/img/self.png';
// // import classNames from 'classnames';
// import EmojiBullet from "./EmojiBullet";
// import SocialIcon from "./SocialIcon";
// import {Box} from "@mui/material";
// import {info} from "../info/Info";
// // import LinearDeterminate from './LinearDeterminate';
// // import Cart from './Cart';

// import Typed from "react-typed";

// export default function Home() {
   

//    return (
//       <Box component={'main'} display={'flex'} flexDirection={{xs: 'column', md: 'row'}} alignItems={'center'}justifyContent={'center'} minHeight={'calc(100vh - 175px)'}>
//          <Box className={(Style.avatar, Style.shadowed)} alt={'image of developer'} style={{background: info.gradient}} component={'img'} src={me} width={{xs: '35vh', md: '40vh'}}height={{xs: '35vh', md: '40vh'}}borderRadius={'50%'} p={'0.75rem'} mb={{xs: '1rem', sm: 0}} mr={{xs: 0, md: '2rem'}}/>
//          <Box>
//             <h1 style={{padding: '10px 0'}}>{info.firstName} {info.lastName}</h1>
//             <h2 style={{fontSize: '1.5rem'}}>I'm  
//                <Typed
//                   strings={[
//                      " Full Stack Developer",
//                      " Software Development",
//                      " Subscribers",
//                   ]}
//                   typeSpeed={150}
//                   backSpeed={100}
//                   loop
//                />
//             </h2>
//             {/* <span idName='hero_word' className='word'>{info.position}</span> */}
//             <Box component={'h5'} style={{padding: '10px 0'}} textAlign={{xs: 'center', md: 'left'}}>I'm {info.desk}.</Box>
//             {/* <Box component={'ul'} p={'0.8rem'}>
//                {info.miniBio.map((bio, index) => (
//                   <EmojiBullet key={index} emoji={bio.emoji} text={bio.text}/>
//                ))}
//             </Box> */}
//             <Box display={'flex'} gap={'0.5rem'} justifyContent={'start'} fontSize={{xs: '1rem', md: '1.2rem'}}>
//                {info.socials.map((social, index) => (
//                   <SocialIcon className='icon' key={index} link={social.link} icon={social.icon} label={social.label} />
//                ))}
//             </Box>
//             {/* <LinearDeterminate />
//             <Cart /> */}
//          </Box>
//       </Box>
//    )
// }
