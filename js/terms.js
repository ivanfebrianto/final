function validate(form) {
    if (form.agree.checked == false) {
      alert("Please Accept Terms and Conditions...");
      return false;
    } else {
      return true;
    }
  }