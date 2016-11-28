<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Results</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="container"> 

<h5> Congratulations on completing the quiz! <br> Check your answers below: </h5>
<?php
//Variables for storing the answers to each question. Later we can use these numbers to calculate the average score for each question
$q1result = 0;
$q2result = 0;
$q3result = 0;
$q4result = 0;
$q5result = 0;
$q6result = 0;
$q7result = 0;
$q8result = 0;
$q9result = 0;
$q10result = 0;
$q11result = 0;
$q12result = 0;
$q13result = 0;
$q14result = 0;
$q15result = 0;
$q16result = 0;

//total user score
$userScore = 0;

echo "<br>";


//each question variable is an array containing the question number, the user's answer retrieved from the form, and the correct answer. We could also add the question in here.
$question1 = array ("questionNumber" => "1", "userAnswer" => $_POST["question1"], "correctAnswer" => "Charles Darwin");
$question2 = array ("questionNumber" => "2", "userAnswer" => $_POST["question2"], "correctAnswer" => "Alfred Wegener");
$question3 = array ("questionNumber" => "3", "userAnswer" => $_POST["question3"], "correctAnswer" => "Albert Einstein");
$question4 = array ("questionNumber" => "4", "userAnswer" => $_POST["question4"], "correctAnswer" => "Copernicus");
$question5 = array ("questionNumber" => "5", "userAnswer" => $_POST["question5"], "correctAnswer" => "Watson and Crick");
$question6 = array ("questionNumber" => "6", "userAnswer" => $_POST["question6"], "correctAnswer" => "vitamin B");
$question7 = array ("questionNumber" => "7", "userAnswer" => $_POST["question7"], "correctAnswer" => "adrenaline");
$question8 = array ("questionNumber" => "8", "userAnswer" => $_POST["question8"], "correctAnswer" => "sun");
$question9 = array ("questionNumber" => "9", "userAnswer" => $_POST["question9"], "correctAnswer" => "'Elements of Chemistry'");
$question10 = array ("questionNumber" => "10", "userAnswer" => $_POST["question10"], "correctAnswer" => "118");
$question11 = array ("questionNumber" => "11", "userAnswer" => $_POST["question11"], "correctAnswer" => "copper and tin");
$question12 = array ("questionNumber" => "12", "userAnswer" => $_POST["question12"], "correctAnswer" => "H2O");
$question13 = array ("questionNumber" => "13", "userAnswer" => $_POST["question13"], "correctAnswer" => "study of matter and its motion through space and time");
$question14 = array ("questionNumber" => "14", "userAnswer" => $_POST["question14"], "correctAnswer" => "law of gravitation");
$question15 = array ("questionNumber" => "15", "userAnswer" => $_POST["question15"], "correctAnswer" => "construction saw");
$question16 = array ("questionNumber" => "16", "userAnswer" => $_POST["question16"], "correctAnswer" => "Albert Einstein and Leo Szilard");

//All of the questions and the information about them are put into an array
$allQuestions = array($question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10, $question11, $question12, $question13, $question14, $question15, $question16);

//we loop through the array
for ($i=0; $i<count($allQuestions); $i++)
{

//if the user gets the question right this code runs
if ($allQuestions[$i]["userAnswer"] == $allQuestions[$i]["correctAnswer"])
{

//We run a switch within the if here to add 1 to the result for each individual question the user got right
    
	$checkResult = $allQuestions[$i]["questionNumber"];
	
	switch ($checkResult)
	{
			case "1":
            $q1result ++;
			break;
			case "2":
            $q2result ++;
			break;
			case "3":
            $q3result ++;
			break;
			case "4":
            $q4result ++;
			break;
			case "5":
            $q5result ++;
			break;
			case "6":
            $q6result ++;
			break;
			case "7":
            $q7result ++;
			break;
			case "8":
            $q8result ++;
			break;
			case "9":
            $q9result ++;
			break;
			case "10":
            $q10result ++;
			break;
			case "11":
            $q11result ++;
			break;
			case "12":
            $q12result ++;
			break;
			case "13":
            $q13ak;
			case "14":
            $q14result ++;
			break;
			case "15":
            $q15result ++;
			break;
			case "16":
            $q16result ++;
			break;
			//no default because what would it be?
		}
	
	//Add one to the total user score and echo their answer.
	$userScore++;
	echo "<font color='green'><p>Question " . $allQuestions[$i]["questionNumber"] . ": You answered " . $allQuestions[$i]["userAnswer"] . " which was the correct answer! </p></font>";
}

else 
{
	//OR ELSE if they got the question wrong we just echo their answer
	echo "<font color='red'><p>Question " . $allQuestions[$i]["questionNumber"] . ". You answered " . $allQuestions[$i]["userAnswer"] . ". The correct answer is " . $allQuestions[$i]["correctAnswer"] . "</p></font>"; 
}
}


echo "<br>";

/*
$questions = array ($_POST["question1"]=>"Charles Darwin",
                   $_POST["question2"]=> "Alfred Wegener",
                   $_POST["question3"]=>"Albert Einstein",
                   $_POST["question4"]=>"Copernicus",
				   $_POST["question5"]=>"Watson and Crick",
				   $_POST["question6"]=>"vitamin B",
                   $_POST["question7"]=>"adrenaline",
				   $_POST["question8"]=>"sun",
                   $_POST["question9"]=>"'Elements of Chemistry'",
				   $_POST["question10"]=>"118",
                   $_POST["question11"]=>"copper and tin",
				   $_POST["question12"]=>"H2O",
                   $_POST["question13"]=>"study of matter and its motion through space and time",
				   $_POST["question14"]=>"law of gravitation",
                   $_POST["question15"]=>"construction saw",
				   $_POST["question16"]=>"Albert Einstein and Leo Szilard");

foreach ($questions as $question=>$answer)
{

if ($question == $answer)
	{
	$userScore++;
	echo "<font color='green'>You answered " . $answer . " which is the correct answer!</font><br>";
	}
else
	{	
	echo "<font color='red'>You answered " . $question . ". The correct answer was " . $answer . ".</font><br>";
	}

}

*/

//Switch checks user score and assigns a value to the judgement variable based on how you did
switch ($userScore) 
{
		case $userScore<4:
            $judgement = "You're an idiot ";
			break;
		case $userScore<8:
            $judgement = "Not a great score ";
			break;
		case $userScore>8:
            $judgement = "Well done ";
			break;
		case $userScore>12:
            $judgement = "Wow! Excellent score ";
			break;
		default:
			$judgement = "Well done ";
			
}

////////////////////////
/*WORKING OUT AVERAGE*/

/*Array of users score by answer*/
$averageScore = array ($q1result, $q2result, $q3result, $q4result, $q5result, $q6result, $q7result,$q8result, $q9result, $q10result, $q11result, $q12result, $q13result, $q14result, $q15result, $q16result);

/*Open up the average file*/
$average = file_get_contents("files/average.txt");

/*Turn the string data into an array using explode*/
$averageExplode = explode("~", $average);


/*Loop through that array. Take the explode value (which is our running total) and add the $averageScore values, (the values this round) to them*/
for ($i=0; $i < count($averageExplode); $i++)

{
 $averageScore[$i] = $averageExplode[$i] + $averageScore[$i];
}

/*Make the average score a string, upload it to the average.txt file*/
$averageImplode = implode("~", $averageScore);

/*Jack - I changed the "a" to a "w+"so that the old info gets overwritten, which is what we want.<br>
See php.net:
http://php.net/manual/en/function.fopen.php
*/
$myfile = fopen("files/average.txt", "w+");

fwrite($myfile, $averageImplode);



/*run through the loop and give averages*/
for ($i=0; $i < count($averageScore); $i++)
{
	echo "<p>" . $averageScore[$i] . " users answered Question " . $allQuestions[$i]["questionNumber"] . " correctly</p>";
	}


//////////////////////////////
/*USERSCORE & SCOREBOARD*/

$name = $_POST["name"];

$final = array('name'=>"$name", 'score'=>"$userScore");


$finalinfo = $final['name'] . " scored: " . $final['score'] ."<br>";

//Learnt fopen and fwrite from - http://www.w3schools.com/php/php_file_open.asp
$myfile = fopen("files/scores.txt", "a");

fwrite($myfile, $finalinfo);

$leaders = file_get_contents("files/scores.txt");


echo "<br>";

echo $judgement . $final['name'] . ". You got " .$final['score'] . " out of 16.";

echo "<br>";


?>

<!--Learnt about html tables from - http://www.w3schools.com/html/html_tables.asp  -->
<table border="1" style="width:30%">
<tr>
<th>Scoreboard</th>
</tr>
<tr>
<td><?php echo "<p>" . $leaders . "</p>"; ?> </td>
</tr>
</table>

<br>




</div>
</body>
</html>