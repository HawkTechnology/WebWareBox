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
          <title>WebBox</title>
          <meta charset="utf-8">
          <!--Import all other Scripts here(That includes CSS and JS Files)-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/index.css"> <!--Import the specific CSS File for this Page-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/site.css"> <!--Import the Site-Wide CSS File-->
     </head>
     <body>
          <h1 style="text-align: center;">WebBox</h1>
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
          <!--The 'Other' Panel. This Panel contains Buttons that link to other Pages.

          These Pages are:
          - News-Page
          - About-Page
          - Contact-Page

          THIS PANEL WILL NOT DISPLAY ON ANY OTHER PAGE.-->
          <main>
               <div class="Other-Panel">
                    <h3>Other</h3>
                    <hr>
                    <!--The Nav-Menu for the Other-Panel.-->
                    <img src="assets/theme/box_icons_v1/rss.png" width="25" style="vertical-align: sub;"><a href="news.php"><button>News</button></a><br><br>
                    <img src="assets/theme/box_icons_v1/info.png" width="25" style="vertical-align: sub;"><a href="about.php"><button>About</button></a><br><br>
                    <img src="assets/theme/box_icons_v1/mail_small.png" width="25" style="vertical-align: sub;"><a href="contact.php"><button>Contact Owner</button></a><br><br>
               </div>
          </main>
          <br>
          <!--The Category-Panel for the Homepage. This is a Homepage-Panel that displays a bunch of different Software-Categories.

          While this Panel is displayed on the Homepage, it is also seen on the Software-Page(At the very bottom of the Software-Page).-->
          <main>
               <div class="Category-Panel_Home">
                    <h3>Categories</h3>
                    <hr>
                    <!--List of Software-Categories-->
                    <ul id="Category-List_Home_left">
                         <li><a href="">Utility</a></li>
                         <li><a href="">Graphics</a></li>
                         <li><a href="">Office & Workplace Tools</a></li>
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
