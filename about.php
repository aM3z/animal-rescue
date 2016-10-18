<?php 

	require('./config.php');
	require('./includes/header.php'); 

?>

			<main role="main" class="clear main-wrapper">
				<article class="full-width">
					<header>
						<h1>About us</h1>
					</header>
					<p>This website was created by Micaela Pierce and Miguel Amezola as a project for a course at Pacific Lutheran University (Tacoma, WA). For this project, we created a multi-page website for rescuing two types of pets.</p>
					<p>As this is an open-ended assignment, we added what we like as long as we meet the following requirements:</p>
					<ul>
						<li>all pages were developed using a text editor, HTML5, and CSS3. PHP was used to import common code used in multiple files. Please do not use Javascript or other scripting languages in this project.</li>
						<li>a minimum of ten pages including:<li>
						<ul>
							<li>a homepage containing a welcome message and general information about the site</li>
							<li>at least two adoption pages listing animals available for adoption (one page for each type of animal). Each adoption page should contain a minimum of three animals. For each animal, provide an image, summary information and links to pages containing more details.</li>
							<li>a details page for each individual animal (include images of the animal)</li>
							<li>a citations page for sources, images, videos etc. used on the site</li>
						</ul>
						<li>each page includes a common header, footer and navigation menu. Specifically:</li>
						<ul>
							<li>Header - should have a graphical logo on the right or left side of the header. There should also be a title next to the logo with a larger font than the content text and a contrasting font color to the background.</li>
							<li>Navigation Menu - should have a mix of buttons and drop-down/pop-up menues that allow the user to easily jump between pages.</li>
							<li>Footer - should contain you and your partner's name, the semester and year, and information that this is a project for PLU's CSCI387 course and not a real animal rescue site.</li>
						</ul>
						<li>the directory structure for this  website contains -</li>
						<ul>
							<li>a home directory for the primary files</li>
							<li>appropriately named sub-directories for CSS and image files</li>
							<li>additional sub-directories containing the detail pages for each type of animal</li>
							<li>files including commonly used code are stored in a sub-directory called "includes"</li>
						</ul>
						<li>.html code:</li>
						<ul>
							<li>is organized so that it follows the standard document structure (i.e. contains a document prolog, html, header and body sections)</li>
							<li>has appropriate blank lines and indentation so that it is easy for someone to read and follow.</li>
							<li>includes comments in the head section that contain our names, the project number, course and date.</li>
							<li>calls both normalize.css and the .css file(s) for formating the website.</li>
							<li>uses semantic elements to organize and describe page content including header, nav, main, footer, aside, article, figure and figcaption html tags.</li>
							<li>uses semantic elements and divs as containers/wrappers for the page layout. No tables or frames are used for page layout.</li>
							<li>has pages that can be validated using W3C's Markup Validation Service at https://validator.w3.org</li>
						</ul>
						<li>.css file:</li>
						<ul>
							<li> has style rules and classes that format:</li>
							<ul>
								<li>a header section at the top of each webpage</li>
								<li>a navigation menu with buttons and drop-down/pop-up menus that allows users to jump to different pages in the site</li>
								<li>one or more sidebars containing commentary, alternate choices, images, adverts etc.</li>
								<li>a content area containing the primary information on the page</li>
								<li>images with appropriate captions</li>
								<li>a footer at the bottom of each webpage</li>
							</ul>
							<li>additionally:</li>
							<ul>
								<li>comments were added at the top of your .css file that include our names, the project number, course and date.</li>
								<li>appropriate padding, margins, background colors and borders were added to visually separate each area on the webpages</li>
								<li>any text overflow from one block element to another was controlled</li>
								<li>any page layout issues arising from using "floats" were controlled</li>
								<li>our stylesheet can be validated using W3C's CSS Validation Service at https://jigsaw.w3.org/css-validator</li>
							</ul>
						</ul>
				</article>
			</main>
<?php 

	require('./includes/footer.php'); 

?>
