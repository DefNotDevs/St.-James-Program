// Register the validate function for the form submit event
let form = document.getElementById('adminform');
form.onsubmit = validate;

// Make all error messages invisible
function clearErrors()
{
    let errors = document.getElementsByClassName("text-dark");
    for (let i = 0; i < errors.length; i++)
    {
        errors[i].classList.add("d-none");
    }
}

function validate()
{
    clearErrors();
    let isValid = true;

    let admin = document.getElementById('admin').value;
    let password = document.getElementById('password').value;

    if (admin.trimEnd() === "")
    {
        let errAdmin = document.getElementById("err-admin");
        errAdmin.classList.remove("d-none");
        isValid = false;
    }

    if (password.trimEnd() === "")
    {
        let errPassword = document.getElementById("err-password");
        errPassword.classList.remove("d-none");
        isValid = false;
    }

    // Allows next page if isValid is true
    return isValid;
}