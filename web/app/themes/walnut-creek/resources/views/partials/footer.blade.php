<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 mb-0 mb-md-5 mb-lg-0">
        <h5>Walnut Creek Prosthodontics and Dental Implants</h5>

        <div class="box-address mb-3">
          {!! get_field('text_address', 'options') !!}
        </div>

        <div class="box-hours">
          {!! get_field('text_hours', 'options') !!}
        </div>
      </div>

      <div class="col-lg-7 bg-footer d-none d-md-block">
        <div class="bg-primary d-flex justify-content-between p-4">
          
          @if(have_rows('nav_footer', 'options') )
          @while(have_rows('nav_footer', 'options')) @php(the_row())
          
            <ul class="menu-footer">
              @if(have_rows('links_pages') )
              @while(have_rows('links_pages')) @php(the_row())
              <?php
                $name = get_sub_field('name_page');
                if (get_sub_field('link_page')) {
                  ?>
                    <li class="menu-item"><a href="<?php the_sub_field('link_page'); ?>"><?php echo $name; ?></a></li>
                  <?php 
                } else {
                  echo '<li class="menu-item"><a href="javascript:;">'.$name.'</a></li>';
                }
              ?>

              @endwhile
              @endif

              @if(have_rows('links') )
              @while(have_rows('links')) @php(the_row())
                <li class="menu-item light"><a href="{{ get_sub_field('page_link') }}">{{ get_sub_field('name_link') }}</a></li>
              @endwhile
              @endif
            </ul>

          @endwhile
          @endif
        </div>

        <ul class="social-media">
          @if(have_rows('redes_sociais', 'options') )
          @while(have_rows('redes_sociais', 'options')) @php(the_row())
            <li><a href="{{ get_sub_field('url') }}" target="_blank">{!! get_sub_field('ico') !!}</a></li>
          @endwhile
          @endif
        </ul>
      </div>
    </div>
  </div>
</footer>
