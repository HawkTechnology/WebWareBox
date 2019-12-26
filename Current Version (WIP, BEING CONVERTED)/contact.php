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
          <link rel="stylesheet" type="text/css" href="assets/theme/css/contact.css"> <!--Import the specific CSS File for this Page-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/site.css"> <!--Import the Site-Wide CSS File-->
     </head>
     <body>
          <h1 style="text-align: center;">Contact</h1>
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
          <!--Overview of the Contact-Page + the Form for Contacting the Owner-->
          <main>
               <div class="Contact">
                    <p>
                         This is the Contact-Page. Here, you can Contact the Owner about any Questions or Issues you may have.
                         <br><br>
                         Please do not send the Owner anything rude, offensive, inappropriate or stuff that may waste their time.
                    </p>
                    <!--This is the Form in which the User can send their Email to the Owner.

                    NOTE: AS OF NOW, THERE IS CURRENTLY NO FUNCTIONALITY TO THE FORMS.-->
                    <form>
                         <input type="text" name="Subject"><br>
                         <textarea rows="20" cols="80"></textarea><br><br>
                         <input type="submit" value="Send Email">
                    </form>
               </div>
          </main>
     </body>
</html>
