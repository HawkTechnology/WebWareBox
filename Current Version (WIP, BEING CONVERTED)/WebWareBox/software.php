<?php
/*
 * Copyright belongs to: Oxygen-Software since <28/09/2019>
 *
 * This Program is Licensed under the OSPL(Oxygen-Software-Public-License) - V1.0.0(19/09/2019).
 * To learn more about the License, please visit: https://oxygen-software.github.io/license.html
*/
/*
 * WebBox
 * @version 0.1.0
 * @author Dan-Kode(Oxygen-Software)
*/
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Software</title>
          <meta charset="utf-8">
          <!--Import all other Scripts here(That includes CSS and JS Files)-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/software.css"> <!--Import the specific CSS File for this Page-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/site.css"> <!--Import the Site-Wide CSS File-->
     </head>
     <body>
          <h1 style="text-align: center;">Software-Directory</h1>
          <!--The Navigation-Menu for the Software. This Menu lets the User navigate through different Pages by clicking a Button.

          This Menu contains Buttons that link to:
          - Homepage
          - Software-Directory
          - Login
          - Register-->
          <main>
               <div class="Navigation-Menu">
                    <br>
                    <img src="assets/theme/box_icons_v1/house.png" width="25" style="vertical-align: sub;"><a href="index.php"><button>Home</button></a>
                    <img src="assets/theme/box_icons_v1/software.png" width="25" style="vertical-align: sub;"><a href="software.php"><button>Software</button></a>
                    <label style="font-size: 20px;"> | </label>
                    <img src="assets/theme/box_icons_v1/key.png" width="25" style="vertical-align: sub;"><button>Login</button>
                    <img src="assets/theme/box_icons_v1/register.png" width="25" style="vertical-align: sub;"><button>Register</button>
                    <br>
                    <br>
               </div>
          </main>
          <br>
          <!--The Recently-Added Panel.

          This Panel holds all of the Software that was recently added to the Site. At max, 15 Programs will be displayed with buttons that allow the User to explore
          more Programs.

          Every Program is listed using <table>.-->
          <main>
               <div class="Recently-Added">
                    <!--Every Program will be in this Table, here.-->
                    <table>
                         <!--Program Details(Name, Developer, Released and License)-->
                         <tr>
                              <th>Program Name</th>
                              <th>Developer</th>
                              <th>Released</th>
                              <th>License</th>
                         </tr>
                         <!--Note to Contributors: This is just an example. It won't be available in the first major Version.-->
                         <tr>
                              <td>Program1</td>
                              <td>User1</td>
                              <td>5th November 2019</td>
                              <td>GPLv3</td>
                         </tr>
			 <tr>
			      <td>Program2</td>
			      <td>User2</td>
			      <td>5th November 2019</td>
			      <td>MIT License</td>
			 </tr>
			 <tr>
			     <td>Program3</td>
			     <td>User3</td>
			     <td>7th November 2019</td>
			     <td>OSPL 1.0.0</td>
			 </tr>
                    </table>
               </div>
	       <br>
	       <br>
	       <div class="Recommended-Software">
	       	    <!--This Table will hold any Recommended-Software for the User.

		    Note: As to how the Software will be Recommended, is unknown. It will involve Algorithms though and trying to Program an Algorithm.-->
		    <table>
			 <!--Program Details(Name, Developer, Released, Version, License)-->
			 <tr>
			      <th>Program Name</th>
			      <th>Developer</th>
			      <th>Released</th>
			      <th>Version</th>
			      <th>License</th>
			 </tr>
			 <!--Note to Contributors: This is just an example. It won't be displayed in the first major Version.-->
		         <tr>
			      <td>Program1</td>
			      <td>User1</td>
			      <td>5th November 2019</td>
			      <td>1.0.4</td>
			      <td>GPLv3</td>
		         </tr>
			  <tr>
			      <td>Program2</td>
			      <td>User2</td>
			      <td>5th November 2019</td>
			      <td>1.0.1</td>
			      <td>MIT License</td>
			 </tr>
   			 <tr>
                             <td>Program3</td>
                             <td>User3</td>
                             <td>7th November 2019</td>
			     <td>Version 1.1.2</td>
                             <td>OSPL 1.0.0</td>
                         </tr>
	            </table>
	       </div>
          </main>
	  <!--The Category-List

	  The Category-List, of course, lists all of the Software-Categories available. It is positioned on the left-side of the Software-Page.

	  It will look something like this:

	  Categories
	  ----------
	  - Utilities
	  - Office and Work
	  - Accessories-->
	  <main>
	       <div class="Category-List">
	            <h3 style="text-align: center;">Categories</h3>
		    <hr>
		    <ul>
		         <li><a href="">Utilties</a></li>
			 <li><a href="">Office & Work</a></li>
		 	 <li><a href="">Accessories</a></li>
			 <li><a href="">Development Tools</a></li>
			 <li><a href="">Graphics</a></li>
		    </ul>
	       </div>
	  </main>
          <!--The Footer. This Footer contains Information about:
          - The Software
          - The Software Version
          - Link to the Software's Website
          - The Software's License

          NOTE TO USERS OF THE SOFTWARE: PLEASE DO NOT REMOVE ANYTHING FROM THIS FOOTER. DOING SO MAY CAUSE ISSUES WITH SUPPORT(E.G. REMOVING THE VERSION-NUMBER CAN STOP
          PEOPLE FROM KNOWING WHICH VERSION YOU'RE USING AND STOPS THEM FROM BEING ABLE TO ENCOUNTER YOUR ERROR ON THAT VERSION).-->
          <main>
               <div class="Footer">
                    <footer>
                         <img src="assets/theme/box_icons_v1/info.png" width="25" style="vertical-align: sub;">
                         <h5 style="display: inline-block;">This Website runs on WebBox | WebBox Version: 0.1.1(17/10/2019)</h5>
                         <h5>
                              <a href="https://webbox.github.io">Website</a> |
                              WebBox is Licensed under the OSPL. Learn more here: <a href="https://oxygen-software.github.io/license.html">Oxygen-Software: License</a>
                         </h5>
                    </footer>
               </div>
          </main>
     </body>
</html>
