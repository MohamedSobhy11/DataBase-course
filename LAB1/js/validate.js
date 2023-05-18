function validatereg(input)
{
   var email = document.querySelector("#email").value;
   var pass = document.querySelector("#pass").value;
   var pass2 = document.querySelector("#pass2").value;
   var uname = document.querySelector("#username").value;
   if (uname == ""){
    alert("please enter your username");
    return false;
   }
   else if (email == ""){
    alert("please enter your email");
    return false;
   }
   else if (pass == ""){
    alert("please enter your password");
    return false;
   }
   else if (pass2 == ""){
    alert("please confirm your password");
    return false;
   }
   else if (pass != pass2){
    alert("confirm password doesn't match your password");
    return false;
   }
   else{
    return true;
   }

}
function validatelogin(input)
{
   var email = document.querySelector("#email").value;
   var pass = document.querySelector("#pass").value;
   if (email == ""){
    alert("please enter your email");
    return false;
   }
   if (pass == ""){
    alert("please enter your password");
    return false;
   }
   else{
    return true;
   }

}



