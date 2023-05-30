<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <!-- Include the Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 300px;
      margin: 100px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .container i {
      font-size: 5em; /* Adjust the size as needed */
    }

    h2 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 10px;
    }

  </style>
</head>
<body>
    <div class="container">
      <i class="fas fa-user fa-3x"></i>
      <h2>Admin</h2>
      <form action="index" method="GET">
        <div class="error"></div>
        <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
          <div id="username-error" class="error"></div>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
          <div id="password-error" class="error"></div>

        <button type="submit">Login</button>
      </form>
    </div>
    <script>
  // JavaScript code for form validation
  window.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    var form = document.querySelector('form');

    // Get the input elements
    var usernameInput = document.getElementById('username');
    var passwordInput = document.getElementById('password');

    // Get the error elements
    var usernameError = document.getElementById('username-error');
    var passwordError = document.getElementById('password-error');

    // Add submit event listener to the form
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // Reset error messages
      usernameError.textContent = '';
      passwordError.textContent = '';

      // Get the input values
      var username = usernameInput.value.trim();
      var password = passwordInput.value.trim();

      // Validate the inputs
      if (username === '') {
        showError(usernameError, 'Please enter an email address.');
      } else if (!isValidEmail(username)) {
        showError(usernameError, 'Please enter a valid email address.');
      }

      if (password === '') {
        showError(passwordError, 'Please enter a password.');
      }

      if (username !== '' && isValidEmail(username) && password !== '') {
        // All inputs are valid, submit the form
        form.submit();
      }
    });

    // Function to display error messages
    function showError(errorElement, message) {
      errorElement.textContent = message;
    }

    // Function to validate email format
    function isValidEmail(email) {
      var emailRegex = /\S+@\S+\.\S+/;
      return emailRegex.test(email);
    }
  });
</script>

</body>
</html>
