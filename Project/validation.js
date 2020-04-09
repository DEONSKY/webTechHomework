function validate(id) {
    var x, text;
  
    // Get the value of the input field with id="numb"
    x = document.getElementById(id).value;
  
    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x<0 || x > 10) {
      text = "Input not valid";
      return false;
    } else {
      text = "Input OK";
      return true;
    }
    document.getElementById("demo").innerHTML = text;
  }