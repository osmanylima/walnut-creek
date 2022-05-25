@extends('layouts.app')

@section('content')
  <div class="bg-gray bottom-green py-70">
    <section class="container container-full py-5">

      <div class="text-center">
        @include('partials.page-header')
      </div>
      
      <div class="font-2x">
        @if (!have_posts())
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif

        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-search')
        @endwhile
      
        {!! get_the_posts_navigation() !!}
      </div>
    </section>
  </div>
@endsection
