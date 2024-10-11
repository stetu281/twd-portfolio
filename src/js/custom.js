//Hamburger event listener
document.querySelector('.hamburger').addEventListener('click', (e) => {
	e.target.classList.toggle('hamburger--open');
	e.target.previousElementSibling.classList.toggle('navigation--open');
});

//Footer Year
document.querySelector('.footer__copy--year').innerText =
	new Date().getFullYear();

//Frontpage Works Title Animation Observer
const titles = document.querySelectorAll('.fp-works__work--title');
const titleOptions = { threshold: 0, rootMargin: '0% 0% -50% 0%' };

const titleObserver = new IntersectionObserver((entries, observer) => {
	entries.forEach((title) => {
		if (title.isIntersecting) {
			title.target.classList.add('fp-works__work--title--in');
		} else {
			title.target.classList.remove('fp-works__work--title--in');
		}
	});
}, titleOptions);

titles.forEach((title) => {
	titleObserver.observe(title);
});

//Animation Reveal Observer
const revealItems = document.querySelectorAll('.reveal');
const revealOptions = {
	threshold: 0.2,
	rootMargin: '700px 0px -100px',
};
const revealObserver = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.add('reveal--active');
			observer.unobserve(entry.target);
		}
	});
}, revealOptions);

revealItems.forEach((item) => {
	revealObserver.observe(item);
});

//Video Observer

if (document.body.classList.contains('page-id-18')) {
	const video = document.querySelector('.guitar__video video');
	const videoOptions = { threshold: 0.9, rootMargin: '0px' };

	const videoObserver = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			const element = entry.target.parentElement.parentElement;

			if (entry.isIntersecting) {
				video.play();
				element.classList.remove('paused');
				element.classList.add('animate');
				element.classList.add('in');
			} else {
				video.pause();
				element.classList.add('paused');
				element.classList.remove('in');
				if (video.currentTime == 8) {
					element.classList.remove('animate');
				}
			}
		});
	}, videoOptions);

	videoObserver.observe(video);
}

//Works and Article Section Observer
if (
	document.body.classList.contains('page-id-18') ||
	document.body.classList.contains('page-id-486')
) {
	const sections = document.querySelectorAll('.ioSection');
	const navLinks = document.querySelectorAll(
		'.ioSection__navigation ul li a'
	);
	const sectionOptions = { threshold: 0, rootMargin: '-30% 0px -70% 0px' };

	const sectionObserver = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				switch (entry.target.id) {
					case 'websites':
						addClass(0);
						break;
					case 'designs':
						addClass(1);
						break;
					case 'webapps':
						addClass(2);
						break;
					case 'switzerland':
						addClass(0);
						break;
					case 'france':
						addClass(1);
						break;
					case 'spain':
						addClass(2);
						break;
					case 'misc':
						addClass(3);
						break;
				}
			} else {
				switch (entry.target.id) {
					case 'websites':
						removeClass(0);
						break;
					case 'designs':
						removeClass(1);
						break;
					case 'webapps':
						removeClass(2);
						break;
					case 'switzerland':
						removeClass(0);
						break;
					case 'france':
						removeClass(1);
						break;
					case 'spain':
						removeClass(2);
						break;
					case 'misc':
						removeClass(3);
						break;
				}
			}
		});
	}, sectionOptions);

	sections.forEach((section) => {
		sectionObserver.observe(section);
	});

	function addClass(linkNum) {
		return navLinks[linkNum].parentElement.classList.add(
			'activeSectionLink'
		);
	}

	function removeClass(linkNum) {
		return navLinks[linkNum].parentElement.classList.remove(
			'activeSectionLink'
		);
	}
}

//Calculate Distance Percent

/* const total = parseInt(
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
	.style.setProperty('--percent', `${percent}%`); */
