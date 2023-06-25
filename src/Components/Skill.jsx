import React, { useEffect } from 'react';
import {info} from "../info/Info";
// import Waypoint from 'react-waypoint';

function Skill({width}) {
	// const bar = 'w-[25%] skill-per css text-${info.firstName}', {info,firstName};

	return (
		<div className='mx-0 my-auto md:px-10 min-w-[320px] md:min-w-[490px] lg:min-w-[768px] xl:min-w-[1024px] 2xl:min-w-[1280px]' data-aos="fade-right" data-aos-duration="1200">
			<div className='text-left mb-4 border-bottom-line'>
				<h2 className='title-halaman max-md:mt-16 text-3xl text-realWhite-100'>Keahlian</h2>

				<div className='grid lg:grid-cols-2 gap-x-6'>
					{info.skillsProgramming.map((skillProgramming, index) => (
						<div className="skill-box py-2" key={index}>
							<span className="title">{skillProgramming.title}</span>
							<div className="skill-bar">
								<span className={skillProgramming.style}>
									<span className="tooltip-bar text-xl">{skillProgramming.value} <span className="font-primary">%</span></span>
								</span>
							</div>
						</div>
					))}

				</div>
			</div>
		</div>
	);
};

export default Skill;




// import React, { useEffect } from 'react';
// import Waypoint from 'react-waypoint';

//aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"

// function SkillBar() {
//   useEffect(() => {
//     function animateSkillBar() {
//       document.querySelectorAll('.progress .progress-bar').forEach((bar) => {
//         bar.style.width = `${bar.getAttribute('aria-valuenow')}%`;
//       });
//     }

//     const waypoint = new Waypoint({
//       element: document.querySelector('.skill'),
//       handler: animateSkillBar,
//       offset: '80%',
//     });

//     return () => {
//       // Cleanup: destroy the Waypoint instance when component unmounts
//       waypoint.destroy();
//     };
//   }, []);

//   return (
//     <div className="skill">
//       <div className="progress">
//         <div
//           className="progress-bar"
//           role="progressbar"
//           aria-valuenow="70"
//           aria-valuemin="0"
//           aria-valuemax="100"
//         >
//           70%
//         </div>
//       </div>
//       <div className="progress">
//         <div
//           className="progress-bar"
//           role="progressbar"
//           aria-valuenow="90"
//           aria-valuemin="0"
//           aria-valuemax="100"
//         >
//           90%
//         </div>
//       </div>
//       <div className="progress">
//         <div
//           className="progress-bar"
//           role="progressbar"
//           aria-valuenow="60"
//           aria-valuemin="0"
//           aria-valuemax="100"
//         >
//           60%
//         </div>
//       </div>
//     </div>
//   );
// }