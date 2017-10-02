﻿<?php include("header.php") ?>



<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th{
    text-align: center;
    font-size: 20px;
    font-family:  'Open Sans', sans-serif;
}
td{
    text-align: left; 
    padding: 10px  
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #424242;
    color: white;
}
.two {
    padding-top: 100px;
}
.one {
    padding-top: 100px;
}
#c{
    text-align: center;
}
.btn-huge{
    padding-top:20px;
    padding-bottom:40px;
    font-size: 30px
}


/*-----------------------
     Search bar
-------------------------*/

.add-on .input-group-btn > .btn {
  border-left-width:0;left:-2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
/* stop the glowing blue shadow */
.add-on .form-control:focus {
 box-shadow:none;
 -webkit-box-shadow:none; 
 border-color:#cccccc; 
}
.form-control{width:20%}

</style>









<!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="add.php"><i class="fa fa-edit"></i> Add Students</a>
                    </li>
                    <li>
                        <a class="active-menu" href="profile.php"><i class="fa fa-desktop"></i> Student Profile </a>
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
                            Student Profile
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->



                 <div class="row">
                    <center>

                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="row">
                            <form class="navbar-form" role="search">
                                <div class="input-group add-on">
                                  <input class="form-control" placeholder="Enter the Student's name" name="srch-term" id="srch-term" type="text">
                                  <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                  </div>
                                </div>
                            </form>
                       
                        </div>
                    </div>
                 </center>
                </div>





                <div class="row one">
                    <div class="col-lg-12">
                        <div class="panel panel-default ">
                            <div class="panel-heading">
                                Payemnt details per year<br>
                            </div>


                            <div class="panel-body">
                                <div class="row">
                                        

                                    <table id="t01">
                                      <tr>
                                        <th>Jan</th>
                                        <th>Feb</th> 
                                        <th>Mar</th>
                                        <th>April</th> 
                                        <th>May</th>
                                        <th>June</th> 
                                        <th>July</th>
                                        <th>Aug</th> 
                                        <th>Sep</th>
                                        <th>Oct</th> 
                                        <th>Nov</th>
                                        <th>Dec</th> 
                                      </tr>
                                      <tr>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td id="c"></td>
                                        <td></td>
                                      </tr>
                                    </table>




                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>





                <div class="row two">
                    <div class="col-lg-12">
                        <div class="panel panel-default col-lg-8 col-lg-offset-2">
                            <div class="panel-heading">
                                Basic information of students<br>
                            </div>


                            <div class="panel-body">
                                <div class="row">
                                        

                                    <table id="t01">
                                      <tr>
                                        <th id="c">Field</th>
                                        <th>Data</th> 
                                      </tr>
                                      <tr>
                                        <td id="c">Name</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td id="c">Grade</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td id="c">Class</td>
                                        <td>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</td>
                                      </tr>
                                      <tr>
                                        <td id="c">School</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td id="c">Tp.No.</td>
                                        <td></td>
                                      </tr>
                                    </table>




                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>




                 
              


<?php include("footer.php") ?>