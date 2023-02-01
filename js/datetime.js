function dateTime() {

    const months = [
        "Jan.",
        "Feb.",
        "Mar.",
        "Apr.",
        "May.",
        "Jun.",
        "Jul.",
        "Aug.",
        "Sep.",
        "Oct.",
        "Nov.",
        "Dec."
    ];

    const date = new Date();

    var h = date.getHours();

    // format hours from 24 to 12 and add am/pm.
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12; //the hour 0 should be 12.

    var m = date.getMinutes();

    // format minutes to 2-digits.
    m = m.toString().padStart(2, '0');

    var mon = months[date.getMonth()];
    var d = date.getDate();
    var y = date.getFullYear();

    document.getElementById("time").innerHTML = h + ":" + m + " " + ampm;

    // let time act as a clock and update.
    setTimeout(dateTime, 1000);

    document.getElementById("date").innerHTML = mon + " " + d + ", " + y;

}