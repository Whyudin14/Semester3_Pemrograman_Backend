// TODO 3: Import data students dari folder data/students.js
// code here
// const students = require("../data/students");

// import class StudentController
const Student = require("../models/Student");

// Membuat Class StudentController
class StudentController {
  // index(req, res) {
    
  //   // TODO 4: Tampilkan data students
  //   // code here
  //   // memanggil method static all
  //   Student.all(function (students){
  //     const data = {
  //       message: "Menampilkan semua students",
  //       data: students,
  //     };
  
  //     res.json(data);
  //   });
  // }

  // menambahkan keyword async
  async index(req, res) {
    
    // TODO 4: Tampilkan data students
    // code here
    // memanggil method static dengan async await
    const students = await Student.all();

      const data = {
        message: "Menampilkan semua students",
        data: students,
      };
  
      res.json(data);
  }

  async store(req, res) {
    // const {nama} = req.body;

    // Memanggil method static create dengan async await
    const students = await Student.create(req.body);

    const data = {
      message: `Menambahkan data student`,
      data: students,
    };

    res.json(data);
  };

}

//   update(req, res) {
//     const { id } = req.params;
//     const { nama } = req.body;
//     students[id] = nama;

//     // TODO 6: Update data students
//     // code here
//     const data = {
//       message: `Mengedit student id ${id}, nama ${nama}`,
//       data: students,
//     };

//     res.json(data);
//   }

//   destroy(req, res) {
//     const { id } = req.params;
//     students.splice(id,1)

//     // TODO 7: Hapus data students
//     // code here
//     const data = {
//       message: `Menghapus student id ${id}`,
//       data: students,
//     };

//     res.json(data);
//   }


// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;

