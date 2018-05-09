

<awards-location-bar>
  <div class="row">
    <div class="columns small-12 large-6">

      <?php
        $badge_images = get_field('badge_image', 'options');
        $size = 'full';
        if( $badge_images ):
      ?>

        <ul class="badges">
          <?php foreach( $badge_images as $image ): ?>
            <li><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"></li>
          <?php endforeach; ?>

        </ul>

      <?php endif; ?>

    </div>
    <div class="columns small-12 large-6">
      <div id="google-map">
        <div class="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.767475159378!2d-3.625345148448312!3d50.66857767940541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486da8f73b25078f%3A0xcce218a2ff9eb9fb!2sDoddiscombsleigh+Primary+School!5e0!3m2!1sen!2suk!4v1523627099836" width="588" height="129" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</awards-location-bar>
