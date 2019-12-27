"""
     WebWareBox
     Version: 0.1.0(Day/Month/Year) - NOTE: REPLACE THAT DATE UPON THE OFFICIAL RELEASE OF THE VERSION
     Developer: williamdev(William Boycher) and others on GitHub
     Source-Code: https://www.github.com/williamdev/WebWareBox
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

# Home() should only trigger upon entering the Homepage('https://URL.net/' in this case)
@Application.route('/')
def Home(name=None):
     return render_template("index.html", name=name)
    
# Source() should only trigger upon entering the Source-Code Page('https://URL.net/Source' in this case)
@Application.route('/Source')
def Source(name=None):
     return render_template("source.html", name=name)
