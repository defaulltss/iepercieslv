from flask import Flask, render_template, request, json, jsonify, redirect, session, url_for
app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/index')
def index():
    return render_template('index.html')

@app.route('/about')
def about():
    return render_template('about.html')

@app.route('/statistics')
def statistics():
    return render_template('statistics.html')

@app.route('/profile')
def profile():
    return render_template('profile.html')

@app.route('/platform')
def platform():
    return render_template('userplatform.html')

@app.route('/register')
def register():
    return render_template('register.html')

@app.route('/login')
def login():
    return render_template('login.html')

app.run(host="127.0.0.1", port=8080, debug=True)