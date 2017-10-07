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

                    <div class="col-lg-4 col-lg-offset-4">
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





                <div class="row two">
                    <div class="panel panel-default col-sm-12">
                        <div class="panel-heading">
                             Payemnt details per year
                        </div>
                        <div class="panel-body col-xs-12">
                            <center>

                            <button type="#" class="btn but butt btn-default">Jan</button>
                            <button type="#" class="btn but butt btn-default">Feb</button>
                            <button type="#" class="btn but butt btn-default">March</button>
                            <button type="#" class="btn but butt btn-default">April</button>
                            <button type="#" class="btn but butt btn-default">May</button>
                            <button type="#" class="btn but butt btn-default">June</button>
                            <button type="#" class="btn but butt btn-default">July</button>
                            <button type="#" class="btn but butt btn-default">Aug</button>
                            <button type="#" class="btn but butt btn-default">Sep</button>
                            <button type="#" class="btn but butt btn-default">Oct</button>
                            <button type="#" class="btn but butt btn-default">Nov</button>
                            <button type="#" class="btn but butt btn-default">Dec</button>
                            
                            </center>
                        </div>
                                <!-- /.col-lg-6 (nested) -->
                    </div>
                            <!-- /.row (nested) -->
                </div>





            <div class="row two">
                <div class="panel panel-default col-lg-8 col-lg-offset-2">
                        <div class="panel-heading">
                             Basic information about students
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                    </tbody>
                                    </table>

                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->



                 
              


<?php include("footer.php") ?>






/*color should change to red when not paid and green when paid
  a box with paid date should be appear when hover the button */



