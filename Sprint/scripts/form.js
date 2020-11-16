

const date = new Date();
const dayOfWeek = date.getDay();
const hourOfDay = date.getHours();

// const validZips = ["98032", "98031", "98042"];
// const btn = document.getElementById("check");
// const btnClass = btn.classList;

// Checks if form is being accessed during business hours
function businessHours() {
    let showContent = document.getElementsByClassName('contentVisibility');

    if ((dayOfWeek === 1 || dayOfWeek === 3) && (hourOfDay >= 9 && hourOfDay <= 12)) {
        showContent[0].remove();
        showContent[1].style.visibility = 'visible';
    }
    else if (dayOfWeek === 2 && (hourOfDay >= 13 && hourOfDay <= 16)) {
        showContent[0].remove();
        showContent[1].style.visibility = 'visible';
    }
    else {
        showContent[0].style.visibility = 'visible';
        showContent[1].remove();
    }
}


businessHours();
