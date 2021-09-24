const mongoose = require("mongoose");

mongoose.connect("mongodb://localhost:27017/elearning",
  err => {
    if(err) throw err;
    console.log('Connected to MongoDB!!!')
 });