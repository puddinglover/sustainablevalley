<?php require('header.php'); ?>

<?php require('nav.php'); ?>

<section class="contact">
    <div class="wrapper">
        <div class="page-name">
            <h1>Contact</h1>
            <p>This is a short description of what the page contains and what the user can read/See here!</p>
        </div>
    </div>
    
    <div class="bgPicture bgPicture--contact"><div class="bg__overlay">    </div> </div>

    <div class="wrapper">


    <ul class="flex-container">
        <li class="contact__person">
            <img src="https://spotter.one/images/S%C3%B8ren-Winther-Lundby.jpg" alt="">
        </li>
        <li class="contact__person">
            <h1>Soren Winther</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </li>
        <li class="contact__person">
            <img src="https://spotter.one/images/Thusan-Ceylons.jpg" alt="">
        </li>
        <li class="contact__person">
            <h1>Thusan Ceylons</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </li>
    </ul>
    <ul class="flex-container">

    </ul>
    <!-- Google Maps division tag for inserting and styling map -->
     <div id="map"></div>
     
     <!-- Google Maps 3rd Party -->
    <script>
      function initMap() {
        var uluru = {lat: 56.158690, lng: 10.215539};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru,
          // added options, so its not possible to zoom or drag map
          disableDefaultUI: true,
          draggable: false, 
          zoomControl: false, 
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <!-- Async, Defter makes the api call load after the page load, and makes it ansynchronis-->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3l2u0cQC_5VwtsBgC4iIQS8Il4eUz2GU&callback=initMap">
    </script>
</div>
</section>


<?php require('footer.php'); ?>
