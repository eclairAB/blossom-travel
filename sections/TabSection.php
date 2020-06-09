<!DOCTYPE html>
  <div class="custom-tab">
    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="one__ nav-link active" id="pills-activities-tab" data-toggle="pill" href="#pills-activities" role="tab" aria-controls="pills-activities" aria-selected="true">
          <span> activities </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="two__ nav-link" id="pills-places-tab" data-toggle="pill" href="#pills-places" role="tab" aria-controls="pills-places" aria-selected="false">
          <span> places to go </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="three__ nav-link" id="pills-fiestas-tab" data-toggle="pill" href="#pills-fiestas" role="tab" aria-controls="pills-fiestas" aria-selected="false">
          <span> fiestas & festivals </span>
        </a>
      </li>
    </ul>

    <div id="pills-tabContent" class="tab-content" role="tablist">
        <div id="pills-activities" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="pills-activities-tab">
            <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
              <div class="card-header aaa" role="tab" id="heading-A">
                  <h5 class="mb-0 text-center">
                      <span>activities</span> 
                  </h5>
              </div>
            </a>

            <div id="collapse-A" class="collapse show" data-parent="#pills-tabContent" role="tabpanel" aria-labelledby="heading-A">
                <div class="card-body">
                  <?php
                    $rows = get_field('plan-activities');
                    $first_row = $rows[0]; $first_row = $first_row['plan-activities-post'];
                    $second_row = $rows[1]; $second_row = $second_row['plan-activities-post'];
                    $third_row = $rows[2]; $third_row = $third_row['plan-activities-post'];
                  ?>
                  <div id="front-trapezoid" class="row">
                    <div class="p-0 one__ col-md-8">
                      <a href="<?php echo get_permalink( $first_row ); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $first_row ,'large'); ?>">
                        <figcaption>
                          <span>
                            <?php echo get_the_title( $first_row ); ?>
                          </span>
                        </figcaption>
                      </a>
                    </div>
                    <div class="p-0 flex-column align-content-between flex-wrap col-md-4">
                      <div class="two__">
                        <a href="<?php echo get_permalink( $second_row ); ?>">
                          <img src="<?php echo get_the_post_thumbnail_url( $second_row ,'large'); ?>">
                          <figcaption>
                            <span>
                              <?php echo get_the_title( $second_row ); ?>
                            </span>
                          </figcaption>
                        </a>
                      </div>
                      <div class="three__">
                        <a href="<?php echo get_permalink( $third_row ); ?>">
                          <img src="<?php echo get_the_post_thumbnail_url( $third_row ,'large'); ?>">
                          <figcaption>
                            <span>
                              <?php echo get_the_title( $third_row ); ?> 
                            </span>
                          </figcaption>
                        </a>
                      </div>
                    </div>

                    <div class="see-more-btn">
                      <a href="<?php echo get_permalink(get_page_by_path( 'activities' )); ?>?cat=1" target="_self" rel="external">
                        <button class="btn btn-2 icon-info" style="width: 60px">
                          <span>SEE MORE</span>
                        </button>
                      </a>
                    </div>

                  </div>
                </div>
            </div>
        </div>

        <div id="pills-places" class="card tab-pane fade" role="tabpanel" aria-labelledby="pills-places-tab">
            <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="true" aria-controls="collapse-B">
              <div class="card-header aaa" role="tab" id="heading-B">
                  <h5 class="mb-0 text-center">
                      <span>places to go</span> 
                  </h5>
              </div>
            </a>

            <div id="collapse-B" class="collapse" data-parent="#pills-tabContent" role="tabpanel" aria-labelledby="heading-B">
              <div class="card-body">
                <?php
                  $rows = get_field('plan-places');
                  $first_row = $rows[0]; $first_row = $first_row['plan-places-post'];
                  $second_row = $rows[1]; $second_row = $second_row['plan-places-post'];
                  $third_row = $rows[2]; $third_row = $third_row['plan-places-post'];
                ?>
                <div id="front-trapezoid" class="row">
                  <div class="p-0 one__ col-md-8">
                    <a href="<?php echo get_permalink( $first_row ); ?>">
                      <img src="<?php echo get_the_post_thumbnail_url( $first_row ,'large'); ?>">
                      <figcaption>
                        <span>
                          <?php echo get_the_title( $first_row ); ?>
                        </span>
                      </figcaption>
                    </a>
                  </div>
                  <div class="p-0 flex-column align-content-between flex-wrap col-md-4">
                    <div class="two__">
                      <a href="<?php echo get_permalink( $second_row ); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $second_row ,'large'); ?>">
                        <figcaption>
                          <span>
                            <?php echo get_the_title( $second_row ); ?>
                          </span>
                        </figcaption>
                      </a>
                    </div>
                    <div class="three__">
                      <a href="<?php echo get_permalink( $third_row ); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $third_row ,'large'); ?>">
                        <figcaption>
                          <span>
                            <?php echo get_the_title( $third_row ); ?> 
                          </span>
                        </figcaption>
                      </a>
                    </div>
                  </div>

                  <div class="see-more-btn">
                    <a href="<?php echo get_permalink(get_page_by_path( 'places-to-go' )); ?>?cat=2" target="_self" rel="external">
                      <button class="btn btn-2 icon-info" style="width: 60px">
                        <span>SEE MORE</span>
                      </button>
                    </a>
                  </div>

                </div>
              </div>
            </div>
        </div>

        <div id="pills-fiestas" class="card tab-pane fade" role="tabpanel" aria-labelledby="pills-fiestas-tab">
            <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
              <div class="card-header aaa" role="tab" id="heading-C">
                  <h5 class="mb-0 text-center">
                      <span>fiestas & festivals</span> 
                  </h5>
              </div>
            </a>
            <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#pills-tabContent" aria-labelledby="heading-C">
              <div class="card-body">
                <?php
                  $rows = get_field('plan-fiestas');
                  $first_row = $rows[0]; $first_row = $first_row['plan-fiestas-post'];
                  $second_row = $rows[1]; $second_row = $second_row['plan-fiestas-post'];
                  $third_row = $rows[2]; $third_row = $third_row['plan-fiestas-post'];
                ?>
                <div id="front-trapezoid" class="row">
                  <div class="p-0 one__ col-md-8">
                    <a href="<?php echo get_permalink( $first_row ); ?>">
                      <img src="<?php echo get_the_post_thumbnail_url( $first_row ,'large'); ?>">
                      <figcaption>
                        <span>
                          <?php echo get_the_title( $first_row ); ?>
                        </span>
                      </figcaption>
                    </a>
                  </div>
                  <div class="p-0 flex-column align-content-between flex-wrap col-md-4">
                    <div class="two__">
                      <a href="<?php echo get_permalink( $second_row ); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $second_row ,'large'); ?>">
                        <figcaption>
                          <span>
                            <?php echo get_the_title( $second_row ); ?>
                          </span>
                        </figcaption>
                      </a>
                    </div>
                    <div class="three__">
                      <a href="<?php echo get_permalink( $third_row ); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $third_row ,'large'); ?>">
                        <figcaption>
                          <span>
                            <?php echo get_the_title( $third_row ); ?> 
                          </span>
                        </figcaption>
                      </a>
                    </div>
                  </div>

                  <div class="see-more-btn">
                    <a href="<?php echo get_permalink(get_page_by_path( 'fiestas' )); ?>?cat=3"" target="_self" rel="external">
                      <button class="btn btn-2 icon-info" style="width: 60px">
                        <span>SEE MORE</span>
                      </button>
                    </a>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</html>