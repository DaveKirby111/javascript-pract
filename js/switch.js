function swtch() {
    let day;

    switch(new Date().getDay()) {

        case 0:
            day = "Sunday";
            break;
        case 1:
            day = "Monday";
            break;
        case 2:
            day = "Tuesday";
            break;
        case 3:
            day = "Wednesday";
            break;
        case 4:
            day = "Thursday";
            break;
        case 5:
            day = "Friday: Ready of the WEEKEND!";
            break;
        case 6:
            day = "Saturday"; 

    }

    document.getElementById("day").innerHTML = day;
}

function weekend() {
    let wkend;

    switch (new Date().getDay()) {
    case 4:
    case 5:
        wkend = "Can't wait for the weekend.";
        break;
    case 0:
    case 6:
        wkend = "The weekend is here";
        break;
    default:
        wkend = "Another week."
    }

    document.getElementById("wkend").innerHTML = wkend;
}