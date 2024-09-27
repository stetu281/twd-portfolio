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

//Video Observer
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
