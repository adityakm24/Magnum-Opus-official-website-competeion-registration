<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title> Magnum registration - 2k19</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/topnav.css">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
::-webkit-input-placeholder {
  color: black;
  font-size: 20px;
}
::-moz-placeholder {
  color: black;
  font-size: 20px;
}
:-ms-input-placeholder {
  color: black;
  font-size: 20px;
}
::placeholder {
  color: black;
  font-size: 20px;
}

@import url(https://fonts.googleapis.com/css?family=Lato);
body {
  background: url("https://res.cloudinary.com/finnhvman/image/upload/v1541930411/pattern.png");
   
}

h1 {
  color: black;
  text-transform: uppercase;
  letter-spacing: 1rem;
  font-size: 1.5rem;
  font-family: "Yeseva One";
  text-align: center;
}


 /*   body {
    background: linear-gradient(-45deg, #30cfd0, #330867, #ff0844, #ffb199)
    no-repeat 50% 50% / 400% 400%;
  animation: gradBG 10s ease infinite;
       
    background: url("https://res.cloudinary.com/finnhvman/image/upload/v1541930411/pattern.png");
    }
    */
* {
  box-sizing: border-box;
}


#regForm {
  font-weight: 50px;
  background-color: white;
  margin: 100px auto;
  font-family: "Lato";
  padding: 40px;
  width: 70%;
  min-width: 300px;
}


.select {
    padding: 10px;
    width:100%;
    font-size: 17px;
    fon
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
  font-family: "Lato";
}

.button {

border: none;
color: white;
padding: 16px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
font:'San Francisco', Helvetica, Arial, san-serif;
margin: 4px 2px;
-webkit-transition-duration: 0.4s; /* Safari */
transition-duration: 0.4s;
cursor: pointer;
}

.button3 {
background-color: rgb(10, 102, 216);
color: white; 
border-radius: 10px;
font-family:'San Francisco', Helvetica, Arial, san-serif;
}

.button3:hover {
background-color: #f44336;
color: white;
}


#prevBtn {
    background-color: #e7e7e7;
    color: black;
}

.footer1 {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(94, 92, 230);
   color: white;
   text-align: center;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}


.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #ff0000;
}
keyframes gradBG {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

</style>
<body>
    
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.1.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.1.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
<div id="navbar" id="myTopnav">
        <a class="active" href="https://2k19magnumopus.000webhostapp.com/">Home</a>
        <a href="https://2k19magnumopus.000webhostapp.com/">About</a>
        <a href="https://2k19magnumopus.000webhostapp.com/">Events</a>
      </div>



<form id="regForm" action="signact.php" method="POST">

  <h1>Register:</h1><br>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <p><input placeholder="School" oninput="this.className = ''" name="sname" required></p><br>
    <p><input placeholder="Teacher in charge" oninput="this.className = ''" name="tname" required></p><br>
    <p><input placeholder="Teacher's contact number" type="number" oninput="this.className = ''" name="tnum" required></p><br>
    <p><input placeholder="Teacher's Email" type="email" oninput="this.className = ''" name="tmail" required></p>
  </div>

  <div class="tab"><h3>Excelsior (Std 9-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="ep1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="ep2"></p><br>
    <p><input placeholder=" participant 3" type="text" oninput="this.className = ''" name="ep3"></p><br>
    <p><input placeholder=" participant 4" type="text" oninput="this.className = ''" name="ep4"></p><br>
    <p><input placeholder=" participant 5" type="text" oninput="this.className = ''" name="ep5"></p><br>

  </div>

  <div class="tab"><h3>Daedal (Std 9-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="dp1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="dp2"></p><br>
    <p><input placeholder=" participant 3" type="text" oninput="this.className = ''" name="dp3"></p><br>


  </div>

  <div class="tab"><h3>Depaysment (Std 9-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="dep1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="dep2"></p><br>

  </div>

  <div class="tab"><h3>Meraki (Std 9-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="mp1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="mp2"></p><br>
    <p><input placeholder=" participant 3" type="text" oninput="this.className = ''" name="mp3"></p><br>


  </div>

  <div class="tab"><h3>Elysian (Std 119-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="elp1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="elp2"></p><br>

  </div>

  <div class="tab"><h3>Capitol couture (Std 9-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="cp1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="cp2"></p><br>
    <p><input placeholder=" participant 3" type="text" oninput="this.className = ''" name="cp3"></p><br>
    <p><input placeholder=" participant 4" type="text" oninput="this.className = ''" name="cp4"></p><br>
    <p><input placeholder=" participant 5" type="text" oninput="this.className = ''" name="cp5"></p><br>
    <p><input placeholder=" Model 1" type="text" oninput="this.className = ''" name="cp6m"></p><br>
    <p><input placeholder=" Model 2" type="text" oninput="this.className = ''" name="cp7m"></p><br>

  </div>

  <div class="tab"><h3>Incantere (Std 9-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="ip1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="ip2"></p><br>

  </div>

  <div class="tab"><h3>Vagary (Std 9-12)</h3><br>
    <p><input placeholder=" participant 1" type="text" oninput="this.className = ''" name="vp1"></p><br>
    <p><input placeholder=" participant 2" type="text" oninput="this.className = ''" name="vp2"></p><br>
    <p><input placeholder=" participant 3" type="text" oninput="this.className = ''" name="vp3"></p><br>

  </div>

  </div><br>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button class="button button3" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button class="button button3" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " valid";
      // and set the current valid status to false
      valid = true;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<div class="footer1">
  <p>Main-designer:<a href=" https://www.fiverr.com/greenworld798"style="color:#ffffff;"">Aditya Krishnan</a>,<br> Creative Design: Mathew Varghes, Co-designers: Robin, Ashwin Paul, Narendran, Rithin Nelson</p>
</div>

</body>
</html>
