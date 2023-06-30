import React from 'react';
import {info} from "../info/Info";

// import * as React from 'react';
import Timeline from '@mui/lab/Timeline';
import TimelineItem from '@mui/lab/TimelineItem';
import TimelineSeparator from '@mui/lab/TimelineSeparator';
import TimelineConnector from '@mui/lab/TimelineConnector';
import TimelineContent from '@mui/lab/TimelineContent';
import TimelineOppositeContent from '@mui/lab/TimelineOppositeContent';
import TimelineDot from '@mui/lab/TimelineDot';
import FastfoodIcon from '@mui/icons-material/Fastfood';
import LaptopMacIcon from '@mui/icons-material/LaptopMac';
import HotelIcon from '@mui/icons-material/Hotel';
import RepeatIcon from '@mui/icons-material/Repeat';
import Typography from '@mui/material/Typography';

function Pengalaman() {
	return (
		<div className='m-8' data-aos="fade-right" data-aos-duration="1200">
			<h2 className='title-halaman max-md:mt-10 text-3xl text-realWhite-100'>Pengalaman</h2>

			<Timeline position="alternate">

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} align="right" variant="none" className="max-md:text-xs"> Feb 2023 - Saat ini · 5 bulan</TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot>
								<FastfoodIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-4">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm">Full Stack Developer - Magang</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">Mendevelope product website PT. Indi Technology menggunakan framework laravel, tailwind css dan lainnya.</Typography>
					</TimelineContent>
				</TimelineItem>

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} variant="none" className="max-md:text-xs"> Jan 2023 - Feb 2023 · 2 bln </TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot color="primary">
								<LaptopMacIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-4">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm">Freelancer FullStack Web Developer</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">Membuat Front-end & Back-end website profile organisasi dan management Fridays For Future Id. <a href="https://www.fridaysforfutureid.org/" className="underline">Lihat Website</a></Typography>
					</TimelineContent>
				</TimelineItem>

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} align="right" variant="none" className="max-md:text-xs"> Okt 2022 - Nov 2022 · 2 bln </TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot>
								<FastfoodIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-4">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm">Freelancer FullStack Web Developer</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">Membuat Front-end & Back-end website Bank sampah Hanami. <a href="https://banksampahbambuapus02.org/" className="underline">Lihat Website</a></Typography>
					</TimelineContent>
				</TimelineItem>

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} variant="none" className="max-md:text-xs"> Mar 2020 - Mei 2022 · 2 thn 3 bln </TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot color="primary">
								<LaptopMacIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-4">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm">Chief Technology Officer(CTO)</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">Membuat dan maintenence website dan aplikasi. Bekerja di PT. Master Nusantara Group sebagai Chief Technology Officer(CTO). <a href="" className="underline">Lihat Website</a></Typography>
					</TimelineContent>
				</TimelineItem>

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} align="right" variant="none" className="max-md:text-xs"> Mar 2020 - Mei 2022 · 2 thn 3 bln</TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot>
								<FastfoodIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-4">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm"> Owner Percetakan Lamacca </Typography>
						<Typography className="!font-recoleta max-md:!text-xs">Menjaga dan menjalankan bisnis percetakan. Mengeporasikan Printer, Photocopy, dan lainnya.</Typography>
					</TimelineContent>
				</TimelineItem>

				
			</Timeline>
		</div>
	);
};

export default Pengalaman;
