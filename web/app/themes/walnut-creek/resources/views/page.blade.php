@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bg-gray bottom-green py-70">
    <section class="container container-full py-5">

      <div class="text-center">
        @include('partials.page-header')
      </div>
      
      <div class="font-2x">
        @include('partials.content-page')
      </div>
    </section>
  </div>
  @endwhile
@endsection
