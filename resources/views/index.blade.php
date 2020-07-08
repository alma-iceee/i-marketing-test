@extends('layouts.app')

@section('title', 'Page Title')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>{{$contents[8]->name}}</h1>
            <h2>{{$contents[8]->text}}</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section><!-- End Hero -->

<!-- ======= #main Section ======= -->
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="content">
                        <h3>{{$contents[7]->name}}</h3>
                        <p>{{$contents[7]->text}}</p>
                        <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">

                            @foreach($abouts as $about)
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-{{$about->icon}}"></i>
                                    <h4>{{$about->name}}</h4>
                                    <p>{{$about->text}}</p>
                                </div>
                            @endforeach

                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>{{$contents[6]->name}}</h2>
                <p>{{$contents[6]->text}}</p>
            </div>

            <div class="row">

                @foreach($services as $service)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bx {{$service->icon}}"></i></div>
                        <h4 class="title"><a href="">{{$service->name}}</a></h4>
                        <p class="description">{{$service->text}}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
        <div class="container">

            <div class="row no-gutters">

                @foreach($counts as $count)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="icofont-{{$count->icon}}"></i>
                        <span data-toggle="counter-up">{{$count->icon}}</span>
                        <p><strong>{{$count->name}}</strong> {{$count->text}}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>{{$contents[5]->name}}</h3>
                <p>{{$contents[5]->text}}</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>{{$contents[4]->name}}</h2>
                <p>{{$contents[4]->text}}</p>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>

                        @foreach($portfolio_filters as $portfolio_filter)
                            <li data-filter=".filter-{{$portfolio_filter->type}}">{{$portfolio_filter->name}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->filter}}">
                        <div class="portfolio-wrap">
                            <img src="{{$portfolio->image}}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{$portfolio->image}}" data-gall="portfolioGallery" class="venobox" title="{{$portfolio->title}}"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>{{$contents[3]->name}}</h2>
                <p>{{$contents[3]->text}}</p>
            </div>

            <div class="owl-carousel testimonials-carousel">

                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item" data-aos="fade-up">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial->review}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{$testimonial->image}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial->full_name}}</h3>
                        <h4>{{$testimonial->position}}</h4>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>{{$contents[2]->name}}</h2>
                <p>{{$contents[2]->text}}</p>
            </div>

            <div class="row">

                @foreach ($teammates as $teammate)
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up">
                            <div class="pic"><img src="{{$teammate->image}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>{{$teammate->full_name}}</h4>
                                <span>{{$teammate->position}}</span>
                                <div class="social">
                                    <a href="{{$teammate->twitter}}"><i class="icofont-twitter"></i></a>
                                    <a href="{{$teammate->facebook}}"><i class="icofont-facebook"></i></a>
                                    <a href="{{$teammate->instagram}}"><i class="icofont-instagram"></i></a>
                                    <a href="{{$teammate->linkedin}}"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>{{$contents[1]->name}}</h2>
                <p>{{$contents[1]->text}}</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="" method="post" role="form" class="php-email-form" id="">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" id="btn2">Send Message</button></div>

                        <div id="send_message_result_form"></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
