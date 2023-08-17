
<html>
    <head>
        <link rel="stylesheet" href="CSS/useregistration.css">
    </head>
<form name="form1" action="registeruser.php" method="post">
    <div class="container">
      <h1>Register</h1>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" id="name"><br><br>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email"><br><br>
      <label for="phoneNumber"><b>Phone Number</b></label>
      <input type="tel" name="phoneNumber" id="phoneNo"><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" ><br><br>
      <label><b>Gender:</b></label>
      <input type="radio"  name="Gender">
      <label>:Female</label>
      <input type="radio"  name="Gender">
      <label>:Male</label>
      <input type="radio" name="Gender">
      <label>:Other</label ><br><br>
      
      <select name="language" id="language" >
        <option value="">Select language</option>
        <option value="English">English</option>
        <option value="Spanish">Spanish</option>
        
      </select>
      <hr>
      <input name="policy" type="checkbox" id="agreeCheckbox"<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn" onclick="validateForm() ">Register</button>
    </div>
  
  </form>
  <script>
    function validateForm() {
      const nameInput = document.getElementById('name');
      const emailInput = document.getElementById('email');
      const phoneInput = document.getElementById('phoneNo');
      const passwordInput = document.getElementById('psw');
      const agreeCheckbox = document.getElementById('agreeCheckbox');
      const genderInputs = document.querySelectorAll('input[name="Gender"]');
      const languageSelect = document.getElementById('language');
  
     
      if (nameInput.value.trim() === '') {
        alert('Please enter a username.');
        return false;
        
      }
  
      const email = emailInput.value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
      }
  
      const phoneNo = phoneInput.value.trim();
      const phoneRegex = /^\d{10}$/;
      if (!phoneRegex.test(phoneNo)) {
        alert('Please enter a valid 10-digit phone number.');
        return false;
      }
  
      if (passwordInput.value.length < 6) {
        alert('Password should be at least 6 characters long.');
        return false;
      }
  
      let genderSelected = false;
      for (const genderInput of genderInputs) {
        if (genderInput.checked) {
          genderSelected = true;
          break;
        }
      }
      if (!genderSelected) {
        alert('Please select a gender.');
        return false;
      }
  
      if (languageSelect.value === '') {
        alert('Please select a language.');
        return false;
      }
  
      if (!agreeCheckbox.checked) {
        alert('Please agree to our Terms & Privacy.');
        return false;
      }
  
      alert('Form submitted successfully!');
      return true;
    }
  </script>
  </html>