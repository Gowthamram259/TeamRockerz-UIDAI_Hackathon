<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

  </head>
  <body>
    <form action="verification.php">
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send Otp</button>
    
    </form>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.2.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.2.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDJ2JRT40B2tr5FdlV6Xcu_OCIvMKEo1MM",
    authDomain: "connection-php-88d68.firebaseapp.com",
    projectId: "connection-php-88d68",
    storageBucket: "connection-php-88d68.appspot.com",
    messagingSenderId: "551333398564",
    appId: "1:551333398564:web:52188365cb80d82cbbb0b1",
    measurementId: "G-08BNBWKJ3M"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>