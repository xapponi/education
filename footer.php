</div> <!-- /.container -->

<footer class="blog-footer">
  <p>The great and amazing <a href="http://www.xanderapponi.com">Xander Apponi</a> made this incredible website!</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
