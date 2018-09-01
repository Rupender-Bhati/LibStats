<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"bookDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$BookName=$_POST["BookName"];
$BookType=$_POST["Select_Diff_Pref"];
if(isset($_POST["Select_Sem"]))
{
$Sem=$_POST["Select_Sem"];
}
if(isset($_POST["Course_Select"]))
{
$Course=$_POST["Course_Select"];
}

//SearchPermutations



//flags
$flagName=0;
$flagType=0;
$flagCourse=0;
$flagSem=0;

if($BookName=="")
{
	$flagName=1;}
if($BookType=="No Preference"){
	$flagType=1;}
if($Sem=="No Preference"){
	$flagSem=1;}

if($Course=="No Preference"){
	$flagCourse=1;}

$res=null;
//ACTUAL SEARCH PERMUTATIONS
if($flagCourse==0 and $flagSem==0 and $flagType==0 and $flagName==1)
{
	$res =$conn->query("Select * from LPU_Books, book_location where Category='$BookType' and Semester='$Sem' and Programme ='$Course' and LPU_Books.id=book_location.id ");
	
}
if($flagCourse==0 and $flagSem==0 and $flagType==1 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books,, book_location where Name like '%$BookName%' and Semester='$Sem' and Programme ='$Course' and LPU_Books.id=book_location.id ");
	
	
}

if($flagCourse==0 and $flagSem==0 and $flagType==1 and $flagName==1)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Semester='$Sem' and Programme ='$Course' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==0 and $flagSem==1 and $flagType==0 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Name like '%$BookName%' And Category='$BookType' and Programme ='$Course' and LPU_Books.id=book_location.id");
	
}

if($flagCourse==0 and $flagSem==1 and $flagType==0 and $flagName==1)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Category='$BookType'  and Programme ='$Course' <strong></strong> ");
	
}

if($flagCourse==0 and $flagSem==1 and $flagType==1 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Name like '%$BookName%' Programme ='$Course' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==0 and $flagSem==1 and $flagType==1 and $flagName==1)
{
		$res =$conn->query("Select * from LPU_Books, book_location where  Programme ='$Course' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==1 and $flagSem==0 and $flagType==0 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Name like '%$BookName%' And Category='$BookType' and Semester='$Sem' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==1 and $flagSem==0 and $flagType==0 and $flagName==1)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Category='$BookType' and Semester='$Sem' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==1 and $flagSem==0 and $flagType==1 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Name like '%$BookName%' and Semester='$Sem' and LPU_Books.id=book_location.id ");

}

if($flagCourse==1 and $flagSem==0 and $flagType==1 and $flagName==1)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Semester='$Sem' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==1 and $flagSem==1 and $flagType==0 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Name like '%$BookName%' And Category='$BookType' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==1 and $flagSem==1 and $flagType==0 and $flagName==1)
{
		$res =$conn->query("Select * from LPU_Books ,book_location where Category='$BookType' and LPU_Books.id=book_location.id ");
	
}

if($flagCourse==1 and $flagSem==1 and $flagType==1 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Name like '%$BookName%' and LPU_Books.id=book_location.id ");
}

if($flagCourse==0 and $flagSem==0 and $flagType==0 and $flagName==0)
{
		$res =$conn->query("Select * from LPU_Books, book_location where Name like '%$BookName%' And Category='$BookType' and Semester='$Sem' and Programme ='$Course' and LPU_Books.id=book_location.id ");
}











/*if($res->num_rows > 0)
{
	//output
	while($row = $res -> fetch_assoc())
	{
		echo("id : ".$row["id"])."  -  Name:".$row["Name"]."<br>";
	}
} else {
	echo(" NO RESULTS FOUND");
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SearchBooks</title>
<link href="../STYLESHEET/HomeCSS.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Acme|Russo+One" rel="stylesheet">
<link href="Result.css" rel="stylesheet">



<script src="../JS/JSHOME.js">
</script>
<script src="../JS/Jquery/Jquery.js">
</script>

<script src="../ScrollMagic-2.0.5/ScrollMagic-2.0.5/scrollmagic/uncompressed/ScrollMagic.js">
</script>
<script src="../JS/ScrollMagicEff.js">
</script>
<script src="../ScrollMagic-2.0.5/ScrollMagic-2.0.5/js/lib/greensock/TweenMax.min.js">
</script>
<script src="../ScrollMagic-2.0.5/ScrollMagic-2.0.5/scrollmagic/uncompressed/plugins/animation.gsap.js">
</script>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Book</title>
</head>


<body style=" background:url(../ASSETS/tweed_@2X.png); overflow-x: hidden;" >
<div id="logo" style="position:absolute; left:40%;">

<a href="../HOME/HOME.html"><img src="../LOGO2.png" style="width:300px; height:250px; padding:20px" /></a>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div id="LIBSTAT" class="Fade-in">
<h1 style="font-family: 'Russo One', sans-serif;text-align:center; color:rgb(255,255,255)" >
L I B S T A T S 
</h1>
</div>
<form id="BookSearch" class="BookSearchForm" method="post" action="access.php">
	
	<input type="text" class="TextBox" name="BookName" placeholder="Enter Book Name">&nbsp;&nbsp;&nbsp;&nbsp;
	
	
	<select class="Dropdown" name="Select_Sem">
		<option>Select Semester</option>
		
		<option id="Sem1">1</option>
		<option id="Sem2">2</option>
		<option id="Sem3">3</option>
		<option id="Sem4">4</option>
		<option id="Sem5">5</option>
		<option id="Sem6">6</option>
		<option id="Sem7">7 </option>
		<option id="Sem8">8</option>
		<option id="Nopref">No Preference</option>
		
	</select>
	&nbsp;&nbsp;&nbsp;&nbsp;
	
	
	
	<select class="Dropdown" name="Select_Diff_Pref">
	<option> Select your preferred book type </option>
	<option id="ExamOrient">Exam Oriented</option>
	<option id="IntRd">Interest Reading</option>
	<option id="Digests">Digests</option>
	<option id="Course">Course Oriented</option>
	<option id="Workbooks">WorkBooks</option>
	<option id="Literature">Literature</option>
	<option id="NULL_Type">No Preference</option>
	</select>
	&nbsp;&nbsp;&nbsp;&nbsp;
	
	
	
	<select class="Dropdown" name="Course_Select">
		
		<option> Select Programme</option>
		<option id="CS">CS</option>
		<option id="ECE">ECE</option>
		<option id="MEC">MEC</option>
		<option id="NULL">No Preference</option>
		
		
	</select>
	<input type="submit" class="SubmitButton" value="SEARCH">
</form>


<div id="hoverbar" onmouseover="OpenNav()">

</div>


<div id="MENU" class="vertical" style="background:url(../ASSETS/Cardboard.png); background-size:contain">
<a href="javascript:void(0)"  class="close" onClick="CloseNav()" style="border:none; box-shadow:none;">&times;</a>
<a href="SearchBook.html">Search Books</a><br />
<a id="men2" href="../WebPages/About.html"> About.html</a>
</div>
<br />
<br />

<div style="position: relative; left:10%;">
	<?php while($row =mysqli_fetch_array($res)):?>
	<br>
	<br>
	<div class="ResultBox">
		<img src="../ASSETS/QryResBook2 .png" class="attachImage"/>
		<div class="BookDetails">
			<h1 style="font-family: 'Russo One', sans-serif; font-weight: 80; font-size: 25px; overflow: hidden">&nbsp;&nbsp;&nbsp;<?php echo $row['Name'] ?></h1>
		
			<h2 style="font-family: 'Segoe UI'; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Author'] ?></h2>
		<br>&nbsp;&nbsp;
			<h3 style="font-family: 'Segoe UI'; font-weight: 100; ">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Category']?></h3>
			<h3 style="font-family: 'Segoe UI'; font-weight: 100; float: right; position: relative;right:20px">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Location']?></h3>
		</div>
	</div>
	<?php endwhile;?>
	
</div>


</body>
</html>
