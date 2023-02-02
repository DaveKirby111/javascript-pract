class Game {
    constructor(name, system) {
        this.name = name;
        this.system = system;
    }
}

let vgame1 = new Game("Resident Evil", "pc");

console.log(vgame1.name);
console.log(vgame1.system);

function showgame() {

const vg = document.getElementById("classes1").innerHTML = vgame1.name + " " + vgame1.system;

return vg;

}