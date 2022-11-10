</div>

<footer>

  <div class="logo_text">
    <img class="logo_footer" src="/wp-content/themes/immob-theme-wp/assets/img/Logo.png" alt="logo_immob">
    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
  </div>
  <div class="useful">
    <p class="useful_p">Useful Links</p>
    <?php wp_nav_menu(['theme_location' => 'menu-footer']) ?>
  </div>
  <div class="get_touch">
    <p>Get in Touch</p>
    <address>
      <a class="end" href="#">123 Anywhere Street, Any<br>
        City, 12345 ST, Indonesia</a><br>
      <a class="phone" href="tel:+13115552368"> <img src="./assets/img/phone.png" alt="">(311) 555-2368</a>
    </address>
    <a class="email" href="mailto:jim@rock.com">jim@rock.com</a><br>

    <!-- <address>
      123 Anywhere Street, Any<br>
      City, 12345 ST, Indonesia
    </address> -->
  </div>
  <div class="newsletter">
    <?= do_shortcode(content: '[contact-form-7 id="94"  title="Newsletter"]'); ?>
  </div>


</footer>

<?php

wp_footer();

?>

</body>

</html>