



let person = {

    firstName : "John",
    lastName  : "Doe",
    fullName : function(){
        return this.firstName + " " + this.lastName;
    }

}



console.log(person.fullName());


person.contact_info = "test";


console.log(person);


delete person.fullName;

console.log(person);


let jsonString = JSON.stringify(person);

console.log(jsonString);

let jsonObject = JSON.parse(jsonString);

console.log(jsonObject);