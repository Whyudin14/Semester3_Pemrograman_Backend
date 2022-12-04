const nilai = 99;
let grade = "";

if(nilai > 90) {
    grade = "A";
}else if (nilai > 80) {
    grade = "B";
}else {
    grade = "C";
}

console.log(`Nilai anda: ${grade}`);


const age = 19;

if (age > 18){
    console.log("Sudah dewasa");
}else {
    console.log("Belum dewasa");
}

// menggunakan cara backtick
age > 18 ? console.log("Sudah dewasa") : console.log("Belum dewasa");