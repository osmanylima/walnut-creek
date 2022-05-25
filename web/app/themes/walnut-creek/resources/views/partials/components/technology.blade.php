<section id="latest-technology">
  <div class="text-center p-fixed">
    <h2 class="title-page">{{ get_field('title_technology') }}</h2>
    <h4>{{ get_field('description_technology') }}</h4>
  </div>

  <div class="embed-responsive embed-responsive-16by9">
  <video autoplay="" loop="" muted="" poster="{{ get_field('thumb_image_technology') }}" class="bg_video embed-responsive-item">
    <source src="{{ get_field('video_technology') }}" type="video/mp4">
  </video>
  </div>
</section>