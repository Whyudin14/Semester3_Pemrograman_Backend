const user = {
    name: "Wahyudin",
    age: 19,
    address: "Bekasi",
    isMarried: false,
};

console.log(user.name);
console.log(user.age);
console.log(user.address);

// DESTRUCTING
// melakukan destructing obeject
const {name, age, address} = user;

console.log(name, age, address);
