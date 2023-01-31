function theloop() {

    const favs = [
        "Mass Effect",
        "Dragon Age",
        "Final Fantasy",
        "Resident Evil"
    ];

    let fav = "";

    for ( let i = 0; i < favs.length; i++) {
        fav += favs[i] + "<br>";
    }

    document.getElementById("fav-list").innerHTML = fav;
}