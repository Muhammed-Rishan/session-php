function validateForm() {
    var fname = document.getElementById("fname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var fnameError = document.getElementById("fnameError");
    var usernameError = document.getElementById("usernameError");
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");

    var isValid = true;

    if (fname === "") {
        fnameError.innerHTML = "Please enter your name.";
        isValid = false;
    } else if (!/^[a-zA-Z ]+$/.test(fname)) {
        fnameError.innerHTML = "Name can only contain alphabets and spaces.";
        isValid = false;
    } else {
        fnameError.innerHTML = "";
    }

    if (username === "") {
        usernameError.innerHTML = "Please enter a username.";
        isValid = false;
    } else if (!/^[a-zA-Z0-9_]+$/.test(username)) {
        usernameError.innerHTML = "Username can only contain alphanumeric characters and underscores.";
        isValid = false;
    } else {
        usernameError.innerHTML = "";
    }

    if (email === "") {
        emailError.innerHTML = "Please enter an email address.";
        isValid = false;
    } else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
        emailError.innerHTML = "Please enter a valid email address.";
        isValid = false;
    } else {
        emailError.innerHTML = "";
    }

    if (password === "") {
        passwordError.innerHTML = "Please enter a password.";
        isValid = false;
    } else if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/.test(password)) {
        passwordError.innerHTML = "Password must contain  at least 6 characters long.";
        isValid = false;
    } else {
        passwordError.innerHTML = "";
    }

    return isValid;
}
