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



function Like() {

    const game = [

        "Mass Effect",
        "Dragon Age",
        "Final Fantasy",
        "Resident Evil",
        "Witcher"
    
    ];

    let likes = document.getElementById("likes");


    game.forEach((vg) => {

        let li = document.createElement("li");
            li.innerText = vg;
            likes.appendChild(li);

    });
   
}


function disLike() {

    const game = [
        
        "Madden",
        "Call of Duty",
        "Need for Speed",
        "God of War",
        "Far Cry"
    ];

    let dislikes = document.getElementById("dislikes");

    game.forEach((vg) => {
        let li = document.createElement("li");
        li.innerText = vg;
        dislikes.appendChild(li);
    });
}