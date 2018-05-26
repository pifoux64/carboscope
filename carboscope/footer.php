
    <footer>
        <!--<div class="container">
             <?//= date('Y') ?> <a href="#" >Mentions Légales</a>
            <a href="#">Conditions générales de ventes</a>
        </div>-->
    </footer>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<!-- <script  src="/carboscope/script.js"></script> -->

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
<script>
var positionElementInPage = $('#menusup').offset().top;
$( window ).resize(function() {
    positionElementInPage = $('#menusup').offset().top;
});
$(window).scroll(
    function() {
        if ($(window).scrollTop() > positionElementInPage) {
            // fixed
            $('#menusup').addClass("fixedTop");
        } else {
            // unfixed
            $('#menusup').removeClass("fixedTop");
        }
    }
 
  );
</script>

</body>
</html>