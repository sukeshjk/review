<!DOCTYPE html>
<html>
<head>
	<title>google sign-in</title>

</head>
<body>
	<h1>Welcome <span id="clientname"></span></h1>
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

          function login() { 
          	function newLoginHappened(user) {
          		if(user) {
          			app(user);
          		}else {
          			var provider = new firebase.auth.GoogleAuthProvider();
          			firebase.auth().signInWithRedirect(provider);
          		}
          	}

          	firebase.auth().onAuthStateChanged(newLoginHappened);
          }
          function app(user) {
          	document.getElementById("clientname").innerHTML = user.displayName;
          }
          window.onload = login;
	</script>
</body>
</html>