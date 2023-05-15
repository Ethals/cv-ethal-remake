import React, { useState } from "react";
// import "./SideNavBar.css";
// import "./adminx.css";
import { NavLink } from 'react-router-dom';

import CottageIcon from '@mui/icons-material/Cottage';
import PersonIcon from '@mui/icons-material/Person';
import DashboardIcon from '@mui/icons-material/Dashboard';
import SettingsIcon from '@mui/icons-material/Settings';
import BusinessCenterIcon from '@mui/icons-material/BusinessCenter';
import FeedIcon from '@mui/icons-material/Feed';
import RecentActorsIcon from '@mui/icons-material/RecentActors';
import CopyrightIcon from '@mui/icons-material/Copyright';  
import EmojiEventsIcon from '@mui/icons-material/EmojiEvents';
import AssignmentIndIcon from '@mui/icons-material/AssignmentInd';
import PinchIcon from '@mui/icons-material/Pinch';
import SchoolIcon from '@mui/icons-material/School';

import { FaBars }from "react-icons/fa";

const Layouts = ({children}) => {
	const [isExpanded, setExpendState] = useState(false);
	const menuItems = [
		{
			link:"/",
			text: "Home",
			icon: <CottageIcon/>
		},
		{
			link:"/tentang",
			text: "Tentang",
			icon: <PersonIcon/>,
		},
		{
			link:"/skill",
			text: "Skill",
			icon: <PinchIcon/>,
		},
		{
			link:"/pengalaman",
			text: "Pengalaman",
			icon: <AssignmentIndIcon/>,
		},
		{
			link:"/pendidikan",
			text: "Pendidikan",
			icon: <SchoolIcon/>,
		},
		{
			link:"/porto",
			text: "Portofolio",
			icon: <BusinessCenterIcon/>,
		},
		{
			link:"/pemcapaian",
			text: "Pencapaian",
			icon: <EmojiEventsIcon/>,
		},
		{
			link:"/kontak",
			text: "Kontak",
			icon: <RecentActorsIcon/>,
		},
	];
	return (
		<div className="adminx-container">
			<nav class="navbar navbar-expand justify-content-between fixed-top">
				<a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
					<img src="./dist/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt=""/>
					CV Ethals
				</a>
				<div class="d-flex flex-1 d-block d-md-none">
					CV Ethals
				</div>
				<ul class="navbar-nav d-flex justify-content-end mr-2">
					<a href="#" class="sidebar-toggle ml-3 black-hover">
						<span class="sidebar-nav-name">
						<FaBars/>
						</span>
					</a>
				</ul>
			</nav>

			<div class="adminx-sidebar expand-hover push flex">
				<ul class="sidebar-nav my-auto">
						<li className=" sidebar-nav-item"><h1 className="px-10 pb-10 mb-8 text-xl text-realWhite-100">CV Ethals</h1></li>
						<li class="sidebar-nav-item my-auto">
							{menuItems.map((item, index) => (
								<NavLink to={item.link} key={index} className={"sidebar-nav-link"}>
									<span class="sidebar-nav-icon mr-1">{item.icon}</span>
									<span class="sidebar-nav-name">{item.text}</span>
									<span class="sidebar-nav-end"></span>
								</NavLink>
							))}
						</li>
						<li className="sidebar-nav-item"><h5 className="px-10 pt-10 mt-8 text-sm text-realWhite-100"><span className="font-primary">&copy;</span> 2023 by <a href="">Ethalsss</a></h5></li>
				</ul>
			</div>

			<div class="adminx-content flex">
				<div class="container-fluid flex">
					<main className="flex">{children}</main>
				</div>
			</div>
			
		</div>
	);
};

export default Layouts;