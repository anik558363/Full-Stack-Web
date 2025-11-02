let colors = ["Red", "Green", "Blue", "Yellow", "Black"];

console.log(colors);
console.log(colors[0]);
console.log(colors.length);

colors[5] = "White";
colors[1] = "Orange";


for (let i = 0; i < colors.length; i++) {
    console.log(colors[i]);
}

colors.push("Purple");
console.log(colors);
colors.pop();
console.log(colors);
colors.shift();
console.log(colors);
colors.unshift("Pink");
console.log(colors);


let array1 = ["A", "B", "C"];
let array2 = ["D", "E", "F"];

let combinedArray = array1.concat(array2);
console.log(combinedArray);

// for (const index of colors) {
//     console.log(index);

// }


let colors = ["Red", "Green", "Blue", "Yellow", "Black"];

console.log(colors);
console.log(colors[0]);
console.log(colors.length);

colors[5] = "White";
colors[1] = "Orange";


for (let i = 0; i < colors.length; i++) {
    console.log(colors[i]);
}

colors.push("Purple");
console.log(colors);
colors.pop();
console.log(colors);
colors.shift();
console.log(colors);
colors.unshift("Pink");
console.log(colors);



// for (const index of colors) {
//     console.log(index);

// }


colors.forEach(function(color, index) {
    console.log(index, " : ", color);
});


let newColors = colors.map(function(color) {
    //  return color.toLowerCase() + " color";
    return color.toUpperCase();
});

console.log(newColors);


let numberArray = [10, 25, 30, 45, 50, 60];

let filteredArray = numberArray.filter(function(number) {
     return number % 2 === 0;
});

console.log(filteredArray);