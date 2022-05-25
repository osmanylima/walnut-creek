@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-gray bottom-green py-70">
    <section class="container container-full py-5">
      @include('partials.components.about-us')
    </section>

    <div class="font-2x">
    <section id="about" class="pb-5">
      <div class="text-center">
        <h2 class="title-page">{{ get_field('title_prosthodontics') }}</h2>
      </div>

      <img class="img-fluid mb-5 mx-auto d-block" src="{{ get_field('image_prosthodontics') }}" alt="">

      <div class="col-md-10 col-lg-8 mx-auto">
        {!! get_field('description_prosthodontics') !!}
      </div>
    </section>

    <section id="apart" class="bg-pattern">
      <div class="text-center">
        <h2 class="title-page">{{ get_field('title_what') }}</h2>
      </div>

      <div class="col-md-10 col-lg-8 mx-auto">
        {!! get_field('description_what') !!}
      </div>
    </section>

    <section id="technology" class="py-5">
      <div class="text-center">
        <h2 class="title-page">{{ get_field('title_technology') }}</h2>
      </div>

      <img class="img-fluid mb-5 mx-auto d-block" src="{{ get_field('image_technology') }}" alt="">

      <div class="col-md-10 col-lg-8 mx-auto">
        {!! get_field('description_technology') !!}
      </div>
    </section>

    <section id="mission" class="py-5">
      <div class="text-center">
        <h2 class="title-page">{{ get_field('title_our_mission') }}</h2>
      </div>

      <div class="list-mission col-md-10 col-lg-8 mx-auto mt-5">
        @if(have_rows('our_mission') )
        @while(have_rows('our_mission')) @php(the_row())
          <p>{{ get_sub_field('list_mission') }}</p>
        @endwhile
        @endif
      </div>
    </section>
    </div>
  </div>
  @endwhile
@endsection
