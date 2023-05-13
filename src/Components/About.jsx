import React from 'react';
import './3d_card.css';
import self from "../img/self.png";
import bait from "../img/bait.png";

function About() {
	return (
		<div className='flex gap-x-6'>
			<a href="https://mythrillfiction.com/" alt="Mythrill" target="_blank">
				<div class="card-3d">
					<div class="wrapper">
						<img src={ self } class="cover-image" />
					</div>
					<img src={ bait } class="character" />
				</div>
			</a>

			<a href="https://www.mythrillfiction.com/force-mage" alt="Mythrill" target="_blank">
				<div class="card-3d">
					<div class="wrapper">
						<img src="https://ggayane.github.io/css-experiments/cards/force_mage-cover.jpg" class="cover-image" />
					</div>
					<img src="https://ggayane.github.io/css-experiments/cards/force_mage-title.png" class="title" />
					<img src="https://ggayane.github.io/css-experiments/cards/force_mage-character.webp" class="character" />
				</div>
			</a>
		</div>
	);
};

export default About;
