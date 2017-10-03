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
                    <div class="col-lg-2">
                        <div class="panel panel-default col-lg-12">
                            <div class="panel-body">
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #b40404">Grade 1</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #b45f04">Grade 2</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #aeb404">Grade 3</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #5fb404">Grade 4</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #04b431">Grade 5</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #04b4ae">Grade 6</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #0431b4">Grade 7</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #5f04b4">Grade 8</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #b404ae">Grade 9</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #b4045f">Grade 10</button>
                                </div>
                                <div class="line">
                                    <button type="#" class="btn but btn-long btn-default" style="background-color: #585858">Grade 11</button>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->






                    <div class="col-lg-10">
                        <div class="panel panel-default col-lg-12">
                            <div class="panel-body">
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
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                

                

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
});
</script>


<?php include("footer.php") ?>






/*The list of students in each class should appear when clicked on the buttons*/