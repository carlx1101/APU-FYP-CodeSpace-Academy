<footer>
    <div class="container pb-1 pb-lg-7">
      <div class="row content-space-t-2">
        <div class="col-12 col-lg-3 mb-7 mb-lg-0">
          <!-- Logo -->
          <div class="mb-5">
            <a class="navbar-brand" href="#" aria-label="Space">
              <img class="navbar-brand-logo" src="{{asset('frontend/images/logos/codespacesolutions.png')}}" style="max-width: none; width:15rem" alt="Image Description">
            </a>
          </div>
          <!-- End Logo -->

          <!-- List -->
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm link-secondary" href="#"><i class="bi-geo-alt-fill me-1"></i> Kuala Lumpur, Malaysia</a></li>
            <li><a class="link-sm link-secondary" href="tel:1-062-109-9222"><i class="bi-telephone-inbound-fill me-1"></i> +60 182786997</a></li>
          </ul>
          <!-- End List -->

        </div>
        <!-- End Col -->

        <div class="col-6 col-sm mb-7 mb-sm-0">
          <h5 class="mb-3">Company</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-secondary" href="#">About</a></li>
            <li><a class="link-sm link-secondary" href="#">Careers <span class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
            <li><a class="link-sm link-secondary" href="#">Blog</a></li>
            <li><a class="link-sm link-secondary" href="#">Customers <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
            <li><a class="link-sm link-secondary" href="#">Hire us</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-6 col-sm mb-7 mb-sm-0">
          <h5 class="mb-3">Software Development </h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-secondary" href="#">Software Development</a></li>
            <li><a class="link-sm link-secondary" href="#">Laravel Development</a></li>
            <li><a class="link-sm link-secondary" href="#">PHP Development</a></li>
            <li><a class="link-sm link-secondary" href="#">Wordpress </a></li>

          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-6 col-sm mb-7 mb-sm-0">
          <h5 class="mb-3">Digital Marketing</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-secondary" href="#">SEO</a></li>
            <li><a class="link-sm link-secondary" href="#">Google Analytics</a></li>
            <li><a class="link-sm link-secondary" href="#">Google Business Profile</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-6 col-sm">
          <h5 class="mb-3">Mobile App  </h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-5">
            <li><a class="link-sm link-secondary" href="#">Hybrid App ( Flutter )</a></li>
            <li><a class="link-sm link-secondary" href="#">IOS</a></li>
            <li><a class="link-sm link-secondary" href="#">Android</a></li>

          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-6 col-sm">
            <h5 class="mb-3">Ecommece </h5>

            <!-- List -->
            <ul class="list-unstyled list-py-1 mb-5">
                <li><a class="link-sm link-secondary" href="#">Shopify</a></li>
                <li><a class="link-sm link-secondary" href="#">Woocommerce</a></li>

            </ul>
            <!-- End List -->
          </div>
      </div>
      <!-- End Row -->

      <div class="border-top my-7"></div>

      <div class="row mb-7">
        <div class="col-sm mb-3 mb-sm-0">
          <!-- Socials -->
          <ul class="list-inline list-separator mb-0">
            <li class="list-inline-item">
              <a class="text-body" href="#">Privacy & Policy</a>
            </li>
            <li class="list-inline-item">
              <a class="text-body" href="#">Terms</a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>

        <div class="col-sm-auto">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://www.facebook.com/profile.php?id=61555343102138">
                <i class="bi-facebook"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://www.instagram.com/codespacesolutions23/">
                <i class="bi-instagram"></i>
              </a>
            </li>




            <li class="list-inline-item">
              <!-- Button Group -->
              <div class="btn-group">
                <button type="button" class="btn btn-soft-secondary btn-xs dropdown-toggle" id="footerLightSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <span class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-circle me-2" src="{{asset('frontend/vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </span>
                </button>

                <div class="dropdown-menu" aria-labelledby="footerLightSelectLanguage">
                  <button  onclick="changeLanguage('en')" class="dropdown-item d-flex align-items-center active" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="{{asset('frontend/vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </button>

                  <button  onclick="changeLanguage('zh-CN')" class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="{{asset('frontend/vendor/flag-icon-css/flags/1x1/cn.svg')}}" alt="Image description" width="16"/>
                    <span>中文 (繁體)</span>
                    <div style="display: none" id="google_translate_element"></div>

                  </button>
                </div>
              </div>
              <!-- End Button Group -->
            </li>
          </ul>
          <!-- End Socials -->
        </div>
      </div>

      <!-- Copyright -->
      <div class="w-md-85 text-lg-center mx-lg-auto">
        <p class="text-muted small">© CodeSpace Solutions (003553109-A). All rights reserved. </p>
        <p class="text-muted small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
      </div>
      <!-- End Copyright -->
    </div>
  </footer>
