function ifelse() {
    const hour = new Date().getHours();
    let greeting;

    if (hour < 12) {
        greeting = "Good morning";
    } else if (hour < 17) {
        greeting = "Good afternoon";
    } else {
        greeting = "Good evening";
    }

    document.getElementById("ifElse").innerHTML = greeting;
}

function greet() {
    const hour = new Date().getHours();

    if (hour < 12) {
        alert("Good morning");
    } else if (hour < 17) {
        alert("Good afternoon");
    } else {
       alert("Good evening");
    }
}