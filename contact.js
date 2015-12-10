  function validate () {
    var elt = document.getElementById("contactForm");
    var name = elt.username.value;
    var email = elt.email.value;
    var comments = elt.comments.value;
    
    if (ValidateEmail(email) && (name.length >=1) && (comments.length>=1) && allLetter(name)) {
      return (true);
    }
    window.alert ("Invalid Input. Name and comment should not be blank. Name should only contain alphabetical characters and/or space. Email address should be in validated form.");
    return (false);
  }

function ValidateEmail(email) {  
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))  
  {  
    return (true)  
  }  
    return (false)  
}

function allLetter(name) {  
   var letters = /^[A-Za-z ]+$/;  
   if(name.match(letters)) {  
      return true;  
     }  
   else {  
     return false;  
     }  
  }  