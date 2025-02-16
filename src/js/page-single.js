const toggleTheme = () => {
	const currentTheme = document.documentElement.getAttribute('data-theme');

	const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

	document.documentElement.setAttribute('data-theme', newTheme);

	localStorage.setItem('theme', newTheme);
};

document.querySelector('.colormode').addEventListener('click', toggleTheme);
