@extends('layouts.main')

    @section('main-content')
        <!-- Preloader Gif -->
        <div class="doc-loader">
            <img src="{{ asset('required/images/preloader-1.gif') }}" alt="Loading">
        </div>

        <div id="content" class="site-content">

            <div class="content-left">
                <div class="content-left-wrapper">                     
                    <header>
                        <div class="toggle-holder">
                            <div id="toggle">
                                <div class="menu-line"></div>
                            </div>
                        </div>  

                        <div class="top-pagination">
                            <div class="current-num">
                                <span>01</span>                                    
                            </div>
                            <div class="pagination-div"></div>
                            <div class="total-pages-num"></div>
                        </div>

                        <div class="menu-holder">                            
                            <div class="menu-wrapper relative">                                 
                                <nav id="header-main-menu">
                                    <ul class="main-menu sm sm-clean">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#service">Service</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>                                  
                                        <li><a href="#resume">Resume</a></li>                                                                 
                                        <li><a href="#contact">Contact</a></li>                                  
                                    </ul>
                                </nav>                            
                            </div>                            
                        </div>        

                        <div class="my-info-wrapper">
                            <div class="my-info">
                                <p class="my-info-title">NAME</p>
                                <p class="my-info-content">Michael Waweru</p>
                            </div>

                            <div class="my-info">
                                <p class="my-info-title">PREFERRED TITLE</p>
                                <p class="my-info-content">Web Developer</p>
                            </div>

                            <div class="my-info">
                                <p class="my-info-title">EMAIL</p>
                                <p class="my-info-content"><a href="mailto:mikewaweru87@gmail.com"> mikewaweru87@gmail.com </a></p>
                            </div>

                            <div class="my-info">
                                <p class="my-info-title">PHONE</p>
                                <p class="my-info-content">(+254) 713 672 772</p>
                            </div>

                            <img class="my-info-signature" src="{{ asset('required/images/sign-2.png') }}" alt="signature" />  
                        </div>                

                        <div class="big-num">                              
                            <div class="current-big-num">01</div>
                            <div class="icon-scroll"></div>  
                        </div>
                    </header>
                </div> 
            </div>

            <div class="content-right">  
                <div class="content-right-wrapper">

                    <!-- Home Section -->  
                    <div id="home" class="section full-width-section">
                        <div class="section-wrapper block">
                            <div class="home-left-part">
                                <p class="site-des">Hello There, I am</p>
                                <h1 class="entry-title">Michael Waweru</h1>                                
                                <p class="site-info">
                                    I am a full stack developer in Kenya. Over the years, I have gained extensive knowledge 
                                    in web programming and developed reliable web-based applications that meet client's desires.
                                </p>                               
                                   
                                <div class="social-links">
                                    <p>
                                        My Social networks: <br />
                                        <a href="https://www.linkedin.com/in/michael-waweru-b3193a119/" target="_blank">LINKEDIN</a>
                                        <a href="https://github.com/Michael-Waweru" target="_blank">GITHUB</a>                                        
                                    </p>
                                       
                                 </div>
                            </div>                            
                        <div class="home-right-part"></div>                            
                        </div>
                    </div>

                    <!-- Service Section -->  
                    <div id="service" class="section">                        
                        <div class="section-wrapper block">
                            <div class="content-1300">
                                <div class="row">
                                    <div class="one-half width-55">
                                        <div class="services-wrapper">
                                            <div class="service-holder">
                                                <img src="{{ asset('required/images/service1.png') }}" alt="service1" />
                                                <h4 class="service-title">Design</h4>
                                                <div class="service-text">
                                                    I implement modern design technologies when coming up with websites.
                                                </div>                                        
                                            </div>                               

                                            <div class="service-holder m-right-0">
                                                <img src="{{ asset('required/images/service2.png') }}" alt="service2" />
                                                <h4 class="service-title">Develop</h4>
                                                <div class="service-text">
                                                    I develop websites for clients ensuring their online presence and business 
                                                    continuity.
                                                </div>                                        
                                            </div>                                

                                            <div class="service-holder m-bottom-0">
                                                <img src="{{ asset('required/images/service3.png') }}" alt="" />
                                                <h4 class="service-title">Backend-Integration</h4>
                                                <div class="service-text">
                                                    My deisgn methods include well integrated backend systems that make work easier
                                                    and ensure a secure web application.
                                                </div>                                        
                                            </div>

                                            <div class="service-holder m-right-0 m-bottom-0">
                                                <img src="{{ asset('required/images/service4.png') }}" alt="" />
                                                <h4 class="service-title">Graphic Design</h4>
                                                <div class="service-text">
                                                    I have indepth knowledge on using modern graphic design systems and creating
                                                    well designed graphic solutions.
                                                </div>                                        
                                            </div>
                                        </div>
                                    </div>

                                    <div class="one-half width-40 last">                                
                                        <h2 class="entry-title section-title">What I Offer</h2>
                                        <p class="section-info">
                                           <ul>
                                               Modern-designed web designs that leaves clients' brand recognized online.
                                           </ul>
                                        </p>
                                        <p>
                                            <ul>
                                                Advice and opinions to do with web-technologies and the most appropriate 
                                                way forward.
                                            </ul> 
                                        </p>
                                        <p>
                                            <ul>
                                                Beautiful graphic designs aimed at addressing clients' concerns. 
                                            </ul>
                                        </p>
                                        <p>
                                            <ul>
                                                Training to individuals aspiring to have a career in the field of web 
                                                design and development. 
                                            </ul>
                                        </p>

                                        <p>
                                            <ul>
                                                <h2 class="entry-title section-title">Technological Summary</h2>
                                                
                                                    <li>Certifications: CompTIA A+, Linux, CCNA</li>  
                                                    <li>Systems: Linux, Windows, Mobile</li> 
                                                    <li>Databases: Access, Relational Databases (SQL) </li>  
                                                    <li>Languages: HTML - CSS, JavaScript, PHP, C++</li>   
                                                    <li>Software: MS Office, Adobe Photoshop, Adobe Illustrator</li> 
                                                
                                            </ul>
                                        </p>

                                        <div class="button-group-wrapper">                                             
                                            <a href="#portfolio" class="button">Ongoing projects</a>                                                                   
                                        </div>
                                    </div>                                                                    
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Portfolio Section -->  
                     <div id="portfolio" class="section">                        
                        <div class="section-wrapper block">
                            <div class="content-1300">
                                <div id="portfolio-wrapper" class="relative">
                                    <div class="category-filter">
                                        <div class="category-filter-icon"></div>                       
                                    </div>
                                    <div class="category-filter-list button-group filters-button-group">
                                        <div class="button is-checked" data-filter="*">All</div>
                                        <div class="button" data-filter=".text">Backend-Integration</div>                                                                              
                                        <div class="button" data-filter=".video">Graphic Design</div>
                                        <div class="button" data-filter=".image">Development</div>
                                    </div>
                                    <div class="portfolio-load-content-holder"></div>
                                    <div class="grid" id="portfolio-grid">                                                            
                                        <div class="grid-sizer"></div>

                                        <div id="p-item-1" class="grid-item element-item p-one-third text">
                                            <a class="item-link ajax-portfolio" data-id="1">
                                                <img src="{{ asset('required/images/westpoint.png') }}" alt="portfolio1" />
                                                <div class="portfolio-text-holder">
                                                    <div class="portfolio-text-wrapper">
                                                        <p class="portfolio-text">Westpoint</p>
                                                        <p class="portfolio-cat">Property Management &rarr; pending</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="grid-item element-item p-one-third image">
                                            <a class="item-link" data-rel="{{ asset('required/images/prettyPhoto[portfolio]') }}">
                                                <img src="{{ asset('required/images/ecommerce-2.png') }}" alt="portfolio2" />
                                                <div class="portfolio-text-holder">
                                                    <div class="portfolio-text-wrapper">
                                                        <p class="portfolio-text">Mama Njeri's</p>
                                                        <p class="portfolio-cat">Online Shop &rarr; Launching soon</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="grid-item element-item p-one-third video">
                                            <a class="item-link" data-rel="prettyPhoto[portfolio]">
                                                <img src="{{ asset('required/images/lavish.png') }}" alt="portfolio3">
                                                <div class="portfolio-text-holder">
                                                    <div class="portfolio-text-wrapper">
                                                        <p class="portfolio-text">Lavish</p>
                                                        <p class="portfolio-cat">Branding &rarr; Launching soon</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                    </div>                
                                </div>   
                            </div>
                        </div>
                    </div>

                    <!-- Resume Section -->  
                    <div id="resume" class="section">                        
                        <div class="section-wrapper block">
                            <div class="content-1300">  
                                <div class="row">
                                    <div class="one-half width-55">
                                        <h2 class="entry-title section-title">Notable Milestones</h2>

                                        <ul class="timeline-holder">                                    

                                            <li class="timeline-event">
                                                <span class="timeline-circle"></span>
                                                <div class="timeline-event-content">                                    
                                                    <b>2017 - 2018</b> Junior Associate at University of Kabianga. Handle technical troubleshooting within
                                                      the campus, including system crashes, slow-downs, data recoveries as well as plan and execute 
                                                      maintenance of equipment.
                                                </div>
                                                <div class="timeline-event-date">2017</div>
                                            </li>

                                            <li class="timeline-event">
                                                <span class="timeline-circle"></span>
                                                <div class="timeline-event-content">
                                                    <b>2017 - 2018</b> Designed and implemented a website to help spread information about need 
                                                    for the girl-chilld to get educated in the rural villages of Kericho County.
                                                </div>
                                                <div class="timeline-event-date">2018</div>
                                            </li>

                                            <li class="timeline-event">
                                                <span class="timeline-circle"></span>
                                                <div class="timeline-event-content">
                                                    <b>2018 - 2019</b> Engage and track Priority 1 issues at CBS Kenya, supporting CBA bank with responsibility 
                                                    for the timely documentation, resolution and closure of trouble tickets.
                                                </div>
                                                <div class="timeline-event-date">2018</div>
                                            </li>

                                            <li class="timeline-event">
                                                <span class="timeline-circle"></span>
                                                <div class="timeline-event-content">
                                                    <b>2020 - 2021</b> Came up with an web-based tenant management system to help bring clients and 
                                                    tenants together. The system eases the entire house hunting process.
                                                </div>
                                                <div class="timeline-event-date">2020</div>
                                            </li>                                       

                                            <li class="timeline-event">
                                                <span class="timeline-circle"></span>
                                                <div class="timeline-event-content">
                                                    <b>2021 </b> Built an e-commerce website for a shoe retail business in PHP. 
                                                </div>
                                                <div class="timeline-event-date">2021</div>
                                            </li>                                           
                                        </ul>
                                    </div>

                                    <div class="one-half width-40 last">
                                        <h2 class="entry-title section-title">Cover letter</h2>
                                        <p class="section-info">
                                            Michael Waweru in a Summary:
                                        </p>
                                        <p>
                                            I hold a Bachelor of Science degree in Computer Science. My strength in time management and communication 
                                            has enabled me perform my duties effectively. In addition, I am a team player and thus capable of working 
                                            in diverse cultural environments.
                                        </p>
                                        <p>
                                            I am an astute and detail-oriented person with the ability to interpret data from both the clients’ perspective
                                            and the business perspective. I am capable of disseminating complex information effectively and also communicate
                                            vital information to people of diverse backgrounds.
                                        </p>

                                        <p>
                                            I pay special attention in tracking technological developments across the globe, a habit 
                                            that enables me provide optimal technological solutions to the clients who are in dire 
                                            need of my expertise, as well as improve on my skills.
                                        </p>                                        

                                        <img class="my-signature" src="{{ asset('required/images/sign-2.png') }}" alt="">                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <!-- Contact Section -->  
                    <div id="contact" class="section">                        
                        <div class="section-wrapper block">
                            <div class="content-1300">   
                                <div class="row">
                                    <h2 class="entry-title section-title">Talk to Me &rarr;</h2>
                                    <div class="one-half width-40">

                                        <p class="section-info">
                                            Reach me on my socials:
                                        </p>
                                        <div class="socials-a">
                                            <ul class="list-inline">
                                              <li class="list-inline-item">
                                                <a href="https://www.linkedin.com/in/michael-waweru-b3193a119/" target="_blank">
                                                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                              </li>                                              
                                              <li class="list-inline-item">
                                                <a href="https://github.com/Michael-Waweru" target="_blank">
                                                  <i class="fa fa-github" aria-hidden="true"></i>
                                                </a>
                                              </li>                                                                                           
                                            </ul>
                                        </div> 
                                          <div>
                                            <p>
                                                <b>PHONE:</b> +254 713 672 772 <br>
                                                <b>EMAIL:</b> <a href="mailto:mikewaweru87@gmail.com">mikewaweru87@gmail.com</a> <br>
                                                <b>WEBSITE:</b> www.michaelwaweru.com <br>
                                            </p>
                                          </div>                                   
                                    </div>                                                                         
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    @endsection