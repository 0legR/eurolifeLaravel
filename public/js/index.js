
	var hamburger = document.getElementById("hamburger");
		hamburger.addEventListener('click', showNavbar);

	function showNavbar () {
		let nav = document.getElementById('bs-example-navbar-collapse-1');
		if (nav.getAttribute('class')) {
			nav.removeAttribute('class');
		} else{
			nav.setAttribute('class', 'collapse navbar-collapse');
		};
	}