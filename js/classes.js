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

// class inheritence.----------------------------------------------

class Car {
    constructor(brand) {
        this.carname = brand;
    }

    present() {
        return "I have a " + this.carname;
    }
}

class Model extends Car {
    constructor(brand, mod) {
        super(brand);
        this.model = mod;
    }

    show() {
        return this.present() + " it is a " + this.model;
    }
}

let vehicle = new Model("Ford", "Mustang");

function myCar() {
    const veh = document.getElementById("demo").innerHTML = vehicle.show();
}

// --------------------------------------------------------------------
