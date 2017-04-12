</div>


<div id="map"></div>


<!-- Container -->


<footer>
    <div class="footer-container">

        <div class="footer-logo"></div>

        <div class="footer-address">
            <div>
                <ul>
                    <li>Tulegatan 41</li>
                    <li>113 53</li>
                    <li>Stockholm</li>
                    <li>08-442 95 00</li>
                    <li>info@collectivecreativity.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-nav">
            <?php wp_nav_menu()?>
        </div>
    </div>
    <!-- Footer container end -->



    <div class="footer-bot">
        <div class="copyright">
            <p>Collective Creativity &trade;
                <?=date('Y')?>
            </p>
        </div>

        <div class="footer-social-media">
            <a href="https://www.facebook.com/">
                <div id="facebook"></div>
            </a>
            <a href="https://www.instagram.com/">
                <div id="instagram"></div>
            </a>
            <a href="https://www.twitter.com/">
                <div id="twitter"></div>
            </a>
            <a href="https://www.pinterest.com/">
                <div id="pinterest"></div>
            </a>
        </div>
    </div>
    <!-- Footer bot end -->




</footer>


<script>
    <?php include 'app.js' ?>

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxQfvHSZtqJQf1_6YHMmXfzH2iOrDGlSo&callback=initMap" async defer></script>

<style>
    html {
        margin: 0 !important;
    }

</style>
</body>

</html>
