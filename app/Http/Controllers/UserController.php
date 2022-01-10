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
            $default_city = City::where('city_name','Nürnberg')->first();
            $city_url = '';
            $city = $default_city->city_name;
            $citymeta = $default_city->meta_description;
            $city_discription = $default_city->city_discription;
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
