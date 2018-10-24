<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vidas | Register</title>
  <?php include("includes/head-section.php"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <?php include("includes/header-section.php");?>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <?php include("includes/aside-section.php");?>  
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Member
        <small>add new member</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Member</li>
      </ol>
    </section>
<script type="text/javascript">
function hideme(){
  document.getElementById("rp").style.display="none";
  document.getElementById("np").style.display="block";
}
function showme(){
  document.getElementById("rp").style.display="block";
  document.getElementById("np").style.display="none";
}
</script>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Register New Member</h3>
        </div>
        <div class="box-body">
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="radiotype" onclick="hideme()" checked>New Registration
              </label>
              <label class="radio-inline">
                <input type="radio" name="radiotype" onclick="showme()" >Re-purchase Registration
              </label>
            </div>
          <form role="form" name="regiterform" id="rp" style="display: none;" action="includes/do-action/register.php" method="post">
              <div class="box-body">
                <div class="form-group">
                    <label for="repurchase">Re-Purchase Amount</label>
                        <input type="number" class="form-control" name="repurchase_amt" id="repurchase" placeholder="Repurchase Amount">
                </div>  
                <div class="form-group">
                    <label for="userid">User ID</label>
                        <input type="text" class="form-control" required="required" name="sponsorid" id="sponsor" placeholder="sponsor ID">
                        <input type="hidden" name="registertype" value="newr">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
          <form role="form" name="regiterform" id="np" action="includes/do-action/register.php" method="post">    
                <div class="newuser">
                    <div class="form-group">
                      <label for="sponsor">Sponsor ID</label>
                      <input type="text" class="form-control" required="required" name="sponsorid" id="sponsor" placeholder="sponsor ID">
                      <input type="hidden" name="registertype" value="newn">
                    </div>
                    <div class="form-group">
                      <label for="member-fname">First Name</label>
                      <input type="text" class="form-control" required="required" name="fname" id="member-fname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="member-lname">Last Name</label>
                      <input type="text" class="form-control" name="lname" value="lastname" id="member-lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Contact No</label>
                      <input type="number" class="form-control" name="mobile" value="9988776655" id="mobile" placeholder="Contact No">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Email Address</label>
                      <input type="email" class="form-control" name="email" value="email@email.com" id="email" placeholder="eg . xxxx@mail.com">
                    </div>
                    <div class="form-group">
                      <label for="pancarde">Pancard No</label>
                      <input type="text" class="form-control" name="pancard" value="VIK07819IN" id="pancard" placeholder="Pancard No">
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select name="gender" id="gender" class="form-control" required="required">
                        <option value="male" selected="">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div> <!-- / box-body first col-->
            </form>
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12" id="displaynone">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php include("includes/footer-section.php"); ?>
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  <?php include("includes/pages-scripts-section.php"); ?>
</body>
</html>
