<div class="row">
	<div class="col-sm-12 container-home">
		<div class="col-sm-6">
			<div class="main-text" id="mainText">
			{!! $pages[0]->text !!}
			</div>
			<div class="showText" id="showText">
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
<script>
var showText = document.getElementById('showText'),
	mainText = document.getElementById('mainText'),
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
	mainText.setAttribute('style', 'font-size: 12px');

		toggle = false;
	};
}

function show() {
	mainText.setAttribute('style', 'height: 115vh');
	gIcon.setAttribute('class', 'glyphicon glyphicon-menu-up');
	readMore.innerHTML = 'Більше не читати ...';
}

function hide() {
	mainText.setAttribute('style', 'height: 40vh');
	gIcon.setAttribute('class', 'glyphicon glyphicon-menu-down');
	readMore.innerHTML = 'Читати більше ...';
}
</script>