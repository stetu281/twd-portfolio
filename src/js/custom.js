//Hamburger event listener
document.querySelector('.hamburger').addEventListener('click', (e) => {
	e.target.classList.toggle('hamburger--open');
	e.target.previousElementSibling.classList.toggle('navigation--open');
});

//Footer Year
document.querySelector('.footer__copy--year').innerText =
	new Date().getFullYear();

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
