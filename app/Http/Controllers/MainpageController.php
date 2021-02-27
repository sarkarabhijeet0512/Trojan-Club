<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LatestNews;
use App\Model\Slider;
use App\Model\User;
use App\Model\Gallery;
use App\Model\Events;
use Image;
use Carbon\Carbon;
use App\Model\Eventregister;
use App\Model\Feedback;

class MainpageController extends Controller

{
 
    public function Homepage(){
        date_default_timezone_set('Asia/Calcutta');
        $dt             = Carbon::now();
        $slider         = Slider::where('is_active',1)->get();
        $Eventcalander  = Events::where('is_active',1)
                                ->orderby('event_date','ASC')
                                ->get();
        $event          = Events::where('event_date','>', $dt)
                                ->where('is_active',1)
                                ->orderby('event_date','ASC')
                                ->first();
        
        if ($event!= Null) {

        $Hours  = date("H",strtotime($event->event_date));
        $Mon    = date("m",strtotime($event->event_date));
        $Year   = date("Y",strtotime($event->event_date));
        $M      = date("F",strtotime($event->event_date));
        $Day    = date("d",strtotime($event->event_date));
        $min    = date("i",strtotime($event->event_date));
        
        }else{

        $event = Events::where('is_active',1)
                            ->orderby('event_date','DESC')
                            ->first();
        $Hours  = date("H",strtotime($event->event_date));
        $Mon    = date("m",strtotime($event->event_date));
        $Year   = date("Y",strtotime($event->event_date));
        $M      = date("F",strtotime($event->event_date));
        $Day    = date("d",strtotime($event->event_date));
        $min    = date("i",strtotime($event->event_date));
        }
        $News   = LatestNews::where('status',1)
                                ->whereNotNull('image')
                                ->get();
        return view('mainpage.index',compact('slider','event','Hours','Mon','Year','M','Day','min','Eventcalander','News'));
    }
  
  public function about()
    {
        return view('mainpage.about');
    }
    public function programs()
    {   
        date_default_timezone_set('Asia/Calcutta');
        $dt             = Carbon::now();
        $event          = Events::where('event_date','>', $dt)
                                ->where('is_active',1)
                                ->orderby('event_date','ASC')
                                ->first();
        if ($event != Null) {
        $Hours  = date("H",strtotime($event->event_date));
        $Mon    = date("m",strtotime($event->event_date));
        $Year   = date("Y",strtotime($event->event_date));
        $M      = date("F",strtotime($event->event_date));
        $Day    = date("d",strtotime($event->event_date));
        $min    = date("i",strtotime($event->event_date));
        }else{
        $event = Events::where('is_active',1)
                            ->orderby('event_date','DESC')
                            ->first();

        $Hours  = date("H",strtotime($event->event_date));
        $Mon    = date("m",strtotime($event->event_date));
        $Year   = date("Y",strtotime($event->event_date));
        $M      = date("F",strtotime($event->event_date));
        $Day    = date("d",strtotime($event->event_date));
        $min    = date("i",strtotime($event->event_date));
        }
        
        $Eventcalander  = Events::where('is_active',1)
                                ->orderby('event_date','ASC')
                                ->paginate(5);
        return view('mainpage.programs',compact('event','Hours','Mon','Year','M','Day','min','Eventcalander'));
    }
    
    public function gallery(){
        $gallery = Gallery::where('is_active',1)->paginate(12);
        $filter  = Gallery::groupby('event')->get();
        return view('mainpage.filtergallery',compact('gallery','filter'));
    }
    public function contactus(){
        return view('mainpage.contactus');
    }
    public function Eventregister(Request $request,$id){
        $event_name = Events::find($id);
        return view('mainpage.eventregister',compact('event_name'));
    }
    public function Event_register(Request $request){
        $event               = new Eventregister();
        $event->first_name   = $request->first_name; 
        $event->last_name    = $request->last_name; 
        $event->email        = $request->email; 
        $event->branch       = $request->branch; 
        $event->event_name   = $request->event_name; 
        $event->contact_no   = $request->contact_no; 
        $event->college_name = $request->college_name;
        $event->save();
        return redirect()->back()->with(['status' => 'Registered Sucessfully']); 
    }
    public function feedback(Request $request){
        $feedback = new Feedback();
        $feedback->name    = $request->name;
        $feedback->email   = $request->email;
        $feedback->phone   = $request->phone;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect()->back()->with(['status' => 'Feedback Submitted']);
    }

}