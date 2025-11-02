// For .. in loop

// const person = {fname:"John", lname:"Doe", age:25};

// for (let x in person) {
//     console.log(x + ": " + person[x]); // Outputs: fname: John, lname: Doe, age: 25
// }


// console.log("--------------");


// For .. of loop

// const colors2 = ["red", "green", "blue"];   

// for (let color of colors2) {
//     console.log("Color : " + color); // Outputs: red, green, blue
// }



// function sentext


function sayHello() {
    console.log("Hello World!");
}

sayHello();


function giveColors(vale) {
    for (let color of vale) {
        console.log("Color : " + color); // Outputs: red, green, blue
    }
}


giveColors(["red", "green", "blue"]);



function addNumbers(a, b) {
    return a + b;
}


console.log(addNumbers(5, 10)); // Outputs: 15



document.getElementById("alertButton").addEventListener("click", function () {

    const inputValue = document.getElementById("inputField").value;

    if (inputValue.length == 0) {
        alert("You didn’t enter anything!");
    } else {
        alert("You entered: " + inputValue);
    }

});




