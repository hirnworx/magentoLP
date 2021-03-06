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
                        <li class="nav-item"> <a class="nav-link" href="#home">Magento Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#products">Was wir tun</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#about">Über uns</a> </li>
                        
                        <!-- dropdown starts-->
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ressourcen </a>
                            <div class="dropdown-menu dropdown-animate" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#reviews">Bewertungen</a> <a class="dropdown-item" href="#features">Produkte</a> <a class="dropdown-item" href="#cta">Anfragen</a> </div>
                        </li>
                        <!-- dropdown ends-->
                        
                        <li class="nav-item"> <a class="nav-link" href="#blog">Projekte</a> </li>
                    </ul>
                </div>
                <!-- menu ends--> 
                
                <!-- button here -->
                <div class="dtr-btn ml-4 d-none d-lg-block"> <a href="tel:09101 4789320">09101 4789320 <span><i class="icon-phone-call" aria-hidden="true"></i></span> </a> </div>
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
                <h1 class="dtr-mb-4 wow fadeInUp" data-wow-delay="0.4s">Die Magento Agentur für {{$city}} </h1>
                
                <!-- Text -->
                <p class="dtr-mb-4 text-size-md color-white-muted"> Wir sind Ihre zertifizierte Magento und Magento2 Agentur aus dem Raum {{$city}}. Ob Neugestaltung Ihres Onlineshops, Pluginentwicklung oder Updates</p>
                
                <!-- list starts -->
                <ul class="dtr-list-checkmark dtr-mb-5 text-size-md color-white-muted">
                    <li>
                        <h6>Magento 2 Onlineshop Entwicklung</h6>
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
                        <p class="text-center dtr-mb-4 text-size-sm">Hinterlassen Sie uns einfach eine kurze Anfrage. Einer unserer Magento Experten meldet sich bei Ihnen</p>
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
            
            <!-- column 1 starts -->
            <div class="col-12 col-md-4 dtr-sm-mb-30px wow fadeInUp" data-wow-delay="0.4s"> 
                
                <!-- Icon --> 
                <img class="dtr-mb-4" src="{{asset('images/magento_partner_70_70.png')}}" alt="icon"> 
                
                <!-- Heading -->
                <h5 class="mb-3">Magento Partneragentur</h5>
                
                <!-- Text -->
                <p>Wir sind eine Magento Partneragentur und arbeiten mit zertifizierten Magento Entwicklern</p>
            </div>
            <!-- column 1 ends --> 
            
            <!-- column 2 starts -->
            <div class="col-12 col-md-4 dtr-sm-mb-30px wow fadeInUp" data-wow-delay="0.4s"> 
                
                <!-- Icon --> 
                <img class="dtr-mb-4" src="{{asset('images/magento_server_70_70.png')}}" alt="icon"> 
                
                <!-- Heading -->
                <h5 class="mb-3">Leistungsfähiges Hosting</h5>
                
                <!-- Text -->
                <p>Sie haben keinen eigenen Server - Kein Problem! Wir bieten Ihnen das Hosting Ihres Onlineshops auf einem unserer performanten Server. Höchste Performance zum moderaten Preis</p>
            </div>
            <!-- column 2 ends --> 
            
            <!-- column 3 starts -->
            <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="0.4s"> 
                
                <!-- Icon --> 
                <img class="dtr-mb-4" src="{{asset('images/magento_certificate_70_70.png')}}" alt="icon"> 
                
                <!-- Heading -->
                <h5 class="mb-3">Magento 2 zertifiziert</h5>
                
                <!-- Text -->
                <p>Die höchsten Zertifizierungen für Magento Entwickler. Unsere Senior Magento Entwickler haben sie alle. Egal ob Front End oder Back End Developer</p>
            </div>
            <!-- column 3 ends --> 
            
        </div>
    </div>
</section>
    <!-- quickfeature section ends
  ================================================== --> 
    
    <!-- sticky tabs starts
  ================================================= -->
<section id="products" class="dtr-sticky-tabs-wrapper dtr-border-top"> 
    
    <!-- tabs nav start -->
    <div class="dtr-sticky-tabs-nav">
        <nav class="dtr-scrollspy-tabs">
            <ul class="dtr-scrollspy nav justify-content-center dtr-sticky-tabs">
                <li class="nav-item"> <a class="nav-link" href="#tab1"><img src="{{asset('images/icon-heart-tab.png')}}" alt="tab1">Magento Shop Entwicklung</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#tab2"><img src="{{asset('images/icon-plane-tab.png')}}" alt="tab2">Magento Migration 1 zu 2</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#tab3"><img src="{{asset('images/icon-pet-tab.png')}}" alt="tab3">Magento 2 Plugins</a> </li>
            </ul>
        </nav>
    </div>
    <!-- tabs nav ends -->
    
    <div data-target=".dtr-scrollspy-tabs"> 
        
        <!-- tab 1 starts -->
        <section id="tab1" class="dtr-sticky-tabs-section">
            <div class="dtr-sticky-tabs-content">
                <div class="container">
                    <div class="row align-items-center"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-7 dtr-sm-mb-30px wow fadeInLeft" data-wow-delay="0.4s"> <img src="{{asset('images/magento_3.png')}}" alt="logo"> </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-5 wow fadeInRight" data-wow-delay="0.4s"> 
                            
                            <!-- Icon Image --> 
                            <img src="{{asset('images/icon-heart_black.png')}}" alt="logo" class="dtr-mb-4"> 
                            
                            <!-- Heading -->
                            <h2 class="dtr-mb-4">Magento Agentur in {{$city}}</h2>
                            
                            <!-- Text -->
                            <p class="dtr-mb-5">Wir bauen Ihren Onlineshop von Grund auf. Ob B2B oder B2C Onlineshops, Wir sind Experten für individuelle Templates, Prozesse und Anpassungen innerhalb des Magento Systems. Hier ein Beispiel was alles möglich ist. Der <a href="https://www.shop.gitterrost-konfigurator.de" target=_blank >Gitterrost Konfigurator</a> von FeNau GmbH mit individuellen Zuschnitten</p>
                            
                            <!-- button here -->
                            <div class="dtr-btn"> <a href="#">Angebot jetzt anfordern<span><i class="icon-arrow-right" aria-hidden="true"></i></span> </a> </div>
                        </div>
                        <!-- column 2 ends --> 
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- tab 1 ends --> 
        
        <!-- tab 2 starts -->
        <section id="tab2" class="dtr-sticky-tabs-section">
            <div class="dtr-sticky-tabs-content">
                <div class="container">
                    <div class="row align-items-center"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-5 dtr-sm-mb-30px wow fadeInRight" data-wow-delay="0.4s"> 
                            
                            <!-- Icon Image --> 
                            <img src="{{asset('images/icon-plane_black.png')}}" alt="logo" class="dtr-mb-4"> 
                            
                            <!-- Heading -->
                            <h2 class="dtr-mb-4">Magento 1 zu 2 Migration</h2>
                            
                            <!-- Text -->
                            <p class="dtr-mb-5">Die Migration eines Magento 1 Shops zu einem Magento 2 System ist nicht so einfach wie es scheint. Wir haben zu diesem Zweck einen eigenen Migrator Etnwickelt der Kundendaten und Bestellungen zuverlässig überträgt. Sowie können wir durch unser Know How auch noch nicht in Magento2 vorhandene Plugins selbst entwickeln</p>
                            
                            <!-- button here -->
                            <div class="dtr-btn"> <a href="#">Angebot jetzt anfordern<span><i class="icon-arrow-right" aria-hidden="true"></i></span> </a> </div>
                        </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-7 text-right wow fadeInLeft" data-wow-delay="0.4s"> <img src="{{asset('images/magento_4.png')}}" alt="logo"> </div>
                        <!-- column 2 ends --> 
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- tab 2 ends --> 
        
        <!-- tab 3 starts -->
        <section id="tab3" class="dtr-sticky-tabs-section">
            <div class="dtr-sticky-tabs-content">
                <div class="container">
                    <div class="row align-items-center"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-7 dtr-sm-mb-30px wow fadeInLeft" data-wow-delay="0.4s"> <img src="{{asset('images/magento_6.png')}}" alt="logo"> </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-5 wow fadeInRight" data-wow-delay="0.4s"> 
                            
                            <!-- Icon Image --> 
                            <img src="{{asset('images/icon-pet_magento.png')}}" alt="logo" class="dtr-mb-4"> 
                            
                            <!-- Heading -->
                            <h2 class="dtr-mb-4">Magento Plugin Entwicklung</h2>
                            
                            <!-- Text -->
                            <p class="dtr-mb-5">Individuelle Magento Plugins sind notwendig für Ihren Business Case? Das ist unser Steckenpferd. Wir entwicklen Magento 2 Plugins welche individuell auf Ihre Bedürfnisse zugeschnitten sind. Individuelle Kunden erfordern eben individuelle Lösungen! </p>
                            
                            <!-- button here -->
                            <div class="dtr-btn"> <a href="#">Angebot jetzt anfordern<span><i class="icon-arrow-right" aria-hidden="true"></i></span> </a> </div>
                        </div>
                        <!-- column 2 ends --> 
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- tab 3 ends --> 
        
    </div>
</section>
    <!-- sticky tabs starts
  ================================================== --> 
    
    <!-- about starts
  ================================================== -->
<section id="about" class="bg-light-blue dtr-py-7">
    <div class="container">
        <div class="row"> 
            
            <!-- column 1 starts -->
            <div class="col-12 col-md-6"> 
                
                <!-- text here -->
                <p class="text-size-xl dtr-mb-4">Magento 2 Entwicklung in {{$city}} - Von Anfang an am Ball</p>
                <p class="dtr-mb-5">Wir haben Magento 2 von der Biege auf gelernt. Seit den ersten Versionen sind wir am Ball und haben die Weiterenwicklungen seitens Magento auf dem Schirm. B2B Commerce ist uns genauso ein Begriff wie die Magento API welche wir in und auswendig kennen. Auch Mangnto 1 ist uns noch bestens bekannt</p>
                
                <!-- info starts -->
                <div class="d-flex flex-column flex-md-row align-items-center dtr-about"> <img src="{{asset('images/tn_3.png')}}" width="80" height="80" alt="image" class="rounded-circle">
                    <div>
                        <h6 class="dtr-mb-0">Thomas J. Nautsch</h6>
                        <p class="dtr-mb-0">E-Commerce Expert</p>
                    </div>
                    <img src="{{asset('images/sign-dark.png')}}" alt="image"> </div>
                <!-- info ends -->
                
                <!-- image here--> 
                <img src="{{asset('images/dev1.png')}}" alt="image" class="dtr-rounded mt-5 dtr-sm-mb-30px wow fadeInLeft" data-wow-delay="0.4s"> </div>
            <!-- column 1 ends --> 
            
            <!-- column 2 starts -->
            <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.4s"> <img src="{{asset('images/dev2.png')}}" alt="image" class="dtr-rounded dtr-mb-5">
                <p class="text-size-xl dtr-mb-4">Ihre zuverlässingen und erfahrenen Magento Experten in der Region {{$city}} und darum herum.</p>
                <!-- accordion starts -->
                <div class="dtr-accordion accordion" id="home-accordion"> 
                    
                    <!-- accordion tab 1 starts -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="dtr-mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Wer sind wir? </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#home-accordion">
                            <div class="card-body"> Wir sind Tridhya GmbH. Eine E-Commerce Agentur welche sich auf Magento 2 spezialisiert hat. Mit über 25 auf Magento speziallisierten Entwicklern und 5 Projektmanagern können wir Projekte jeder Größenordnung stemmen </div>
                        </div>
                    </div>
                    <!-- accordion tab 1 ends --> 
                    
                    <!-- accordion tab 2 starts -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="dtr-mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Viel Erfahrung </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#home-accordion">
                            <div class="card-body"> Wir haben insgesamt über 20 Jahre Erfahrung im E-Commerce Bereich. Sind Anbieter für Schnittstellen zu Amazon Ebay und vielem Mehr und haben einfach E-Commerce im Herzen ♥... Besonders die aktuelle Situation im Jahr 2020 hat uns gezeigt wie wichtig E-Commerce in Zukunft sein wird, daher zögern Sie nicht uns anzusprechen</div>
                        </div>
                    </div>
                    <!-- accordion tab 2 ends --> 
                    
                    <!-- accordion tab 3 starts -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="dtr-mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> So arbeiten wir?</button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#home-accordion">
                            <div class="card-body"> Jedes erfolgreiches Projekt braucht eine gute Planung sowie ein gutes Management. Wir arbeiten für kleinere Projekte mit Kanban und für Größere Projekte mit SCRUM. So bleiben wir immer auf Kurs und wissen genau auf welchem Stand Ihr aktuelles Projekt ist. Gerne kommen wir auch in regelmäßigen Abständen während der Projektlaufzeit auch persönlich bei Ihnen in {{$city}} vorbei und untterrichten Sie über den aktuellen Fortschritt Ihres Projektes</div>
                        </div>
                    </div>
                    <!-- accordion tab 3 ends --> 
                    
                </div>
                <!-- accordion ends --> 
                
            </div>
            <!-- column 2 ends --> 
            
        </div>
    </div>
</section>
    
    <!-- about ends
  ================================================== --> 
    
    <!-- testimonial starts
  ================================================== -->
<section id="reviews" class="dtr-py-7 bg-grey">
    <h2 class="text-center">Was unsere Kunden über uns sagen</h2>
    <p class="text-center">Gute Referenzen sprechen für sich. mit kreativen Ideen unterstützen wir unsere Kunden im E-Commerce Bereich</p>
    <!-- swiper starts -->
    <div class="swiper-container dtr-testimonial-carousel dtr-swiper-has-arrows mt-5">
        <div class="swiper-wrapper"> 
            
            <!-- slide 1 starts -->
            <div class="swiper-slide">
                <div class="dtr-testimonial-wrapper">
                    <div class="d-flex align-items-center dtr-mb-4"> 
                        <!-- image--> 
                        <img src="{{asset('images/face3.jpg')}}" width="80" height="80" alt="image" class="rounded-circle dtr-mr-3"> 
                        <!-- client info -->
                        <div class="dtr-mr-5">
                            <h6 class="dtr-mb-0">Michael Feldmann</h6>
                            <p class="dtr-mb-0">Feldmann GmbH</p>
                        </div>
                        <span class="dtr-5-stars ml-auto"></span> </div>
                    <!-- review text --> 
                    Wir sind ein gebranntes Kind in sachen Agenturen. Oft wurde uns für Standardlösungen weitaus zu viel berechnet. Mit Tridhya Tech haben wir nun einen Partner welcher einwandfreie Arbeit zu einem fairen Preis abliefert. Eine klare Empfehlung! 
                    <!-- review text ends --> 
                </div>
            </div>
            <!-- slide 1 ends --> 
            
            <!-- slide 2 starts -->
            <div class="swiper-slide">
                <div class="dtr-testimonial-wrapper">
                    <div class="d-flex align-items-center dtr-mb-4"> 
                        <!-- image--> 
                        <img src="{{asset('images/face4.jpg')}}" width="80" height="80" alt="image" class="rounded-circle dtr-mr-3"> 
                        <!-- client info -->
                        <div class="dtr-mr-5">
                            <h6 class="dtr-mb-0">Thomas Nautsch</h6>
                            <p class="dtr-mb-0">FeNau GmbH</p>
                        </div>
                        <span class="dtr-5-stars ml-auto"></span> </div>
                    <!-- review text --> 
                    Wir setzen 70% unseres Gesamtumsatzes in unserem Onlineshop um. In einer Branche in der E-Commerce noch keine allzu große Rolle Spielt. Ich bin Teilhaber von Tridhya Tech GmbH und gleichzeit Geschäftsführer der FeNau GmbH. Das heißt dass ich alle Hürden gut kenne. Werfen Sie doch einen Blick auf unseren Magento 2 Shop <a href="https://www.fenau.eu" target="_blank" >FeNau GmbH Shop für den Metallbau</a>
                    <!-- review text ends --> 
                </div>
            </div>
            <!-- slide 2 ends --> 
            
            <!-- slide 3 starts -->
            <div class="swiper-slide">
                <div class="dtr-testimonial-wrapper">
                    <div class="d-flex align-items-center dtr-mb-4"> 
                        <!-- image--> 
                        <img src="{{asset('images/face1.jpg')}}" width="80" height="80" alt="image" class="rounded-circle dtr-mr-3"> 
                        <!-- client info -->
                        <div class="dtr-mr-5">
                            <h6 class="dtr-mb-0">Alexander Drobny</h6>
                            <p class="dtr-mb-0">AD-Tuning GmbH</p>
                        </div>
                        <span class="dtr-5-stars ml-auto"></span> </div>
                    <!-- review text --> 
                    Wir versenden am Tag über 2500 Pakete. Deshalb war es uns sehr wichtig unsere Migration von Magento 5 zu Showpare 6 reibungslos über die Bühne zu bringen. Tridhya Tech GmbH und vor allem Herr Azdufal hat sich hervorragend um uns gekümmert. Hierfür sind wir sehr dankbar 
                    <!-- review text ends --> 
                </div>
            </div>
            <!-- slide 3 ends --> 
            
            <!-- slide 4 starts -->
            <div class="swiper-slide">
                <div class="dtr-testimonial-wrapper">
                    <div class="d-flex align-items-center dtr-mb-4"> 
                        <!-- image--> 
                        <img src="{{asset('images/face2.jpg')}}" width="80" height="80" alt="image" class="rounded-circle dtr-mr-3"> 
                        <!-- client info -->
                        <div class="dtr-mr-5">
                            <h6 class="dtr-mb-0">Wolfgang André</h6>
                            <p class="dtr-mb-0">UK-Motors GmbH</p>
                        </div>
                        <span class="dtr-5-stars ml-auto"></span> </div>
                    <!-- review text --> 
                    In unserer Branche geht es immer darum individuelle Lösungen zur Fahrzeugsuche in unserem Onlineshop zu haben. Tridhya Tech GmbH hat uns hierfür einige Plugins entwickelt welche unseren Alltag erhelblich einfacher machen
                    <!-- review text ends --> 
                </div>
            </div>
            <!-- slide 4 ends --> 
            
        </div>
        <!-- Arrows -->
        <div class="swiper-button-next dtr-swiper-next"></div>
        <div class="swiper-button-prev dtr-swiper-prev"></div>
    </div>
    <!-- Swiper ends --> 
    
</section>
    <!-- testimonial ends
  ================================================== --> 
    
    <!-- cta section starts
  ================================================== -->
<section id="cta" class="dtr-pt-7 dtr-pb-5 dtr-sm-mb-30px bg-dark-blue color-white">
    <div class="container">
        <div class="row"> 
            
            <!-- column 1 starts -->
            <div class="col-12 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <h2>Unverbindlich beraten lassen. <span class="color-blue">Kostenfrei</span></h2>
            </div>
            <!-- column 1 ends --> 
            
            <!-- column 2 starts -->
            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <p>Fragen Sie doch einfach bei uns an oder rufen Sie kurz durch. Einer unserer Experten wird mit Ihnen den Status Quo Ihres Onlineshops erörtern. Im Nachgang erhalten Sie ein kostenfreies Angebot zu Ihrem Magento Projekt</p>
                <p class="text-size-xl dtr-mb-4">Wir kümmern uns um Sie!</p>
            </div>
            <!-- column 2 ends --> 
            
            <!-- column 3 starts -->
            <div class="col-12 col-lg-3 text-right wow fadeInUp" data-wow-delay="0.4s">
                <div class="dtr-btn"> <a href="#">Jetzt anfragen<span><i class="icon-envelope" aria-hidden="true"></i></span> </a> </div>
            </div>
            <!-- column 3 ends --> 
            
        </div>
    </div>
</section>

    <!-- cta section ends
  ================================================== --> 
    
    <!-- features section starts
  ================================================== -->
<section id="features" class="dtr-pt-7 dtr-pb-5 bg-white">
    <div class="container">
        <h2 class="text-center">Unser Magento Leistungs Portfolio</h2>
        <p class="text-center">Alles rund um Ihren Magento Shop aus einer Hand</p>
        <div class="row mt-5"> 
            
            <!-- box 1 starts -->
            <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="dtr-feature-box"> <span class="dtr-feature-box-icon"><i class="icon-sun2"></i></span>
                    <h5>Magento Entwicklung</h5>
                    <p>Wir erarbeiten mit Ihnen ein tragfähiges und langlebiges Konzept und Entwickeln Ihren Magento 2 Onlineshop</p>
                    <a href="#more">Jetzt anfragen &raquo;</a> </div>
            </div>
            <!-- box 1 ends --> 
            
            <!-- box 2 starts -->
            <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="dtr-feature-box"> <span class="dtr-feature-box-icon"><i class="icon-shopping-bag1"></i></span>
                    <h5>Plugin Entwicklung</h5>
                    <p>Individuelle Anforderungen? Wir passen das standard Magento System so lange an, bis es passt wie ein Maßanzug</p>
                    <a href="#more">Jetzt anfragen &raquo;</a> </div>
            </div>
            <!-- box 2 ends --> 
            
            <!-- box 3 starts -->
            <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="dtr-feature-box"> <span class="dtr-feature-box-icon"><i class="icon-bookmark2"></i></span>
                    <h5>Consulting</h5>
                    <p>Sie möchten nur einmal wissen wie Sie Ihren Onlineshop optimieren können? Wir beraten Sie gerne!</p>
                    <a href="#more">Jetzt anfragen &raquo;</a> </div>
            </div>
            <!-- box 3 ends --> 
            
            <!-- box 4 starts -->
            <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="dtr-feature-box"> <span class="dtr-feature-box-icon"><i class="icon-user-check1"></i></span>
                    <h5>SEO</h5>
                    <p>Ihr Onlineshop Rankt nicht wie Sie sich es vorstellen? Google noch immer das A&O gerne erarbeiten wir mit Ihnen effiziente SEO Strategie</p>
                    <a href="#more">Jetzt anfragen &raquo;</a> </div>
            </div>
            <!-- box 4 ends --> 
            
            <!-- box 5 starts -->
            <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="dtr-feature-box"> <span class="dtr-feature-box-icon"><i class="icon-sliders"></i></span>
                    <h5>SEA</h5>
                    <p>Adwords ist der Booster für Ihren Onlineshop. Eine effiziente Kampagne muss gut geplant sein</p>
                    <a href="#more">Jetzt anfragen &raquo;</a> </div>
            </div>
            <!-- box 5 ends --> 
            
            <!-- box 6 starts -->
            <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="dtr-feature-box"> <span class="dtr-feature-box-icon"><i class="icon-briefcase1"></i></span>
                    <h5>Schnittstellen</h5>
                    <p>Leistungsfähige Schnittstellen zu Ebay, Amazon, Otto, Autodoc, mercateo und vielen anderen Marktplätzen</p>
                    <a href="https://sync2shop.de">Mehr dazu &raquo;</a> </div>
            </div>
            <!-- box 6 ends --> 
            
        </div>
    </div>
</section>
    
    <!-- features section ends
  ================================================== --> 

  <section id="features" class="dtr-pt-7 dtr-pb-5 bg-white">
    <div class="container">
        <h2 class="text-center">Mehr Informationen über den Standort {{$city}}</h2>
        <div class="row mt-5"> 
            {!!$city_discription!!}
          
            
        </div>
    </div>
</section>
    
    <!-- blog section starts
  ================================================== -->
<section id="blog" class="dtr-py-7 bg-white">
    <div class="container">
        <h2 class="text-center">Weitere Magento Projekte</h2>
        <p class="text-center">Wir versuchen Prozesse zu optimieren. Hierfür haben wir ein paar Tools gebaut</p>
        
        <!-- blog swiper starts -->
        <div class="swiper-container dtr-swiper-has-arrows dtr-blog-carousel mt-5">
            <div class="swiper-wrapper"> 
                
                <!-- slide 1 starts -->
                <div class="swiper-slide">
                    <div class="dtr-post-carousel-item">
                        <div class="dtr-post-carousel-content"> <img src="{{asset('images/p1.png')}}" alt="image">
                            <div class="dtr-post-carousel-entry-content"> <span class="dtr-category">Schnittstelle</span>
                                <h5><a href="https://sync2shop.de">Sync2Shop ERP Schnittstellen</a></h5>
                            </div>
                            <div class="dtr-post-carousel-meta">
                                <ul class="dtr-meta">
                            
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 1 ends --> 
                
                <!-- slide 2 starts -->
                <div class="swiper-slide">
                    <div class="dtr-post-carousel-item">
                        <div class="dtr-post-carousel-content"> <img src="{{asset('images/p3.png')}}" alt="image">
                            <div class="dtr-post-carousel-entry-content"> <span class="dtr-category">Schnittstelle</span>
                                <h5><a href="https://sync2ship.de">Sync2Ship Lagerverwaltungssoftware</a></h5>
                            </div>
                            <div class="dtr-post-carousel-meta">
                                <ul class="dtr-meta">
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 2 ends --> 
                
                <!-- slide 3 starts -->
                <div class="swiper-slide">
                    <div class="dtr-post-carousel-item">
                        <div class="dtr-post-carousel-content"> <img src="{{asset('images/p4.png')}}" alt="image">
                            <div class="dtr-post-carousel-entry-content"> <span class="dtr-category">Software</span>
                                <h5><a href="https://tridhya.de">Tridhya Tech Softwareentwicklung</a></h5>
                            </div>
                            <div class="dtr-post-carousel-meta">
                                <ul class="dtr-meta">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 3 ends --> 
                
                
                
            </div>
            <!-- Arrows -->
            <div class="swiper-button-next dtr-swiper-next"></div>
            <div class="swiper-button-prev dtr-swiper-prev"></div>
        </div>
        <!-- Swiper ends --> 
        
    </div>
</section>
    
    <!-- blog section ends
  ================================================== --> 
@include('layouts.footer')
<script src="{{asset('js/quote_form.js?')}}"></script>