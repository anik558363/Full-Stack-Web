let str1 = "Hello";
let str2 = "World";
let lang = "JavaScript";

// console.log(`${str1}, ${str2}! Welcome to ${lang}.`);


let firstName = "Ibrahim";
let lastName = "Khalil";

let fullName = `${firstName} ${lastName}`;

console.log(fullName); // Output: Ibrahim Khalil
console.log(fullName.length); // Output: 13
console.log(fullName[13]); // Output: L
console.log(fullName.charAt(13)); // Output: L


console.log(fullName.toUpperCase()); // Output: IBRAHIM KHALIL
console.log(fullName.toLowerCase()); // Output: ibrahim khalil
console.log(fullName.indexOf("K")); // Output: 8
console.log(fullName.lastIndexOf("i")); // Output: 11
console.log(fullName.includes("ham")); // Output: true
console.log(fullName.startsWith("Ibra")); // Output: true
console.log(fullName.endsWith("lil")); // Output: true
console.log(fullName.split(" ")); // Output: [ 'Ibrahim', 'Khalil' ]
console.log(fullName.replace("Khalil", "Khan")); // Output: Ibrahim Khan
console.log(fullName.slice(0, 7)); // Output: Ibrahim
console.log(fullName.substring(0, 7)); // Output: Ibrahim
console.log(fullName.trim()); // Output: Ibrahim Khalil (no leading or trailing spaces)
console.log((fullName + "  ").repeat(2));
// Output: Ibrahim Khalil Ibrahim Khalil 
        
console.log(fullName.concat(" - Developer")); // Output: Ibrahim Khalil - Developer     
console.log(fullName.padStart(20, "*")); // Output: *******Ibrahim Khalil
console.log(fullName.padEnd(20, "*")); // Output: Ibrahim Khalil *******
console.log(fullName.charCodeAt(0)); // Output: 73 (Unicode of 'I')
console.log(String.fromCharCode(73)); // Output: I
console.log(fullName.match(/a/g)); // Output: [ 'a', 'a' ]
console.log(fullName.search("Khalil")); // Output: 8
console.log(fullName.localeCompare("Ibrahim Khalil")); // Output: 0
console.log(fullName.valueOf()); // Output: Ibrahim Khalil
console.log(fullName.normalize()); // Output: Ibrahim Khalil
console.log(fullName.toString()); // Output: Ibrahim Khalil
console.log(fullName.slice(-5)); // Output: Khalil
console.log(fullName.substring(-5)); // Output: Ibrahim Khalil
console.log(fullName.split(""));
console.log(fullName.split("a"));
console.log(fullName.replace(/i/g, "1")); // Output: Ibrah1m Khal1l
console.log(fullName.replaceAll("i", "1")); // Output: Ibrah1m Khal1l
console.log(fullName.match(/i/g)); // Output: [ 'i', 'i' ]
console.log(fullName.matchAll(/i/g)); // Output: [ [ 'i', index: 3, input: 'Ibrahim Khalil', groups: undefined ], [ 'i', index: 11, input: 'Ibrahim Khalil', groups: undefined ] ]
console.log([...fullName.matchAll(/i/g)]); // Output: [ [ 'i', index: 3, input: 'Ibrahim Khalil', groups: undefined ], [ 'i', index: 11, input: 'Ibrahim Khalil', groups: undefined ] ] 
console.log(fullName.endsWith("lil", 13)); // Output: true
console.log(fullName.startsWith("Ibra", 0)); // Output: true
console.log(fullName.includes("ham", 2)); // Output: true