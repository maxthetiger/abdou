 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2427391-50']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();


$("h2").on('click','a', function()
{
	var index = $(this).index;
	console.log(index)
	var parent = $(this).parent;
})