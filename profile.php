<?php include 'includes/header.php' ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include 'includes/sidebar.php' ?>
  <div class="wrapper">

    <!-- Main Header -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          User Profile
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Examples</a></li>
          <li class="active">User profile</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
                <h3 class="profile-username text-center">Nina Mcintire</h3>
                <p class="text-muted text-center">Software Engineer</p>

                <ul class="socials list-inline">
                  <li ><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                <p class="text-muted">Malibu, California</p>


              </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">General Information</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i>  Position: </strong>Manager<hr>
                <strong><i class="fa fa-book margin-r-5"></i>  Status: </strong>Admin<hr>
                <strong><i class="fa fa-book margin-r-5"></i>  Last Logged in </strong>Manager<hr>
                <strong><i class="fa fa-book margin-r-5"></i>  Position: </strong>Manager
              </div><!-- /.box-body -->
            </div><!-- /.box -->

          </div><!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                      <span class='username'>
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                        </span>
                      <span class='description'>Shared publicly - 7:30 PM today</span>
                    </div><!-- /.user-block -->
                    <p>
                     What he do?
                    </p>
                    <ul class="list-inline">
                      <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                      <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                      <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                    </ul>

                    <input class="form-control input-sm" type="text" placeholder="Type a comment">
                  </div>

                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="settings">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div><!-- /.tab-pane -->
              </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
          </div><!-- /.col -->
        </div><!-- /.row -->

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php include 'includes/footer.php' ?>