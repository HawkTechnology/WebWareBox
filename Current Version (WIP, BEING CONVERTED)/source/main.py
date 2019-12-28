"""
     WebWareBox
     Version: R 0001(Day/Month/Year) - NOTE: REPLACE THAT DATE UPON THE OFFICIAL RELEASE OF THE VERSION
     Developer: williamdev(William Boycher) and others on GitHub
     Source-Code: https://www.github.com/HawkTechnology/WebWareBox
"""

"""
     File Info
     ---------
     Name: main.py
     Purpose: Serves as the Main File of the Software. It controls which Pages the User goes to and
     other bits of core Functionality.
     
     Note: Add your Name to this bit if you have contributed to this File.
     People who have worked on this File: Daniel Fawkes(Original Developer of WebWareBox)
"""

"""
     Note for Contributors: Since this is a Flask Project, please look at the Flask Documentation if
     you need help with anything. Find the Documentation for it here: https://flask.palletsprojects.com/en/1.1.x/
"""

from flask import Flask # Import the Flask Framework
from flask import render_template # This Module gives us the ability to render HTML.

Application = Flask(__name__)

"""
     This part of main.py revolves around Page-Redirection.
     
     Depending on what the Name of the Function is and what the URL is that it leads to, it's quite obvious on
     what each one is supposed to do.
     
     First, we declare where it will head. So the Homepage is at 'https://URL.net/' and the Software-Page is at
     'https://URL.net/Software'. Next, we return a function to render one of the HTML Pages in /templates/. But
     to render it, we must tell the render_template() function, what HTML File it is that we want it to render.
"""

"""
     Note by Daniel Fawkes(Fawkes-c) - Saturday, 28th December 2019
     --------------------------------------------------------------
     Please note that both the Homepage and the Source-Code Page are incomplete.
     Second, please also note that the Software, Upload, Login and Registration Pages haven't even been created
     yet. Issues have been filed for them to start development on them. If you can and have the time, please start
     development on these pages.

     Thanks.
"""
@Application.route('/')
def Home(name=None):
    return render_template("index.html", name=name)
    
@Application.route('/Source')
def Source(name=None):
    return render_template("source.html", name=name)

@Application.route('/Software')
def Software(name=None):
    return render_template("software.html", name=name)

@Application.route('/Upload')
def Upload(name=None):
    return render_template("upload.html", name=name)

@Application.route('/Login')
def Login(name=None):
    return render_template("login.html", name=name)

@Application.route('/Register')
def Register(name=None):
    return render_template("register.html", name=name)
