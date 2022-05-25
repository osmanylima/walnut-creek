{{--
  Template Name: Services
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-gray bottom-green py-70">
    <section class="container container-full py-5">

      <div class="text-center col-lg-8 mx-auto">
        @include('partials.page-header')
      </div>
      
      <div class="font-2x col-md-8 col-lg-6 mx-auto">
        @include('partials.content-page')
      </div>
    </section>
  </div>
  @endwhile
@endsection