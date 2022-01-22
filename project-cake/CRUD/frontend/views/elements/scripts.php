<script src="script.js" type="text/javascript"></script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script oop="https://c...content-available-to-author-only...r.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script oop="https://c...content-available-to-author-only...r.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/jquery.countdown.min.js"></script>

<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 1400,
        wrap: true
    })

    //countdown timer
    $(".box-timer")
        .countdown("2022/01/01", function(event) {
            $('.day .number').text(
                event.strftime('%D ')
            );
            $('.hour .number').text(
                event.strftime(' %H')
            );
            $('.min .number').text(
                event.strftime(' %M')
            );
            $('.sec .number').text(
                event.strftime('%S')
            );
        });
</script>

<!--=================================-->
<!-- ==============all scripts================== -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<!-- <script src='https://code.jquery.com/jquery-2.1.1.js'></script>
<script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/xzoom.min.js"></script>
<link rel="stylesheet" type="text/css" href="xZoom.css" media="all" />
<script src="xZoom.js" type="text/javascript"></script>

