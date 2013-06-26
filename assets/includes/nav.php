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
<ul class="navContent">
	<li class="nav" id="navFirst"><a href="#">Home</a></li>
    <li class="nav" id="clickOpenCS"><a href="#">Career Seeker</a><div class="contentBoxCSOpen"><?php include('navContent/careerSeeker.php');?></div></li>
    <li class="nav" id="clickOpenE"><a href="#">Employers</a><div class="contentBoxEOpen"><?php include('navContent/employers.php');?></div></li>
    <li class="nav" id="clickOpenR"><a href="#">Community Partners & Resources</a><div class="contentBoxROpen"><?php include('navContent/resources.php');?></div></li>
    <li class="nav"><a href="#">Contact</a></li>
</ul>





