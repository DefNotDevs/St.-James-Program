const hasShelter = document.getElementById("shelter-yes");
const noShelter = document.getElementById("shelter-no");
const validZips = ["98032", "98031", "98030", "98010", "98058", "98042"];
const btn = document.getElementById("check");
const btnClass = btn.classList;
const qualified = document.getElementById("qualified");
const ineligible = document.getElementById("not-qualified");
btn.onclick = validateZip;
hasShelter.onclick = checkShelter;
noShelter.onclick = checkShelter;


function validateZip() {
    let flag = false;
    let userInput = document.getElementById("userzip").value;


    resetBtn();
    if (userInput === "") {
        changeBtn("btn-danger", "Required.");
        qualified.classList.add("d-none");
    }
    else if (userInput.length !== 5) {
        changeBtn("btn-danger", "Invalid zip.");
    }
    else if (userInput.length === 5) {
        for (let i = 0; i < validZips.length; i++) {
            if (userInput === validZips[i]) {
                if (userInput === validZips[i]) {
                    resetBtn();
                    changeBtn("btn-success","Eligible!");
                    qualified.classList.remove("d-none");
                    ineligible.classList.add('d-none');
                    return;
                }
            }
            else {
                changeBtn("btn-danger","Ineligible zip.");
                qualified.classList.add("d-none");
                ineligible.classList.remove("d-none");

            }
        }
    }
    return flag;
}


function checkShelter() {
    let zip = document.getElementById("checkZip");

    if (hasShelter.checked) {
        zip.classList.remove("d-none");
        qualified.classList.add("d-none");
    }
    else if (noShelter.checked) {
        zip.classList.add("d-none");
        qualified.classList.remove("d-none");
    }
}


function changeBtn(button ,message) {
        btnClass.remove("btn-default");
        btnClass.add(button);
        btn.innerText = message;
}

function resetBtn() {
    if (btnClass.contains("btn-danger")) {
        btnClass.remove("btn-danger");
        btnClass.add("btn-default");
        btn.innerText = "Check!";
    }
    else if (btnClass.contains("btn-success")) {
        btn.innerText = "Eligible";
    }
    else {
        btnClass.add("btn-default");
        btn.innerText = "Check!";
    }
}

