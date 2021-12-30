   <!-- footer starts
================================================== -->
    
<footer id="dtr-footer-global" class="bg-blue color-white">
        <div class="container"> 
            
            <!-- footer columns row starts -->
            <div class="row"> 
                
                <!-- column 1 starts -->
                <div class="col-12 col-sm-6 col-lg-6 dtr-sm-mb-30px">
                    <p><img src="{{asset('images/logo.tridhya.png')}}" alt="image" class="wow pulse" data-wow-delay="0.4s"></p>
                    <p class="dtr-rounded-alert wow fadeInUp" data-wow-delay="0.6s">Offizieller<span class="color-theme">Magento Partner</span></p>
                </div>
                <!-- column 1 ends --> 
                
                <!-- column 2 starts -->
                <div class="col-12 col-sm-6 col-lg-2 dtr-sm-mb-30px wow fadeInRight" data-wow-delay="0.4s">
                    <h6>Produkte</h6>
                    <ul class="dtr-list">
                        <li><a  href="{{route('impressum',$city_url)}}">Impressum</a></li>
                        <li><a  href="{{route('datenschutz',$city_url)}}">Datenschutz</a></li>
                        <li><a target="_blank" href="mailto:mail@tridhya.de">Email</a></li>
                    </ul>
                </div>
                <!-- column 2 ends --> 
                
                <!-- column 3 starts -->
                <div class="col-12 col-sm-6 col-lg-2 dtr-sm-mb-30px wow fadeInRight" data-wow-delay="0.6s">
                    <h6>Produkte</h6>
                    <ul class="dtr-list">
                        <li>Shopentwicklung</li>
                        <li>Plugins</li>
                        <li>Magento 2</li>
                    </ul>
                </div>
                <!-- column 3 ends --> 
                
                <!-- column 4 starts -->
                <div class="col-12 col-sm-6 col-lg-2 wow fadeInRight" data-wow-delay="0.8s">
                    <h6>Städte</h6>
                    <ul class="dtr-list">
                        <li>Erlanden</li>
                        <li>Fürth</li>
                        <li>München</li>
                    </ul>
                </div>
                <!-- column 4 ends --> 
                
            </div>
            <!-- footer columns row ends --> 
            
            <!-- copyright row starts -->
            <div class="row dtr-mt-7">
                <div class="col-12 col-md-6"> &copy; copyright 2022 Tridhya Tech GmbH </div>
                <div class="col-12 col-md-6">
                    <ul class="dtr-social-list text-right color-muted-white">
                        <li><a target="_blank" href="#" class="dtr-facebook"></a></li>
                        <li><a target="_blank" href="#" class="dtr-twitter"></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/tridhya" class="dtr-linkedin"></a></li>
                        <li><a target="_blank" href="https://instagram.com/tridhya.de?utm_medium=copy_link" class="dtr-instagram"></a></li>
                    </ul>
                </div>
            </div>
            <!-- copyright row ends --> 
            
        </div>
    </footer>
    <!-- footer ends
================================================== --> 
    
</div>
<!-- #dtr-wrapper ends --> 
<!-- JS FILES --> 
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript" ></script> 
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/jquery.easing.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/swiper.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/venobox.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/select2.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/jquery.form.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/wow.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/custom.js')}}" type="text/javascript"></script> 
<script>
	// wow animations
	if( $(window).outerWidth() >= 767 ) {
		new WOW().init({
			mobile: false,
		});
	}
</script>
</body>
</html>