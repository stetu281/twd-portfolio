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
			console.log('in');
			title.target.classList.add('fp-works__work--title--in');
		} else {
			console.log('out');
			title.target.classList.remove('fp-works__work--title--in');
		}
	});
}, titleOptions);

titles.forEach((title) => {
	titleObserver.observe(title);
});
