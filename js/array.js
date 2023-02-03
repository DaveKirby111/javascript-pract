const numbers = [
    45,
    4,
    25
];

let txt = "";

numbers.forEach(myFunction);
document.getElementById("num").innerHTML = txt;

function myFunction(value, index, array) {
    txt += value + "<br>";
}