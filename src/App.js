import React from 'react';
import SideNavBar from "./SideNavBar/SideNavBar";
import Layouts from "./Layouts/Layouts";
import { BrowserRouter, Route, Routes } from 'react-router-dom';

import Home from "./Components/Home.jsx";
import About from "./Components/About.jsx";

const App = () => {
	return (
		<div>
			<BrowserRouter>
				<Layouts>
					<Routes>
						<Route path={'/home'} element={<Home/>}/>
						<Route path={'/about'} element={<About/>}/>
					</Routes>
				</Layouts>
			</BrowserRouter>
		</div>
	);
};

export default App;
