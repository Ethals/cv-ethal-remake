import React, { useEffect } from 'react';
import {info} from "../info/Info";
// import Waypoint from 'react-waypoint';

function Skill({width}) {
	// const bar = 'w-[25%] skill-per css text-${info.firstName}', {info,firstName};

	return (
		<div className='m-8' data-aos="fade-right" data-aos-duration="1200">
			Skill ------------------------------------
			
			<div className="skill-box">
				<span className="title">CSS</span>
				<div className="skill-bar">
					<span className={bar} aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
						<span className="tooltip-bar">80%</span>
					</span>
				</div>
			</div>

		</div>
	);
};

export default Skill;




// import React, { useEffect } from 'react';
// import Waypoint from 'react-waypoint';

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