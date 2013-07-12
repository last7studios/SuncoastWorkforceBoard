<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/master.css" />
<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/navCss.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?=JS_PATH?>jquery-canvasSwap.js" type="text/javascript"></script>
<script type="text/javascript" src="//use.typekit.net/odv1cfo.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!----------------------------------------------------------------------------------------
-------------------------------- Jquery Navigation Selector ------------------------------
----------------------------------------------------------------------------------------->
<script>
	$(document).ready(function(){
		$('#clickOpenCS')
        .hover(function() {
            $('.contentBoxCSOpen').stop().animate({ height: 200 }, 'fast');
        }, function() {
            $('.contentBoxCSOpen').stop().animate({ height: 0 }, 'fast');
        });
		
		$('#clickOpenE')
        .hover(function() {
            $('.contentBoxEOpen').stop().animate({ height: 200 }, 'fast');
        }, function() {
            $('.contentBoxEOpen').stop().animate({ height: 0 }, 'fast');
        });
		
		$('#clickOpenR')
        .hover(function() {
            $('.contentBoxROpen').stop().animate({ height: 200 }, 'fast');
        }, function() {
            $('.contentBoxROpen').stop().animate({ height: 0 }, 'fast');
        });
	});

</script>
<!----------------------------------------------------------------------------------------
-------------------------------- Jquery Homepage Selector --------------------------------
----------------------------------------------------------------------------------------->
<script>
	$(document).ready(function(){
		$('.jobSeeker')
		.hover(function(){
			$('.growA').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.growA').stop().animate({opacity:.65}, 'fast');
		});

		$('.employer')
		.hover(function(){
			$('.growB').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.growB').stop().animate({opacity:.65}, 'fast');
		});
		
		$('.resources')
		.hover(function(){
			$('.growC').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.growC').stop().animate({opacity:.65}, 'fast');
		});		
	});

</script>
<!----------------------------------------------------------------------------------------
-------------------------------- Jquery Careers Selector --------------------------------
----------------------------------------------------------------------------------------->
<script>
	$(document).ready(function(){
		$('.youngAdult')
		.hover(function(){
			$('.CSA').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.CSA').stop().animate({opacity:.65}, 'fast');
		});

		$('.adult')
		.hover(function(){
			$('.CSB').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.CSB').stop().animate({opacity:.65}, 'fast');
		});
		
		$('.veteran')
		.hover(function(){
			$('.CSC').stop().animate({opacity:1}, 'fast');
		}, function(){
			$('.CSC').stop().animate({opacity:.65}, 'fast');
		});		
	});

</script>