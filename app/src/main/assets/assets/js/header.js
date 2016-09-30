$(document).ready(function() {
	var path = window.location.pathname
	$('nav a').each(function(link) {
		var ref = $(this).attr('href')
		if(ref == path) {
			$(this).addClass('active')
		}
		if(path == "/videos.html" || path == "/direction_showreel.html") {
			$('nav a[href="/videos.html"]').parents('.uppercase').addClass('active')
			$(this).removeClass("active")
		}
	})
	$('nav .title').hover(function(){
		$('nav .dropdown').show()
	},function(){
		$('nav .dropdown').hide()
	})
	$('nav .dropdown').hover(function(){
		$('nav .dropdown').show()
	},function(){
		$('nav .dropdown').hide()
	})
	$('header .fa-align-justify').on('click', function() {
		$('aside.mobile-navbar').addClass('showNavbar')
		$('aside.mobile-navbar').removeClass('hideNavbar')
		$('.dim-cloak').show()
	})

	$('aside.mobile-navbar .fa-remove').on('click', function() {
		$('aside.mobile-navbar').removeClass('showNavbar')
		$('aside.mobile-navbar').addClass('hideNavbar')
		$('.dim-cloak').hide()
	})
})