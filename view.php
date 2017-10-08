<?php include("header.php") ?>

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
                        <a href="profile.php"><i class="fa fa-desktop"></i> Student Profile </a>
                    </li>
                    <li>
                        <a class="active-menu" href="view.php"><i class="fa fa-bar-chart-o"></i> View Classes</a>
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
                            Classes <small>Show up your class details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
             




                 <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="line">
                                <center>
                                    <button type="#" class="btn but b1 btn-long btn-default">Grade 1</button>
                                    <button type="#" class="btn but b2 btn-long btn-default">Grade 2</button>
                                    <button type="#" class="btn but b3 btn-long btn-default">Grade 3</button>
                                    <button type="#" class="btn but b4 btn-long btn-default">Grade 4</button>
                                    <button type="#" class="btn but b5 btn-long btn-default">Grade 5</button>
                                    <button type="#" class="btn but b6 btn-long btn-default">Grade 6</button>
                                    <button type="#" class="btn but b7 btn-long btn-default">Grade 7</button>
                                    <button type="#" class="btn but b8 btn-long btn-default">Grade 8</button>
                                    <button type="#" class="btn but b9 btn-long btn-default">Grade 9</button>
                                    <button type="#" class="btn but b10 btn-long btn-default">Grade 10</button>
                                    <button type="#" class="btn but b11 btn-long btn-default">Grade 11</button>
                                <!-- /.col-lg-6 (nested) -->
                                </center>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->                    
                </div>
                    






                <div class="row two scroll">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="panel-heading">
                                         Basic information about students
                                    </div>
                                    <div class="panel-body ">
                                        <div class="table-responsive ">
                                            <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Jan</th>
                                                        <th>Feb</th>
                                                        <th>March</th>
                                                        <th>April</th>
                                                        <th>May</th>
                                                        <th>June</th>
                                                        <th>July</th>
                                                        <th>Sep</th>
                                                        <th>Oct</th>
                                                        <th>Nov</th>
                                                        <th>Dec</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td id="c">Name</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                  </tr>
                                                  </tbody>
                                                </table>

                                            </div>
                                            <!-- /.col-lg-6 (nested) -->

                                        </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->

                    </div>





<!--script>
$(document).ready(function(){
    $("button").click(function(){
        $("table").toggle();
    });
});
</script-->


<?php include("footer.php") ?>






/*The list of students in each class should appear when clicked on the buttons*/
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>