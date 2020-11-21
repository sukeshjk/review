<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign-In Form</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Agrimate</h1>
    <section>
    <div class="container">
        <div class="userform">
        <div class="form">
            <form action="main.php" method="post"> 
                <h2 class="heading">Sign In</h2>
                <!-- <label>username:</label> -->
                <input type="text" name="username"  placeholder="username" required><br>
                <br>
                <!-- <label>password:</label> -->
                <input type="password" name="password" placeholder="password" required title="Password between 8-15 characters required"><br> 
                <br>
               <!--  <div class="extra">       
                    <input type="checkbox">
                    Remember me
                </div>  -->                 
                    <br>
                    <input type="submit" value="Login">
                    <br>
                    <button type="button" id="gbtn">Sign in with Google
                    </button>
                    <br>
                    <button type="button" id="fbtn" onclick="FacebookLogin()">Login with Facebook
                    </button>              
                    <button type="button" id="phbtn" >Sign in with Phone No.
                    </button>             
            </form>
        </div>    
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById("phbtn").onclick = function () {
            location.href = "http://localhost/intern/sess/phone.php";
        };
        document.getElementById("gbtn").onclick = function () {
            location.href = "http://localhost/intern/sess/googlesignin.php";
        };
    </script>
    </script>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase.js"></script>

        <!-- TODO: Add SDKs   https://firebase.google.com/docs/web/setup#available-libraries -->
        <script>
          var firebaseConfig = {
            apiKey: "AIzaSyCjfJN-MsO9MRQvjgqE92kdgtikfUzG4xQ",
            authDomain: "web-app-287511.firebaseapp.com",
            databaseURL: "https://web-app-287511.firebaseio.com",
            projectId: "web-app-287511",
            storageBucket: "web-app-287511.appspot.com",
            messagingSenderId: "6490889039",
            appId: "1:6490889039:web:49f6d876fa4918c74bc33a"
          };
          // Initialize Firebase
          firebase.initializeApp(firebaseConfig);
        </script>
<!-- 
GOOGLE LOGIN -->
        <script>
        function GoogleLogin(){
        // body...
        var provider = new firebase.auth.GoogleAuthProvider();

        firebase.auth().signInWithPopup(provider).then(function() {
        //code executes after successful login
          window.location = "init.php";
        }).catch(function (error) {
            var errorMessage = error.message;
            alert("errorMessage");
        })

        }
        </script>
<!-- 
FACEBOOK LOGIN -->
        <script>                                                  
        function FacebookLogin(){
            var provider = new firebase.auth.FacebookAuthProvider();

            firebase.auth().signInWithPopup(provider).then(function() {
            window.location = "init.php";
        }).catch(function(error) {
            var errorMessage = error.message;
            alert("errorMessage");
        }) 
        }
        </script>       
</body>
</html>