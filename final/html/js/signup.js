// document.getElementById("signin").addEventListener("click",function(){

// })

document.getElementById("signin").addEventListener("click", () => {
  var signinUrl = "/final/sign_in.html";
  window.location.href = signinUrl;
});

document.getElementById("signup").addEventListener("click", function () {
  var name = document.getElementById("fname").value;
  if (name == null || name == "") {
    alert("Name can't be blank");
    return false;
  }
  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    return false;
  }

  var num = document.getElementById("number").value;
  if (isNaN(num)) {
    document.getElementById("number").innerHTML = "Enter Numeric value only";
    return false;
  } else {
    return true;
  }

  var email = document.getElementById("email").value;
  var atposition = email.indexOf("@");
  var dotposition = email.lastIndexOf(".");
  if (
    atposition < 1 ||
    dotposition < atposition + 2 ||
    dotposition + 2 >= email.length
  ) {
    alert(
      "Please enter a valid e-mail address \n atpostion:" +
        atposition +
        "\n dotposition:" +
        dotposition
    );
    return false;
  }

  var password = document.getElementById("pass").value;
  var cpassword = document.getElementById("cpass").value;
  if (password == cpassword) {
    return true;
  } else {
    alert("password must be same!");
    return false;
  }
});
