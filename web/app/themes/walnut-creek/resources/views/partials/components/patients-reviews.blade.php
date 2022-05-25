<section id="partients-reviews">
  <div class="container">
    <div class="col-lg-7 col-md-9 offset-lg-5 offset-md-3">
      <div class="text-center mx-auto mb-4 mb-md-5">
        <h2 class="title-page">{{ get_field('title_patients_reviews') }}</h2>
      </div>

      <div class="partients">
        <div class="partients__slick">
          @if(have_rows('patients_reviews') )
          @while(have_rows('patients_reviews')) @php(the_row())
          <div class="partients__item">
            <p>{{ get_sub_field('reviews') }}</p>
            <h6>- {{ get_sub_field('author') }}</h6>
          </div>
          @endwhile
          @endif
        </div>
      </div>
    </div>
  </div>
</section>