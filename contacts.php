<?php include('header.php'); ?>


<!-- google map --> 
<div id="map"></div>


<!-- contact form and contact details-->
<div class="container info_text contacts_style">
    <div class="row">
        <div class="col-md-10">
            <h2>Contact us</h2>
            <p>If you have any suggestions or questions you can find us via our contact details. You can also simply fill out the following form to contact us right now.</p>
            <p>Thank you!</p>
            <p>Fields with * are required.</p><br />
        </div>
        <div class="col-md-8">

            <form role="form">
                <div class="form-group">
                    <label for="name" >Your name *</label>
                    <input type="text" class="form-control" id="name"  placeholder="Please, enter your name here" required >
                </div>
                <div class="form-group">
                    <label for="email">Email address *</label>
                    <input type="email" class="form-control" id="email"  placeholder="Please, enter your email here" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" class="form-control" id="subject" placeholder="Please, enter the subject of your massage" required>
                </div>
                <div class="form-group">
                    <label for="text_area">Text *</label>
                    <textarea class="form-control" id="text_area" placeholder="Please, type your massage here" required></textarea>
                </div>
                <button type="submit" class="btn btn-default">Send</button>
            </form>

        </div>

        <div class="col-md-4">
            <h3>Find us</h3>
            <p>
                Solicitors<br />
                and Partners<br /><br />
                DaSolutions<br />
                199 Business Avenue<br />
                London<br />
                A12 3BC<br /><br />
                p. 0987 6543 210,<br />
                f. 0123 4567 890<br />
                e. example@dasolutions.org<br />
            </p>
            <ul class="social_btns">
                <li><a href="https://www.facebook.com/" target="_tab"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/" target="_tab"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://gb.linkedin.com/" target="_tab"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</div> 

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">

    function initialize() {
        var myLatlng = new google.maps.LatLng(51.4027025,-0.3317112);
        var mapOptions = {
            scrollwheel: false,
            scaleControl: false,
            draggable: false,
            zoom: 14,
            center: myLatlng,
            //mapTypeId: google.maps.MapTypeId.SATELLITE
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var infowindow = new google.maps.InfoWindow({
            content: '<p>320 Romford Road <br />London <br />E7 8BD</p>'
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Solicitors',
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>


<?php include('footer.php'); ?>


