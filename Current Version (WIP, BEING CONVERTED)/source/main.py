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

from flask import Flask, render_template, url_for, request, redirect, flash, make_response, abort, g
from flask_sqlalchemy import SQLAlchemy 
from datetime import datetime
app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///userpass.db'
db = SQLAlchemy(app)
from werkzeug.security import check_password_hash, generate_password_hash
app.config['SECRET_KEY'] = 'b\xab\x86\x840V\n\xa7\xf2\x1d\xef\x81t\x86\xba\xc52^jdB:3\xbe\x07'
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
class AccountDB(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(120), unique=True, nullable=False)
    generated_password_hash = db.Column(db.String(80), unique=True, nullable=False)

    def is_authenticated(self):
        return True
 
    def is_active(self):
        return True
 
    def is_anonymous(self):
        return False
 
    def get_id(self):
        return str(self.id)

    def __repr__(self):
        return '<AccountDB %r>' % self.username


    def __init__(self, username, generated_password_hash, is_author=False):
 
        self.username = username

        self.generated_password_hash = generated_password_hash


@app.route('/Source')
def Source(name=None):
    return render_template("source.html", name=name)

@app.route('/Software')
def Software(name=None):
    return render_template("software.html", name=name)

@app.route('/Upload')
def Upload(name=None):
    return render_template("upload.html", name=name)

@app.route('/Login')
def Login(name=None):
    
    return render_template("login.html", name=name)

@app.route('/Register')
def Register(name=None):
    return render_template("register.html", name=name)


@app.route('/', methods=['GET', 'POST'])
def Home(name=None):
    return render_template("index.html", name=name)

@app.route('/user_pass_register', methods=['GET', 'POST'])
def user_pass_register():
    if request.method == 'POST':
        password_entry = request.form['passwordform']
        username_entry = request.form['usernameform']
        hash_pwd = generate_password_hash(password_entry)
        new = AccountDB(username_entry, hash_pwd)
        db.session.add(new)
        db.session.commit()
        if(new.id > 0):
            return redirect('/Login')
        else:
            return "An Issue Occured"

@app.route('/user_pass_login', methods=['GET', 'POST'])
def user_pass_login():
    error = None
    if request.method == 'POST':
        password_check_entry = request.form['passwordform']
        username_check_entry = request.form['usernameform']
        registered_user = AccountDB.query.filter_by(username=username_check_entry).first()
        hashcheck = check_password_hash(registered_user.generated_password_hash, password_check_entry)
        if (registered_user == None):
            error = "Error, username or password is incorrect"
            return render_template('login.html', error=error)
        elif (hashcheck == False):
            error = "Error, username or password is incorrect"
            return render_template('login.html', error=error)
        elif (hashcheck == True):
                flash('Logged in successfully')
                return redirect('/')
        
if __name__ == "__main__":
    app.run(debug=True)

