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
                <h1 class="dtr-mb-4 wow fadeInUp" data-wow-delay="0.4s">Datenschutzerkl??rung der Magento Agentur f??r {{$city}} </h1>
                
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

                <!-- Magento badge 

                <div class="col-3 col-md-8 dtr-sm-mb-0px color-white"> 
                    <img src="assets/images/Magento.png" alt="">
                    </div>
                -->
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
                
                <h2>Datenschutzerkl??rung</h2>
                <p>Vielen Dank f??r Ihr Interesse an unserer Website. Der Schutz Ihrer personenbezogenen Daten ist uns ein sehr
                    wichtiges Anliegen. Im Folgenden finden Sie Informationen zum Umgang mit Ihren Daten, die durch Ihre Nutzung
                    unserer Website erfasst werden. Die Verarbeitung Ihrer Daten erfolgt entsprechend den gesetzlichen Regelungen
                    zum Datenschutz.</p>
            </div>
            <div>
                <h3>Verantwortliche Stelle im Sinne des Datenschutzrechts</h3>
                <p>
                    Tridhya Tech GmbH
                    <br>
                    N??rnberger Stra??e 46
                    
                    <br>
                    90579
                    
                    Langenzenn
                    
                    <br>
                    mail@tridhya.de
                    <br>
                    +49(0)9101 4789320
                </p>
            </div>
            <div>
                <h3>Begriffsbestimmungen</h3>
                <p>Unsere Datenschutzerkl??rung soll f??r jedermann einfach und verst??ndlich sein. In dieser Datenschutzerkl??rung
                    werden in der Regel die offiziellen Begriffe der Datenschutzgrundverordnung (DSGVO) verwendet. Die offiziellen
                    Begriffsbestimmungen werden in Art. 4 DSGVO erl??utert.</p>
            </div>
            <div>
                <h3>Datenverarbeitung durch den Besuch unserer Website</h3>
                <p>Wenn Sie unsere Webseiten aufrufen, ist es technisch notwendig, dass ??ber Ihren Internetbrowser Daten an unseren
                    Webserver ??bermittelt werden. Folgende Daten werden w??hrend einer laufenden Verbindung zur Kommunikation
                    zwischen Ihrem Internetbrowser und unserem Webserver aufgezeichnet:</p>
                <ul class="dot-list">
                    <li>Datum und Uhrzeit der Anforderung</li>
                    <li>Name der angeforderten Datei</li>
                    <li>Seite, von der aus die Datei angefordert wurde</li>
                    <li>Zugriffsstatus</li>
                    <li>Verwendeter Webbrowser und verwendetes Betriebssystem</li>
                    <li>(Vollst??ndige) IP-Adresse des anfordernden Rechners</li>
                    <li>??bertragene Datenmenge</li>
                </ul>
                <p>Die aufgelisteten Daten erheben wir, um einen reibungslosen Verbindungsaufbau der Website zu gew??hrleisten und
                    eine komfortable Nutzung unserer Website durch die Nutzer zu erm??glichen. Zudem dient die Logdatei der
                    Auswertung der Systemsicherheit und -stabilit??t sowie administrativen Zwecken. Rechtsgrundlage f??r die
                    vor??bergehende Speicherung der Daten bzw. der Logfiles ist Art. 6 Abs. 1 lit. f DSGVO.</p>
                    <p>Aus Gr??nden der technischen Sicherheit, insbesondere zur Abwehr von Angriffsversuchen auf unseren Webserver,
                        werden diese Daten von uns kurzzeitig gespeichert. Anhand dieser Daten ist uns ein R??ckschluss auf einzelne
                        Personen nicht m??glich. Nach sp??testens <b><span>7</span></b>
                        werden die Daten durch Verk??rzung der IP-Adresse auf Domainebene anonymisiert, sodass es nicht mehr m??glich
                        ist, einen Bezug zum einzelnen Nutzer herzustellen.</p>
                    <p>In anonymisierter Form werden die Daten daneben ggf. zu statistischen Zwecken verarbeitet. Eine Speicherung
                        dieser Daten zusammen mit anderen personenbezogenen Daten des Nutzers, ein Abgleich mit anderen
                        Datenbest??nden oder eine Weitergabe an Dritte findet zu keinem Zeitpunkt statt.</p>
                    <h3>Kontaktformular und Kontaktaufnahme per E-Mail</h3>
                    <p>Wenn Sie uns per Kontaktformular oder E-Mail Anfragen zukommen lassen, werden Ihre Angaben aus dem
                        Anfrageformular bzw. Ihrer E-Mail inklusive der von Ihnen dort angegebenen
                        <span><b>Vor- und Nachname, Anrede</b></span>
                        zwecks Bearbeitung der Anfrage und f??r den Fall von Anschlussfragen bei uns gespeichert. Die Angabe
                        einer E-Mail-Adresse ist zur Kontaktangabe erforderlich, die Angabe Ihres Namens sowie Ihrer Telefonnummer
                        ist freiwillig. Diese Daten geben wir in keinem Fall ohne Ihre Einwilligung weiter. Rechtsgrundlage f??r die
                        Verarbeitung der Daten ist unser berechtigtes Interesse an der Beantwortung Ihres Anliegens gem???? Art. 6
                        Abs. 1 lit. f DSGVO sowie ggf. Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre Anfrage auf den Abschluss eines
                        Vertrages abzielt. Ihre Daten werden nach abschlie??ender Bearbeitung Ihrer Anfrage gel??scht, sofern keine
                        gesetzlichen Aufbewahrungspflichten entgegenstehen. Sie k??nnen im Falle von Art. 6 Abs. 1 lit. f DSGVO gegen
                        die Verarbeitung Ihrer personenbezogenen Daten jederzeit Widerspruch einlegen.</p>
                    <h3>Google Analytics</h3>
                    <p>Unsere Website nutzt Google Analytics, einen Internetanalysedienst, der von Google Ireland Limited, Gordon
                        House, Barrow Street, Dublin 4, Irland ("Google") zur Verf??gung gestellt wird. Google Analytics verwendet
                        sogenannte "Cookies". </p>
                        <p>Google wird diese Informationen im Auftrag des Betreibers dieser Website benutzen, um Ihre Nutzung der
                            Website auszuwerten und um Reports ??ber die Websiteaktivit??ten zu erstellen. Google wird diese
                            Informationen auch dazu verwenden, dem Website-Betreiber weitere, mit der Nutzung der Website und des
                            Internets verbundene, Dienstleistungen zu erbringen. Die von Ihrem Browser im Rahmen von Google
                            Analytics gesendete IP-Adresse wird nicht mit anderen Daten von Google kombiniert. Die Verarbeitung
                            erfolgt gem???? Art. 6 Abs. 1 lit. a DSGVO auf der Grundlage der von Ihnen erteilten Einwilligung.</p>
                    <p>Wir verwenden Google Analytics nur mit aktivierter IP-Anonymisierung. Das bedeutet, Ihre IP-Adresse wird von
                        Google nur gek??rzt weiterverarbeitet.
                        Wir haben mit dem Dienstleister einen Auftragsverarbeitungsvertrag geschlossen, in welchem wir ihn
                        verpflichten, die Daten unserer Kunden zu sch??tzen und sie nicht an Dritte weiterzugeben.
                        Da eine ??bertragung personenbezogener Daten in die USA erfolgt, sind weitere Schutzmechanismen erforderlich,
                        die das Datenschutzniveau der DSGVO sicherstellen. Um dies zu gew??hrleisten, haben wir mit dem Anbieter
                        Standarddatenschutzklauseln gem???? Art. 46 Abs. 2 lit. c DSGVO vereinbart. Diese verpflichten den Empf??nger
                        der Daten in den USA die Daten entsprechend dem Schutzniveau in Europa zu verarbeiten. In F??llen, in denen
                        dies auch durch diese vertragliche Erweiterung nicht sichergestellt werden kann, bem??hen wir uns um
                        dar??berhinausgehende Regelungen und Zusagen des Empf??ngers in den USA.
                        Die Nutzungsbedingungen von Google Analytics und Informationen zum Datenschutz k??nnen ??ber die folgenden
                        Links abgerufen werden:
                        <a href="http://www.google.com/analytics/terms/de.html" rel="nofollow" target="_blank">http://www.google.com/analytics/terms/de.html</a>
                        <a href="https://www.google.de/intl/de/policies/" rel="nofollow" target="_blank">https://www.google.de/intl/de/policies/</a>
                        <br>
                        Die Daten werden gel??scht, sobald sie f??r die Erreichung des Zweckes ihrer Erhebung nicht mehr erforderlich
                        sind. Eine L??schung der Daten auf Nutzer- und Ereignisebene, die mit Cookies, Nutzerkennungen (z. B.
                        User-ID) und Werbe-IDs (z. B. DoubleClick-Cookies, Android-Werbe-ID, IDFA [Apple-Kennung f??r
                        Werbetreibende]) verkn??pft sind erfolgt sp??testens 14 Monate nach ihrer Erhebung.
                        <br>
                        Sie k??nnen das Speichern von Cookies verhindern, indem Sie die Einstellungen Ihrer Browser-Software
                        entsprechend anpassen. Wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht alle
                        Funktionen dieser Website uneingeschr??nkt nutzen k??nnen. Sie k??nnen auch verhindern, dass Google die durch
                        den Cookie erzeugten Daten sammelt und Ihre Nutzung der Website (einschlie??lich Ihrer IP-Adresse) analysiert
                        und diese Daten durch Google verarbeitet, indem Sie das Browser-Plugin herunterladen und installieren, das
                        unter <a href="https://tools.google.com/dlpage/gaoptout?hl=de" rel="nofollow" target="_blank">https://tools.google.com/dlpage/gaoptout?hl=de</a>
                        verf??gbar ist.</p>
                    <h3>Google Maps</h3>
                    <p>Unsere Homepage nutzt ??ber eine Schnittstelle den Online-Kartendienstanbieter Google Maps. Anbieter des
                        Kartendienstes ist Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Ireland. Zur Nutzung der
                        Funktionalit??ten von Google Maps ist es notwendig, Ihre IP-Adresse zu speichern. Rechtgrundlage f??r die
                        Verarbeitung Ihrer personenbezogenen Daten ist Ihre hierzu erteilte Einwilligung nach Art. 6 Abs. 1 S. 1
                        lit. a DSGVO.
                        Durch die Nutzung des Dienstes erfolgt eine ??bertragung personenbezogener Daten in die USA. Rechtsgrundlage
                        f??r die ??bermittlung Ihrer personenbezogenen Daten in die USA ist Ihre erteile Einwilligung nach Art. 49
                        Abs. 1 S. 1 lit. a DSGVO. Bitte beachten Sie, dass f??r derartige ??bermittlungen von personenbezogen Daten
                        ohne Vorliegen eines Angemessenheitsbeschlusses und ohne geeignete Garantien ein Risiko f??r Sie besteht. Das
                        Risiko besteht darin, dass aufgrund der Gesetzgebung in den USA ein Zugriff amerikanischer Beh??rden
                        (insbesondere der Nachrichtendienste) auf die personenbezogenen Daten erfolgt. Rechtschutzm??glichkeiten oder
                        Ausk??nfte zum Umgang mit Ihren Daten bei den US-Beh??rden sind nur sehr eingeschr??nkt bis gar nicht m??glich.
                        Ein Datenschutzniveau nach den Vorgaben der DSGVO kann demnach nicht gew??hrleistet werden. Weitere
                        Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerkl??rung von Google: <a
                                href="https://www.google.de/intl/de/policies/privacy/" rel="nofollow" target="_blank">https://www.google.de/intl/de/policies/privacy/</a>.<br>Opt-out:
                        <a href="https://www.google.com/settings/ads/" rel="nofollow" target="_blank">https://www.google.com/settings/ads/</a>
                    </p>
                    <h3>Cookies</h3>
                    <p>Unsere Website setzt Cookies ein, die vom Browser auf Ihrem Ger??t gespeichert werden und die bestimmte
                        Einstellungen zur Nutzung der Website enthalten (z. B. zur laufende Sitzung). Cookies dienen dazu, unser
                        Angebot nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf
                        Ihrem Rechner abgelegt werden und die Ihr Browser speichert. Die meisten der von uns verwendeten Cookies
                        sind so genannte Session-Cookies, welche nach dem Schlie??en des Browsers automatisch gel??scht werden. Andere
                        Cookies bleiben auf Ihrem Endger??t gespeichert, bis Sie diese l??schen oder die Speicherdauer abl??uft. Diese
                        Cookies erm??glichen es uns, Ihren Browser beim n??chsten Besuch wiederzuerkennen.</p>
                    <p>Teilweise dienen die Cookies dazu, durch Speicherung von Einstellungen Websiteprozesse zu vereinfachen (z. B.
                        das Vorhalten bereits ausgew??hlter Optionen). Sofern durch einzelne von uns implementierte Cookies auch
                        personenbezogene Daten verarbeitet werden, erfolgt die Verarbeitung gem???? Art. 6 Abs. 1 lit. b DSGVO
                        entweder zur Durchf??hrung des Vertrages oder gem???? Art. 6 Abs. 1 lit. f DSGVO zur Wahrung unserer
                        berechtigten Interessen an der bestm??glichen Funktionalit??t der Website sowie einer kundenfreundlichen und
                        effektiven Ausgestaltung des Seitenbesuchs.
                        Sie k??nnen Ihren Browser so einstellen, dass Sie ??ber das Setzen von Cookies informiert werden und Cookies
                        nur im Einzelfall erlauben, die Annahme von Cookies f??r bestimmte F??lle oder generell ausschlie??en sowie das
                        automatische L??schen der Cookies beim Schlie??en des Browsers aktivieren. Die Cookie Einstellungen k??nnen
                        unter den folgenden Links f??r die jeweiligen Browser verwaltet werden.
                    </p>
                        <h3>Hotjar</h3>
                        <p>
                            "Wir nutzen Hotjar, um die Bed??rfnisse unserer Nutzer besser zu verstehen und das Angebot und die Erfahrung auf dieser Webseite zu optimieren. Mithilfe der Technologie von Hotjar bekommen wir ein besseres Verst??ndnis von den Erfahrungen unserer Nutzer (z.B. wieviel Zeit Nutzer auf welchen Seiten verbringen, welche Links sie anklicken, was sie m??gen und was nicht etc.) und das hilft uns, unser Angebot am Feedback unserer Nutzer auszurichten. Hotjar arbeitet mit Cookies und anderen Technologien, um Daten ??ber das Verhalten unserer Nutzer und ??ber ihre Endger??te zu erheben, insbesondere IP Adresse des Ger??ts (wird w??hrend Ihrer Website-Nutzung nur in anonymisierter Form erfasst und gespeichert), Bildschirmgr????e, Ger??tetyp (Unique Device Identifiers), Informationen ??ber den verwendeten Browser, Standort (nur Land), zum Anzeigen unserer Webseite bevorzugte Sprache. Hotjar speichert diese Informationen in unserem Auftrag in einem pseudonymisierten Nutzerprofil. Hotjar ist es vertraglich verboten, die in unserem Auftrag erhobenen Daten zu verkaufen. 
            
                    </p>
                    <ul class="dot-list">
                        <li>Firefox: <a href="https://support.mozilla.org/de/kb/cookies-erlauben-und-ablehnen" target="_blank"
                                        rel="nofollow">https://support.mozilla.org/de/kb/cookies-erlauben-und-ablehnen</a></li>
                        <li>Internet Explorer: <a href="http://windows.microsoft.com/de-DE/windows-vista/Block-or-allow-cookies"
                                                  target="_blank" rel="nofollow">http://windows.microsoft.com/de-DE/windows-vista/Block-or-allow-cookies</a>
                        </li>
                        <li>Chrome: <a href="http://support.google.com/chrome/bin/answer.py?hl=de&amp;hlrm=en&amp;answer=95647"
                                       target="_blank" rel="nofollow">http://support.google.com/chrome/bin/answer.py?hl=de&amp;hlrm=en&amp;answer=95647</a>
                        </li>
                        <li>Safari: <a href="https://support.apple.com/kb/ph21411?locale=de_DE" target="_blank" rel="nofollow">https://support.apple.com/kb/ph21411?locale=de_DE</a>
                        </li>
                        <li>Opera: <a href="https://help.opera.com/en/latest/web-preferences/#cookies" target="_blank"
                                      rel="nofollow">https://help.opera.com/en/latest/web-preferences/#cookies</a></li>
                    </ul>
                    <p>Sie k??nnen auch die Cookies vieler Unternehmen und Funktionen einzeln verwalten, die f??r Werbung eingesetzt
                        werden. Verwenden Sie dazu die entsprechenden Nutzertools, abrufbar unter <a
                                href="https://www.aboutads.info/choices/" rel="nofollow" target="_blank">https://www.aboutads.info/choices/</a>
                        oder <a href="http://www.youronlinechoices.com/uk/your-ad-choices" rel="nofollow" target="_blank">http://www.youronlinechoices.com/uk/your-ad-choices</a>
                        Die meisten Browser bieten zudem eine sog. ???Do-Not-Track-Funktion??? an, mit der Sie angeben k??nnen, dass Sie
                        nicht von Websites ???verfolgt??? werden m??chten. Wenn diese Funktion aktiviert ist, teilt der jeweilige Browser
                        Werbenetzwerken, Websites und Anwendungen mit, dass Sie nicht zwecks verhaltensbasierter Werbung und
                        ??hnlichem verfolgt werden m??chten. Informationen und Anleitungen, wie Sie diese Funktion bearbeiten k??nnen,
                        erhalten Sie je nach Anbieter Ihres Browsers, unter den nachfolgenden Links:</p>
                    <ul class="dot-list">
                        <li>Google Chrome: <a
                                href="https://support.google.com/chrome/answer/2790761?co=GENIE.Platform%3DDesktop&amp;hl=de"
                                target="_blank" rel="nofollow">https://support.google.com/chrome/answer/2790761?co=GENIE.Platform%3DDesktop&amp;hl=de</a>
                        </li>
                        <li>Mozilla Firefox: <a href="https://www.mozilla.org/de/firefox/dnt/" target="_blank" rel="nofollow">https://www.mozilla.org/de/firefox/dnt/</a>
                        </li>
                        <li>Internet Explorer: <a
                                href="https://support.microsoft.com/de-de/help/17288/windows-internet-explorer-11-use-do-not-track"
                                target="_blank" rel="nofollow">https://support.microsoft.com/de-de/help/17288/windows-internet-explorer-11-use-do-not-track</a>
                        </li>
                        <li>Opera: <a href="http://help.opera.com/Windows/12.10/de/notrack.html" target="_blank" rel="nofollow">http://help.opera.com/Windows/12.10/de/notrack.html</a>
                        </li>
                        <li>Safari: <a href="https://support.apple.com/kb/PH21416?locale=de_DE" target="_blank" rel="nofollow">https://support.apple.com/kb/PH21416?locale=de_DE</a>
                        </li>
                    </ul>
                    <p>Zus??tzlich k??nnen Sie standardm????ig das Laden sog. Scripts verhindern. NoScript erlaubt das Ausf??hren von
                        JavaScripts, Java und anderen Plug-ins nur bei vertrauensw??rdigen Domains Ihrer Wahl. Informationen und
                        Anleitungen, wie Sie diese Funktion bearbeiten k??nnen, erhalten Sie ??ber den Anbieter Ihres Browsers (z. B.
                        f??r Mozilla Firefox unter: <a href="https://addons.mozilla.org/de/firefox/addon/noscript/" rel="nofollow"
                                                      target="_blank">https://addons.mozilla.org/de/firefox/addon/noscript/</a>).
                        Bitte beachten Sie, dass bei der Deaktivierung von Cookies die Funktionalit??t dieser Website eingeschr??nkt
                        sein kann.</p>
            </div>
            <div>
                <h3>Datenweitergabe und Empf??nger</h3>
                <p>Eine ??bermittlung Ihrer personenbezogenen Daten an Dritte findet nicht statt, au??er</p>
                <ul class="dot-list">
                    <li>wenn wir in der Beschreibung der jeweiligen Datenverarbeitung explizit darauf hingewiesen haben.</li>
                    <li>wenn Sie ausdr??ckliche Einwilligung nach Art. 6 Abs. 1 S. 1 lit. a DSGVO dazu erteilt haben,</li>
                    <li>die Weitergabe nach Art. 6 Abs. 1 S. 1 lit. f DSGVO zur Geltendmachung, Aus??bung oder Verteidigung von
                        Rechtsanspr??chen erforderlich ist und kein Grund zur Annahme besteht, dass Sie ein ??berwiegendes
                        schutzw??rdiges Interesse an der Nichtweitergabe Ihrer Daten haben,
                    </li>
                    <li>im Falle, dass f??r die Weitergabe nach Art. 6 Abs. 1 S. 1 lit. c DSGVO eine gesetzliche Verpflichtung
                        besteht und
                    </li>
                    <li>soweit dies nach Art. 6 Abs. 1 S. 1 lit. b DSGVO f??r die Abwicklung von Vertragsverh??ltnissen mit Ihnen
                        erforderlich ist.
                    </li>
                </ul>
                <p>Wir nutzen dar??ber hinaus f??r die Abwicklung unserer Services externe Dienstleister, die wir sorgf??ltig
                    ausgew??hlt und schriftlich beauftragt haben. Sie sind an unsere Weisungen gebunden und werden von uns regelm????ig
                    kontrolliert. Mit welchen wir erforderlichenfalls Auftragsverarbeitungsvertr??ge gem. Art. 28 DSGVO geschlossen
                    haben. Diese sind Dienstleister f??r das Webhosting, den Versand von E-Mails sowie Wartung und Pflege unserer
                    IT-Systemen usw. Die Dienstleister werden diese Daten nicht an Dritte weitergeben.</p>
            
                    <h3>Datensicherheit</h3>
                    <p>Wir treffen nach Ma??gabe des Art. 32 DSGVO unter Ber??cksichtigung des Stands der Technik, der
                        Implementierungskosten und der Art, des Umfangs, der Umst??nde und der Zwecke der Verarbeitung sowie der
                        unterschiedlichen Eintrittswahrscheinlichkeit und Schwere des Risikos f??r die Rechte und Freiheiten
                        nat??rlicher Personen, geeignete technische und organisatorische Ma??nahmen, um ein dem Risiko angemessenes
                        Schutzniveau zu gew??hrleisten. Diese Webseite nutzt aus Gr??nden der Sicherheit und zum Schutz der
                        ??bertragung vertraulicher Inhalte eine SSL-Verschl??sselung.</p>
            </div>
            
            <div>
                <h3>Dauer der Speicherung personenbezogener Daten</h3>
                <p>Die Dauer der Speicherung von personenbezogenen Daten bemisst sich an den einschl??gigen gesetzlichen
                    Aufbewahrungsfristen (z. B. aus dem Handelsrecht und dem Steuerrecht). Nach Ablauf der jeweiligen Frist werden
                    die entsprechenden Daten routinem????ig gel??scht. Sofern Daten zur Vertragserf??llung oder Vertragsanbahnung
                    erforderlich sind oder unsererseits ein berechtigtes Interesse an der Weiterspeicherung besteht, werden die
                    Daten gel??scht, wenn Sie zu diesen Zwecken nicht mehr erforderlich sind oder Sie von Ihrem Widerrufs- oder
                    Widerspruchsrecht Gebrauch gemacht machen.</p>
            </div>
            <br>
            <div>
                <h2>Hub Spot</h2>
                <h3>Berechtigtes Interesse</h3>
                <p>Tridhya Tech GmbH ben??tigt die Kontaktinformationen, die Sie uns zur Verf??gung stellen, um Sie bez??glich unserer Produkte und Dienstleistungen zu kontaktieren. Sie k??nnen sich jederzeit von diesen Benachrichtigungen abmelden. Informationen zum Abbestellen sowie unsere Datenschutzpraktiken und unsere Verpflichtung zum Schutz Ihrer Privatsph??re finden Sie in unseren Datenschutzbestimmungen.</p>
                <br>
                <h3>Datenschutzrichtlinien</h3>
                <p>Sie k??nnen diese Benachrichtigungen jederzeit abbestellen. Weitere Informationen zum Abbestellen, zu unseren Datenschutzverfahren und dazu, wie wir Ihre Privatsph??re sch??tzen und respektieren, finden Sie in unserer Datenschutzrichtlinie.</p>
                <br>
                <h3>Einwilligung zur Kommunikation</h3>
                <p>Tridhya Tech GmbH verpflichtet sich, Ihre Privatsph??re zu sch??tzen und zu respektieren. Wir verwenden Ihre pers??nlichen Daten nur zur Verwaltung Ihres Kontos und zur Bereitstellung der von Ihnen angeforderten Produkte und Dienstleistungen. Von Zeit zu Zeit m??chten wir Sie ??ber unsere Produkte und Dienstleistungen sowie andere Inhalte, die f??r Sie von Interesse sein k??nnten, informieren. Wenn Sie damit einverstanden sind, dass wir Sie zu diesem Zweck kontaktieren, geben Sie bitte unten an, wie Sie von uns kontaktiert werden m??chten:mail@tridhya.de</p>
            </div>
            <br>
                <div>
	                <h3>Ihre Rechte</h3>
	                <p>Im Folgenden finden Sie Informationen dazu, welche Betroffenenrechte das geltende Datenschutzrecht Ihnen
	                    gegen??ber dem Verantwortlichen hinsichtlich der Verarbeitung Ihrer personenbezogenen Daten gew??hrt:</p>
	                <p>Das Recht, gem???? Art. 15 DSGVO Auskunft ??ber Ihre von uns verarbeiteten personenbezogenen Daten zu verlangen.
	                    <br>Insbesondere k??nnen Sie Auskunft ??ber die Verarbeitungszwecke, die Kategorie der personenbezogenen Daten,
	                    die Kategorien von Empf??ngern, gegen??ber denen Ihre Daten offengelegt wurden oder werden, die geplante
	                    Speicherdauer, das Bestehen eines Rechts auf Berichtigung, L??schung, Einschr??nkung der Verarbeitung oder
	                    Widerspruch, das Bestehen eines Beschwerderechts, die Herkunft ihrer Daten, sofern diese nicht bei uns erhoben
	                    wurden, sowie ??ber das Bestehen einer automatisierten Entscheidungsfindung einschlie??lich Profiling und ggf.
	                    aussagekr??ftigen Informationen zu deren Einzelheiten verlangen.</p>
	                <p>Das Recht, gem???? Art. 16 DSGVO unverz??glich die Berichtigung unrichtiger oder Vervollst??ndigung Ihrer bei uns
	                    gespeicherten personenbezogenen Daten zu verlangen.</p>
	                <p>Das Recht, gem???? Art. 17 DSGVO die L??schung Ihrer bei uns gespeicherten personenbezogenen Daten zu verlangen,
	                    soweit nicht die Verarbeitung zur Aus??bung des Rechts auf freie Meinungs??u??erung und Information, zur Erf??llung
	                    einer rechtlichen Verpflichtung, aus Gr??nden des ??ffentlichen Interesses oder zur Geltendmachung, Aus??bung oder
	                    Verteidigung von Rechtsanspr??chen erforderlich ist.</p>
	                <p>Das Recht, gem???? Art. 18 DSGVO die Einschr??nkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen,
	                    soweit die Richtigkeit der Daten von Ihnen bestritten wird, die Verarbeitung unrechtm????ig ist, Sie aber deren
	                    L??schung ablehnen und wir die Daten nicht mehr ben??tigen, Sie jedoch diese zur Geltendmachung, Aus??bung oder
	                    Verteidigung von Rechtsanspr??chen ben??tigen oder Sie gem???? Art. 21 DSGVO Widerspruch gegen die Verarbeitung
	                    eingelegt haben.</p>
	                <p>Das Recht, gem???? Art. 20 DSGVO Ihre personenbezogenen Daten, die Sie uns bereitgestellt haben, in einem
	                    strukturierten, g??ngigen und maschinenlesebaren Format zu erhalten oder die ??bermittlung an einen anderen
	                    Verantwortlichen zu verlangen.</p>
	                <p>Das Recht, sich gem???? Art. 77 DSGVO bei einer Aufsichtsbeh??rde zu beschweren. In der Regel k??nnen Sie sich
	                    hierf??r an die Aufsichtsbeh??rde des Bundeslandes unseres oben angegebenen Sitzes oder ggf. die Ihres ??blichen
	                    Aufenthaltsortes oder Arbeitsplatzes wenden.</p>
	                <p>Recht auf Widerruf erteilter Einwilligungen gem???? Art. 7 Abs. 3 DSGVO: Sie haben das Recht, eine einmal erteilte
	                    Einwilligung in die Verarbeitung von Daten jederzeit mit Wirkung f??r die Zukunft zu widerrufen. Im Falle des
	                    Widerrufs werden wir die betroffenen Daten unverz??glich l??schen, sofern eine weitere Verarbeitung nicht auf eine
	                    Rechtsgrundlage zur einwilligungslosen Verarbeitung gest??tzt werden kann. Durch den Widerruf der Einwilligung
	                    wird die Rechtm????igkeit der aufgrund der Einwilligung bis zum Widerruf erfolgten Verarbeitung nicht ber??hrt.</p>
               </div>
            
            <div>
                <h3>Widerspruchsrecht</h3>
                <p>Sofern Ihre personenbezogenen Daten von uns auf Grundlage von berechtigten Interessen gem???? Art. 6 Abs. 1 S. 1
                    lit. f DSGVO verarbeitet werden, haben Sie gem???? Art. 21 DSGVO das Recht, Widerspruch gegen die Verarbeitung
                    Ihrer personenbezogenen Daten einzulegen, soweit dies aus Gr??nde erfolgt, die sich aus Ihrer besonderen
                    Situation ergeben. Soweit sich der Widerspruch gegen die Verarbeitung personenbezogener Daten zum Zwecke von
                    Direktwerbung richtet, haben Sie ein generelles Widerspruchsrecht ohne das Erfordernis der Angabe einer
                    besonderen Situation.
                    M??chten Sie von Ihrem Widerrufs- oder Widerspruchsrecht Gebrauch machen, gen??gt eine E-Mail <span>
                        <a href="mailto: mail@tridhya.de">
                            mail@tridhya.de
                        </a></span>.
                </p>
                    <h3>Externe Verlinkungen</h3>
                    <p>Soziale Netzwerke (Facebook, Twitter, Xing etc.) sind auf unserer Webseite lediglich als Link zu den
                        entsprechenden Diensten eingebunden. Nach dem Anklicken des eingebundenen Text-/Bild-Links werden Sie auf
                        die Seite des jeweiligen Anbieters weitergeleitet. Erst nach der Weiterleitung werden Nutzerinformationen an
                        den jeweiligen Anbieter ??bertragen. Informationen zum Umgang mit Ihren personenbezogenen Daten bei Nutzung
                        dieser Webseiten entnehmen Sie bitte den jeweiligen Datenschutzbestimmungen der von Ihnen genutzten
                        Anbieter. </p>
            </div>
            <div>
                <h3>??nderungsvorbehalt</h3>
                <p>Wir behalten uns vor, diese Datenschutzerkl??rung erforderlichenfalls unter Beachtung der geltenden
                    Datenschutzvorschriften anzupassen bzw. zu aktualisieren. Auf diese Weise k??nnen wir sie den aktuellen
                    rechtlichen Anforderungen anpassen und ??nderungen unserer Leistungen ber??cksichtigen, z. B. bei der Einf??hrung
                    neuer Services. F??r Ihren Besuch gilt die jeweils aktuellste Fassung.</p>
                <p>Diese Datenschutzerkl??rung wurde erstellt durch <a href="https://www.datenschutzexperte.de/">www.datenschutzexperte.de</a>
                </p>
            </div>
            <div>
                   <p>Stand dieser Datenschutzerkl??rung: <span>20.7.2021</span></p>
            </div>
                          
      </div>
</section>
    
    <!-- blog section ends
================================================== --> 
@include('layouts.footer')
<script src="{{asset('js/quote_form.js?')}}"></script>