<?php 
session_start();
include "includes/sessions.php";
include "../includes/connect.php";

$res=$conn->query("SELECT * FROM review r JOIN blog b ON b.blog_id=r.blog_id ORDER BY r.review_id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "includes/header.php";?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


    <?php include "includes/navbar.php";?>


    <?php include "includes/sidebar.php";?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reviews</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reviews</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
                    <div class="container-fluid">
                        <!-- Default box -->
                        <div class="card">
                        
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>Blog Name</th>
                                            <th>Reviewer</th>
                                            <th>Rating</th>
                                            <th>Date</th>
                                            <th>Hide/Show</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = $res->fetch_assoc()){
                                         ?>
                                        <tr>
                                            <td><?php echo $row["blog_title"];?></td>
                                            <td><?php echo $row["name"];?><br><?php echo $row["email"];?></td>
                                            <td><?php echo $row["comment"];?></td>
                                            <td><span class="text-nowrap"><?php echo date('M d, Y H:i A', strtotime($row['date_reviewed']));?></span></td>
                                            <td>
                                            <div class="form-group">
                                              
                                            <form method="post" action="processes.php">
                                              <div class="custom-control custom-switch">
                                                <input type="hidden" name="update-review-status" value="<?php echo $row["review_id"];?>">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="this.form.submit();" <?php if($row["review_status"] == 1){echo "checked";} ?> >
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                              </div>
                                        </form>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include "includes/footer.php";?>
 
</div>
<!-- ./wrapper -->

<?php include "includes/scripts.php";?>
</body>
</html>

<?php
function pkgStatus($status){
  if($status == 1){
    $output = "<span class='badge badge-success'>Active</span>";
  }elseif($status == 2){
    $output = "<span class='badge badge-warning'>Inactive</span>";
  }

  return $output;
}
?>
