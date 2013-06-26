<script>
	$(document).ready(function(){
		$('.jobSeeker').hover(function(){$('.growA').animate({opacity:1},90,function(){});});
		$('.jobSeeker').mouseleave(function(){$('.growA').animate({opacity:.65},90,function(){});});
	});
	$(document).ready(function(){
		$('.employer').hover(function(){$('.growB').animate({opacity:1},90,function(){});});
		$('.employer').mouseleave(function(){$('.growB').animate({opacity:.65},90,function(){});});
	});
	$(document).ready(function(){
		$('.resources').hover(function(){$('.growC').animate({opacity:1},90,function(){});});
		$('.resources').mouseleave(function(){$('.growC').animate({opacity:.65},90,function(){});});
	});

</script>
<div class="selector">
  <div class="portalSelector">
    <div class="jobSeeker">
        <img src="<?=IMAGE_PATH?>/pathSelector/careerSeekerSuncoastWorkforce_hover.png" alt="" title="" class="growA" style="opacity:.65;" />
        <div class="jobSeekerWords">
	        <div class="tagLineJobs">
            	Find Your Career 
            </div>
            <div class="linkTextJobs">
            	ENTER AS A<br />
				<h1>JOB SEEKER</h1>
            </div>
        </div>
    </div>
    <div class="employer">
    <img src="<?=IMAGE_PATH?>/pathSelector/employerSuncoastWorkforce_hover.png" alt="" title="" class="growB" style="opacity:.65;" /> 
        <div class="employerWords">
	        <div class="tagLineEmployer">
            	Find
                The
                Perfect
                Employee 
            </div>
            <div class="linkTextEmployer">
            	ENTER AS A<br />
				<h1>EMPLOYER</h1>
            </div>
        </div>
    </div>
    <div class="resources">
    <img src="<?=IMAGE_PATH?>/pathSelector/resourceSuncoastWorkforce_hover.png" alt="" title="" class="growC" style="opacity:.65;" />
        <div class="resourcesWords">
	        <div class="tagLineResources">
            	Find Resources 
            </div>
            <div class="linkTextResources">
            	Community Partners <br />& Resources
            </div>
        </div>
    </div>
  </div>
</div>
