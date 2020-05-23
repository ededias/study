<div class="popular_courses paddingTop">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="section_title text-center mb-100">
          <h3>Popular Courses</h3>
          <p>Your domain control panel is designed for ease-of-use and <br> allows for all aspects of your
            domains.</p>
        </div>
      </div>
    </div>

    <!-- inicio depoimentos -->
    <div class="row">
      <div class="col-xl-12">
        <div class="course_nav">
          <nav>
            <ul class="nav" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Photoshop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">UI/UX</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">Web Design</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Web-tab" data-toggle="tab" href="#Web" role="tab" aria-controls="design" aria-selected="false">Web dev</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Web-tab1" data-toggle="tab" href="#Web1" role="tab" aria-controls="design" aria-selected="false">Wordpress</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Web-tab11" data-toggle="tab" href="#Web11" role="tab" aria-controls="design" aria-selected="false">Adobe XD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Adobe-XD-tab8" data-toggle="tab" href="#Adobe-XD8" role="tab" aria-controls="design" aria-selected="false">Sketch App</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Adobe-XD-tab9" data-toggle="tab" href="#Adobe-XD9" role="tab" aria-controls="design" aria-selected="false">Illustrator</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

  </div>
  <div class="all_courses">
    <div class="container">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="single_courses">
                <div class="thumb">
                  <a href="#">
                    <img src="img/courses/1.png" alt="">
                  </a>
                </div>
                <div class="courses_info">
                  <span>Photoshop</span>
                  <h3><a href="#">Mobile App design step by step <br>
                      from beginner</a></h3>
                  <div class="star_prise d-flex justify-content-between">
                    <div class="star">
                      <i class="flaticon-mark-as-favorite-star"></i>
                      <span>(4.5)</span>
                    </div>
                    <div class="prise">
                      <span class="offer">$89.00</span>
                      <span class="active_prise">
                        $49
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim depoiments -->

<?php

  print_r($this->view->main);

?>
