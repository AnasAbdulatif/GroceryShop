   var Uname = document.forms["Check"]["Name"];
var CardNum = document.forms["Check"]["CardNumber"];
var Cvv = document.forms["Check"]["CVV"];
    function cardNumCheck(){
    

    $(".button5").hover(function(){
            $('.container').css({backgroundColor: 'white'});
 
              },function(){
               
                     $('.container').css({backgroundColor:'#f2f2f2'});
               });





$(".button4").hover(function(){
            $('.container').css({backgroundColor: 'white'});
 
              },function(){
               
                     $('.container').css({backgroundColor:'#f2f2f2'});
               });
    
    
    if (CardNum.value=="") {
    window.alert("please enter your card number");  
    return false;  
    } 
    else if  (CardNum.length != '16')
    {
    window.alert("please enter a valid card number");  
    }
    }
    
    function cvvNumCheck(){
    
    
    
    if (Cvv.value=="") {
    window.alert("please enter Cvv");  
    return false;  
    } 
    else if  (Cvv.length != '3')
    {
    window.alert("please enter 3 numbers only");  
    }
    }
    
    function checkName(){
  

   
    
    var regularexpresion  =/^\d/;
    
    if (Uname.value=="") {
    window.alert("please enter your name");  
    return false;  
    } 
    else if (Uname.value.match(regularexpresion)) {
    window.alert("Please enter your name. Don't start with number");  
    }
    }
    function checkk(){
     
      checkName();
      cardNumCheck();
        cvvNumCheck();
    
      }

var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);

var counter2 = 5;
    setInterval2(function(){
      document.getElementById('radio' + counter2).checked = true;
      counter++;
      if(counter > 8){
        counter2 = 5;
      }
    }, 5000);

