var uname = document.forms["formSubmit"]["username"];
 var mail=document.forms["formSubmit"]["Email"];

  var fr = document.forms["formSubmit"]["password"];
  var se = document.forms["formSubmit"]["repassword"];
  var phone=document.forms["formSubmit"]["phone"];
  var checkboxxx=document.forms["formSubmit"]["checkboxx"];



  fr.onfocus = function () {
    document.getElementById("message").style.display = "block";
  }
  fr.onblur = function () {
    document.getElementById("message").style.display = "none";
  }

  se.onfocus = function () {
    document.getElementById("remessage").style.display = "block";
  }
  se.onblur = function () {
    document.getElementById("remessage").style.display = "none";
  }

  //checkPasswordrequirementsJs
  fr.onkeyup = function () {
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (fr.value.match(passw)) {
      strong.classList.remove("invalid");
      strong.classList.add("valid");
    } else {
      strong.classList.remove("valid");
      strong.classList.add("invalid");
    }
  }
  function checkPasswordMatchjs(){
    if (se.value == fr.value && fr.value!="") {
      
        same.classList.remove("invalid");
        same.classList.add("valid");
      } else {
        same.classList.remove("valid");
        same.classList.add("invalid");
      }
    }
  function checkPasswordrequirements(){
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (  fr.value=="") {
     
     
      alert("pls enter the password");  }
  else if (!fr.value.match(passw)) {
        alert("passwords dosent match reqiuments");  
        
    }
   
  }

 

  function checkName(){
   
    var regularexpresion  =/^\d/;
    
  if (uname.value=="") {
    window.alert("please enter thename");  
    return false;  
    } 
    else if (uname.value.match(regularexpresion)) {
      window.alert("pls choose name dosent start with number");  
    }
  }
  function checkEmail(){

    var atindex=mail.value.indexOf("@"); 
    var dotindex=mail.value.indexOf("."); 
    if (  mail.value=="") {
     
     
      alert("pls enter the email");  }
  else if (atindex==-1 ||dotindex==-1) {
    alert("email is not valid");  
    return false;  

    } 
  }
  function checkPhone(){
  

    if(phone.value=="")
 {
     alert("please enter the phone");  
     return false;  
     

     } 
   }
   function checkCheckBox(){
  
  if(checkboxxx.checked == false)
{
   alert("please mark the checkbox");  
   return false;  
   

   } }
   function checkRepassword(){
  

   if (  se.value=="") {
     
     
     alert("pls enter repassword");  }
 else if (se.value != fr.value){
  alert("passwords are not same");
 }
  
}
   
  
   function bigCheck(){
    checkName();
    checkEmail();
    checkPhone();
    checkPasswordrequirements();
    checkRepassword();
    checkCheckBox();

   }
   
   $(".containerL .form-control-input").hover(function () {
    
        $(this).css({ borderColor: '#8ED605' });
      
        $(this).css({ borderWidth: '4px' });
      }, function () {
        $(this).css({ borderColor: '#1D4354' });
        $(this).css({ borderWidth: '2px' });

        
    
      });





function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const http = new XMLHttpRequest();
  http.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  http.open("GET", "gethint.php?q="+str);
  http.send();   
}



