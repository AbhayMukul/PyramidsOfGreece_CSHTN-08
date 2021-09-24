var form = document.getElementById('signup')
form.addEventListener('submit',function(e){
    e.preventDefault()
    var username = document.getElementById('username').value
    var email = document.getElementById('email').value
    var mobile = document.getElementById('mobile').value
    var password = document.getElementById('password').value
    var confirmpassword = document.getElementById('confirmpassword').value

    fetch("ec2-3-109-123-120.ap-south-1.compute.amazonaws.com:5000/api/uploadUser",{
        method:'POST',
        body:JSON.stringify({
                "username" : username,
                "password" : password,
                "email" : email,
                "phone" : mobile 
         }),
   
  
    })
   .then(function(response){
       return response.json()
   })
   .then(function(data){
       console.log(data)
   })
})