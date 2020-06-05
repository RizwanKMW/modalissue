

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Panel</title>
  <link href="uploads/51189-sislog.png" rel="icon">
  <!-- Custom fonts for this template-->

  <!-- Page level plugin CSS-->
  <link href="dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="sb-admin.css" rel="stylesheet">
  
  <!-- Ajax modal script -->
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>

<body id="page-top">
<script src='js/submit_reset_loader.js' type='text/javascript'></script>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php">USAVE</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Mobile -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    	    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
	<li class="nav-item dropdown no-arrow mx-1" hidden>
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger"><strong>0</strong></span>
		  <i class="fas fa-bell fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1" hidden>
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger"><strong>2</strong></span>
		  <i class="fas fa-envelope fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">S</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-lg fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="uprofile.php">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal"><i class='fas fa-power-off'></i> Logout</a>
        </div>
      </li>
    </ul>

  </nav>
  
  <div class="modal fade" id="veriPhone" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header bg-info text-white">
                  <h5 class="modal-title" id="exampleModalLongTitle">Verify Phone Number</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body"> 
								 <form action="uprofile.php" method="post">
					<input type="text" name="id" value="" class="form-control" hidden>
					<input type="text" name="swiftbank_accno" value="" class="form-control" hidden>
					<input type="text" name="swiftbank_veriphone" value="03413819239" class="form-control" hidden>
					<h6 class="text-center">A verifiction code will be sent to '03413819239'. <br> <br>
					<button type="submit" name="swiftbank_confveriphone" class="btn btn-info">Continue</button>
					</h6>
				</form>
								</div>
              </div>
            </div>
          </div>
  
  <div id="wrapper">    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt text-danger"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-money-bill-alt text-success"></i>
          <span>Transactions</span>
        </a>
        <div class="dropdown-menu bg-danger" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="n-deposit.php">New Deposit</a>
          <a class="dropdown-item" href="n-withdraw.php">Withdraw Fund</a>
		  <a class="dropdown-item" href="transactions.php">Transactions Log</a>
        </div>
      </li>
	  <!--<li class="nav-item dropdown">-->
   <!--     <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
   <!--       <i class="fas fa-fw fa-paper-plane text-danger" ></i>-->
   <!--       <span>Fund Transfer</span>-->
   <!--     </a>-->
   <!--     <div class="dropdown-menu bg-danger" aria-labelledby="pagesDropdown">-->
   <!--       <a class="dropdown-item" href="sendmoney.php">To Own Bank</a>-->
   <!--       <a class="dropdown-item" href="sendmoney_.php?tt=bn2104">To Other Banks</a>-->
   <!--     </div>-->
   <!--   </li>-->
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-hammer text-warning" ></i>
          <span>Fixed Deposit</span>
        </a>
        <div class="dropdown-menu bg-danger" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="nfp.php">Submit Request</a>
          <a class="dropdown-item" href="fixed_deposit.php">Track History</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-university text-secondary" ></i>
          <span>Loan Products</span>
        </a>
        <div class="dropdown-menu bg-danger" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="lpds.php">View Packages</a>
          <a class="dropdown-item" href="loanHistory.php">My Active Loans</a>
		  <a class="dropdown-item" href="uploads/72178-gfom.png" download>Guarantor's Form</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-comments text-primary" ></i>
          <span>Help & Support</span>
        </a>
        <div class="dropdown-menu bg-danger" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="ntickets.php">Submit Ticket</a>
          <a class="dropdown-item" href="inbox.php">View Inbox</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-power-off text-danger"> </i>
          <span>Logout</span></a>
      </li>
    </ul>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Hi RIZWAN AKHTAR - 123</a>
          </li>
          
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-money-bill-alt"></i>
                </div>
                <div class="mr-10">
								<h2>$0.00 </h2></div>
				              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left">Account Balance </span>
                <span class="float-right">
                  <i class="fas fa-angle-up"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-calculator"></i>
                </div>
                <div class="mr-10">
				<h2>$0.00 </h2></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left">Ledger Balance</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
		  <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-hammer"></i>
                </div>
                <div class="mr-10">
				<h2>$0.00 </h2>
				</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left">Fixed Deposit</span>
                <span class="float-right">
                  <i class="fas fa-angle-down"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-coins"></i>
                </div>
                <div class="mr-10">
				<h2>$0.00 </h2>
				</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left">Savings Interest</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Recent Transactions</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dashbord_log" width="100%" cellspacing="0">
                <thead>
                  <tr>
	                <th>Amount</th>
	                <th>Type</th>
	                <th>Method</th>
	                <th>Date</th>
	                <th>Status</th>
	                <th class="text-center">Ref.</th>
                  </tr>
                </thead>
                <tbody>
								<tr>
	            <td>
	            <span>1000</span> <span class="text-danger"> </span>
	            </td>
	            <td>Deposit </td>
	            <td>Bank Transfer</td>
	            <td>5th June, 2020</td>
				<td>
	            <span class="text-success"></span><span class="text-danger">Pending</span></div>
	            </td>
	            <td class="text-center">
																																<a href="#" name="receipt" data-toggle="modal" data-target="#tr850" id="#modalLong" class="btn btn-light btn-sm"><i class="fas fa-pen"></i></a>
	            <div class="modal fade" id="tr850" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Complete Transaction</h5>
					  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					  </button>
					</div>
					<div class="modal-body">
					<form action="" method="post">
										<input type="text" class="form-control" name="id" value="850" hidden>
					<input type="text" class="form-control" name="swiftbank_transref" placeholder="Enter Transaction Reference">
					</div>
					<div class="modal-footer">
					<button type="submit" name="swiftbank_subref" class="btn btn-primary">Submit</button>
										</form>
					<button class="btn btn-info" type="button" data-dismiss="modal">Close</button>
					</div>
				  </div>
				</div>
				</div>
																																</td>
	            </tr>
					           </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

      </div>
      <!-- /.container-fluid -->
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Gateway to financial freedom. Copyright (c) 2020. </span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-white">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body text-center">Ready to Leave?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="logout.php"><i class='fas fa-power-off'></i> Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="jquery.min.js"></script>
  <script src="bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="Chart.min.js"></script>
  <script src="jquery.dataTables.js"></script>
  <script src="dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="sb-admin.js"></script>
  <script  src='loan.js'></script>

  <!-- Demo scripts for this page-->
  <script src="datatables-demo.js"></script>
  <script src="chart-area-demo.js"></script>

</body>

</html>
