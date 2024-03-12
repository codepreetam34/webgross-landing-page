<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

    <title>The Webgross</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet" />
    <link href="assets/css/flaticon.css" rel="stylesheet" />
    <link href="assets/css/owl.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link
      href="assets/css/color/theme-color.css"
      id="jssDefault"
      rel="stylesheet"
    />
    <link href="assets/css/switcher-style.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />


    <style>
      .modal {
          display: none; 
          position: fixed; 
          z-index: 9999;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0, 0, 0, 0.4);
      }
  
      /* Modal content */
      .modal-content {
          background-color: #fefefe;
          margin: 0 auto;
          border: 1px solid #888;
          width: 30rem; 
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          position: absolute; 
          left: 50%; 
          top: 50%; 
          transform: translate(-50%, -50%); 
          animation-name: fadeInDownModal;
          animation-duration: 500ms;
          animation-timing-function: linear; 
          animation-iteration-count: 1; 
          transition: all 500ms ease;
          -webkit-transition:all 500ms ease;
      
      
      }
      @media (max-width: 600px) {
        .modal-content {
            width: 22rem; 
        }
    }
      .close {
          cursor: pointer;
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }
  
      .close:hover,
      .close:focus {
          color: black;
          text-decoration: none;
          cursor: pointer;
      }
  
      .inquiry-form {
          margin-top: 20px;
      }
  
      .form-group {
          margin-bottom: 15px;
      }
  
      .inquiry-form input[type="text"],
      .inquiry-form input[type="email"],
      .inquiry-form input[type="mobile"],
      .inquiry-form textarea {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }
  
      .inquiry-form textarea {
          height: 100px;
      }
  
      .theme-btn-two {
          background-color: #007bff;
          color: #fff;
          border: none;
          padding: 10px 20px;
          cursor: pointer;
          border-radius: 4px;
          transition: background-color 0.3s;
      }
  
      .theme-btn-two:hover {
          background-color: #0056b3;
      }

    @keyframes fadeInDownModal {
      from {
          top: -50%; 
          opacity: 0; 
      }
      to {
          top: 50%; 
          opacity: 1; 
      }
  }
  </style>
        
        </head>

  <!-- page wrapper -->
  <body>
    <div class="boxed_wrapper">
     
      <!-- switcher menu -->
      <div class="switcher">
        <div class="switch_btn">
          <!-- Call button -->
          <a href="tel:+917827291387" target="_blank">
              <button><i class="fas fa-phone-volume"></i></button>
          </a>
          <!-- WhatsApp button -->
          <a href="https://wa.me/7827291387" target="_blank">
              <button><i class="fab fa-whatsapp"></i></button>
          </a>
      </div>
      

        <!-- 
      
          <div class="switch_menu">
     
          <div class="switcher_container">
            <ul id="styleOptions" title="switch styling">
              <li>
                <a
                  href="javascript: void(0)"
                  data-theme="red"
                  class="red-color"
                ></a>
              </li>
              <li>
                <a
                  href="javascript: void(0)"
                  data-theme="pink"
                  class="pink-color"
                ></a>
              </li>
              <li>
                <a
                  href="javascript: void(0)"
                  data-theme="violet"
                  class="violet-color"
                ></a>
              </li>
              <li>
                <a
                  href="javascript: void(0)"
                  data-theme="crimson"
                  class="crimson-color"
                ></a>
              </li>
              <li>
                <a
                  href="javascript: void(0)"
                  data-theme="orange"
                  class="orange-color"
                ></a>
              </li>
            </ul>
          </div>
        </div> 
      
      -->


      </div>
      <!-- end switcher menu -->

      <!-- main header -->
      <header class="main-header style-one">
        <div class="header-top">
          <div class="top-inner clearfix">
            <div class="top-left pull-left">
              <ul class="info clearfix">
                <li><i class="flaticon-home"></i>New Delhi, India</li>
                <li>
                  <i class="flaticon-open-email-message"></i
                  ><a href="mailto:info@thewebgross.com">info@thewebgross.com</a>
                </li>
                <li><i class="flaticon-clock"></i>Mon - Fri : +91 7827291387</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="header-upper">
          <div class="outer-container">
            <div class="outer-box clearfix">
              <div class="upper-left pull-left">
                <figure class="logo-box">
                  <a href="index.html"
                    ><img src="assets/images/another-webgrossLogo.png" alt=""
                  /></a>
                </figure>
                <!-- <div class="btn-box">
                  <a href="index.html" class="theme-btn-one"
                    >Appointment<i class="flaticon-send"></i
                  ></a>
                </div> -->
              </div>
              <div class="menu-area pull-rightmenu">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                  <i class="icon-bar"></i>
                  <i class="icon-bar"></i>
                  <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                  <div
                    class="collapse navbar-collapse show clearfix"
                    id="navbarSupportedContent"
                  >
                    <ul class="navigation clearfix">
                      <li class="current dropdown">
                        <a href="index.html" class="scroll-link">Home</a>
                      </li>
                      <li class="dropdown">
                        <a href="#clients" class="scroll-link">Our Clients</a>

                      </li>
                      <li class="dropdown">
            
                        <a href="#about-us" class="scroll-link">About</a>

                      </li>
            
                      <li class="dropdown">
                        <a href="#services" class="scroll-link">Services</a>
                      </li>
                      <li class="dropdown">
                        <a href="#elements" class="scroll-link">Expertise</a>
                      </li>
                      <li class="dropdown">
                        <a href="#testimonials" class="scroll-link">Testimonials</a>
                      </li>
                      <li><a href="#contact-us" class="scroll-link">Contact</a></li>
                    </ul>
                  </div>
                </nav>
                <div class="menu-right-content clearfix pull-left">
                  <div class="support-box">
                    <i class="fas fa-phone-volume"></i>
                    <p>Any Questions? Call us</p>
                    <h3><a href="tel:7827291387">+91 7827291387</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
          <div class="auto-container">
            <div class="outer-box clearfix">
              <div class="logo-box pull-left">
                <figure class="logo">
                  <a href="index.html"
                    ><img src="assets/images/another-webgrossLogo.png" alt=""
                  /></a>
                </figure>
              </div>
              <div class="menu-area pull-rightmenusticky">
                <nav class="main-menu clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- main-header end -->

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <nav class="menu-box">
          <div class="nav-logo">
            <a href="index.html"
              ><img src="assets/images/logo.png" alt="" title=""
            /></a>
          </div>
          <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          </div>
          <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
              <li>New Delhi, India</li>
              <li><a href="tel:7827291387">+91 7827291387</a></li>
              <li><a href="mailto:info@thewebgross.com">info@thewebgross.com</a></li>
            </ul>
          </div>
          <div class="social-links">
            <ul class="clearfix">
              <li>
                <a href="index.html"><span class="fab fa-twitter"></span></a>
              </li>
              <li>
                <a href="index.html"
                  ><span class="fab fa-facebook-square"></span
                ></a>
              </li>
              <li>
                <a href="index.html"
                  ><span class="fab fa-pinterest-p"></span
                ></a>
              </li>
              <li>
                <a href="index.html"><span class="fab fa-instagram"></span></a>
              </li>
              <li>
                <a href="index.html"><span class="fab fa-youtube"></span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- End Mobile Menu -->

      <!-- banner-section -->
      <section class="banner-section style-one">

        <div class="banner-carousel owl-theme owl-carousel owl-dots-none" id="contact-form">
          <div class="slide-item">
            <div
              class="image-layer"
              style="background-image: url(assets/images/banner/banner-1.jpg)"
            ></div>
            <div class="auto-container">
              <div class="row clearfix">
                <div
                  class="col-xl-6 col-lg-6 col-md-12 content-column"
                  style="z-index: 1"
                >
                  <div class="content-box">
                    <div class="title-text">
                      <h1>
                        Crafting Digital Excellence, One Pixel at a Time – Your
                        Vision, Our Code.
                      </h1>
                      <div class="dotted-box">
                        <span class="dotted"></span>
                        <span class="dotted"></span>
                        <span class="dotted"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="col-lg-6 col-md-6 col-sm-12 inner-column"
                  style="z-index: 9999"
                >
                  <div class="inquiry-section bg-color-1" style="padding: 1rem">
                    <div
                      class="pattern-layer"
                      style="
                        background-image: url(assets/images/shape/pattern-4.png);
                      "
                    ></div>

                    <div class="inner-box">
                      <h4>Get Free Assessment Today !</h4>
                      <h2>
                        Feel Free To Enquire About <br />Any Questions You Got
                      </h2>
                      <form
                        action="index.html"
                        method="post"
                        class="inquiry-form"
                      >
                        <div class="form-group">
                          <input
                            type="text"
                            name="name"
                            placeholder="Full Name"
                            required=""
                          />
                        </div>
                        <div class="form-group">
                          <input
                            type="email"
                            name="email"
                            placeholder="Email address"
                            required=""
                          />
                        </div>
                        <div class="form-group">
                          <input
                            type="mobile"
                            name="mobile"
                            placeholder="Mobile Number"
                            required=""
                          />
                        </div>
                        <div class="form-group">
                          <textarea
                            name="message"
                            placeholder="Message"
                          ></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="theme-btn-two" onclick="sendEmail()">
                            <i class="flaticon-send"></i>Send Message
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- banner-section end -->

      <section class="clients-section">
        <div class="auto-container">

          <div class="sec-title centred" style="padding-top:1rem">
          <h2>Clients Trust Us</h2>
          </div>
          <img src="assets/images/clients/clients-logos.png" alt="" />
        </div>
      </section>

      <!-- training-section -->
      <section class="training-section bg-color-2" id="clients">
        <div
          class="pattern-layer"
          style="background-image: url(assets/images/shape/pattern-2.png)"
        ></div>
        <div class="auto-container">
          <div class="top-inner">
            <div class="row clearfix">
              <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                <div class="sec-title light">
                  <p>How we help clients</p>
                  <h3>
                    Get Premium Services Offered by Our Digital Advertising
                    Agency
                  </h3>
                  <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                <div class="text">
                  <p>
                    Take your online­ presence to ne­w heights with customised
                    digital solutions from Webgross. Our skille­d professionals
                    can help delive­r accurate results, helping you thrive­ in
                    the ever-changing digital world. The­re's no need to acce­pt
                    average. Experie­nce our outstanding service and bring out
                    your be­st with what we offer starting now.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="four-item-carousel owl-carousel owl-theme owl-dots-none">
            <div class="training-block-one">
              <div class="inner-box">
                <div class="content-box">
                  <figure class="image-box">
                    <img src="assets/images/resource/service-1.png" alt="" />
                  </figure>
                </div>
              </div>
            </div>
            <div class="training-block-one">
              <div class="inner-box">
                <div class="content-box">
                  <figure class="image-box">
                    <img src="assets/images/resource/service-2.png" alt="" />
                  </figure>
                </div>

              </div>
            </div>
            <div class="training-block-one">
              <div class="inner-box">
                <div class="content-box">
                  <figure class="image-box">
                    <img src="assets/images/resource/service-3.png" alt="" />
                  </figure>
                </div>
                </div>
              </div>


              <div class="training-block-one">
                <div class="inner-box">
                  <div class="content-box">
                    <figure class="image-box">
                      <img src="assets/images/resource/service-4.png" alt="" />
                    </figure>
                  </div>
  
                </div>
              </div> 
              
              <div class="training-block-one">
                <div class="inner-box">
                  <div class="content-box">
                    <figure class="image-box">
                      <img src="assets/images/resource/service-5.png" alt="" />
                    </figure>
                  </div>
  
                </div>
              </div> 
              
              <div class="training-block-one">
                <div class="inner-box">
                  <div class="content-box">
                    <figure class="image-box">
                      <img src="assets/images/resource/service-6.png" alt="" />
                    </figure>
                  </div>
  
                </div>
              </div> 
            </div>

          </div>
        </div>
      </section>
      <!-- training-section end -->

      <!-- about-section -->
      <section class="about-section">
        <div
          class="pattern-layer"
          style="background-image: url(assets/images/shape/pattern-1.png)"
        ></div>
        <div class="auto-container">
          <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
              <div id="image_block_1">
                <div class="image-box">
                  <figure class="image">
                    <img src="assets/images/whoWeAreImage.jpg" alt="" />
                  </figure>
                  <div class="box">
                    <div class="inner">
                      <div class="icon-box">
                        <div class="icon icon-1"></div>
                        <div class="icon icon-2"></div>
                      </div>
                      <span
                        >Transform clicks into conversions</span
                      >
                      <h4 style="color:#ec4e4f">Over 4+</h4>
                      <p>years of experience</p>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column" id="about-us">
              <div id="content_block_1">
                <div class="content-box">
                  <div class="sec-title">
                    <p>Who We Are</p>
                    <h3>
                      From Concept to Clicks – Redefining Excellence in Web
                      Development
                    </h3>
                    <div class="dotted-box">
                      <span class="dotted"></span>
                      <span class="dotted"></span>
                      <span class="dotted"></span>
                    </div>
                  </div>
                  <div class="bold-text">
                    <p>
                      Webgross: Elevating Digital Excellence in
                      Website Development
                    </p>
                  </div>
                  <div class="text">
                    <p>
                      When you choose Webgross, you're choosing more than a
                      website development service – you're choosing a dedicated
                      partner invested in the success of your online journey.
                      Experience the difference with Webgross – where excellence
                      meets innovation
                    </p>
                  </div>
                  <div class="btn-box">
                    <a href="#contact-form" class="theme-btn-two"
                      >Enquire Now<i class="flaticon-send"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about-section end -->

      <!-- immigration-section -->
      <section class="immigration-section" id="services">
        <div class="auto-container">
          <div class="sec-title centred">
            <p>We offer support</p>
            <h2>Drive Results with <br />Webgross's Proven Strategies</h2>
            <div class="dotted-box">
              <span class="dotted"></span>
              <span class="dotted"></span>
              <span class="dotted"></span>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
              <div
                class="immigration-block-one wow fadeInUp animated animated"
                data-wow-delay="00ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img
                      src="assets/images/seo.jpg"
                      alt=""
                      style="width: 360px; height:240px"
                    />
                  </figure>
                  <div class="text">
                    <h3  style="color: #fff;">Ecommerce Website Development</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
              <div
                class="immigration-block-one wow fadeInUp animated animated"
                data-wow-delay="200ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img
                      src="assets/images/Social_Media_Marketing.jpg"
                      alt=""
                    />
                  </figure>
                  <div class="text">
                    <h3 style="color: #fff;">Shopify Website Development
                  </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
              <div
                class="immigration-block-one wow fadeInUp animated animated"
                data-wow-delay="400ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img
                      src="assets/images/website-development.avif"
                      alt=""
                    />
                  </figure>
                  <div class="text">
                    <h3  style="color: #fff;">Web & Mobile App Development</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
              <div
                class="immigration-block-one wow fadeInUp animated animated"
                data-wow-delay="00ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img
                      src="assets/images/website-development-process.jpg"
                      alt=""
                    />
                  </figure>
                  <div class="text">
                    <h3  style="color: #fff;">Wordpress Website Development</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
              <div
                class="immigration-block-one wow fadeInUp animated animated"
                data-wow-delay="200ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img
                      src="assets/images/email_marketing.avif"
                      alt=""
                      style="height: 240px;"
                    />
                  </figure>
                  <div class="text">
                    <h3  style="color: #fff;">Custom Website Development</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 immigration-block">
              <div
                class="immigration-block-one wow fadeInUp animated animated"
                data-wow-delay="400ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img
                      src="assets/images/performance_marketing.jpg"
                      alt=""
                    />
                  </figure>
                  <div class="text">
                    <h3  style="color: #fff;">Catalogue Website Development</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="more-text">
            <h3>
              <!-- At webgross, creativity is our home and we live digital ! -->
              Your Brand's Journey Starts Here
              <a href="#contact-form" 
                ><span>Reach Out Today !</span><i class="flaticon-send"></i
              ></a>
            </h3>
          </div>
        </div>
      </section>
      <!-- immigration-section end -->

      <!-- feature-section -->
      <section class="feature-section">
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
              <div
                class="feature-block-one wow fadeInUp animated animated"
                data-wow-delay="00ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img src="assets/images/Desgin_Thinking.jpg" alt="" style="height: 15.375rem;width:100%"/>
                  </figure>
                  <div class="text">
                    <h3><a href="index.html">Design Thinking Approach</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
              <div
                class="feature-block-one wow fadeInUp animated animated"
                data-wow-delay="300ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img src="assets/images/technology_culture.jpg" alt="" style="height: 15.375rem;width:100%" />
                  </figure>
                  <div class="text">
                    <h3><a href="index.html">Technology Innovation Culture</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
              <div
                class="feature-block-one wow fadeInUp animated animated"
                data-wow-delay="600ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <figure class="image-box">
                    <img src="assets/images/end-to-end-partners.jpg" alt="" style="height: 15.375rem;width:100%"/>
                  </figure>
                  <div class="text">
                    <h3><a href="index.html">Your End-to-End Partners</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- feature-section end -->

      <!-- cta-section -->
      <section class="cta-section bg-color-1 centred">
        <div class="auto-container">
          <div class="inner-box">
            <h2>We can transform your brand</h2>
            <div class="text">
              <p>
                Experience explosive brand growth with our specifically designed
                strategies, boosting visibility and engagement like never
                before!
              </p>
              <div class="dotted-box">
                <div class="dotted"></div>
                <div class="dotted"></div>
                <div class="dotted"></div>
                <div class="dotted"></div>
                <div class="dotted"></div>
                <div class="dotted"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- cta-section end -->

      <!-- service-section -->
      <section class="service-section">
        <div class="auto-container">
          <div class="top-inner">
            <div class="row clearfix">
              <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                <div class="sec-title">
                  <p>How we help clients</p>
                  <h3>
                    We Create Tomorrow's Digital Landscape Today – Your
                    Imagination, Our Expertise, Endless Possibilities
                  </h3>
                  <div class="dotted-box">
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                    <span class="dotted"></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                <div class="text">
                  <p>
                    Webgross proudly stands as the most trusted website
                    development company in Delhi NCR, setting new benchmarks for
                    excellence in the digital landscape. With a relentless
                    commitment to delivering unparalleled web solutions,
                    Webgross has earned the trust of clients through its
                    innovative approach and unwavering dedication to client
                    success
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
            <div class="service-block-one">
              <div class="inner-box">
                <div class="icon-box"><i class="flaticon-manager"></i></div>
                <span>service types</span>
                <h3>
                  <a href="service-details.html">Effective Communication</a>
                </h3>
                <p>
                  We unde­rstand the vital role of clear communication in
                  advancing busine­ss growth, ensuring that your needs are­
                  consistently addressed.
                </p>
                <div class="link">
                  <a href="service-details.html"
                    ><i class="flaticon-send"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="service-block-one">
              <div class="inner-box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <span>service types</span>
                <h3><a href="service-details.html">Experience</a></h3>
                <p>
                  With a wealth of e­xperience we­, possess profound insights
                  into success and failure, offe­ring content that deeply
                  re­sonates with your audience.
                </p>
                <div class="link">
                  <a href="service-details.html"
                    ><i class="flaticon-send"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="service-block-one">
              <div class="inner-box">
                <div class="icon-box"><i class="flaticon-airport"></i></div>
                <span>service types</span>
                <h3>On-Time Delivery</h3>
                <p>
                  We value­ meeting deadline­s to guarantee timely de­livery of
                  services to ke­ep your projects progressing as planne­d.
                </p>
                <div class="link">
                  <a href="service-details.html"
                    ><i class="flaticon-send"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="service-block-one">
              <div class="inner-box">
                <div class="icon-box"><i class="flaticon-bus-stop"></i></div>
                <span>service types</span>
                <h3>Authenticity</h3>
                <p>
                  We make­ sure our content is complete­ly original and written
                  just for you. We don't use artificial inte­lligence or copy
                  others' work.
                </p>
                <div class="link">
                  <a href="service-details.html"
                    ><i class="flaticon-send"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="service-block-one">
              <div class="inner-box">
                <div class="icon-box"><i class="flaticon-manager"></i></div>
                <span>service types</span>
                <h3>Affordability</h3>
                <p>
                  Get high-quality, relevant content at competitive rates,
                  maximising ROI.
                </p>
                <div class="link">
                  <a href="service-details.html"
                    ><i class="flaticon-send"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="service-block-one">
              <div class="inner-box">
                <div class="icon-box"><i class="flaticon-flight"></i></div>
                <span>service types</span>
                <h3>Range of Services</h3>
                <p>
                  We offe­r many services to help your brand shine­ everywhere­.
                  This includes SEO content, captions for social media, and
                  more­.
                </p>
                <div class="link">
                  <a href="service-details.html"
                    ><i class="flaticon-send"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- service-section end -->

      <!-- apply-section -->
      <section class="apply-section">
        <div class="auto-container">
          <div class="inner-box clearfix">
            <figure class="image-box">
              <img src="assets/images/img2.jpg" alt="" />
            </figure>
            <div class="content-box">
              <div class="icon-box">
                <div class="icon icon-1"></div>
                <div class="icon icon-2"></div>
              </div>
              <h4>Pixel-Perfect Precision, Future-Ready Functionality !</h4>
              <h3>
                For businesses seeking a reliable partner for website
                development in Delhi NCR, Webgross emerges as the beacon of
                trust, innovation, and digital excellence
              </h3>
              <a href="#contact-form" class="theme-btn-one"
                ><i class="flaticon-send"></i>Enquire Now</a
              >
            </div>
          </div>
        </div>
      </section>
      <!-- apply-section end -->

      <!-- funfact-section -->
      <section class="funfact-section centred">
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
              <div
                class="counter-block-one wow slideInUp animated animated"
                data-wow-delay="00ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="560"
                      >0</span
                    >
                  </div>
                  <h3>Over 100+ Satisfied Clients</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
              <div
                class="counter-block-one wow slideInUp animated animated"
                data-wow-delay="200ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="99"
                      >0</span
                    ><span>%</span>
                  </div>
                  <h3>Increased Brand Visibility</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
              <div
                class="counter-block-one wow slideInUp animated animated"
                data-wow-delay="400ms"
                data-wow-duration="1500ms"
              >
                <div class="inner-box">
                  <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="42"
                      >0</span
                    ><span>hrs</span>
                  </div>
                  <h3>Higher Conversion Rates</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- funfact-section end -->

      <!-- choose-section -->
      <section class="choose-section bg-color-3" id="elements">
        <div
          class="pattern-layer"
          style="background-image: url(assets/images/shape/pattern-3.png)"
        ></div>
        <figure
          class="image-layer wow slideInRight animated animated"
          data-wow-delay="00ms"
          data-wow-duration="1500ms"
        >
          <img src="assets/images/resource/choose-1.jpg" alt="" />
        </figure>
        <div class="auto-container">
          <div id="content_block_2">
            <div class="content-box">
              <div class="sec-title">
                <p>why choose The Webgross</p>
                <h2>Choose Webgross for Digital Success</h2>
                <div class="dotted-box">
                  <span class="dotted"></span>
                  <span class="dotted"></span>
                  <span class="dotted"></span>
                </div>
              </div>
              <div class="text">
                <p>
                  Join, countless satisfied clients with unparalleled success
                  with our comprehensive digital marketing solutions.
                </p>
              </div>
              <div class="inner-box">
                <div class="single-item">
                  <div class="icon-box">
                    <img src="assets/images/1_Proven Expertise.png" alt="">
                    <!-- <i class="flaticon-air-freight"></i> -->
                  </div>
                  <h3>Proven Expertise</h3>
                  <p>
                    We've­ been doing digital marketing for many ye­ars and have
                    helped lots of custome­rs reach their aims.
                  </p>
                </div>
                <div class="single-item">
                  <div class="icon-box">
                    <img src="assets/images/1_Tailored Strategies.png" alt="">
                  
                  </div>
                  <h3>Tailored Strategies</h3>
                  <p>
                    Our team cre­ates approaches to match your company's
                    specific targe­ts.
                  </p>
                </div>
                <div class="single-item">
                  <div class="icon-box"><img src="assets/images/1_Comprehensive Services.png" alt=""></div>
                  <h3>Comprehensive Services</h3>
                  <p>
                    We've covered everything from search e­ngine optimisation
                    and social media marketing to conte­nt creation.
                  </p>
                </div>
                <div class="single-item">
                  <div class="icon-box"><img src="assets/images/1_Result-Oriented Approach.png" alt=""></div>
                  <h3>Result-Oriented Approach</h3>
                  <p>
                    Our goal is to give re­sults that can be measured to he­lp
                    your business grow and increase your pre­sence online.
                  </p>
                </div>
                <div class="single-item">
                  <div class="icon-box"><img src="assets/images/1_Customer Satisfaction.png" alt=""></div>
                  <h3>Customer Satisfaction</h3>
                  <p>
                    Our dedicated support team ensures your satisfaction every
                    step of the way.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- choose-section end -->

      <!-- testimonial-section -->
      <section class="testimonial-section" id="testimonials">
        <div class="auto-container">
          <div class="sec-title centred">
            <p>clients testimonials</p>
            <!-- , personable service, <br /> expert knowledge and on-time delivery -->
            <h2>Our clients praise us for our great results</h2>
            <div class="dotted-box">
              <span class="dotted"></span>
              <span class="dotted"></span>
              <span class="dotted"></span>
            </div>
          </div>
          <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
            
            <div class="testimonial-block-one">
              <div class="inner-box">
                <div class="author-inner">
                  <!-- <figure class="image-box">
                    <img
                      src="assets/images/girl.avif"
                      alt=""
                    />
                  </figure> -->
                  <h5>Pooja</h5>
                  <!-- <span class="designation">California, USA</span> -->
                </div>
                <div class="content-inner">
                  <div class="rating-box">
                    <!-- <h6>Green Card Approved</h6> -->
                    <ul class="rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="text">
                    <p>
                      Webgross took our outdated website and transformed it into a sleek, modern platform that perfectly represents our brand. Their attention to detail and commitment to delivering results is unmatched. Highly recommend their services!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="testimonial-block-one">
              <div class="inner-box">
                <div class="author-inner">
                  <h5>Rohan</h5>
                </div>
                <div class="content-inner">
                  <div class="rating-box">
                    <ul class="rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="text">
                    <p>
                      Webgross understood the unique challenges of our non-profit organization and created a website that effectively communicates our mission and engages our supporters. They were a pleasure to work with, and we're incredibly grateful for their dedication to our cause.

                    </p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="testimonial-block-one">
              <div class="inner-box">
                <div class="author-inner">
                  <h5>Saatwik</h5>
                </div>
                <div class="content-inner">
                  <div class="rating-box">
                    <ul class="rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="text">
                    <p>
                      I can't thank Webgross enough for their incredible work on my website. They listened to my vision and turned it into a stunning reality. Their team was responsive, professional, and truly went above and beyond to exceed my expectations.



                    </p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="testimonial-block-one">
              <div class="inner-box">
                <div class="author-inner">
                  <h5>Siddharth</h5>
                </div>
                <div class="content-inner">
                  <div class="rating-box">
                    <ul class="rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="text">
                    <p>
                      Working with Webgross was a game-changer for my online store. They not only designed a beautiful website but also optimized it for maximum performance and user experience. Since launching the new site, I've seen a significant increase in sales. Thank you, Webgross!
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- testimonial-section end -->

      <!-- inquiry-section -->
      <section class="inquiry-section bg-color-1" id="contact-us">
        <div
          class="pattern-layer"
          style="background-image: url(assets/images/shape/pattern-4.png)"
        ></div>
        <div class="auto-container">
          <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
              <div class="inner-box">
                <h4>Get Free Assessment Today !</h4>
                <h2>Feel Free To Enquire About <br />Any Questions You Got</h2>
                <form action="index.html" method="post" class="inquiry-form">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      placeholder="Full Name"
                      required=""
                    />
                  </div>
                  
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      placeholder="Email address"
                      required=""
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="mobile"
                      name="mobile"
                      placeholder="Mobile Number"
                      required=""
                    />
                  </div>
            
                  <div class="form-group">
                    <textarea name="message" placeholder="Message"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="theme-btn-two" onclick="sendEmail()">
                      <i class="flaticon-send"></i>Send Message
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
              <div class="content-box">
                <h3>Customer Ratings</h3>
                <ul class="rating clearfix">
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                </ul>
                <h2>4.8 / 5.0</h2>
                <span>300+ Project done</span>
                <ul class="info-box clearfix">
                  <li>
                    <i class="flaticon-call"></i>
                    <p>Any Questions? Call us</p>
                    <h3><a href="tel:78272 91387">+91 78272 91387</a></h3>
                  </li>
                  <li>
                    <i class="flaticon-email"></i>
                    <p>Any Questions? Email us</p>
                    <h3>
                      <a href="mailto:info@thewebgross.com"
                        >info@thewebgross.com</a
                      >
                    </h3>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- inquiry-section end -->

      <!-- main-footer -->
      <footer class="main-footer bg-color-2">
        <div class="auto-container">
          <div class="footer-bottom clearfix">
            <div class="copyright centred">
              <p>
                (&copy;) 2024 <a href="index.html">The</a> Webgross. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- main-footer end -->

      <!--Scroll to top-->
      <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-long-arrow-alt-up"></i>
      </button>
    </div>

    <!-- Modal HTML -->

    <div id="myModal" class="modal">
      <div class="modal-content">
  
        <div class="inquiry-section bg-color-1" style="padding: 1rem;">
         
          <div style="display: flex;justify-content:space-between">
          <div>
          <h2 style="color: #fff;">Get Free Assessment Today !</h2>
          <p style="color: #fff;">Feel free to inquire about any questions you have.</p>
          </div>

          <div class="close">
            &times;
            </div>
        </div>
          <form id="inquiryForm" class="inquiry-form">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email address" required>
            </div>
            <div class="form-group">
              <input type="mobile" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
      
            <div class="form-group">
                <textarea id="message" name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="theme-btn-two" onclick="sendEmail()"><i class="flaticon-send"></i> Send Message</button>
            </div>
       
          </form>

      </div>

        

  </div>
</div>
  
  <script>
    var modal = document.getElementById('myModal');

    var closeBtn = document.getElementsByClassName('close')[0];

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    closeBtn.onmouseover = function() {
        closeBtn.style.color = '#ff0000'; 
    }

    closeBtn.onmouseout = function() {
        closeBtn.style.color = '#000000'; 
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    function showModalPopup() {
        modal.style.display = 'block';
    }

    setTimeout(showModalPopup, 5000);
</script>


  <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <script>

      emailjs.init("laml2y_FNTziCV5S-");
  
      function sendEmail() {
          var formData = {
              name: document.getElementById('name').value,
              email: document.getElementById('email').value,
              mobile: document.getElementById('mobile').value,
              message: document.getElementById('message').value
          };
  
          emailjs.send("service_8stzfar", "template_n00mijo", formData)
              .then(function(response) {
                  alert('Your message has been sent successfully.');
                  document.getElementById('inquiryForm').reset();
              }, function(error) {
                  console.error('Failed to send your message:', error);
                  alert('Failed to send your message. Please try again later.');
              });
      }
  </script>
  

    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>

    <script src="assets/js/script.js"></script>

    <script>
  $('.scroll-link').on('click', function(e) {
    e.preventDefault();
    var target = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 800); 
  });
  
    </script>
  </body>
</html>
