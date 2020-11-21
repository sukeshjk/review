<html>
<head>
    <title>Phone Number Authentication with Firebase Web</title>
</head>
<body>
<h1>Enter number to create account</h1>
<form>
    <input type="text" id="number" placeholder="+923********">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
<br>
<h1>Enter Verification code</h1>

    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify code</button>

</form>
        <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase.js"></script>

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

        <script>
        	window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number=document.getElementById('number').value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function (error) {
        alert(error.message);
    });
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function (result) {
        alert("Successfully registered");
        var user=result.user;
        console.log(user);
    }).catch(function (error) {
        alert(error.message);
    });
}
        </script>
</body>
</html>