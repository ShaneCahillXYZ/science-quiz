<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Quiz</title>


<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

<script language ="javascript" type="text/javascript">
<!--



function formValidation2() 
	{
    	if (document.getElementById("question1a").checked || document.getElementById("question1b").checked || document.getElementById("question1c").checked || document.getElementById("question1d").checked) 
		{
			return true;
		}
		else
    	{
        	alert("Please answer all questions.");
        	return false;
   	 	}
	}


-->
</script>


</head>

<body>
<div id="container">
<h6>    Welcome to the best Science Quiz!</h6>


<form id="quiz" name="quiz" enctype="multipart/form-data" action="results.php" method="POST" onSubmit="return formValidation2()">
 
 <!--Fieldset tags seperate all the information within the form so they can be dealt with individually within one form-->
<fieldset id="details" >   
<h4>Please Enter Your Name:</h4><input type="text" name="name" id="name" maxlength="20" >
<br>
<!--
Age: <input type="text" name="age" id="age" maxlength="3">
<br>
Gender: <select name="gender" id="gender">
<option value="0">Please Select</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select>
<br>
-->

<h2>Famous scientific theories</h2>
    
    <fieldset id="question1" >
    <h4>1. Evolution is the biological model for the history of life on Earth. Who was the person that formulated the scientific theory of evolution by natural selection?</h4>
    <p>
    <input type="radio" name="question1" id="question1a" value="Carolus Linnaeus"> Carolus Linnaeus<br>
	<input type="radio" name="question1" id="question1b" value="Jean Baptiste Lamarck"> Jean Baptiste Lamarck<br>
	<input type="radio" name="question1" id="question1c" value="Russell Wallace"> Russell Wallace<br>
	<input type="radio" name="question1" id="question1d" value="Charles Darwin"> Charles Darwin<br>
	</fieldset>
	</p>

    <fieldset id="question2">
	 <h4>2. The earth we live on is constantly moving beneath our feet. In the 1960s a theory of plate tectonics was released to explain this movement, but whos theory in 1912 was disregarded at first?</h4>
    <p>
    <input type="radio" name="question2" id="question2" value="J. Tuzo Wilson"> J. Tuzo Wilson<br>
	<input type="radio" name="question2" id="question2" value="Alfred Wegener"> Alfred Wegener<br>
	<input type="radio" name="question2" id="question2" value="Harry Hess"> Harry Hess<br>
	<input type="radio" name="question2" id="question2" value="Dan McKenzie"> Dan McKenzie<br>
	</fieldset>
    </p>

<fieldset id="question3">
	 <h4>3. General relativity is current description of gravitation in modern physics. Which of these famous scientists was the theory of general relativity made by?</h4>
    <p>
    <input type="radio" name="question3" id="question3" value="Albert Einstein"> Albert Einstein<br>
	<input type="radio" name="question3" id="question3" value="Isaac Newton"> Isaac Newton<br>
	<input type="radio" name="question3" id="question3" value="Galileo Galilei"> Galileo Galilei<br>
	<input type="radio" name="question3" id="question3" value="Marie Curie"> Marie Curie<br>
	</fieldset>
    </p>

<fieldset id="question4">
	 <h4>4. Before the Heliocentric Theory it was thought that the Earth was the center and things such as the sun revolved around it. Which Greek scientist came up with the heliocentric theory?</h4>
    <p>
    <input type="radio" name="question4" id="question4" value="Pytheas"> Pytheas<br>
	<input type="radio" name="question4" id="question4" value="Aristotle"> Aristotle<br>
	<input type="radio" name="question4" id="question4" value="Copernicus"> Copernicus<br>
	<input type="radio" name="question4" id="question4" value="Thales"> Thales<br>
	</fieldset>
    </p>

<h2>Biology</h2>

<fieldset id="question5">
	 <h4>5. DNA is short for deoxyribonucleic acid. It is found in the cells of every living thing such as humans, animals and plants. Which people first described the DNA structure?</h4>
    <p>
    <input type="radio" name="question5" id="question5" value="Watson and Crick"> Watson and Crick<br>
	<input type="radio" name="question5" id="question5" value="David Baltimore"> David Baltimore<br>
	<input type="radio" name="question5" id="question5" value="Alfred Kinsey"> Alfred Kinsey<br>
	<input type="radio" name="question5" id="question5" value="Patrick Bateson"> Patrick Bateson<br>
	</fieldset>
    </p>

<fieldset id="question6">
	 <h4>6. Which vitamin group does Folic Acid fall under?</h4>
    <p>
    <input type="radio" name="question6" id="question6" value="vitamin A"> Vitamin A<br>
	<input type="radio" name="question6" id="question6" value="vitamin B"> Vitamin B<br>
	<input type="radio" name="question6" id="question6" value="vitamin C"> Vitamin C<br>
	<input type="radio" name="question6" id="question6" value="vitamin D"> Vitamin D<br>
	</fieldset>
    </p>

<fieldset id="question7">
	 <h4>7. Hormones are chemical substances that are produced in one part of the body and are transported to another part of your body to help control how your cells and organs work. Which hormone is known as the "Emergency hormone"?</h4>
    <p>
    <input type="radio" name="question7" id="question7" value="serotonin"> Serotonin<br>
	<input type="radio" name="question7" id="question7" value="insulin"> Insulin<br>
	<input type="radio" name="question7" id="question7" value="adrenaline"> Adrenaline<br>
	<input type="radio" name="question7" id="question7" value="melatonin"> Melatonin<br>
	</fieldset>
    </p>

<fieldset id="question8">
	 <h4>8. Ever since the creation of the Earth, living beings on the planet have used one main source of energy to do things such as feed, move and reproduce. What is this source of energy?</h4>
    <p>
    <input type="radio" name="question8" id="question8" value="wind"> Wind<br>
	<input type="radio" name="question8" id="question8" value="nuclear"> Nuclear<br>
	<input type="radio" name="question8" id="question8" value="sun"> Water<br>
	<input type="radio" name="question8" id="question8" value="wind"> Sun<br>
	</fieldset>
    </p>

<h2>Chemistry</h2>

<fieldset id="question9">
	 <h4>9. Antoine Lavoisier is known as the Father of Modern Chemistry, which book did he write in 1787 to put forward his ideas?</h4>
    <p>
    <input type="radio" name="question9" id="question9" value="'Elements of Chemistry'"> Elements of Chemistry<br>
	<input type="radio" name="question9" id="question9" value="'The Sceptical Chymist'"> The Sceptical Chymist<br>
	<input type="radio" name="question9" id="question9" value="'Introduction to General Chemistry'"> Introduction to General Chemistry<br>
	<input type="radio" name="question9" id="question9" value="'A Textbook of Chemistry'"> A Textbook of Chemistry<br>
	</fieldset>
    </p>

<fieldset id="question10">
	 <h4>10. The periodic table is a table of the chemical elements arranged in order of atomic number. On the 7th of January four new elements were added to the periodic table. How many elements are there on the table as of now?</h4>
    <p>
    <input type="radio" name="question10" id="question10" value="118"> 118<br>
	<input type="radio" name="question10" id="question10" value="75"> 75<br>
	<input type="radio" name="question10" id="question10" value="102"> 102<br>
	<input type="radio" name="question10" id="question10" value="88"> 88<br>
	</fieldset>
    </p>

<fieldset id="question11">
	 <h4>11. An alloy is a mixture of two or more metallic elements in order to improve it’s properties. What is bronze an alloy of?</h4>
    <p>
    <input type="radio" name="question11" id="question11" value="steel and pig iron"> Steel and pig iron<br>
	<input type="radio" name="question11" id="question11" value="copper and zinc"> Copper and zinc<br>
	<input type="radio" name="question11" id="question11" value="copper and tin"> Copper and tin<br>
	<input type="radio" name="question11" id="question11" value="iron and zinc"> Iron and zinc<br>
	</fieldset>
    </p>

<fieldset id="question12">
	 <h4>12. Water is perhaps our most available chemical. What is the chemical formula for water?</h4>
    <p>
    <input type="radio" name="question12" id="question12" value="CO2"> CO2<br>
	<input type="radio" name="question12" id="question12" value="Au"> Au<br>
	<input type="radio" name="question12" id="question12" value="Na"> Na<br>
	<input type="radio" name="question12" id="question12" value="H2O"> H2O<br>
	</fieldset>
    </p>
    
 <h2>Physics</h2>
    
    <fieldset id="question13">
	 <h4>13. Physics originates from the ancient Greek word “phusikḗ”. What is physics the study of?</h4>
    <p>
    <input type="radio" name="question13" id="question13" value="study of matter and its motion through space"> Study of matter and its motion through space and time<br>
	<input type="radio" name="question13" id="question13" value="study of matter and the chemical reaction between substances"> Study of matter and the chemical reactions between substances<br>
	<input type="radio" name="question13" id="question13" value="study of life and living organisms"> Study of life and living organisms<br>
	<input type="radio" name="question13" id="question13" value="study of the mind and behaviour"> Study of the mind and behaviour<br>
	</fieldset>
    </p>
    
    <fieldset id="question14">
	 <h4>14. Isaac Newton is perhaps the most well-known physicist. What law is Isaac Newton most famous for?</h4>
    <p>
    <input type="radio" name="question14" id="question14" value="law of gravitation"> Law of gravitation<br>
	<input type="radio" name="question14" id="question14" value="laws of thermodynamics"> Laws of Thermodynamics<br>
	<input type="radio" name="question14" id="question14" value="law of electrostatics"> Law of electrostatics<br>
	<input type="radio" name="question14" id="question14" value="law of conservation of energy"> Law of conservation of energy<br>
	</fieldset>
    </p>
    
    <fieldset id="question15">
	 <h4>15. In physics, a lever is known as a simple machine that gives you a mechanical advantage in either moving or applying a force to something. Which of the following are not a lever?</h4>
    <p>
    <input type="radio" name="question15" id="question15" value="fork"> Fork<br>
	<input type="radio" name="question15" id="question15" value="sea-saw"> Sea-saw<br>
	<input type="radio" name="question15" id="question15" value="Hammer's claws"> Hammer’s claws<br>
	<input type="radio" name="question15" id="question15" value="construction saw"> Construction saw<br>
	</fieldset>
    </p>
	
    <fieldset id="question16">
	 <h4>16. Nuclear physics played a very important part in the making of the Atomic Bomb.Which two famous physicists pitched the idea of the atomic bomb in October 1939 to the US president?</h4>
    <p>
    <input type="radio" name="question16" id="question16" value="Albert Einstein and Leo Szilard"> Albert Einstein and Leo Szilard<br>
	<input type="radio" name="question16" id="question16" value="Marie Curie and Pierre Curie"> Marie Curie and Pierre Curie<br>
	<input type="radio" name="question16" id="question16" value="Ralph Kronig and George Uhlenbeck"> Ralph Kronig and George Uhlenbeck<br>
	<input type="radio" name="question16" id="question16" value="Erwin Schrodinger and Werner Heisenberg"> Erwin Schrodinger and Werner Heisenberg<br>
	</fieldset>
    </p>

<input type="submit" value="Submit" >

</form>

</div>

</body>
</html>