var form = document.getElementById('signup')
form.addEventListener('submit',function(e){
    e.preventDefault()

    var password = document.getElementById('password').value
    var confirmpassword = document.getElementById('confirmpassword').value
    if(password==confirmpassword){  
        return true;  
        }  
        else{  
        alert("password must be same!");  
        return false;  
        }  
        }  

)