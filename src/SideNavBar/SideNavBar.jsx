import React, { useState } from "react";
import "./SideNavBar.css";
import { NavLink } from 'react-router-dom';

import { FaTh, FaBars, FaUserAlt, FaRegChartBar, FaCommentAlt, FaShoppingBag, FaThList }from "react-icons/fa";

const SideNavBar = ({children}) => {
	const [isExpanded, setExpendState] = useState(false);
	const menuItems = [
		{
			link:"/home",
			text: "Dashboard",
			icon:<FaTh/>
		},
		{
			link:"/about",
			text: "Admin Profile",
			icon: <FaUserAlt/>,
		},
		{
			link:"/a",
			text: "Messages",
			icon: <FaUserAlt/>,
		},
		{
			link:"/sa",
			text: "Analytics",
			icon: <FaUserAlt/>,
		},
		{
			link:"/sa",
			text: "File Manager",
			icon: <FaUserAlt/>,
		},
		{
			link:"/sa",
			text: "Orders",
			icon: <FaUserAlt/>,
		},
		{
			link:"/sa",
			text: "Saved Items",
			icon: <FaUserAlt/>,
		},
		{
			link:"/sa",
			text: "Settings",
			icon: <FaUserAlt/>,
		},
	];
	return (
		<div className="container flex">
			<div
				className={
					isExpanded
						? "side-nav-container"
						: "side-nav-container side-nav-container-NX"
				}
			>
				<div className="nav-upper">
					<div className="nav-heading">
						{isExpanded && (
							<div className="nav-brand">
								<img src="icons/Logo.svg" alt="" srcset="" />
								<h2>Showkart</h2>
							</div>
						)}
						<button
							className={
								isExpanded ? "hamburger hamburger-in" : "hamburger hamburger-out"
							}
							onClick={() => setExpendState(!isExpanded)}
						>
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
					<div className="nav-menu">
						{menuItems.map((item, index) => (
							<NavLink to={item.link} key={index} className={isExpanded ? "menu-item" : "menu-item menu-item-NX"}>
								<div className="icon menu-item-icon">{item.icon}</div>
								{isExpanded && <p>{item.text}</p>}
							</NavLink>
						))}
					</div>
				</div>
				<div className="nav-footer">
					{isExpanded && (
						<div className="nav-details">
							<img
								className="nav-footer-avatar"
								src="icons/admin-avatar.svg"
								alt=""
								srcset=""
							/>
							<div className="nav-footer-info">
								<p className="nav-footer-user-name">M Showkat</p>
								<p className="nav-footer-user-position">store admin</p>
							</div>
						</div>
					)}
					<img className="logout-icon" src="icons/logout.svg" alt="" srcset="" />
				</div>
			</div>
			<main>{children}</main>
		</div>
	);
};

export default SideNavBar;
