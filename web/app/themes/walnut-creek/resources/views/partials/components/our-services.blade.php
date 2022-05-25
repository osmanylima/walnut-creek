<section id="our-services">
  <div class="container container-full">
    <div class="text-center px-0 col-md-10 col-xl-9 mx-auto mb-4 mb-md-5">
      <h2 class="title-page">{{ get_field('title_session') }}</h2>
    </div>

    <div class="bg-gradient mx-auto col-lg-8 col-md-10">
    <div class="row list-services px-0">
      @if(have_rows('our_services') )
      @while(have_rows('our_services')) @php(the_row())
      <article class="col-md-4 col-6">
        <a href="{{ get_sub_field('link_page_services') }}">
          <img class="img-fluid" src="{{ get_sub_field('icon_services') }}" alt="{{ get_sub_field('title_services') }}" loading="lazy">
          <h6>{{ get_sub_field('title_services') }}</h6>
        </a>
      </article>
      @endwhile
      @endif
    </div>
    </div>

    @if(have_rows('button_services') )
    @while(have_rows('button_services')) @php(the_row())
    <a href="{{ get_sub_field('link_button') }}" class="btn btn-white mx-auto d-table text-center">{{ get_sub_field('name_button') }}</a>
    @endwhile
    @endif

  </div>
</section>