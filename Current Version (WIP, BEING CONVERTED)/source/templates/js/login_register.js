function passto(password,email){
    if(email.includes('@')){

    }
    else{
        email = "";
        alert("Invalid email, try again")
    }
    
    /*
    do something to send the password and email to the server and 

    to not send the email if it doesn't contain @ and to login if email and password are in the database

    it requires us to have the backend programmed so it won't be working til then

    it is used for login and register since both must be done in the backend for security reasons

    login and register both use same js file because they both pass the email and pass to the flask backend, and
    the backend handles the rest

    I am thinking of jQuery ajax as per what I've seen on my google search on how to pass data to Flask. 

    Implement AES256 encryption to and from the backend for the sake of user privacy 
    */
}
