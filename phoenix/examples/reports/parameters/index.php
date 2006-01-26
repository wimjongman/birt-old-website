<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../../../birt.inc";
	require "../reports.inc";
	$currentPage			= "Parameters";
	$linkToTop				= linkToTop();
	$reportLinksSideItem  	= getReportsLinksSideItem($currentPage);



	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#demonstration">Demonstration</a></li>
				<li><a href="#reports">Reports</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This example demonstrates how to filter the data in a BIRT report
			at runtime by using report and data set parameters.
			Report parameters allow end-users to interactively filter the report�s data to gain deeper insights.
			The user is guided through the steps to add a dataset parameter and a report parameter.
		</p>
		<p>
			The report list quantities of stock. The list of returned products
			is culled, by adding a where clause to the select statement and using a
			data set parameter. The data set parameter
			is then linked with a report parameter.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Parameters/Parameters.html" target="_blank" class="top">Parameterized Report Flash Example</a> �

				This example demonstrates how to filter the data in a BIRT report
				at runtime by using report and data set parameters.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Parameters/before.html" target="_blank" class="top">Products List Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/Parameters/reports/ParametersExampleBefore.rptdesign" target="_blank">rptdesign</a>) �

				Presents a simple products list report.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Parameters/after.html" target="_blank" class="top">Products List After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/Parameters/reports/ParametersExampleAfter.rptdesign" target="_blank">rptdesign</a>) �

				Presents a products list culled by a report parameter to show low stock.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />
	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>