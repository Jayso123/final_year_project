function ValidateForm(){
    var name = document.forms['MyForm']['fname'].value;
    var email = document.MyForm.email.value;
    var pass = document.MyForm.pass.value;
    

    if(name == null || name == ""){
        alert("Name can't be blank");
        return false;
    }
    else if (email == null || email == ""){
        alert("email can't be blank");
        return false;
    }
    else if (pass.length<8){
        alert("Password must be at least 8 characters long.");
        return false;
    }

    
    // var name = document.forms['']
}