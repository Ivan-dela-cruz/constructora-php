</div>
<!-- END MAIN -->
<div class="clearfix"></div>
<footer>
    <div class="container-fluid">
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All
            Rights Reserved.</p>
    </div>
</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/ckeditor/ckeditor.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#pass2').keyup(function () {
            var con = $('#pass').val();
            var cont = $('#pass2').val();

            if (con == cont) {
                $('#vale').css("color","green");
            }
            else {
                $('#vale').css("color","red");
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        CKEDITOR.config.height = 300;
        CKEDITOR.config.width  = 'auto';

        CKEDITOR.replace('inmventa');
    });
</script>

</body>

</html>
