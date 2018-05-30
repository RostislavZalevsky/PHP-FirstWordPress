<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 aqua_background">
                <div class="caption text-center" id="contact">CONTACT US</div>
                <form class="form text-center">
                    <p><input type="text" name="name" placeholder="Name" class="input"></p>
                    <p><input type="email" name="email" placeholder="Email" class="input"></p>
                    <p><input type="number" name="number" placeholder="Phone" class="input"></p>
                    <p><textarea name="text" placeholder="Message" class="textarea"></textarea></p>
                    <p><button type="submit" class="input">SEND</button></p>
                    <p>Email: <?= get_theme_mod('contact-us-email-setting') ?></p>
                    <p>Phone: <?= get_theme_mod('contact-us-phone-setting') ?></p>
                </form>
            </div>
            <div class="col-12 col-lg-6" id="map"></div>
        </div><!--row-->
    </div><!--container-->
</footer>

<script src="<?= get_theme_mod('map-url-setting') ?>" async defer></script>
<script src="<?php echo get_bloginfo('template_url') ?>/js/easy4you.min.js"></script>
</body>
</html>