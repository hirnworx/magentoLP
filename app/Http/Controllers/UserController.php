<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Quote;
use alert;
use Mail;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($city=null)
    {
        $title = 'Magento Agentur - Germany - Jetzt auf Magento 2 umsteigen';
        if(empty($city)){
            $city_url = '';
            $city = "Nürnberg";
            $citymeta = 'Magento Agentur in ♥Germany♥. Kostenfrei Beratung✓ Projektplanung✓ Umsetzung✓. Alles aus einer Hand von Ihrem Magento Partner.';
            $city_discription = '<p><b>Nürnberg</b> (nürnbergisch häufig <i>Nämberch</i>) ist eine fränkische kreisfreie Großstadt im Regierungsbezirk Mittelfranken des Freistaats Bayern.
            </p><p>Nürnberg ist mit rund 520.000 Einwohnern nach München die zweitgrößte Stadt Bayerns und gehört zu den 15 größten Städten Deutschlands. Zusammen mit den direkten Nachbarstädten Fürth, Erlangen und Schwabach bildet Nürnberg mit rund 800.000 Einwohnern eine der drei Metropolen in Bayern. Gemeinsam mit ihrem Umland bilden diese Städte den Ballungsraum Nürnberg mit über 1,3 Millionen Menschen und das wirtschaftliche und kulturelle Zentrum der knapp 3,6 Millionen Einwohner umfassenden Europäischen Metropolregion Nürnberg, eine der elf Metropolregionen in Deutschland. Nürnberg gehört zu den Großstädten Deutschlands mit einer ausgesprochen multikulturellen Gesellschaft.
            </p><p>Erstmals urkundlich erwähnt wurde die Stadt Nürnberg bereits in der Sigena-Urkunde aus dem Jahr 1050, ihre erste Blüte erlebte sie als eigenständige Reichsstadt des Heiligen Römischen Reichs ab 1219. Vor den starken Zerstörungen im Zweiten Weltkrieg und dem sehr vereinfachten Neuaufbau der Nachkriegszeit galt die mittelalterliche Nürnberger Altstadt als eine der bedeutendsten Europas. Einige Wahrzeichen wurden jedoch originalgetreu wiederaufgebaut, vor allem die Kirchen der Stadt. Daneben blieben manche Baudenkmäler erhalten. Zu den wichtigsten Wahrzeichen gehören einige Bauten entlang der historischen Meile, vor allem die Nürnberger Burg. Daneben haben sich weitere Adelsbauten und Burgen der alten HRR-Reichsstadt erhalten.
            </p><p>Überregional bedeutsam sind auch Nürnbergs weihnachtlicher Christkindlesmarkt sowie das Germanische Nationalmuseum und mehrere weitere Museen. Globale Wahrnehmung erreichte die Stadt im 20. Jahrhundert während der Zeit des Nationalsozialismus, als auf dem Reichsparteitagsgelände die jährlichen Reichsparteitage stattfanden und die Nürnberger Gesetze verabschiedet wurden. Nach dem Zweiten Weltkrieg ist die Stadt mit den Nürnberger Prozessen hingegen zum Schauplatz der ersten Urteile auf Grundlage des Völkerstrafrechts geworden und erwarb sich den Titel <i>Stadt der Menschenrechte</i>. Wirtschaftlich sind die Dienstleistungsbranche, Spitzentechnologie, Industrieproduktion (u. a. Elektrotechnik, Maschinenbau und Kfz-Teile) sowie die Messe Nürnberg (u. a. Spielwarenmesse, Consumenta, GaLaBau, BIOFACH, IWA OutdoorClassics, BrauBeviale) von großer Bedeutung. Nürnberg ist zudem Sitz der staatlichen Behörden Bundesagentur für Arbeit und Bundesamt für Migration und Flüchtlinge. Zudem ist Nürnberg der Sitz des Bayerischen Staatsministeriums der Finanzen und für Heimat („Heimatministerium“) (seit 2014) und des Bayerischen Staatsministeriums für Gesundheit und Pflege (seit 2017).
            </p>';
        }else{
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city_url = $findcity->city_name;
            $city =$findcity->city_name;
            $citymeta = $findcity->meta_description;
            $city_discription = $findcity->city_discription;
        }
         return view('index',compact('title','city_url','city','citymeta','city_discription'));
    }

      public function datenschutz($city=null)
    {
        $title = 'Tridhya Tech GmbH - Datenschutzerklärung';
        if($city==null)
        {
            $city_url = '';
            $city = "Nürnberg";
            $citymeta = 'Landing Page';  
           
        }
       else
        {
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city_url = $city;
            $city =$city;
            $citymeta = $findcity->meta_description;
        }
        return view('datenschutz',compact('title','city_url','city','citymeta'));
    }
    public function impressum($city=null)
    {
      $title = 'Tridhya Tech GmbH - Impressum';
      if($city==null)
       {
            $city_url = '';
            $city = "Nürnberg";
            $citymeta = 'Magento 2 Entwicklung, Plugin Entwicklung, Magento Consulting, Alles aus einer Hand vom Magento Partner';     
        }
     else
       {
            $findcity = City::where('city_name',$city)->first();

            if(empty($findcity))
            {
                alert()->error('Url not available');
                return redirect('/');       
            }
            $city_url = $city;
            $city =$city;
            $citymeta = $findcity->meta_description;
        }
      return view('impressum',compact('title','city_url','city','citymeta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $validationRules =[
                'name' => 'required',
                'number' => 'required',
                'email' => 'required|unique:quotes',
                'subject' => 'required',
        ];

        $validator = Validator::make($request->all(), $validationRules);
        if ($validator->fails()) {
               return response()->json(['error'=>$validator->errors()->all()]);
        }
       
          $quotes=new Quote(); 
          $quotes->name=$request->name;
          $quotes->phone=$request->number;
          $quotes->email=$request->email;
          $quotes->subject=$request->subject;
          $save=$quotes->save();

          $data = array();
          $data['name'] = $request->name;
          $data['number'] = $request->number;
          $data['email'] = $request->email;
          $data['subject'] = $request->subject; 
          $admin_email = config('constant.MAIL_TO');  
          $from_name = config('constant.MAIL_FROM_NAME');
          $from_email = config('constant.MAIL_FROM_EMAIL');
          $admin_subject = "Sie haben eine neue Magento Anfrage über Magento6Partner.de";
          $user['details'] = $data;
          
           Mail::send('quote_mail', $user, function($message)use($admin_subject,$admin_email,$from_email,$from_name) {
              $message->from($from_email,$from_name)->to($admin_email)->subject($admin_subject);
               
            }); 

           if($save){
                return response()->json(['success'=>'Ihre Anfrage wurde versendet.']);
            }           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
