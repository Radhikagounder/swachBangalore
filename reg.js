function valid()                                    
{ 
    var name = document.forms["myForm"]["fname"];               
    var email = document.forms["RegForm"]["email"];    
    //var phone = document.forms["RegForm"]["Telephone"];  
    //var what =  document.forms["RegForm"]["Subject"];  
    var password = document.forms["myForm"]["pass1"]; 
	var password2=document.forms["myForm"]["pass2"]
    //var address = document.forms["myForm"]["Address"];  
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false;
    } 
   
    /*if (address.value == "")                               
    { 
       window.alert("Please enter your address."); 
        name.focus(); 
        return false;
    } */
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    /*if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } */
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return flase; 
    } 
   
    /*if (what.selectedIndex < 1)                  
    { 
        alert("Please enter your course."); 
        what.focus(); 
        return false; 
    } 
   */
    return true; 
}