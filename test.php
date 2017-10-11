
<?php include("header.php") ?>




<!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="add.php"><i class="fa fa-edit"></i> Add Students</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-desktop"></i> Student Profile </a>
                    </li>
                    <li>
                        <a href="view.php"><i class="fa fa-bar-chart-o"></i> View Classes</a>
                    </li>
                    <li>
                        <a href="time.php"><i class="fa fa-qrcode"></i> Time table</a>
                    </li>
                    
                    <li>
                        <a href="income.php"><i class="fa fa-table"></i> Income</a>
                    </li>
                    


                    
                    <li>
                        <a href="empty.php"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Add student
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                 











            <div class="row">
                    <div class="panel panel-default col-lg-6 col-lg-offset-3">
                        <div class="panel-heading">
                            Basic information of students<br>
                        </div>
                        <div style="text-align: right;">
                            <small><i>All the fields are compulsary!</i></small>
                        </div>


                        <div class="panel-body">
                            <div class="row">



<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bwea";

$con =new mysqli($host,$user,$pass,$db);
if($con->connect_error){
    die("Connection faild ".$con->connect_error);
}
?>
<?php
// define variables and set to empty values

$boolean = TRUE;


//$catname = $catdes =  ""; //$image  =


if(isset($_POST["fnm"])){$nm = test_input($_POST["fnm"]);}
if(isset($_POST["fscl"])){$scl = test_input($_POST["fscl"]);}
if(isset($_POST["fgrd"])){$grd = test_input($_POST["fgrd"]);}
if(isset($_POST["fcls"])){$cls = test_input($_POST["fcls"]);}
if(isset($_POST["ftel"])){$tel = test_input($_POST["ftel"]);}
if(isset($_POST["fadrs"])){$adrs = test_input($_POST["fadrs"]);}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //$image = test_input($_POST["image"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>








        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


            <!--div class="form-group">
                <label for="name">Name</label>
                <input class= "form-control" type="text" id="name" name="name" placeholder="Item name..">
            </div>

            <div class="form-group">
                <label for="price">School</label>
                <input class= "form-control" type="text" id="price" name="price" placeholder="Unit price..">
            </div-->
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="fnm" type="text" placeholder="Student name">
            </div>
            <div class="form-group">
                <label>School</label>
                <input class="form-control" name="fscl" type="text" placeholder="School name">
            </div>
            <div class="form-group">
                <label>Gurdian's phone number</label>
                <input class="form-control" name="ftel" type="text" placeholder="Phone number">
            </div>
                                        
            <div class="col-lg-4">
                <label>Grade</label>
                <div class="form-group">
                    <select class="doropdown form-control" name="fgrd">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-8">
                <label>Class</label>
                <div class="form-group">
                    <div class="radio">
                        <label>
                        <input type="radio" name="fcls" id="optionsRadios1" value="option1" checked="">class 1
                        </label>
                        <label> - time 1 </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="fcls" id="optionsRadios2" value="option2">class 2
                        </label>
                        <label> - time 2  </label>
                    </div>
                </div>
            </div>

                                        
            <div class="form-group">
                <label>Home address</label>
                <textarea class="form-control" name="fadrs" rows="3"></textarea>
            </div>


            <center> 
                <input type="submit" name="submit" value="Submit" class="btn but badd btn-default">
            </center>



        </form>
 


<?php

if (isset($_POST["submit"])){

    if((!empty($_POST["fnm"]))&&(!empty($_POST["fscl"]))&&(!empty($_POST["ftel"]))&&(!empty($_POST["fgrd"]))&&(!empty($_POST["fcls"]))&&(!empty($_POST["fadrs"]))) {

    // Perform Database Query
    $sql = "INSERT INTO students(dnm, dscl, dtel, dgrd, dcls, dadrs)
	
	VALUES ('$nm', '$scl', '$tel', '$grd', 'cls', '$adrs') ";

    // User Returned Database
    mysqli_query($con, $sql);

        echo "<div class=\"wrong\">'Item was added succesfully.'</div>";
    }
    else{
        echo "<div class=\"wrong\">'Fields are required!'</div>";

    }
    // Close Connection
}
?>



</div>
</div>
</div>
</div>


<?php include("footer.php") ?>