// 1.variable(var,let,const)

// var -> global, functional scope
// let, const -> block scope


/*

this multilane comment


*/

// function user(){

//     const profession = "job";


//     var name = "anik";

//     if (true) {
//         let age = 40;
//         console.log(age, name);

//     }


//     // console.log(age);


// }


// user();


// 2.arithmetics(+,-,*,/,%)

// let a = 20;
// let b = 10;

// console.log(a + b);
// console.log(a - b);
// console.log(a * b);
// console.log(a / b);
// console.log(a % b);
// console.log(a ** b);



// 3. assignment(=, +=, -=, *=, /=, %=, **=)


// a += b;
// a -= b;
// a /= b;
// a *= b;
// a %= b;
// a **= b;


// 4. comparison (==, ===, !=, >, <, >=, <=)

let a = 20;
let b = 20;


// if (a == b) {
//     console.log("equal");
// } else {
//     console.log("not equal");
// }

// if (a !== b) {
//     console.log(true);
// }



// 5. logical(&&, ||, !)


// if (con1 && con2) {
//     console.log("true");
// } else {
//     console.log("false");
// }


// if (con1 || con2) {
//     console.log("true");
// } else {
//     console.log("false");
// }


// if (!condition) {
//     console.log("true");
// } else {
//     console.log("false");
// }


// 6.data types (string, number, boolean, null, undefined, array, object)

// let string = "console";
// let num = 10.32;
// let boolTrue = true;
// let boolFalse = false;
// let nullType = null;
// let undefined;
// let array = [11, 54, 85, 64, 88];
// let person = {
//     name : "anik",
//     age : 25,
//     job : {
//         frontend : ["html", "css", "js"],
//         backend : ["php", "rest api"]
//     }
// }


// 7.conditional statements(if, else, else if, switch)


// if else if condition

let marks = 80;

if (marks >= 80) {
    console.log("A+");
} else if (marks >= 70) {
    console.log("A");
} else if (marks >= 60) {
    console.log("A_");
} else {
    console.log("failed");

}


// switch case conditions

let day = "sun";

switch (day) {
    case "sat":
        console.log("Today is Saturday");
        break;
    case "sun":
        console.log("Today is Sunday");
        break;
    case "mon":
        console.log("Today is Monday");
        break;
    case "tue":
        console.log("Today is Tuesday");
        break;
    case "wed":
        console.log("Today is Wednesday");
        break;
    case "thu":
        console.log("Today is Thursday");
        break;
    case "fri":
        console.log("Today is Friday");
        break;
    default:
        console.log("Not a valid day");
}



// 8. iterations(for loop, while loop, de while loop)

// 1. For Loop
console.log("=== For Loop ===");
for (let i = 1; i <= 5; i++) {
    console.log("For Loop → Count:", i);
}

// 2. While Loop
console.log("\n=== While Loop ===");
let j = 1;
while (j <= 5) {
    console.log("While Loop → Count:", j);
    j++;
}

// 3. Do...While Loop
console.log("\n=== Do...While Loop ===");
let k = 1;
do {
    console.log("Do...While Loop → Count:", k);
    k++;
} while (k <= 5);