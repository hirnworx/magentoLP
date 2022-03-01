@include('layouts.header')
 <!-- Header
============================================= -->
<header id="dtr-header-global" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark dtr-menu">
        <div class="container"> 
            
            <!-- light logo --> 
            <a class="navbar-brand logo-light" href="#home"><img src="{{asset('images/logo.tridhya.png')}}" alt="logo"></a> 
            <!-- dark logo --> 
            <a class="navbar-brand logo-dark" href="#home"><img src="{{asset('images/tridhya_logo.jpg')}}" alt="logo"></a> 
            
            <!-- nav menu toggler-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            
            <!-- menu starts-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="dtr-scrollspy navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link" href="https://www.magentopartner.de">Magento Home</a> </li>
            <!-- menu ends--> 
            
            <!-- button here -->
            <div class="dtr-btn ml-4 d-none d-lg-block"> <a href="tel:+49(0)91014789320">09101 4789320 <span><i class="icon-phone-call" aria-hidden="true"></i></span> </a> </div>
            <!-- button ends --> 
        </div>
    </nav>
</header>
    <!-- header ends
================================================== --> 
    
     <!-- hero section starts
        
================================================== -->
<script src="https://consent.cookiefirst.com/banner.js" data-cookiefirst-key="aa51b6fd-dfe8-49ef-a5d4-695fc638caaa"></script>
<section id="home" class="hero-section dtr-py-8 hero-default-bg bg-blue">
    <div class="container">
        <div class="row align-items-center"> 
            
            <!-- column 1 starts -->
            <div class="col-12 col-md-6 dtr-sm-mb-30px color-white"> 
                
                <!-- Heading -->
                <h1 class="dtr-mb-4 wow fadeInUp" data-wow-delay="0.4s">Die Magento Agentur für {{$city}} - Tridhya Tech GmbH </h1>
                
                <!-- Text -->
                <p class="dtr-mb-4 text-size-md color-white-muted"> Wir sind Ihre zertifizierte Magento und Magento2 Agentur aus dem Raum {{$city}}. Ob Neugestaltung Ihres Onlineshops, Pluginentwicklung oder Updates.</p>
                
                <!-- list starts -->
                <ul class="dtr-list-checkmark dtr-mb-5 text-size-md color-white-muted">
                    <li>
                        <h6>Magento 2 Entwicklung</h6>
                    </li>
                    <li>
                        <h6>Migration von Magento 1 zu 2 </h6>
                    </li>
                    <li>
                        <h6>Magento Plugin Entwicklung</h6>
                    </li>
                </ul>
                <!-- list ends --> 
            </div>
            <!-- column 1 ends --> 
            
            <!-- column 2 starts -->
            <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="dtr-hero-form"> 
                    
                    <!-- form header starts -->
                    <div class="dtr-form-head">
                        <h4 class="text-center">Kostenfreies Angebot erhalten</h4>
                    </div>
                    
                    <!-- form body starts -->
                    <div class="dtr-form-body">
                        <p class="text-center dtr-mb-4 text-size-sm">Hinterlassen Sie uns einfach eine kurze Anfrage. Einer unserer Magento Experten meldet sich bei Ihnen.</p>
                        <div class="dtr-form dtr-submit-full">
                             @include('quote_form')
                        </div>
                    </div>
                    <!-- form body ends --> 
                    
                </div>
            </div>
            <!-- column 2 ends --> 
            
        </div>
    </div>
</section>
    <!-- hero section starts
================================================== --> 
    
    <!-- quickfeature section starts
================================================== -->
<section id="quickfeatures" class="dtr-py-6">
    <div class="container">
        <div class="row text-center"> 
            
            <h1>Impressum</h1>
        </div>              
    </div>
</section>
<main>
    <section class="section-base section-color">
        <div class="container">
      		<p><strong>Tridhya Tech GmbH</strong><br />
			Nürnberger Straße 46 <br />
			90579 Langenzenn, Deutschland<br /></p><p>
			<a href="Tel:+49(0)91014789320">+49(0)91014789320</a><br />

			E-Mail: mail@tridhya.de<br /></p><p>Vertreten durch : Thomas Joachim Nautsch, David De Matteo, Tridhya Tech Private Ltd  <br /></p><p><strong>Registereintrag:</strong><br />
			Eingetragen im Handelsregister<br />

			Handelsregister Nummer: HRB 19363<br /></p><p>
			Betriebsnummer: 82112865    <br />
			<br /></p><p>Dieses Impressum wurde erstellt durch <a href="https://www.datenschutzexperte.de">www.datenschutzexperte.de</a></p>
        </div>
    </section>
</main>
@include('layouts.footer')
<script src="{{asset('js/quote_form.js?')}}"></script>