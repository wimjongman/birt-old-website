<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Tutorial";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../../birt.inc";
	require "basic.inc";
	$stepNumber				= 8;
	$linkToTop				= linkToTop();
	$tutorialLinksSideItem  = getTutorialLinksSideItem($stepNumber);
	$stepNavigator			= getTutorialStepNavigator($stepNumber);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#resizing">Resizing Table Columns</a></li>
				<li><a href="#background_color">Setting the Background Color</a></li>
				<li><a href="#font">Setting the Font</a></li>
				<li><a href="#formatting">Formatting Data</a></li>
				<li><a href="#border">Setting a Border</a></li>
				<li><a href="#properties">More on Properties</a></li>
			</ul>
		</blockquote>

		<h2><a name="resizing"></a>Resizing Table Columns</h2>
		<p>
			Let's adjust the size of the table columns. Tables & columns can be sized using absolute sizes (inches, centimeters), or relative sizes (percentage of the width of the page.) Here, we'll adjust the column widths by directly changing the size.
		</p>
		<ul class="midlist">
			<li>
				Click the Layout tab to switch back to the report layout.
			</li>
			<li>
				Display, then click on the table tab to display the "scaffolding."
			</li>
			<li>
				Find the black line that separates the "City" and "State" column headings.
			</li>
			<li>
				With the cursor over this line, hold down the left mouse button and resize
				the column to be about big enough to hold the two-letter state code and label.
			</li>
			<li>
				Repeat the above to resize the city column.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="background_color"></a>Setting the Background Color</h2>
		<p>
			Let's dress up the state heading. Let's give it a color band by setting the row's background color.
		</p>
		<ul class="midlist">
			<li>
				Select the state group header row (first group header) by clicking on the shaded box to the left of the row. (Remember to display, then click on the table tab to display the scaffolding.)
			</li>
			<li>
				Locate or open the Property Editor.
			</li>
			<li>
				A list of property types appears at the left of the view. Click on the General group.
			</li>
			<li>
				Find the Background color field. Click on the empty gray button to display the color chooser.
			</li>
			<li>
				Pick the blue color third from the right in the top row. This is a standard color, but is a bit too dark for our needs.
			</li>
			<li>
				Click on the "Define Custom Colors" button.
			</li>
			<li>
				Take the right-most slider (saturation) and move it up to produce a very light blue.
			</li>
			<li>
				Click OK.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="font"></a>Setting the Font</h2>
		<p>
			Now, let's give the state a bold font. We'll also dress up the city group heading by giving it a dark blue, bold, larger font.
		</p>
		<ul class="midlist">
			<li>
				Select the state data item.
			</li><li>
				Switch to the General property group in the Property Editor.
			</li>
			<li>
				Find the Font size field. Change the size to "Large".
			</li>
			<li>
				Click the [B] (bold) button to make the font bold.
			</li>
			<li>
				Select the city data item.
			</li>
			<li>
				Again, switch to the General property group.
			</li>
			<li>
				Set the font size to Large.
			</li>
			<li>
				Click on the Font Color button.
			</li>
			<li>
				The color chooser again opens. Again choose the blue that is third from the right in the top row.
			</li>
			<li>
				Click OK.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="formatting"></a>Formatting Data</h2>
		<p>
			We want to format the phone numbers so that they have correct North American format: (123) 555-1212. We do this by applying a string format to the phone number field. Formats are also available for dates and numbers.
		</p>
		<ul class="midlist">
			<li>
				Select the phone number item.
			</li>
			<li>
				Switch to the Format String page in the Property Editor.
			</li>
			<li>
				Choose Custom for Format String as.
			</li>
			<li>
				Choose Phone Number from the list.
			</li>
			<li>
				In the Format Code field, add a space after the closing parenthesis to produce the following:
			</li>
		</ul>
		<blockquote>
			(@@@) @@@-@@@@
		</blockquote>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="border"></a>Setting a Border</h2>
		<p>
			Next, let's put a "drop shadow" border around our table.
		</p>
		<ul class="midlist">
			<li>
				Click on the table tab.
			</li>
			<li>
				Select the Borders page in the Property Editor.
			</li>
			<li>
				Set the Style field to a solid line. (This is the default.)
			</li>
			<li>
				Set the Color field to a black. (Use the color name pull-down, or choose the bottom left color in the color chooser.)&nbsp; (This is the default.)
			</li>
			<li>
				Set the Width property to the thinnest line.&nbsp; (This is the default.)
			</li>
			<li>
				Click the top and left border buttons.
			</li>
			<li>
				Set the Width property to the second thinnest line.
			</li>
			<li>
				Click the bottom and right border buttons.
			</li>
		</ul>
		<div class="homeitem3col">
			<h3>Release 1.0.1 Note</h3>
			<p>
				Once you select some other item, the Property Editor will no longer display your border settings. The properties are still set, but the UI does not display them. Use the Properties view to see them. To open the Properties view, use the main menu and choose Window&larr;Show View&larr;Properties.
			</p>
		</div>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="properties"></a>More on Properties</h2>
		<p>
			BIRT provide a wide variety of properties for formatting report items. The properties
			are based on the
			<a href="http://www.w3.org/TR/CSS21/">W3C CSS</a>
			(Cascading Style Sheet) standard. If you've ever used CSS
			to format HTML, you are well on your way to understanding formatting in BIRT.

		</p>
		<p>
			BIRT adds additional, report-specific properties such as the date, number and string
			formatting that we just set. However, even these act just like CSS properties.
		</p>
		$linkToTop
		<hr class="clearer" />

		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>