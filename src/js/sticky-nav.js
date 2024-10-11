export default function stickyNav() {
	const sections = document.querySelectorAll('.ioSection');
	const navLinks = document.querySelectorAll(
		'.ioSection__navigation ul li a'
	);
	const sectionOptions = {
		threshold: 0,
		rootMargin: '-30% 0px -70% 0px',
	};

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
