import self from "../img/self.png"
import mock1 from "../img/mock1.png"
import mock2 from "../img/mock2.png"
import mock3 from "../img/mock3.png"
import mock4 from "../img/mock4.png"
import mock5 from "../img/mock5.png"

/* Hi there! Thanks for checking out my portfolio template. Be sure to read the comments to get a better understanding of
how to make this template work best for you! */

export let colors = ["rgb(0,255,164)", "rgb(166,104,255)"];
/*
I highly recommend using a gradient generator like https://gradientgenerator.paytonpierce.dev/ to generate a pair of colors that you like.
These colors will be used to style your name on the homepage, the background of your picture, and some other accents throughout
the site.
 */


/*
So let's get started! Some of the info below is pretty self-explanatory, like 'firstName' and 'bio'. I'll try to explain anything
that might not be obvious right off the bat :) I recommend looking at the template example live using "npm start" to get an idea
of what each of the values mean.
 */

export const info = {
    firstName: "BAIT",
    lastName: "ALMAQDIS",
    desk: "Saya merupakan pelajar asal Sulawesi Selatan yang melanjutkan pendidikan sebagai mahasiswa di Kota bekasi. Saya sudah suka bermain komputer sejak kecil, hingga saat ini tetap mendalami bidang tersebut.",
    deskLengkap: "Saya merupakan pelajar asal Sulawesi Selatan yang melanjutkan pendidikan sebagai mahasiswa di Kota bekasi. Saya sudah suka bermain komputer sejak kecil, hingga saat ini tetap mendalami bidang tersebut. tujuan saya merantau ke pulau jawa karena pendidikan tekhnologi di pulau jawa selangkah lebih maju dibandingkan pulau tempat kelahiran saya.",
    initials: "js", // the example uses first and last, but feel free to use three or more if you like.
    position: "a Full Stack Developer",
    selfPortrait: self, // don't change this unless you want to name your self-portrait in the "img" folder something else!
    gradient: '#bbb', // don't change this either box-shadow: inset 0 0 0 9px hsla(0,0%,100%,.3)
    // gradient: `-webkit-linear-gradient(135deg, ${colors})`, // don't change this either
    baseColor: colors[0],
    miniBio: [ // these are just some "tidbits" about yourself. You can look at mine https://paytonjewell.github.io/#/ for an example if you'd like
        {
            emoji: '🍾',
            text: 'fueled by coffee'
        },
        {
            emoji: '🌎',
            text: 'based in the US'
        },
        {
            emoji: "💼",
            text: "Systems Engineer at Google"
        },
        {
            emoji: "📧",
            text: "johnsmith@gmail.com"
        }
    ],
    socials: [
        {
            link: "https://api.whatsapp.com/send?phone=6282149166762&text=Halo",
            icon: 'logo-whatsapp',
            label: 'whatsapp'
        },
        {
            link: "https://www.instagram.com/ethalsss/",
            icon: 'logo-instagram',
            label: 'instagram'
        },
        {
            link: "https://github.com/Ethals",
            icon: "logo-github",
            label: 'github'
        },
        {
            link: "https://www.linkedin.com/in/bait-almaqdis-281286246",
            icon: "logo-linkedin",
            label: 'linkedin'
        },
        {
            link: "https://www.youtube.com/channel/UCIzjShGex2HpRIUqCBUobpA",
            icon: "logo-youtube",
            label: 'youtube'
        },
        {
            link: "https://twitter.com",
            icon: "logo-twitter",
            label: 'twitter'
        }
// Feel free to remove any of these that you don't have. I'll write an FAQ on how to add new ones later, let me know if you have a request for an icon!
// Just change the links so that they lead to your social profiles.

    ],
    bio: "Hello! I'm John. I'm a systems engineer for Google. I studied CompSci at Harvard, I enjoy long walks on the beach, and I believe artificial intelligence will inevitably rule us all one day. You should hire me!",
    skills:
        {
            proficientWith: ['javascript', 'react', 'git', 'github', 'bootstrap', 'html5', 'css3', 'figma'],
            exposedTo: ['nodejs', 'python', 'adobe illustrator']
        }
    ,
    hobbies: [
        {
            label: 'reading',
            emoji: '📖'
        },
        {
            label: 'theater',
            emoji: '🎭'
        },
        {
            label: 'movies',
            emoji: '🎥'
        },
        {
            label: 'cooking',
            emoji: '🌶'
        }
// Same as above, change the emojis to match / relate to your hobbies or interests.
// You can also remove the emojis if you'd like, I just think they look cute :P
    ],
    portfolio: [ // This is where your portfolio projects will be detailed
        {
            title: "Project 1",
            live: "https://paytonpierce.dev", //this should be a link to the live version of your project, think github pages, netlify, heroku, etc. Or your own domain, if you have it.
            source: "https://github.com/paytonjewell", // this should be a link to the **repository** of the project, where the code is hosted.
            image: mock1
        },
        {
            title: "Project 2",
            live: "https://paytonpierce.dev",
            source: "https://github.com/paytonjewell",
            image: mock2
        },
        {
            title: "Project 3",
            live: "https://paytonpierce.dev",
            source: "https://github.com/paytonjewell",
            image: mock3
        },
        {
            title: "Project 4",
            live: "https://paytonpierce.dev",
            source: "https://github.com/paytonjewell",
            image: mock4
        },
        {
            title: "Project 5",
            live: "https://paytonpierce.dev",
            source: "https://github.com/paytonjewell",
            image: mock5
        }
    ],
    identitas: [
        {
            title: "Usia",
            value: "21 Tahun",
        },
        {
            title: "TTL",
            value: "Wotu, 31 Agustus 2001",
        },
        {
            title: "Agama",
            value: "Islam",
        },
        {
            title: "Jurusan",
            value: "Ilmu Komputer/Informatika",
        },
        {
            title: "Semester",
            value: "Semester 6",
        },
        {
            title: "Kampus",
            value: "Universitas Bina Sarana Informatika",
        },
        {
            title: "Alamat",
            value: "Wotu, Luwu Timur, Sulawesi Selatan",
        },
        {
            title: "Domisili",
            value: "Jl. Binangun, Kaliabang tengah, Kota Bekasi",
        }
    ],
    skillsProgramming: [
        {
            title: "HTML",
            value: 90,
            style: "skill-per sub w-[90%]",
        },
        {
            title: "CSS",
            style: "skill-per sub w-[90%]",
            value: 90,
        },
        {
            title: "Javascript",
            style: "skill-per sub w-[70%]",
            value: 70,
        },
        {
            title: "PHP",
            style: "skill-per sub w-[80%]",
            value: 80,
        },
        {
            title: "Python",
            style: "skill-per sub w-[60%]",
            value: 60,
        },
        {
            title: "Native",
            style: "skill-per sub w-[90%]",
            value: 90,
        },
        {
            title: "CodeIgniter",
            style: "skill-per sub w-[75%]",
            value: 75,
        },
        {
            title: "Laravel",
            style: "skill-per sub w-[75%]",
            value: 75,
        },
        {
            title: "Wordpress",
            style: "skill-per sub w-[90%]",
            value: 90,
        },
        {
            title: "Flutter(Dart)",
            style: "skill-per sub w-[50%]",
            value: 50,
        },
        {
            title: "Database",
            style: "skill-per sub w-[50%]",
            value: 80,
        },
        {
            title: "cPanel",
            style: "skill-per sub w-[70%]",
            value: 70,
        },
        {
            title: "ReactJs",
            style: "skill-per sub w-[60%]",
            value: 60,
        },
        {
            title: "Tailwind Css",
            style: "skill-per sub w-[60%]",
            value: 60,
        }
    ]
}