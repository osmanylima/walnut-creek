@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-gray bottom-green py-70">
    <section class="container container-full py-5">
      <div class="text-center">
        @include('partials.page-header')
      </div>
      
      <div class="font-2x col-lg-10 col-lg-8 mx-auto">
        @include('partials.content-page')
      </div>
    </section>

    <div class="slick-team mb-5">
      @if(have_rows('our_team') )
      @while(have_rows('our_team')) @php(the_row())
        <article class="d-lg-flex justify-content-between align-items-center list-doctors">
        <picture>
          <img class="img-fluid" src="{{ get_sub_field('photo_team') }}" alt="{{ get_sub_field('name_team') }}" loading="lazy">
        </picture>

        <div class="description col-xl-6 col-lg-7 col-sm-12 pl-lg-3 px-0">
          <h3>{{ get_sub_field('name_team') }}</h3>
          {!! get_sub_field('description_team') !!}
        </div>
      </article>
      @endwhile
      @endif
    </div>
  </div>
  @endwhile
@endsection
