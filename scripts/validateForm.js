/*
    *****ACTION OCCURS BEFORE SUBMIT*****
    * Displays address section if applicant has permanent shelter
    * Hides address section if applicant does not have permanent shelter
    * Shows required file uploads
 */
let hasShelter = document.getElementById("shelter-yes");
let noShelter = document.getElementById("shelter-no");
hasShelter.onclick = checkShelter;
noShelter.onclick = checkShelter;

function checkShelter() {
    let enterAddress = document.getElementById("display-address");

    if (hasShelter.checked) {
        enterAddress.classList.remove("d-none"); // Displays address section if applicant has permanent shelter
    }
    else {
        enterAddress.classList.add("d-none"); // Hides address section if applicant does not have permanent shelter
    }
}
showFile(); // Shows required file uploads

/*
    *****SUBMIT FORM*****
 */
const form = document.getElementById("regForm");
form.onsubmit = validate; // Validates form on submit

/*
    *****VALIDATE ALL FIELDS FUNCTION*****
    * Validates first & last name, address, email, phone number
    * Also validates at least ONE assistance box is checked
 */
function validate(){
    clearErrors();
    let isValid = true;
    // First Name validation
    let fname = document.getElementById("fname").value;
    if(fname === ""){
        showError("errFname");
        isValid = false;
    }

    // Last Name validation
    let lname = document.getElementById("lname").value;
    if(lname === ""){
        showError("errLname");
        isValid = false;
    }

    // Address Validation
    let addressRadio = document.getElementById("shelter-yes");
    if(addressRadio.checked){
        let addressStreet = document.getElementById("street").value;
        let addressCity = document.getElementById("city").value;
        let addressZip = document.getElementById("zip").value;
        if(addressStreet === ""){
            showError("errStreet");
            isValid = false;
        }
        if(addressCity === ""){
            showError("errCity");
            isValid = false;
        }
        if(addressZip === "none"){
            showError("errZip");
            isValid = false;
        }
        if(addressZip ==="other") { // pick one lol
            alert("Sorry! At this moment we're only able to " +
                "provide assistance to those within the listed zip codes.");
            changeErrMessage("errZip", "Sorry! At this moment we're only able to " +
                "provide assistance to those within the listed zip codes.")
            isValid = false;
        }
    }

    // Email & Phone Validation
    if (!validateContact()) {
        isValid = false;
    }

    // Make sure assistance option is checked
    if (!checkAssistance()) {
        isValid = false;
    }

    // check other
    let otherInput = document.getElementById("othertext").value;
    let otherBox = document.getElementById("other");
    if (otherBox.checked) {
        if (otherInput === "") {
            showError("otherError");
            isValid = false;
        }
    }


    // form is valid to submit
    return isValid;
}

/*
    *****EMAIL & PHONE NUMBER VALIDATION FUNCTION*****
    * Validates email or phone
    * Validates both if both fields are filled out.
*/
function validateContact() {
    let email = document.getElementById("email").value;
    let phoneNum = document.getElementById("phone").value;
    let isValid = true;

    // if email & phone number are empty
    if (email === "" && phoneNum === "") {
        showError("err-verbage");
        showError("err-email");
        showError("errPhone");
        isValid = false;
    }
    // if only email is entered
    else if (email !== "" && phoneNum === "") {
        if(!email.includes("@") && !email.includes(".")){
            changeErrMessage("err-email", "Must be @email.com format");
            isValid = false;
        }
    }
    // if only phone number is entered
    else if (email === "" && phoneNum !== ""){
        if(phoneNum.length < 10){
            changeErrMessage("errPhone", "Number must be 10 digits.");
            isValid = false;

        }
        if(isNaN(phoneNum)){
            changeErrMessage("errPhone", "Number must be numeric.");
            isValid = false;
        }
    }
    // if both email and phone number are entered
    else if (email !== "" && phoneNum !== "") {
        if(!email.includes("@") && !email.includes(".")){
            changeErrMessage("err-email", "Must be @email.com format");
            isValid = false;
        }
        if(phoneNum.length < 10){
            changeErrMessage("errPhone", "Number must be 10 digits.");
            isValid = false;

        }
        if(isNaN(phoneNum)){
            changeErrMessage("errPhone", "Number must be numeric.");
            isValid = false;
        }
    }
    return isValid;
}

/*
    *****ASSISTANCE VALIDATION*****
    * Ensures at least ONE assistance box is checked.
    * Returns false if no boxes are checked or if other is not specified.
* */
function checkAssistance() {
    let isValid = false;
    let checkOne = false;
    let help = document.getElementsByName("help[]");
    for (let i = 0; i < help.length; i++) {
        if (help[i].checked) {
            isValid = true;
            checkOne = true;
        }
    }
    if (checkOne !== true)  {
        showError("errHelp");
    }
    return isValid;
}

/*
    *****FILE CHECKBOX FUNCTION*****
    * Displays file upload box
    * Notifies applicant of required documentation
 */
function showFile() {
    let help = document.getElementsByName("help[]");
    let error = document.getElementById("errHelp");

    for (let i = 0; i < help.length; i++) {
        let required = document.getElementById(help[i].id + "File");
        if (i < 3 || i === 6) {
            help[i].onclick = function (e) {
                if (this.checked) {
                    error.classList.add("d-none");
                    required.classList.remove("d-none");
                }
                else {
                    required.classList.add("d-none");
                }
            }
        }
        else {
            error.classList.add("d-none");
        }
    }
}

/* *****ERROR FUNCTIONS***** */
// clear errors
function clearErrors() {
    let errors = document.getElementsByClassName("text-danger"); // nodelist of error messages
    for(let i = 0; i<errors.length; i++){
        errors[i].classList.add("d-none");
    }
}

// show error of given ID
function showError(errorId) {
    let err = document.getElementById(errorId);
    err.classList.remove("d-none");
}

// show error of given ID & change error message
function changeErrMessage(errorId, message) {
    let err = document.getElementById(errorId);
    err.classList.remove("d-none");
    err.innerHTML = message;
}




