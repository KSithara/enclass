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
                <div class="col-lg-12">
                    <div class="panel panel-default col-lg-6 col-lg-offset-3">
                        <div class="panel-heading">
                            Basic information of students
                        </div>



                        <div class="panel-body">
                            <div class="row">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Student name">
                                        </div>
                                        <div class="form-group">
                                            <label>School</label>
                                            <input class="form-control" placeholder="School name">
                                        </div>
                                        

                                        <div class="col-lg-4">
                                            <label>Grade</label>
                                            <div class="form-group">
                                                <select class="doropdown form-control">
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
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">1
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">2
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Home address</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>

                                        <center>
                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                        </center>
                                    </form>
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


