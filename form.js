const hasShelter = document.getElementById("shelter-yes");
const noShelter = document.getElementById("shelter-no");
// const validZips = ["98032", "98031", "98042"];
// const btn = document.getElementById("check");
// const btnClass = btn.classList;


hasShelter.onclick = checkShelter;
noShelter.onclick = checkShelter;



function checkShelter() {
    let enterAddress = document.getElementById("display-address");

    if (hasShelter.checked) {
        enterAddress.classList.remove("d-none");
    }
    else {
        enterAddress.classList.add("d-none");
    }
}
