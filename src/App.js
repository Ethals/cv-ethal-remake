import React from 'react';
import SideNavBar from "./SideNavBar/SideNavBar";
import Layouts from "./Layouts/Layouts";
import { BrowserRouter, Route, Routes } from 'react-router-dom';

import Home from "./Components/Home.jsx";
import About from "./Components/About.jsx";
import Pendidikan from "./Components/Pendidikan.jsx";
import Kontak from "./Components/Kontak.jsx";
import Pencapaian from "./Components/Pencapaian.jsx";
import Pengalaman from "./Components/Pengalaman.jsx";
import Portofolio from "./Components/Portofolio.jsx";
import Skill from "./Components/Skill.jsx";

const App = () => {
	return (
		<div>
			<BrowserRouter>
				<Layouts>
					<Routes>
						<Route path={'/'} element={<Home/>}/>
						<Route path={'/tentang'} element={<About/>}/>
						<Route path={'/kontak'} element={<Kontak/>}/>
						<Route path={'/pengalaman'} element={<Pengalaman/>}/>
						<Route path={'/porto'} element={<Portofolio/>}/>
						<Route path={'/pencapaian'} element={<Pencapaian/>}/>
						<Route path={'/skill'} element={<Skill/>}/>
						<Route path={'/pendidikan'} element={<Pendidikan/>}/>
					</Routes>
				</Layouts>
			</BrowserRouter>
		</div>
	);
};

export default App;
