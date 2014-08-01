<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/common/config.php");
$PagePart 	= new PagePart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		/* Set Page Level Meta Details */
		$metaTitle 		= "BIRT Home";
		$metaKeywords	= "Eclipse,BIRT,Java,Java EE,Web,RCP,Data,Visualization,Reports,Reporting,Embed,Rich-Client,Dashboards";
		$metaAuthor		= "";
		$metaDescription = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		$ogTitle		= "Eclipse BIRT Project Home";
		$ogImage		= "http://www.eclipse.org/birt/img/logo/Birt-logo.png";
		$ogDescription  = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		
		//only use following if you know what you are doing - else just leave them as is.
		$robotsIndex 	= "index"; // ***Only usable values are 'index', 'noindex'
		$robotsFollow	= "follow"; // ***Only usable values are 'follow', 'nofollow'
		$canonicalTag	= ""; //this is a canonical tag used for duplicate content *** DO NOT USE UNLESS YOU KNOW WHAT YOU ARE DOING *** Default is blank! ex:http://www.actuate.com/products/
	 	
	 	# Generate Meta Info
		echo $PagePart->getMetaInfo($metaTitle, $metaKeywords, $metaAuthor, $metaDescription, $ogTitle, $ogImage, $ogDescription, $robotsIndex, $robotsFollow, $canonicalTag);
	 ?>
</head>	

<body>

<?php echo $PagePart->getAfterBody(); ?>

<div style="background-color:#f4f4f4;">
	<div class="content-area">
		<div class="content-area-inner" style="padding-top:40px;">
			
			<div class="actu-eclipse-side-menu">
				
				<?php echo $PagePart->getSideMenu(); ?>

			</div>

			<div class="dev-main eclipse-main">
				<div class="eclipse-main-container">	
					<div class="eclipse-home-banner">
						<img src = "<?php $basePath ?>img/logo/birt-purple-logo.png" style="margin-left: 45px;margin-top: 50px;margin-right:50px;float:left;" />
						<div class="eclipse-home-banner-inner" style="padding-top:110px;">
							<div style="font-size:60px;font-weight:100;color:#42187e;margin-bottom:30px;">BIRT</div>
							<div style="font-size: 18px;font-weight: 600;color: #777777;margin-bottom:30px;margin-right:20px;">An <span class="eclipse-txt-purple">open source</span> technology platform used to create <span class="eclipse-txt-bloodorange">data visualizations</span> and reports that can be embedded into rich client and <span class="eclipse-txt-lightgreen">web applications</span>.</div>
							<div style="margin-left: 249px;margin-right: 20px;"><table><tbody><tr><td><a href="http://download.eclipse.org/birt/downloads" class="square-button button-color-yellow" style="padding:10 30px; margin-right:30px;">Download BIRT 4.4.0</a></td>
							<td><a href="/birt/about/" class="square-button button-color-yellow" style="padding:10 30px;">Learn More</a></td></tr></tbody></table></div>
						</div>
					</div>
				</div>
			</div>

			<div class="dev-main eclipse-main bord-yellow">
				<div class="eclipse-main-container">	
					<h1 class="eclipse-title-main">BIRT Buzz</h1>
					
					<h2 class="topic-section-header padding-top-small">Upcoming Events</h2>
					<p>
						<ul class="eclispe-list-default">
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/212-chicago-coders-conference/">Chicago Coders Conference</a><br />Chicago, IL<br />August 1<br /> 8:30 AM - 6:00 PM CT</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/209-gartner-catalyst-conference/">Gartner Catalyst Conference</a><br />San Diego, CA<br />August 11-14</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/221-marketing-analytics-for-todays-marketers/">Marketing Analytics for Today's Marketers</a><br />Webcast<br />August 19</li>
						</ul>
					</p>
					
					<div class="clearfix"></div>
					<p><br />View Full Calendars: <a href="http://developer.actuate.com/community/forum/index.php?/calendar/" target="_blank">BIRT Developer Center Community Calendar</a> | <a href="http://events.eclipse.org/" target="_blank">Eclipse Calendar</a></p>

					<h2 class="topic-section-header padding-top-small">Recent Blogs</h2>
					<p><a target="_blank" href="http://blogs.actuate.com/introducing-birt-ihub-f-type-running-the-vmware-image/">Introducing BIRT iHub F-Type: Running the VMware Image</a><br />
					Last week, Actuate released a new, free BIRT server called the BIRT iHub F-Type. It incorporates all the functionality of BIRT iHub and is limited only by the capacity of output it can deliver on a daily basis. It is ideal for departmental and smaller scale applications. When BIRT F-Type reaches its maximum output capacity, additional capacity can be purchased on a subscription based mod...<a href="http://blogs.actuate.com/introducing-birt-ihub-f-type-running-the-vmware-image/" target="_blank">Read More</a>
					</p>

					<p><a target="_blank" href="http://blogs.actuate.com/employment-opportunity-project-lead-eclipse-birt/">Employment Opportunity: Project Lead � Eclipse BIRT</a><br />
					How would you like to have a leadership role in the development of an open source project that has over 3.5 million developers using it in their applications worldwide? If you would and you live in or would relocate to the Bay Area, you're in luck. Actuate, the founders of the Eclipse BIRT open source project, are looking for an architect and hands-on developer to lead the open sourc...<a href="http://blogs.actuate.com/employment-opportunity-project-lead-eclipse-birt/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://blogs.actuate.com/how-to-charge-credit-cards-from-a-birt-design-and-other-posts-from-this-week/">How to Charge Credit Cards from a BIRT Design, and Other Posts From This Week</a><br />
					Last weekend I had the opportunity to attend a local hackathon put together by hackmidwest. If you're not familiar with hackathons, I encourage you to seek one out. They are a lot of fun. Rules can change from event to event, but typically you have 24 hours to create an application of your choosing, either by yourself or as a team. For my hack, I used BIRT iHub F-Type and Masterc...<a href="http://blogs.actuate.com/how-to-charge-credit-cards-from-a-birt-design-and-other-posts-from-this-week/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://blogs.actuate.com/changing-the-series-type-of-a-specific-chart-series/">Changing the Series Type of a Specific Chart Series</a><br />
					"Can I have two different series types in a single chart in BIRT?" Questions seem to come up on this subject fairly often. The answer: Yes, you can for certain chart types. In the simpler scenario where you define each series individually with the chart builder, it's very straightforward in either open source BIRT or BIRT Designer Pro. Say you have a simple 2-series chart that looks l...<a href="http://blogs.actuate.com/changing-the-series-type-of-a-specific-chart-series/" target="_blank">Read More</a></p>
					
					<p>See More Blogs: <a target="_blank" href="http://blogs.actuate.com/">BIRT Developer Center Community Blogs</a> | <a href="http://birtworld.blogspot.com/" target="_blank">BIRT World</a> | <a href="http://www.planeteclipse.org/planet/" target="_blank">Planet Eclipse Blog</a></p>

				</div>
			</div>


		</div>
	</div>

	
	<footer>
		<?php echo $PagePart->getFooter(); ?>
	</footer>
</div>
</body>
</html>