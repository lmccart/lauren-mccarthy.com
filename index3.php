<?php session_start(); ?>
<?php include "header3.php" ?>



<script type="text/javascript">
$(function(){
$('.thumbnailImage').mouseenter(
        function(){
        	$(this).find('div.text').fadeIn(100);                                            
        }
);
$('.thumbnailImage').mouseleave(
        function(){
        	$(this).find('div.text').fadeOut(100);
        }
);
});
</script>


<div id="content">
    <p class="title">Lauren McCarthy</p>
	  <p class="summary">I am an <a class="gray" href=<?php echo getRoot(); ?>about>artist and programmer</a>. I really want to <a class="gray" href=<?php echo getRoot(); ?>contact>know you</a>, but sometimes it's difficult, so I am doing what I can to hack my way in. Will you <a class="gray" href=<?php echo getRoot(); ?>inmotion>join me</a> in an uneasy moment that might let us be easier?</p>
	
  
<!--
	<?php if ($_SESSION['entry'] == 'medialab') { ?>
		
			<div id='medialab'>
				MIT MEDIA LAB
			</div>
		
	<?php } ?>
-->


	
	<?php 
	
		$projects = array(
			array("socialturkers", "Social Turkers: Crowdsourced Relationships", "2013", "http://socialturkers.com"),
			array("crowdpilot", "Crowdpilot", "2014", "http://www.crowdpilot.me"),
			array("pplkpr", "pplkpr", "2015", "http://pplkpr.com"),
			array("usplus", "us+", "2013", "usplus/"),
			array("socialsoul", "Social Soul", "2014", "http://vimeo.com/thisismkg/socialsoul"),
			array("fbmm", "fb mood manipulator", "2014", "moodmanipulator/"),
			array("inneract", "inneract", "2011", "http://inneract.us"),
			array("tools", "Tools for Improved Social Interacting", "2009", "socialinteracting/"),
			array("script", "Script", "2010", "script/"),
			array("conversacube", "Conversacube", "2010", "conversacube/"),
			array("table", "Relatable", "2010", "relationalterations/"),
			array("sabotage", "Semantic Sabotage", "2013", "http://sabotage.sosolimited.com"),
			array("recon", "ReConstitution", "2012", "http://reconstitution2012.com"),
			array("csis", "CSIS Data Chandelier", "2014", "http://sosolimited.com/csis/"),
			array("eye", "Energy of the Nation", "2012", "http://sosolimited.com/energy-of-the-nation/"),
			array("patterned", "Patterned by Nature", "2012", "http://sosolimited.com/patterned-by-nature/"),
			array("iheartradio", "iHeartRadio", "2013", "http://sosolimited.com/iheartradio/"),
			array("think", "IBM Think Exhibit Interactives", "2011", "http://sosolimited.com/IBM-Think/"),
			array("ushmm", "US Holocaust Memorial Museum", "2009", "ushmm/"),
			array("monticello", "Monticello", "2009", "jefferson/"),
			array("met", "Metropolitan Museum of Art Signage", "2009", "metmuseum/"),
			array("pastperfect", "Past Perfect", "2013", "http://www.pastperfect.us"),
			array("happiness", "Happiness Hat", "2009", "happinesshat/"),
			array("station", "Relation Station", "2011", "elsewhere/"),
			array("inactive", "Inactive Account Manager", "2013", "inactive/"),
			array("b", "B", "2010", "b/"),
			array("networkout", "Networkout", "2008", "networkout/"),
			array("goodbye", "Hands-Free-Auto-OK/Good/Great-Bye! Machine", "2008", "goodbye/"),
			array("overhere", "Overhere", "2009", "overhere/"),
			array("1stfans", "Brooklyn Art Museum 1st Fans Shower Tweet", "2009", "1stfans/"),
			array("bodyext", "Dress Shoes for Spontaneous Departure", "2005", "bodyextension/")
		
		);
		
		$i = 0;
		foreach ($projects as $p) {
			$target = (strpos($p[3], 'ttp') != false ? 'target=_blank' : '');
			$end = $i%4 == 3 ? 'rightThumb' : '';
			echo '<div class=" col-md-3 thumbnailImage">
					<a '.$target.' href="'.$p[3].'">
					<div class="image">
						 <img src='.getRoot().'images/thumbnails/'.$p[0].'.png class="thumbImg"/>
					</div>
					<div class="text">'.$p[1].'<span class="date"> '.$p[2].'</span></div>
					</a>
				</div>';
			$i++;
		}
	?>
  
  </div>
</div>
</body>
</html>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6271620-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
