<?php 

	require('./config.php');
	require('./includes/header.php'); 

?>

			<main role="main" class="clear main-wrapper">
				<article class="full-width">
					<header>
						<h1>About us</h1>
					</header>
					<p>This website was created by Micaela Pierce and Miguel Amezola as a project for a course at Pacific Lutheran University (Tacoma, WA).</p>
					<section>
						<header>
							<h2>Project 1</h2>
						</header>
						<p>For this project, we created a multi-page website for rescuing two types of pets.</p>
						<p>As this was an open-ended assignment, we added what we like as long as we meet the following requirements:</p>
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
					</section>

					<section>
						<header>
							<h2>Project 2</h2>
						</header>

						<p>For this project, we added the following to the webpages that were created for Project 1 -</p>
						<ul>
							<li>a minimum of three forms from the list below -
								<ul>
									<li>a form that allows users to donate money for sponsering an animal. Input values could include:
										<ul>
											<li>current date</li>
											<li>amount (different amounts for different animals)</li>
											<li>payment period (weekly, monthly, quarterly etc.)</li>
											<li>month to start donation (should be stored as a date)</li>
											<li>contact information (name, email, address, phone)</li>
											<li>whether or not this donation is a gift</li>
										</ul>
									</li>
									<li>a form that allows users to volunteer at an animal sanctuary or food bank location. Input values could include:
										<ul>
											<li>current date</li>
											<li>contact information (name, email, address, phone)</li>
											<li>date of birth and gender</li>
											<li>emergency contact information (name, email, address, phone) and relationship to you</li>
											<li>availability - days (Sunday through Saturday), start and end times (7am to midnight)</li>
											<li>max hours per month or week willing to volunteer</li>
											<li>skills and experience</li>
											<li>assignment preferences</li>
											<li>Volunteer Application Agreement</li>
										</ul>
									</li>
									<li>a form that allows users to apply for fostering of an animal. Input values could include:
										<ul>
											<li>current date</li>
											<li>contact information (name, email, address, phone)</li>
											<li>animal species interested in fostering (can be more than one)</li>
											<li>interested in fostering a special needs, senior or farm animal?</li>
											<li>residence type (house, condo, mobile home, apartment, townhouse, other)</li>
											<li>name of residence complex (if applicable)</li>
											<li>rent or own residence?</li>
											<li>length of time at that residence</li>
											<li>space available for animal in residence (yard size, outdoor shelter, indoor space etc)</li>
											<li>area explaining why user wants to foster these animals</li>
											<li>name and age of all human household members</li>
											<li>species, age of all animals in household PLUS whether they are spayed, neutered and up-to-date on vaccines</li>
										</ul>
									</li>
									<li>a form that allows users to apply for adoption of an animal. Input values could include:
										<ul>
											<li>current date</li>
											<li>contact information (name, email, address, phone)</li>
											<li>name of animal and species interested in adopting (up to three animals)</li>
											<li>residence type (house, condo, mobile home, apartment, townhouse, other)</li>
											<li>name of residence complex (if applicable)</li>
											<li>rent or own residence?</li>
											<li>length of time at that residence</li>
											<li>space available for animal in residence (yard size, outdoor shelter, indoor space etc)</li>
											<li>area explaining whether this is a lifetime commitment and if so, why</li>
											<li>area explaining what could happen in life that would make one give up an animal</li>
											<li>name and age of all human household members</li>
											<li>species, age of all animals in household PLUS whether they are spayed, neutered and up-to-date on vaccines</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>forms should include at least two of each input type with appropriate attributes.
								<ul>
									<li>text</li>
									<li>date</li>
									<li>email or URL</li>
									<li>number</li>
									<li>checkbox or radio button</li>
									<li>range</li>
									<li>textarea</li>
									<li>hidden - you could use this to save the current date from the server...</li>
									<li>select or datalist</li>
									<li>reset button</li>
									<li>submit button</li>
								</ul>
							</li>
							<li>somewhere in the PHP code, two built-in functions that haven't discussed in class are utilized. Those two additional functions are identified in the comments at the top of the code.</li>
							<li>each form should validate user-entered data using HTML where appropriate</li>
							<li>each form should call appropriate PHP scripts to:
								<ul>
									<li>clean and validate user-entered data</li>
									<li>display user data in input boxes and error messages IF there were any errors caught during validation</li>
									<li>write cleaned and validated data in JSON format to a .json file (see note below)</li>
									<li>redirect user to a blank form once data has been written file</li>
								</ul>
							</li>
							<li>NOTE: when writing cleaned and validated data to a .json file:
								<ul>
									<li>First - the permissions to the .json file are set to world write-only (no read or execute access) i.e. 752</li>
									<li>Second - MongoDB requires that JSON records be stored one per line. For example:
									<br><br>

									{ "name" : "James", "email" : "james@gmail.com", "date" : "2016-11-11" }<br>
									{ "name" : "Luisa", "email" : "luisa@gmail.com", "date" : "2016-11-11" }<br>
									{ "name" : "Ramon", "email" : "ramon@gmail.com", "date" : "2016-11-11" }<br>
									{ "name" : "Harmony", "email" : "harmony@gmail.com", "date" : "2016-11-11" }<br>

									<br>

									To accomplish this, the JSON_PRETTY_PRINT parameter is left off i.e. $json_data = json_encode($myarray);
									</li>
									<li>Third - "\n" is added to the $json_data variable in order to get the next record to append on a new line i.e. $json_data = json_encode($myarray) . "\n";</li>
								</ul>
							</li>
						</ul>
					</section>
				</article>
			</main>
<?php 

	require('./includes/footer.php'); 

?>
