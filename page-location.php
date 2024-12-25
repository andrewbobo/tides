<?php
/* Template Name: Location */

get_header('gallery'); ?>

<nav class="breadcrumbs container">
    <div class="breadcrumbs-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="separator"> | </span>
        <span>Location</span>
    </div>
</nav>

<div class="location-page">
    <div class="container">
        <h1 class="location-title">Koh Samui, Thailand</h1>
        <p class="location_desc">
          Ko Samui, Thailand’s second largest island, lies in the Gulf of Thailand off the east coast of the Kra Isthmus. It's known for its palm-fringed beaches, coconut groves and dense,
           mountainous rainforest, plus luxury resorts and posh spas. The landmark 12m-tall golden Big Buddha statue at Wat Phra Yai Temple is located on a tiny island connected to Ko Samui by a causeway.
        </p>
    </div>
    <section class="location">
      <div class="container">
        <div class="location_info">
          <div class="location_info_adress">
            <img src="http://tilda/wp-content/uploads/2024/12/logo-color.png" alt="location_info_adress">
            <p>
              Oceans 13, Tambon Bo Put, Amphoe Ko Samui, Surat Thani 84320, Thailand
            </p>

            <ul>
              <li>
                Just 3 minutes from Fisherman’s Village
              </li>
              <li>
                Just 10 minutes drive from Samui Airport
              </li>
            </ul>

            <a class="btn_white" href="#">learn more</a>

          </div>
          <div class="location_info_map">
            <img src="http://tilda/wp-content/uploads/2024/12/comp_x5F_Thailand.png" alt="location_info_map">
          </div>
        </div>
      </div>
    </section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11344.591390769301!2d100.03685470314991!3d9.558091573480535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3054f1a41ef2914d%3A0xd9aaeeef163ff45f!2sSecret%20Tides%20-%20Luxury%20Beachfront%20Villas!5e0!3m2!1suk!2sua!4v1735027277602!5m2!1suk!2sua"
        width="100%"
        height="824"
        style="border:0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>



</div>

<?php get_footer(); ?>
