import stickyNav from './sticky-nav';

stickyNav();

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
