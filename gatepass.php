<?php 
    include('config.php');
    session_start();
	$today = date('Y-m-d');
    $result = $db->query("SELECT id,date,code,name,place,TIME_FORMAT(time, '%r')time,emp_sign,status,auth_sign FROM gatepass WHERE DATE(date) = '$today' ORDER BY id DESC");
    $data_record = $result->num_rows;
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>GatePass</title>
 <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <!-- REACT LIBRARY -->

  <script src="https://unpkg.com/react@16/umd/react.development.js"></script>

  <!-- REACT DOM LIBRARY -->

  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>

  <!-- BABEL LIBRARY -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.25.0/babel.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--end react js -->
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
<script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
   </script>
   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

  <!-- JAVASCRIPT -->
  <script type="text/babel">
    // RENDER REACT TO THE DOM - WILL ACCEPT TWO ARGUMENTS (REACT WHAT, REACT WHERE)
	function Clock(props) {
  return (
    <div>
      <h2>{props.date.toLocaleTimeString()}</h2>
    </div>
  );
}

function tick() {
  ReactDOM.render(
    <Clock date={new Date()} />,
    document.getElementById('app')
  );
}

setInterval(tick, 1000);

  </script>
          
</head>

<body>

  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="https://www.viari.in/media/images/default/logo_1_1.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="https://viari.in/skin/frontend/tm_themes/theme777/images/logoimage.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <!--<a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>-->
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        
        <!-- Divider -->
        <hr class="my-3">
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">GatePass</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!--<div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                </div>
              </div>-->
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
        <div id="app">	</div>

		 <div class="row">
      <div class="col-md-4"></div>
	  
      <div class="col-md-4"> <h2> <!--<a href="http://www.mostlikers.com/2017/04/ajax-add-edit-bootstrap-model-php-jquery.html"></a>--></h2></div>
      <div class="col-md-4">
        <?php $apage = array('id'=>'','date'=>'');?>
        <script>var page_0 = <?php echo json_encode($apage)?></script>
		 <a href ="http://192.168.0.64/viaridash/viari.php" class="btn btn-primary back btn-lg">Go Back</a>
        <p></p>
      </div>
  </div>
  <?php $apage = array('p_id'=>'','date'=>'');?>
                <script>var page_0 = <?php echo json_encode($apage)?></script>
				<h3><a data="page_0" class="model_form btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fas fa-plus-circle"></i> Add New</a></h3>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">GatePass</h3>
            </div>
			
                   <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Date</th>
					<th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Place</th>
                    <th scope="col">Time</th>
					<!--<th scope="col">Emp.Sign</th>-->
					<th scope="col">Status</th>
					<th scope="col">Auth.Sign</th>
                  </tr>
                </thead>
				
				<tbody id="myTable">
                <?php if(isset($result) && ($data_record) > 0)  : $i=1; ?>
                    <?php  while ($users = mysqli_fetch_object($result)) { ?>

                        <tr class="<?=$users->id?>_del">
                            
                            <td><?=$users->date;?></td>
                            <td><?=$users->code;?></td>
                            <td><?=$users->name;?></td>
                            <td><?=$users->place;?></td>
                            <td><?=$users->time;?></td>
                            <!--<td><?=$users->emp_sign;?></td>-->
							<td><?=$users->status;?></td>
							<td><?=$users->auth_sign;?></td>
							
                            <script>var page_<?php echo $users->id ?> = <?php echo json_encode($users);?></script>
                            <!--<td><a data="<?php //echo 'page_'.$users->id ?>" class="model_form btn btn-info btn-sm" href="#"> <span> <i class="fas fa-edit"></i></span></a>
                            <a data="<?php //echo  $users->id ?>" title="Delete <?php //echo $users->date;?>" class="tip delete_check btn btn-info btn-sm "><span> <i class="fas fa-trash-alt"></i></span> </a>  
							<!--<a data="<?php //echo  $users->id ?>" title="print" onclick="window.print()"  class="tip  btn btn-info btn-sm "><span> <i class="fas fa-print"></i></span> </a>-->
                            <!--</td>-->
                        </tr>
                <?php $i++; } ?>
            <?php else : echo '<tr><td colspan="8"><div align="center">-------No record found -----</div></td></tr>'; ?>
           <?php endif; ?>               
            </tbody>
			
				
              </table>
			 
    </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
	  <!-- Footer -->
    <script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on('click','.model_form',function(){
        $('#exampleModal').modal({
          keyboard: false,
          show:true,
          backdrop:'static'
        });
        var data = eval($(this).attr('data'));
        $('#id').val(data.id);
        $('#date').val(data.date);
        $('#code').val(data.code);
        $('#name').val(data.name);
        $('#place').val(data.place);
        $('#time').val(data.time);
        //$('#emp_sign').val(data.emp_sign);
		$('#status').val(data.status);
		$('#auth_sign ').val(data.auth_sign );
		//$('#s_price').val(data.s_price);
		//$('#batch').val(data.batch);
        if(data.id!="")
            $('#pop_title').html('Edit');
        else
            $('#pop_title').html('Add');
       
    });  
    $(document).on('click','.delete_check',function(){
      if(confirm("Are you sure to delete data")){
        var current_element = $(this);
        url = "add_edit.php";
        $.ajax({
        type:"POST",
        url: url,
        data: {ct_id:$(current_element).attr('data')},
        success: function(data) { //location.reload(); 
          $('.'+$(current_element).attr('data')+'_del').animate({ backgroundColor: "#003" }, "slow").animate({ opacity: "hide" }, "slow");
        } 
      });
      }
     });     
});
</script>  
    <!-- Form modal -->
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><i class="icon-paragraph-justify2"></i><span id="pop_title">Add</span> GatePass information</h4>
        </div>
        <!-- Form inside modal -->
        <form method="post" action="add_edit.php" id="cat_form">
          <div class="modal-body with-padding">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>DATE :</label>
                   <input type="date" name="date" class="form-control datepicker" placeholder="Select date" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>CODE :</label>
                   <input type="code" name="code" id="code" class="form-control" required="true">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>NAME :</label>
                   <input type="name" name="name" id="name"  class="form-control" required="true">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>PLACE :</label>
                   <input type="place" name="place" id="place" class="form-control" required="true">
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>TIME :</label>
                   <input type="time" name="time"  value='now'  class="form-control">
                </div>
              </div>
            </div>
			<!--<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>EMP.SIGN :</label>
                   <input type="emp_sign" name="emp_sign" id="emp_sign" class="form-control" required="true">
                </div>
              </div>
            </div>-->
			<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label> STATUS:</label>
				  
				   <select   class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" name="status" id="status" disabled>
				   
        <option selected>None</option>
        <option value="Approved" class="btn btn-success">Approved</option> <!-- first option contains value="" -->
        <option value="Pending">Pending</option> 
        <option value="Rejected" class="btn btn-danger">Rejected</option> 
    </select>
	
               
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>AUTH.SIGN :</label>
                   <input type="auth_sign" name="auth_sign" id="auth_sign" class="form-control" disabled>
                </div>
              </div>
            </div>	
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
            <span id="add">
              <input type="hidden" name="id" value="" id="id">
              <button type="submit" name="form_data" class="btn btn-primary">Submit</button>
            </span>
          </div>
        </form>
      </div>
    </div>
</div>
      
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            
        </div>
      </footer>
    </div>
  </div>
  <script>
 $(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});
 </script>
  <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
		<script>
		$(function(){     
  var d = new Date(),        
      h = d.getHours(),
      m = d.getMinutes();
  if(h < 10) h = '0' + h; 
  if(m < 10) m = '0' + m; 
  $('input[type="time"][value="now"]').each(function(){ 
    $(this).attr({'value': h + ':' + m});
  });
});
		</script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>