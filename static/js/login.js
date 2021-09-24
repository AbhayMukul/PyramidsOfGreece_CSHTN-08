function validateform(){  
    var email=document.login.email.value;  
    var password=document.login.password.value;  
      
     if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    }  