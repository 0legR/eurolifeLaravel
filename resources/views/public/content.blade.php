{{-- Main page --}}
<div class="row" id="Home">
	<div class="col-sm-12 container-home" id="container_home">
		<div class="col-sm-6">
			<div class="main-text" id="main_text">
			{!! $pages[0]->text !!}
			</div>
			<div class="show-text" id="show_text">
				<p id="readMore">read more</p>
				<span class="glyphicon glyphicon-menu-down" aria-hidden="true" id="gIcon"></span>
			</div>
		</div>
		<div class="metLogo">
			<a href="http://www.metlife.ua" target="_blank">
				<img src="/img/metlifeLogo.png" alt="metlifeLogo" />
			</a>
		</div>
		<div class="graweLogo">
			<a href="http://www.grawe.ua" target="_blank">
				<img src="/img/graweLogo.png" alt="graweLogo" />
			</a>
		</div>
	</div>
</div>
{{-- About page --}}
<div class="row" id="About">
	<div class="col-sm-12 header-about">
		<h1>{{$pages[1]->name}}</h1>
	</div>
	<div class="col-sm-12 container-about">
		<div class="col-sm-6 text-about">
			{!! $pages[1]->text !!}
		</div>
		<div class="col-sm-6">
			<img class="photo-about" src="http://www.eurolife.ua/images/Philosophy.jpg?m=1476391871" alt="philisophy">
		</div>
	</div>
</div>
<script>
window.onload = function() {
	toggleMainText();
	buttonUp();
}

function toggleMainText () {
	var showText = document.getElementById('show_text'),
	mainText = document.getElementById('main_text'),
	containerHome = document.getElementById('container_home'),
	toggle = false,
	gIcon = document.getElementById('gIcon'),
	readMore = document.getElementById('readMore');
	showText.addEventListener('click', toggleText);

	function toggleText(){
		if (!toggle) {
			show();
			toggle = true;
		// mainText.setAttribute('style', 'font-size: 14px');
		} else{
			hide();
		mainText.setAttribute('style', 'font-size: 14px');

			toggle = false;
		};
	}

	function show() {
		mainText.setAttribute('style', 'height: 115vh');
		containerHome.setAttribute('style', 'min-height: 140vh');
		gIcon.setAttribute('class', 'glyphicon glyphicon-menu-up');
		readMore.innerHTML = 'Більше не читати ...';
	}

	function hide() {
		document.getElementById('header').scrollIntoView(
			{block: "start", behavior: "smooth"}
		);
		mainText.setAttribute('style', 'height: 40vh');
		containerHome.setAttribute('style', 'min-height: 90vh');
		gIcon.setAttribute('class', 'glyphicon glyphicon-menu-down');
		readMore.innerHTML = 'Читати більше ...';
	}
}

function buttonUp () {
	var buttonUp = document.createElement('Button');
	buttonUp.className = 'button-up';
	gliphIcon = document.createElement('span');
	gliphIcon.className = 'glyphicon glyphicon-upload gliph-icon';
	gliphIcon.setAttribute('aria-hidden', 'true');
	buttonUp.appendChild(gliphIcon);
	document.body.appendChild(buttonUp);
	buttonUp.addEventListener('click', function() {
		document.getElementById('header').scrollIntoView({block: "start", behavior: "smooth"});
	});

	window.onscroll = function() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			buttonUp.style.display = 'block';
		} else{
			buttonUp.style.display = 'none';
		};
	}

}


</script>