

$(".save,.run").click(function(){
  $.ajax({
    url:"https://localhost/CodeStormHackathon/public/Save",
    method:"POST",
    data:{language:"html",code:editor.getValue(),file:"challange_1.html",user:"user_id",token:"some_token",challange:"FrontEnd"},
    dataType:"text",
    success: function(result){
      location.href="http://localhost/CodeStormHackathon/public/Editor/html_css";
    }
  });
});