// create form variable.
let form = document.getElementById("regForm");
// Call validate function when form is submitted.
form.onsubmit = validate;

function validate(){
    clearErrors();
    let isValid = true;
    // First Name validation
    let fname = document.getElementById("fname").value;
    if(fname == ""){
        let errName = document.getElementById("errFname");
        errName.classList.remove("d-none");
        isValid = false;
    }

    // Last Name validation
    let lname = document.getElementById("lname").value;
    if(fname == ""){
        let errName = document.getElementById("errLname");
        errName.classList.remove("d-none");
        isValid = false;
    }

    // Email Validation
    let email = document.getElementById("email").value;
    if(email == ""){
        let errEmail = document.getElementById("err-email");
        errEmail.classList.remove("d-none");
        isValid = false;
    }
    if(!email.includes("@") && !email.includes(".")){
        let errEmail = document.getElementById("err-email");
        errEmail.classList.remove("d-none");
        errEmail.innerHTML ="Must be @email.com format";
        isValid = false;
    }

    // form is valid to submit
    return isValid;
}

/*
* Make all error messages invisible
* */
function clearErrors(){
    let errors = document.getElementsByClassName("text-danger"); // nodelist of error messages
    for(let i = 0; i<errors.length; i++){
        errors[i].classList.add("d-none");
    }
}