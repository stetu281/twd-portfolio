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
