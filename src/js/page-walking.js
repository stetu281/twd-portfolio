import stickyNav from './sticky-nav';

stickyNav();

//Calculate Distance Percent
const total = parseInt(
	document.querySelector('.stats__progress--total').innerText,
	10
);
const done = parseInt(
	document.querySelector('.stats__progress--done').innerText,
	10
);

const percent = Math.round((100 / total) * done * 10) / 10;

const percentElement = document.querySelector('.stats__progress--percent');

percentElement.innerText = `${percent}%`;
document
	.querySelector('.stats__progress--bar')
	.style.setProperty('--percent', `${percent}%`);
