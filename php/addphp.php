<?php include("database.php") ?>




<?php

    $nm = $_POST['fnm'];
    $tel = $_POST['ftel'];
    $adrs = $_POST['fadrs'];
    $scl = $_POST['fscl'];
    $grd = $_POST['fgrd'];
    $cls = $_POST['fcls'];



    if ($nm != '' || $tel != '' || $adrs != '' || $scl != '' || $grd != '' || $cls != '')
	{
	      
	    mysqli_query($conn, "INSERT INTO students (dnm, dtel, dadrs, dscl, dgrd, dcls) VALUES ('$nm', '$tel', '$adrs', '$scl', '$grd', '$cls')");
	        




	    echo "<br/> <span> Data inserted successfully</span>";
	}
	else
	{
	    echo "Insertion failed";
	}  
	





?>