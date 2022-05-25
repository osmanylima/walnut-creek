@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-gray bottom-green py-70">
    <section class="container container-full py-5">
      <div class="text-center">
        @include('partials.page-header')
      </div>
      
      <div class="font-2x col-md-10 col-lg-8 mx-auto">
        @include('partials.content-page')
      </div>
    </section>

    <div class="offset-md-2 mb-5">
      <div class="slick-technology">
        @if(have_rows('latest_technology') )
        @while(have_rows('latest_technology')) @php(the_row())
        <article>
          <picture class="embed-container">{!! get_sub_field('movie') !!}</picture>
          <h3>{{ get_sub_field('title_technology') }}</h3>
        </article>
        @endwhile
        @endif
      </div>
    </div>
  </div>
  @endwhile
@endsection
