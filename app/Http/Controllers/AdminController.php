<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LatestNews;
use App\Model\Likable;
use Auth;
use App\Model\User;
use Image;
use App\Model\Gallery;
use App\Model\Events;
use App\Model\Comments;
use App\Model\Slider;
use App\Model\Feedback;




class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function adminIndex(){

    	 return view('admin.index');
    }
    public function CommentsList(){
    	$getComments = Comments::where(['is_active'=>1])
                        ->with('user:id,name,first_name,middle_name,last_name,regno,image')
                        ->paginate(10);
        $Disabled = Comments::where(['is_active'=>0])->get();
        $count = $Disabled->count();                

    	return view('admin.tables',compact('getComments','count'));
    }
    public function DisabledComments(){
        $DisabledComments = Comments::where(['is_active'=>0])
                        ->with('user:id,name,first_name,middle_name,last_name,regno,image')
                        ->paginate(10);
        return view('admin.disbledcomments',compact('DisabledComments'));              
    }
    public function disableComments(Request $request){
        Comments::where('id', $request->id)->update(array('is_active' => '0'));
        return redirect()->back()->with(['status' => 'User is Disabled']);

    }
    public function CommentDelete($id){
        $task=Comments::find($id);
        $task->delete();
        return redirect()->back()->with('status','Deleted successfully');  

    }
    public function galleryUpload(){
    	return view('admin.gallery');
    }
    public function events(){
        $countEvents = Events::where('is_active',1)->get();
        $Events      = $countEvents->count();
    	return view('admin.events',compact('Events'));
    }
    public function news(){
    	$countNews = LatestNews::where('status',1)->get();
        $news      = $countNews->count();
        return view('admin.news',compact('news'));
    }


    public function galleryStore(Request $request) {
    	// $event='event';
    $input    = $request->all();
    if($files = $request->file('images')){
    	$images           = array();
        $images_original  = array();
        foreach($files as $index => $file){
        	$name      =  $file->getClientOriginalName();
        	$original  =  'storage/gallery/original/'.time().$name;
            $filename  =  'storage/gallery/thumbnail/'.time(). $name;
            Image::make($file)
                    ->resize('280','180')
                    ->save( public_path($filename ));
            Image::make($file)
                    ->save(public_path($original));
            $images[]                = $filename;
            $images_original[]       = $original;
            $gallery                 = new Gallery();
            $gallery->thumbnail_path = $images[$index];
            $gallery->storage_path   = $images_original[$index];
            $gallery->is_active      = 1;
            $gallery->event          = $request->name;
            $gallery->description    = $request->description;
            $gallery->save();
        	}
    	}
		return redirect()->back()->with(['status' => 'Photos updated successfully.']);;
	}
    public function viewgallery(){
        $Gallery=Gallery::where('is_active',1)->get();
        return view('admin.showGallery',compact('Gallery'));
    }
	public function CreateEvents(Request $request){
		$events = new Events();
		$events->event_title = $request->title;
		$events->description = $request->description;
		$events->event_date = $request->date;
        $events->time = $request->time;
        if ($files = $request->file('images')) {
		$files = $request->file('images');
        $filename = 'storage/events/' . $files->getClientOriginalName();
        Image::make($files)->resize('457','292' )->save( public_path($filename ));
        $events->image = $filename;
        }
        $events->save();
        return redirect()->back()->with(['status' => 'Events updated successfully.']);
	}
	public function showallEvents(){
		$events = Events::where('is_active',1 )->paginate(4);
		return view('admin.all_events',compact('events'));
	}
    public function disableEvents(Request $request){
            Events::where('id', $request->id)->update(array('is_active' => '0'));
            return redirect()->back()->with(['status' => 'User is Disabled']);
    }
    Public function deleteEvents($id){
        $task=Events::find($id);
        if(file_exists($task->image)) {
        $image_path = public_path().'/'.$task->image;
        unlink($image_path);
        }
        $task->delete();
        return redirect()->back()->with('status','Deleted successfully');  
    }
	public function createNews(Request $request){
		$News = new LatestNews();
		$News->title = $request->title;
		$News->description = $request->description;
		if ($files = $request->file('images')) {
		$files = $request->file('images');
        $filename = 'storage/news/' .$files->getClientOriginalName();
        Image::make($files)->resize('131','88' )->save( public_path($filename ));
		$News->image = $filename;
		}
		$News->save();
		return redirect()->back()->with(['status' => 'News updated successfully.']);	
	}
	Public function allnews(){
        // Change in database status to all show as 1
		$allnews = LatestNews::where('status',1)->paginate(10);
        
		return view('admin.allnews',compact('allnews'));
	}
    public function deleteNews($id){
        $task=LatestNews::find($id);
        if($task->image != Null){
        $image_path = public_path().'/'.$task->image;
        unlink($image_path);
        }
        $task->delete();
        return redirect()->back()->with(['status' => 'News Deleted Successfully']);
    }
	public function allUsers(){
		$allusers = User::where('is_active',1)->paginate(10);
        $countUsers = User::where('is_active',0)->get();
        $Disabled = $countUsers->count();
		return view('admin.users',compact('allusers','Disabled'));
	}
    public function disableUsers(Request $request){
          User::where('id', $request->id)->update(array('is_active' => '0'));
          return redirect()->back()->with(['status' => 'User is Disabled']);
    }    
    public function enableUsers(Request $request){
          User::where('id', $request->id)->update(array('is_active' => '1'));
          
          return redirect('/admin/users')->with(['status' => 'User is Enabled']);
    } 
    public function disabledUsers(){
        $disabledusers = User::where('is_active',0)
                         ->paginate(5);
        
        return view('admin.disabled',compact('disabledusers'));
    }
   public function autocomplete(Request $request)
    {
          $data =Comments::select('name')
                    ->where('name', 'LIKE', '%{$request->terms}%')
                    ->get();

          return response()->json($data);
    }
    Public function search(){
        return view('admin.search');
    }
    Public function Slider(){
        $countslider = Slider::where('is_active',1)->get();
        $slider = $countslider->count();

        return view('admin.slider',compact('slider'));
    }
    Public function updateSlider(Request $request){
        if($files=$request->file('images')){
            $name=$files->getClientOriginalName();
            $original= 'storage/slider/original/' .$name;
            $filename = 'storage/slider/thumbnails/' . $name;
            Image::make($files)->resize('400','200' )->save( public_path($filename ));
            Image::make($files)->save(public_path($original));
            $images = $filename;
            $slider = new Slider();
            $slider->image =$images;
            $slider->is_active =1;
            $slider->description=$request->description;
            $slider->heading = $request->heading;
            $slider->color = $request->color;
            $slider->save();
            }
            return redirect()->back()->with(['status' => 'Slider Updated']);  
    }
    Public function viewAllSlider(){
        $viewSlider = Slider::where('is_active',1)->get();
        return view('admin.viewSlider',compact('viewSlider'));
    }
    Public function deleteSlider($id){
        $data = Slider::find($id);
        $image_path = public_path().'/'.$data->image;
        unlink($image_path);
        $data->delete();
        return redirect()->back()->with(['status' => 'slider Deleted Successfully']);
    }
    public function feedback(){
        $feedback = Feedback::where('is_active',1)->paginate(10);
        return view('admin.feedback',compact('feedback'));
    }
}