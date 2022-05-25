<section id="partners">
  <div class="container">
    <div class="list-partners">
      @if(have_rows('partners') )
      @while(have_rows('partners')) @php(the_row())
      <div class="item-partners">
        <img data-lazy="{{ get_sub_field('list_partners') }}" alt="" loading="lazy">
      </div>
      @endwhile
      @endif
    </div>
  </div>
</section>