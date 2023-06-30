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
import Typography from '@mui/material/Typography';
import EscalatorWarningIcon from '@mui/icons-material/EscalatorWarning';
import BoyIcon from '@mui/icons-material/Boy';
import AccessibilityNewIcon from '@mui/icons-material/AccessibilityNew';
import HailIcon from '@mui/icons-material/Hail';


function Pendidikan() {
	return (
		<div className='m-8' data-aos="fade-right" data-aos-duration="1200">
			<h2 className='title-halaman max-md:mt-10 text-3xl text-realWhite-100'>Pendidikan</h2>

			<Timeline position="alternate">
				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} align="right" variant="none" className="max-md:text-xs text-realWhite-100"> 2020 - Saat ini</TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot>
								<HailIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-2">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm text-realWhite-100">Kuliah</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">Universitas Bina Sarana Informatika - Jurusan Ilmu Komputer/Informatika</Typography>
					</TimelineContent>
				</TimelineItem>

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} variant="none" className="max-md:text-xs text-realWhite-100"> 2017 - 2020 </TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot color="primary">
								<AccessibilityNewIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-2">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm text-realWhite-100">SMA</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">SMA Negeri 2 Luwu Timur</Typography>
					</TimelineContent>
				</TimelineItem>

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} align="right" variant="none" className="max-md:text-xs text-realWhite-100"> 2014 - 2017 </TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot>
								<BoyIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-2">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm text-realWhite-100">SMP</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">SMP Negeri 1 Bissappu</Typography>
					</TimelineContent>
				</TimelineItem>

				<TimelineItem>
					<TimelineOppositeContent sx={{ m: 'auto 0' }} variant="none" className="max-md:text-xs text-realWhite-100"> 2008 - 2014 </TimelineOppositeContent>
					<TimelineSeparator>
						<TimelineConnector />
							<TimelineDot color="primary">
								<EscalatorWarningIcon />
							</TimelineDot>
						<TimelineConnector />
					</TimelineSeparator>
					<TimelineContent sx={{ py: '12px', px: 2 }} className="my-2">
						<Typography variant="h6" component="span" className="underline !font-recoleta max-md:!text-sm text-realWhite-100">SD</Typography>
						<Typography className="!font-recoleta max-md:!text-xs">SDN 27 Beloparang -<br/> SDN 127 Buanipa - <br/> SDN 25 Panaikang - </Typography>
					</TimelineContent>
				</TimelineItem>
				
			</Timeline>
		</div>
	);
};

export default Pendidikan;
