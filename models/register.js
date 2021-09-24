const mongoose = require("mongoose");
const userSchema = new mongoose.Schema({
    
    username:{
        type:String,
        
       
    },
    email:{
        type:String,
       
 
    },
    mobile:{
        type:Number,
     
    },
    password:{
        type:String,
       
        
    },
    confirmpassword:{
        type:String,
       
       
    }


})

const Register = new mongoose.model("Register",userSchema);
module.exports= Register;