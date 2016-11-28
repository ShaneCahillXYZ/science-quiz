<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Quiz</title>
</head>

<body>

<?php
//This code displays the message to the user
echo "Welcome " . $_POST["name"];

echo " Let's answer some questions!";

?>

<form id="quiz" enctype="multipart/form-data" action="results.php" method="POST">
 
<fieldset id="details">   
Name:<input type="text" name="name" id="name" maxlength="20">
<br>
Age: <input type="text" name="age" id="age" maxlength="3">
<br>
Gender: <select name="gender" id="gender">
<option value="0">Please Select</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select>
<br>

    <fieldset id="question1">
    <h1>What is the answer to question one?</h1>
    <p>
    <input type="radio" name="question1" id="question1" value="1a"> 1a<br>
	<input type="radio" name="question1" id="question1" value="1b"> 1b<br>
	<input type="radio" name="question1" id="question1" value="1c"> 1c<br>
	<input type="radio" name="question1" id="question1" value="1d"> 1d<br>
	</p>
	</fieldset>


    <fieldset id="question1">
	 <h1>What is the answer to question two?</h1>
    <p>
    <input type="radio" name="question2" id="question2" value="2a"> 2a<br>
	<input type="radio" name="question2" id="question2" value="2b"> 2b<br>
	<input type="radio" name="question2" id="question2" value="2c"> 2c<br>
	<input type="radio" name="question2" id="question2" value="2d"> 2d<br>
	</fieldset>
    </p>

<input type="submit" value="Submit">

</form>



</body>
</html>