let simpleObject = {

    firstName : "John",
    lastName  : "Doe",
    age       : 50,
    isStudent : true

};


let courseInfo = {

    banner_image : "https://example.com/banner.jpg",
    batch: 2,
    seat_remaining: 5,
    title: "Mastering Python",

}


// console.log(courseInfo);
// console.log(courseInfo.banner_image);
// console.log(courseInfo['batch']);


for(let key in courseInfo){
    console.log(key, " : ", courseInfo[key]);
}
