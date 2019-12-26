<?php
/*
 * Copyright belongs to: Oxygen-Software since <28/09/2019>
 *
 * This Program is Licensed under the OSPL(Oxygen-Software-Public-License) - V1.0.0(19/09/2019).
 * To learn more about the License, please visit: https://oxygen-software.github.io/license.html
*/
/*
 * WebBox
 * @version 0.1.1
 * @author Dan-Kode(Oxygen-Software)
*/
?>
<!DOCTYPE html>
<html>
     <head>
          <title>About</title>
          <meta charset="utf-8">
          <!--Import all other Scripts here(That includes CSS and JS Files)-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/about.css"> <!--Import the specific CSS File for this Page-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/site.css"> <!--Import the Site-Wide CSS File-->
     </head>
     <body>
          <h1 style="text-align: center;">About</h1>
          <!--The Navigation-Menu for the Software. This Menu lets the User navigate through different Pages by clicking a Button.

          This Menu contains Buttons that link to:
          - Homepage
          - Software-Directory
          - Login
          - Register-->
          <main>
               <div class="Navigation-Menu">
                    <!--Welcome the User-->
                    <p style="font-size: 14px;">
                         Welcome to WebBox, User! Please take your time to look around, settle in and see what the Software-Directory has to offer.
                    </p>
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
          <!--This is the About-Page. Here, the Webmaster(Site Owner), can include their own Information about this Website running WebBox.
          The Page also includes Details about the WebBox Project, what Version is in use etc.

          NOTE TO WEBSITE OWNERS RUNNING WEBBOX: PLEASE DO NOT REMOVE ANY OF THE INFORMATION THAT DISPLAYS THE CURRENT VERSION OF WEBBOX.-->
          <main>
               <div class="About-Section">
                    <h3>About This Website</h3>
                    <!--Webmasters, put your Description here!-->

                    <!--Webmasters, these are Details about your Version of the WebBox Software.

                    DO NOT REMOVE ANY OF THIS AS IT CAN COME IN HANDY WHEN GETTING SUPPORT FOR AN ISSUE.-->
                    <h3>WebBox Software - About</h3>
                    <p>Software: <i>WebBox</i></p>
                    <p>Version: <i>0.1.1(17/10/2019)</i></p>
                    <p>License: <i>OSPL 1.0.0(<a href="https://oxygen-software.github.io/license.html">License Info</a>)</i></p>
                    <p><b>Repository: <a href="https://www.github.com/Oxygen-Software/WebBox">Repository Link</a></b></p>
               </div>
          </main>
     </body>
</html>
