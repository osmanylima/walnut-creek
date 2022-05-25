<header class="banner">
  <div class="container container-full d-flex justify-content-between">
    <a class="brand py-3" href="{{ home_url('/') }}">
      <img class="img-fluid" src="{{ \App\asset_path('images/brand-walnut-creek.png') }}" alt="{{ get_bloginfo('name', 'display') }}" loading="lazy">
    </a>
    <div class="d-flex bt-top">
      <a href="tel:{{ get_field('phone', 'options') }}" class="bt-dark" target="_blank"><i class="bi bi-telephone-fill"></i></a>
      <a href="{{ get_field('url_maps_google', 'options') }}" class="bt-dark" target="_blank"><i class="bi bi-geo-alt-fill"></i></a>
      <a href="{{ get_field('appointment_request', 'options') }}" class="bt-light d-flex align-items-center"><i class="bi bi-calendar-week"></i> <span class="d-none d-md-block">Request Appointment</span></a>
    </div>
    <div class="d-flex position-relative align-items-center">
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
    <div class="d-lg-none float-end ml-sm-4 ml-2">
      <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button pe-4">
        <i class="toggle-menu-button-icon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </i>
      </button>
    </div>
  </div>
</header>
