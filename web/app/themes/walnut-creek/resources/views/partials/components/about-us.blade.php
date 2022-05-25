<section id="about-us">
  <div class="container container-full pb-5">
    @php $page = get_page_by_title('About us'); @endphp
    <div class="text-center px-0 col-md-10 col-xl-9 mx-auto mb-4 mb-md-5">
      <h2 class="title-page">{!! get_the_title($page->ID) !!}</h2>

      {!! $page->post_content; !!}
    </div>

    <div class="row mb-md-5 mb-0">

      @if(have_rows('team', $page->ID) )
      @while(have_rows('team', $page->ID)) @php(the_row())
      <div class="col-sm-6 d-lg-flex justify-content-between align-items-center list-doctors">        
        <picture>
          <img class="img-fluid" src="{{ get_sub_field('photo') }}" alt="" loading="lazy">
        </picture>

        <div class="description col-xl-5 col-lg-6 col-sm-10 col-11 px-0">
          <h3>{{ get_sub_field('name') }}</h3>
          {!! get_sub_field('description') !!}
        </div>
      </div>
      @endwhile
      @endif
    </div>

    @if(is_front_page())
      @if(have_rows('button_page_single', $page->ID))
        @while(have_rows('button_page_single', $page->ID)) @php(the_row())
        <a href="{{ get_sub_field('link_button_page_single') }}" class="btn btn-hover mx-auto d-table text-center">{{ get_sub_field('name_button_page_single') }}</a>
        @endwhile
      @endif
    @endif
  </div>
</section>