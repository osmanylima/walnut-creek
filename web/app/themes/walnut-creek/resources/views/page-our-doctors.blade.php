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

      <div class="list_doctors mb-5">
        @if(have_rows('our_doctors') )
        @while(have_rows('our_doctors')) @php(the_row())
          <article class="list-doctors mb-5">
            <div class="d-lg-flex justify-content-between align-items-center">
              <div class="doctors-item col-lg-6 col-md-11 d-sm-flex px-0">
                <div class="col-lg-5 col-md-4 col-sm-5 col-12 pt-5 px-sm-2 px-0 mb-3">
                  <h3>{{ get_sub_field('name') }}</h3>
                  {!! get_sub_field('specialty') !!}
                </div>

                <picture>
                  <img class="img-fluid" src="{{ get_sub_field('photo') }}" alt="{{ get_sub_field('name') }}" loading="lazy">
                </picture>
              </div>

              <div class="description col-lg-6 col-md-12 pt-4 pt-lg-5 px-0 px-lg-3">
                {!! get_sub_field('description') !!}
              </div>
            </div>

            @if (get_sub_field('add_brand') === true)
            <img class="img-fluid d-block mx-auto mt-4" src="{{ get_sub_field('brand-doctor') }}}" alt="" loading="lazy">
            @endif
          </article>
        @endwhile
        @endif
      </div>
    </section>
  </div>
  @endwhile
@endsection
