
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Third Slide -->
            <div class="item active">

                <!-- Slide Background -->
                <a href="#">
                    <img src="[{$oViewConf->getImageUrl()}]banners_1.png" alt="Bootstrap Touch Slider"  class="slide-image"/>
                </a>


                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left">
                            <!--<h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                            <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                            <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                            <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">

                <!-- Slide Background -->
                <a href="[{ oxgetseourl ident=$oViewConf->getSslSelfLink()|cat:"cl=register" }]">
                    <img src="[{$oViewConf->getImageUrl()}]banners_2.png" alt="Bootstrap Touch Slider" style="height: 670px"/>
                </a>
       
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <!--<h1 data-animation="animated flipInX">Bootstrap touch slider</h1>
                    <p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a>
                    <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a>-->
                </div>
            </div>
            <!-- End of Slide -->


        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <!--<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>-->

        <!-- Right Control -->
        <!--<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>-->

    </div> <!-- End  bootstrap-touch-slider Slider -->    



