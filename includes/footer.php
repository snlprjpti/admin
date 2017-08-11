     <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
     
    </div><!-- ./wrapper -->
    <script src="./js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./js/app.min.js"></script>
        <script type="text/javascript">
          $(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

        </script>

  </body>
</html>
