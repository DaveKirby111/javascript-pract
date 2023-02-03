const person = {
    full: function() {
        return "First Name: " + this.first + " <br> " + "Last Name: " + this.last;
    }
}

function person1() {
    const p1 = {
        first: "John",
        last: "Doe"
    }

    document.getElementById("person").innerHTML = person.full.apply(p1);
}

// borrow method from another object with bind().

function person2() {
    const p2 = {
        first: "John",
        last: "Smith"
    }

    let full = person.full.bind(p2)

    document.getElementById("person2").innerHTML = full();
}

