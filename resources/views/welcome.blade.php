<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>CodeSpace Academy</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/aos/dist/aos.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}">


  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('frontend/css/theme.min.css')}}">
</head>

<body>
  <!-- ========== HEADER ========== -->
    @include('landings.layouts.header')
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Swiper Slider -->
    <div class="border-bottom">
      <!-- Main Slider -->
      <div class="js-swiper-main swiper vh-md-70">
        <div class="swiper-wrapper">
          <!-- Slide -->
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url({{asset('frontend/img/1920x800/img2.jpg')}});">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-75 w-lg-50">
                <h3 class="text-white">CodeSpace Academy</h3>
                <h1 class="display-4 text-white mb-0">Best Coding School in Malaysia</h1>
              </div>
            </div>
          </div>
          <!-- End Slide -->

          <!-- Slide -->
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url({{asset('frontend/img/1920x800/img3.jpg')}});">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-75 w-lg-50">
                <h3 class="text-white">CodeSpace Academy</h3>
                <h2 class="display-4 text-white mb-0">Supported by Tech Company </h2>
              </div>
            </div>
          </div>
          <!-- End Slide -->

        <!-- Slide -->
        <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url({{asset('frontend/img/1920x800/img3.jpg')}});">
        <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
            <div class="w-75 w-lg-50">
            <h3 class="text-white">CodeSpace Academy</h3>
            <h2 class="display-4 text-white mb-0">Highest Quality & Effective Roadmap</h2>
            </div>
        </div>
        </div>
        <!-- End Slide -->


        </div>



        <!-- Arrows -->
        <div class="d-none d-md-inline-block">
          <div class="js-swiper-main-button-next swiper-button-next swiper-button-next-soft-white"></div>
          <div class="js-swiper-main-button-prev swiper-button-prev swiper-button-prev-soft-white"></div>
        </div>
      </div>
      <!-- End Main Slider -->

      <!-- Thumbs Slider -->
      <div class="js-swiper-thumbs swiper">
        <div class="swiper-wrapper">
          <!-- Slide -->
          <div class="swiper-slide">
            <div class="d-flex align-items-center bg-white position-relative vh-md-30">
              <div class="container content-space-2">
                <div class="row">
                  <div class="col-md-4">
                    <span class="fs-3 fw-semibold">01.</span>
                    <h3 class="text-primary">Best Coding School in Malaysia</h3>
                    <p class="mb-0">Modify any aspect of your website or pages with Front.</p>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>

              <div class="col-md-5 d-none d-md-inline-block bg-primary position-absolute top-0 end-0 bottom-0">
                <div class="position-absolute top-50 translate-middle-y p-7">
                  <h3 class="text-white">Next: Sponsored by Tech Company </h3>
                  <p class="text-white-70 mb-0">Let visitors to view your content from their choice of device.</p>
                </div>
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Slide -->

          <!-- Slide -->
          <div class="swiper-slide">
            <div class="d-flex align-items-center bg-white position-relative vh-md-30">
              <div class="container content-space-2">
                <div class="row">
                  <div class="col-md-4">
                    <span class="fs-3 fw-semibold">02.</span>
                    <h3 class="text-primary">Sponsored by Tech Company</h3>
                    <p class="mb-0">Let visitors to view your content from their choice of device.</p>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>

              <div class="col-md-5 d-none d-md-inline-block bg-dark position-absolute top-0 end-0 bottom-0">
                <div class="position-absolute top-50 translate-middle-y p-7">
                  <h3 class="text-white">Prev: Advanced editing</h3>
                  <p class="text-white-70 mb-0">Modify any aspect of your website with Front</p>
                </div>
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Slide -->


                 <!-- Slide -->
                 <div class="swiper-slide">
                    <div class="d-flex align-items-center bg-white position-relative vh-md-30">
                      <div class="container content-space-2">
                        <div class="row">
                          <div class="col-md-4">
                            <span class="fs-3 fw-semibold">03.</span>
                            <h3 class="text-primary">Sponsored by Tech Company</h3>
                            <p class="mb-0">Let visitors to view your content from their choice of device.</p>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>

                      <div class="col-md-5 d-none d-md-inline-block bg-dark position-absolute top-0 end-0 bottom-0">
                        <div class="position-absolute top-50 translate-middle-y p-7">
                          <h3 class="text-white">Prev: Advanced editing</h3>
                          <p class="text-white-70 mb-0">Modify any aspect of your website with Front</p>
                        </div>
                      </div>
                      <!-- End Col -->
                    </div>
                  </div>
                  <!-- End Slide -->
        </div>
      </div>
      <!-- End Thumbs Slider -->
    </div>
    <!-- Swiper Slider -->


    <!-- Icon Blocks -->
    <div class="container content-space-2 content-space-lg-2">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="text-cap">Why CodeSpace Academy</span>
        <h2>Exceptional Quality, Proven Results</h2>
        </div>
        <!-- End Heading -->

        <div class="row mb-5 mb-md-9">
        <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
            <!-- Icon Block -->
            <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0">
                <span class="svg-icon svg-icon-sm text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="#035A4B"/>
                    <path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="#035A4B"/>
                </svg>

                </span>
            </div>

            <div class="flex-grow-1 ms-3">
                <h4 class="mb-0">Premium Content</h4>
            </div>
            </div>
            <!-- End Icon Block -->

            <p>Highest quality educational resources for comprehensive technology learning and development.</p>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
            <!-- Icon Block -->
            <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0">
                <span class="svg-icon svg-icon-sm text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="#035A4B"/>
                    <path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="#035A4B"/>
                </svg>

            </div>

            <div class="flex-grow-1 ms-3">
                <h4 class="mb-0">Accelerated Learning</h4>
            </div>
            </div>
            <!-- End Icon Block -->

            <p>Speedy,most efficient educational roadmap designed to rapidly achieve your tech goals and careers.</p>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0">
            <!-- Icon Block -->
            <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0">
                <span class="svg-icon svg-icon-sm text-primary">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="#035A4B"/>
                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="#035A4B"/>
                    </svg>


                </span>
            </div>

            <div class="flex-grow-1 ms-3">
                <h4 class="mb-0">Experiecnced Instructor</h4>
            </div>
            </div>
            <!-- End Icon Block -->

            <p>Highly experienced tech instructors and mentors providing deep insights and practical knowledge in tech.</p>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0">
            <!-- Icon Block -->
            <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0">
                <span class="svg-icon svg-icon-sm text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="#035A4B"/>
                    <path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="#035A4B"/>
                    </svg>

                </span>
            </div>

            <div class="flex-grow-1 ms-3">
                <h4 class="mb-0">Career Support</h4>
            </div>
            </div>
            <!-- End Icon Block -->
            <p>Post-graduation and career support including internship, full-time and part-time with our partner IT companies.</p>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0">
            <!-- Icon Block -->
            <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0">
                --
            </div>

            <div class="flex-grow-1 ms-3">
                <h4 class="mb-0">Continous Learning</h4>
            </div>
            </div>
            <!-- End Icon Block -->

            <p>Continuous learning supported by our comprehensive AI-Enhanced Learning Management System (LMS) .</p>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-md-4">
            <!-- Icon Block -->
            <div class="d-flex align-items-center mb-2">
            <div class="flex-shrink-0">
                <span class="svg-icon svg-icon-sm text-primary">
                --
                </span>
            </div>

            <div class="flex-grow-1 ms-3">
                <h4 class="mb-0">Tech Workshops</h4>
            </div>
            </div>
            <!-- End Icon Block -->

            <p>Montly interactive sessions exploring new technologies and practical applications by top-notch mentors and industrial leaders.</p>
        </div>
        <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="text-center">
        <div class="d-grid d-sm-flex justify-content-center gap-2 mb-3">
            <a class="btn btn-primary btn-transition" href="#">Apply for Trial Class</a>
            {{-- <a class="btn btn-link" href="#">Let's Talk <i class="bi-chevron-right small ms-1"></i></a> --}}
        </div>

        <p class="small">Hurry up! Our Trial is FREE !! No credit card required !!</p>
        </div>
    </div>
    <!-- End Icon Blocks -->



    <!-- Card Grid -->
    <div class="container content-space-sm-2">
    <!-- Title -->
    <div class="w-md-75 text-center mx-md-auto mb-9">
      <h2>Explore Our Best Programs</h2>
      <p>Diverse programs tailored for success.</p>
    </div>
    <!-- End Title -->

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">
      <div class="col mb-5">
        <!-- Card -->
        <div class="card card-bordered h-100">
          <!-- Card Pinned -->
          <div class="card-pinned">
            <img class="card-img-top" src="{{asset('frontend/images/landings/welcome/course-fullstack-software-engineering.jpg')}}" alt="Image Description">

            <div class="card-pinned-top-start">
              <small class="badge bg-success rounded-pill">Most Popular</small>
            </div>

            {{-- <div class="card-pinned-bottom-start">
              <div class="d-flex align-items-center flex-wrap">

                <div class="ms-1">
                  <span class="fw-semibold text-white me-1">4.91</span>
                  <span class="text-white-70">(1.5k+ reviews)</span>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- End Card Pinned -->

          <!-- Card Body -->
          <div class="card-body">
            <small class="card-subtitle">Software Engineering</small>

            <div class="mb-3">
              <h3 class="card-title">
                <a class="text-dark" href="../demo-course/course-overview.html">Full Stack Software Engineering (Web)</a>
              </h3>
            </div>

            <div class="row align-items-center">
              {{-- <div class="col">
                <div class="avatar-group avatar-group-xs">
                  <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Nataly Gaga" href="#">
                    <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                  </a>
                </div>
              </div> --}}
              <!-- End Col -->

              <div class="col-auto">
                <ul class="list-inline list-separator small ms-auto">
                  <li class="list-inline-item">
                    <i class="bi-book me-1"></i> 20 lessons
                  </li>
                  <li class="list-inline-item">
                    <i class="bi-clock me-1"></i> 40 Hours
                  </li>
                </ul>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Card Body -->

          <!-- Card Footer -->
          <div class="card-footer pt-0">
            <div class="d-flex justify-content-between align-items-center">
              {{-- <div class="me-2">
                <span class="d-block text-muted small"><del>$114.99</del></span>
                <h5 class="card-title">$9</h5>
              </div> --}}

              <a class="btn btn-primary btn-sm btn-transition" href="../demo-course/course-overview.html">Learn More</a>
            </div>
          </div>
          <!-- End Card Footer -->
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->





    </div>
    <!-- End Row -->

    <div class="text-center">
      <a class="btn btn-link" href="../demo-course/courses.html">See all courses <i class="bi-chevron-right small ms-1"></i></a>
    </div>
  </div>
  <!-- End Card Grid -->

  <!-- Features Stats -->
    <div class="container content-space-2 content-space-lg-2">
        <div class="w-md-75 text-center mx-md-auto mb-9">
            <h2>Numbers Speak Volumes</h2>
            <p>Statistics revealing our impactful results..</p>
          </div>
          <!-- End Title -->

        <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="text-center">
            <small class="text-cap text-primary">— Total Student Enrollment</small>
            <h4 class="display-4">5</h4>
            <p>Total number of students enrolled in our programs.</p>
            </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="text-center">
            <small class="text-cap text-primary">— Employment Success</small>
            <h4 class="display-4">100%</h4>
            <p>Percentage of graduates securing jobs post-completion.</p>
            </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4">
            <div class="text-center">
            <small class="text-cap text-primary">— Employment Success</small>
            <h4 class="display-4">2</h4>
            <p>IT companies collaborating as part of our network.</p>
            </div>
        </div>
        <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
  <!-- End Features Stats -->


    <!-- CTA -->
    <div class="container content-space-b-2">
        <div class="text-center bg-img-start py-6" style="background: url({{asset('frontend/svg/components/shape-6.svg')}}) center no-repeat;">
        <div class="mb-5">
            <h2>Start Learning Today!</h2>
            <p>Take the first step towards a successful tech career with us today!</p>
        </div>

        <a class="btn btn-primary btn-transition" href="#">Apply for Trial Class</a>
        </div>
    </div>
    <!-- End CTA -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  @include('landings.layouts.footer')

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <!-- Log in -->
          <div id="signupModalFormLogin" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-2">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                  Log in with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Email</a>
            </div>
          </div>
          <!-- End Log in -->

          <!-- Log in with Modal -->
          <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
              </div>
            </form>
          </div>
          <!-- End Log in with Modal -->

          <!-- Sign up -->
          <div id="signupModalFormSignup">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-3">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
                  Sign up with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
          </div>
          <!-- End Sign up -->

          <!-- Sign up with Modal -->
          <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate need-validate" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3" data-hs-validation-validate-class>
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                       data-hs-validation-equal-field="#signupModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
              </div>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </form>
          </div>
          <!-- End Sign up with Modal -->

          <!-- Reset Password -->
          <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Forgot password?</h2>
              <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <!-- En dHeading -->

            <form class="js-validate need-validate" novalidate>
              <div class="mb-3">
                <!-- Form -->
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                    <i class="bi-chevron-left small"></i> Back to Log in
                  </a>
                </div>

                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
                <!-- End Form -->
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
              </div>
            </form>
          </div>
          <!-- End Reset Password -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>

  <!-- Cookie Alert -->
  <div class="container position-fixed bottom-0 start-0 end-0 zi-3">
    <div class="alert alert-white w-lg-75 shadow-sm mx-auto" role="alert">
      <h5 class="text-dark">Cookie preferences</h5>
      <p class="small"><span class="fw-semibold">Note!</span> This is just a simple popup modal to demonstrate how you can display a cookie message. This website uses the following types of cookies; strictly necessary, functional, visitor statistics and advertising cookies.</p>

      <div class="row align-items-sm-center">
        <div class="col-sm-8 mb-3 mb-sm-0">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked disabled>
            <label class="form-check-label small" for="inlineCheckbox1">Strictly necessary</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
            <label class="form-check-label small" for="inlineCheckbox2">Functional</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label small" for="inlineCheckbox3">Visitor statistics</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
            <label class="form-check-label small" for="inlineCheckbox4">Advertising</label>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4 text-sm-end">
          <button type="button" class="btn btn-primary btn-transition" data-bs-dismiss="alert" aria-label="Close">Got it!</button>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </div>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('frontend/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/aos/dist/aos.js')}}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('frontend/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF SWIPER
      // =======================================================
      let activeIndex = 0
      var sliderThumbs = new Swiper('.js-swiper-thumbs', {
        slidesPerView: 1,
        autoplay: false,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        followFinger: false,
        loop: true,
        on: {
          'slideChangeTransitionEnd': function (event) {
            if (sliderMain === undefined) return
            sliderMain.slideTo(event.activeIndex)
          }
        }
      });

      var sliderMain = new Swiper('.js-swiper-main', {
        effect: 'fade',
        autoplay: false,
        disableOnInteraction: true,
        loop: true,
        navigation: {
          nextEl: '.js-swiper-main-button-next',
          prevEl: '.js-swiper-main-button-prev',
        },
        thumbs: {
          swiper: sliderThumbs
        },
        on: {
          'slideChangeTransitionEnd': function (event) {
            if (sliderThumbs === undefined) return
            sliderThumbs.slideTo(event.activeIndex)
          }
        }
      })

      // Clients
      var swiper = new Swiper('.js-swiper-clients',{
        slidesPerView: 2,
        breakpoints: {
          380: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 15,
          },
        },
      });

      // Card Grid
      var swiper = new Swiper('.js-swiper-card-blocks',{
        slidesPerView: 1,
        pagination: {
          el: '.js-swiper-card-blocks-pagination',
          dynamicBullets: true,
          clickable: true,
        },
        breakpoints: {
          620: {
            slidesPerView: 2,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
        },
      });
    })()
  </script>



</body>
</html>
