// import data fruit
const fruits = require("./data.js");

// membuat fungsi index
const index = () => {
    for (const fruit of fruits) {
        console.log(fruit);
    }
};

// membuat fungsi store
const store = (name) => {
    fruits.push(name);
    index();
};

module.exports = {index, store};
