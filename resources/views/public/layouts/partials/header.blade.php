<header>
    <div class="header-top">
      <div class="container">
        <div class="d-flex align-items-center gap-5 justify-content-between d-block d-lg-none">
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>

          <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title fw-bold" id="offcanvasScrollingLabel"><a href="index.html"
                  class="text-black">CSL SERVICE</a></h5>
              <button type="button" class="btn-close " style="font-size: 12px !important;" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link fs-6" href="index.html" aria-expanded="false">
                    Home
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link fs-6" href="#">
                    Company
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link fs-6" href="#">
                    Products
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link fs-6" href="#">
                    Solutions
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-6" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  Mirpur 10, Dhaka, Bangladesh
                </li>
                <li class="nav-item mt-2">
                  <div class="d-flex align-items-center gap-2">
                    <img src="{{ asset('frontend/images/whatsapp.png') }}" alt="">
                    <p class="text-dark fs-6">+880 1893-115555</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <a class="navbar-brand logo d-flex align-items-center" href="index.html">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="car service logo">
          </a>
          <p class="d-none d-lg-block">{{ settings('address') ? settings('address') : 'Office Location' }}</p>
          <div class="d-flex align-items-center gap-2 d-none d-lg-block">
            <img src="{{ asset('frontend/images/whatsapp.png') }}" alt="">
            <p>+880 1893-115555</p>
          </div>
          <div>
            <a href="">Login</a>
          </div>
        </div>
      </div>

      <div class="container d-none d-lg-block">
        <div class="top-content d-flex align-items-center justify-content-end">
          <div class="d-flex align-items-center gap-5">
            <p>{{ settings('address') ? settings('address') : 'Office Location' }}</p>
            <div class="d-flex align-items-center gap-2">
              <img src="{{ asset('frontend/images/whatsapp.png') }}" alt="">
              <p>+880 1893-115555</p>
            </div>
            <div>
              <a href="">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg d-none d-lg-block">
      <div class="container position-relative">
        <a class="navbar-brand logo d-flex align-items-center" href="index.html">
          <img src="{{ asset('frontend/images/logo.png') }}" alt="car service logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link" href="index.html" aria-expanded="false">
                Home
              </a>
            </li>
            <li class="nav-item dropdown has_mega_menu">
              <a class="nav-link" href="#">
                Company
              </a>
              <ul class="nav_dropdown container">
                  <div class="row w-100">
                    <div class="col-lg-4">
                        <li class="nav-item">
                          <a class="nav-link newnav" href="http://cslservicebd.com/about">
                              <div class="d-flex align-items-center">
                                  <div class="menu-item-icon">
                                      <img src="http://cslservicebd.com/build/assets/images/company/aboutus.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                  </div>
                                  <div class="media-body">
                                      <div class="media-title">
                                          About Us
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                    </div>
                    <div class="col-lg-4">
                       <li class="nav-item">
                           <a class="nav-link newnav" href="http://cslservicebd.com/whyus">
                                <div class="d-flex align-items-center">
                                    <div class="menu-item-icon">
                                        <img src="http://cslservicebd.com/build/assets/images/company/whyus.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            Why Us
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                    <div class="col-lg-4">
                      <li class="nav-item">
                          <a class="nav-link newnav" href="http://cslservicebd.com/clients">
                              <div class="d-flex align-items-center">
                                  <div class="menu-item-icon">
                                      <img src="http://cslservicebd.com/build/assets/images/company/clients.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                  </div>
                                  <div class="media-body">
                                      <div class="media-title">
                                          Clients
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                    </div>
                    <div class="col-lg-4">
                      <li class="nav-item">
                          <a class="nav-link newnav" href="http://cslservicebd.com/partnars">
                              <div class="d-flex align-items-center">
                                  <div class="menu-item-icon">
                                      <img src="http://cslservicebd.com/build/assets/images/company/partners.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                  </div>
                                  <div class="media-body">
                                      <div class="media-title">
                                          Partners
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                    </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link">
                Products
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link">
                Solutions
              </a>
              <ul class="nav_dropdown container">
                  <li class="nav-item">
                      <a class="nav-link newnav" href="https://cslservicebd.com">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/software-development.png" alt="" style="padding: 10px 0px 0px 10px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">Software Development</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Structure-Local-Area-Network">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/local-area.png" alt="" style="padding: 10px 0px 0px 10px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">Structure Local Area Network (LAN).</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Fiber-Optic-Backbone">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/wire.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Fiber Optic Backbone
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Automate-Ip-Surveillance-and-Cctv">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/cctv-camera-icon.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">Automated IP Surveillance &amp; CCTV </div>
                              </div>
                          </div>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Smart-ip-pabx">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/phone.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Smart IP PABX
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Smart-wireless">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/smart-city.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Smart Wireless
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Automated-Smart-Classroom-Lab">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/student.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Automated Smart Classroom /Lab
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/enterprise-server-and-storage">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/repair.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Enterprise Server &amp; Storage
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Smart-Public-Addressing-System-Solution">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/microphone.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Smart Public Addressing (PA) System
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/Access-control-and-attendance-system">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/login.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Smart Access Control And Attendance System
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/enterprise-switching-and-routing">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/routing.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      Enterprise Switching And Routing
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link newnav" href="http://cslservicebd.com/solutions/ICT-Consultancy-And-Project-Management">
                          <div class="d-flex align-items-center">
                              <div class="menu-item-icon">
                                  <img src="http://cslservicebd.com/build/assets/images/solutionnavbar/project-management-1.png" alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                              </div>
                              <div class="media-body">
                                  <div class="media-title">
                                      ICT Consultancy And Project Management
                                  </div>
                              </div>
                          </div>
                      </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>