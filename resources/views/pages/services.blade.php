@extends('layouts.main')
    @section('main-content')
        <div id="service" class="section">                        
            <div class="section-wrapper block">
                <div class="content-1300">
                    <div class="row">
                        <div class="one-half width-55">
                            <div class="services-wrapper">
                                <div class="service-holder">
                                    <img src="{{ asset('required/images/service1.png') }}" alt="" />
                                    <h4 class="service-title">Design</h4>
                                    <div class="service-text">
                                        A full stack allaround designer that may or may not include a guide for specific creative people
                                    </div>                                        
                                </div>                               

                                <div class="service-holder m-right-0">
                                    <img src="{{ asset('required/images/service2.png') }}" alt="" />
                                    <h4 class="service-title">Develop</h4>
                                    <div class="service-text">
                                        Tellus pharetra erat tristique erat donec dignissim etiam sed malesik enim sodales lorem ipsum
                                    </div>                                        
                                </div>                                

                                <div class="service-holder m-bottom-0">
                                    <img src="{{ asset('required/images/service3.png') }}" alt="" />
                                    <h4 class="service-title">Write</h4>
                                    <div class="service-text">
                                        Vestibulum consequat, dignissim tellus sollicitudin vulputate elit aliquet ullamcorper feugiat nisi
                                    </div>                                        
                                </div>

                                <div class="service-holder m-right-0 m-bottom-0">
                                    <img src="{{ asset('required/images/images/service4.png') }}" alt="" />
                                    <h4 class="service-title">Promote</h4>
                                    <div class="service-text">
                                        Quam facilisi nunc faucibus at porttitor vestibulum consequat dignissim tellus sollicitudin
                                    </div>                                        
                                </div>
                            </div>
                        </div>

                        <div class="one-half width-40 last">                                
                            <h2 class="entry-title section-title">Services</h2>
                            <p class="section-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra tristique placerat in massa consectetur quisque nunc fames.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra tristique placerat in massa consectetur quisque. Nunc ac fames lectus in libero aliquet. 
                            </p>
                            <p>
                                Faucibus sed tristique fames sed aliquet ultricies eget viverra arcu. Vitae faucibus diam consequat maecenas. Turpis metus sit diam purus leo in varius ac quam. Nunc amet tristique volutpat adipiscing vulputate phasellus. Volutpat faucibus 
                            </p>

                            <div class="button-group-wrapper">
                                <a class="button">Download CV</a> 
                                <a href="#portfolio" class="button">Check My Portfolio</a>                                                                   
                            </div>
                        </div>                                                                    
                    </div>
                </div>
            </div>
        </div>
    @endsection