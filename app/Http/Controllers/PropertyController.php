<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Photo;
use App\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\apps_cities as Cities;
use App\propertyTypeModel as propertyType;
use App\status as AppStatus;
use App\Unit as Units;
use App\FeaturedUnit as Featured;
use App\propertyFetures as Features;
use App\Http\Requests\CreateUnitRequest;
use App\Photo as Photos;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class PropertyController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function myProperties(){


        $units = Auth::user()->properties()->paginate(10);

//        return $units;


//        $paginateUnits = $units->paginate(2);

        return view('units.my-properties',compact('units'));

    }


    public function index()
    {


    }



    public function create()
    {

        //        return Carbon::now()->addDays(10)->diffForHumans();
//        return Carbon::now()->subMonth(5)->diffForHumans();
//        return Carbon::now()->yesterday()->diffForHumans();
//        return Carbon::now()->yesterday();

        $user= Auth::user();

        $cities = Cities::pluck('name','id');
//        $cities = new Cities();
//        $all_cities = $cities->orderBy('name','ASC')->get();

        $all_property = propertyType::pluck('name','id')->all();

        $all_status = AppStatus::pluck('name','id')->all();


        $all_features = Features::where('created_by','=', 0)
            ->orWhere('created_by','=',$user->id)->get();

        $data = [];
        $data['user']               = $user;
//        $data['cities']             = $all_cities;
        $data['cities']             = $cities;
        $data['property_type']      = $all_property;
        $data['property_features']  =  $all_features;
        $data['status']             =$all_status;
        $data['modify']             = 0;

        return view('units/form',$data);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUnitRequest $request )
    {
        date_default_timezone_set('Asia/Manila');

        $user= Auth::user();

        $inputs = $request->all();


//        return $inputs;

        $inputs['user_id'] = $user->id;
        $inputs['hash_id'] = rand(time(), 9999);

        $inputs['israting'] = !empty($request->israting) ? 1 : 0;
        $inputs['allow_comment'] = !empty($request->allow_comment) ? 1 : 0;

        $features               = $request->input('property_features');
        $all_features ="";

        if(!empty($features) && count($features) > 0){
            foreach($features as $selected_features){
                if(!next($features)){
                    $all_features .= $selected_features ;
                }else{
                    $all_features .= $selected_features . "|";
                }

            }
        }

        $inputs['property_features'] = $all_features;

        $unit = $user->properties()->create($inputs);

//        $featured = new Featured();

//        $featured->featured()->create(['user_id'=>$user->id,'unit_id'=>$unit->id]);


        if($files = $request->file('file')){
//            $all_files = "";

            foreach($files as $file){

                $photo['path'] = time() . $file->getClientOriginalName();
                $photo['imageable_id'] = $unit->id;
                $photo['imageable_type'] = 'App\Unit';

                $file->move('images', $photo['path']);

                Photo::create($photo);

//                $photoID = Photo::create($photo);
//
//                if(!next($files)){
//                    $all_files .= $photoID->id;
//                }else{
//                    $all_files .= $photoID->id . "|";
//                }
            }

//            $inputs['photos'] = $all_files;
        }

        if($files_flr = $request->file('floorplan_photos')){

            foreach($files_flr as $file){

                $photo_flr['path'] = time() . $file->getClientOriginalName();
                $photo_flr['imageable_id'] = $unit->id;
                $photo_flr['imageable_type'] = 'App\Unit';
                $photo_flr['remark'] = 'floorplan';

                $file->move('images', $photo_flr['path']);

                Photo::create($photo_flr);

//                if(!next($files)){
//                    $all_floorplan .= $photoID->id;
//                }else{
//                    $all_floorplan .= $photoID->id . "|";
//                }
            }

//            $inputs['floorplan_photos'] = $all_floorplan;
        }

        return redirect('/my-properties');

//        return $this->myProperties();

//        $unit = Units::create($inputs);



//        return dd($unit);


//        $user= Auth::user();
//        $unit = new Units();
//
//        if($file = $request->file('file')){
//            $name = $file->getClientOriginalName();
//            $file->move('images', $name);
//            $unit->path = $name;
//        }
//
//        $unit->Title            = $request->input('Title');
//        $unit->user_id          = $user->id;
//        $unit->price            = $request->input('price');
//        $unit->Description      = $request->input('Description');
//        $unit->Cities           = $request->input('Cities');
//        $unit->property_type    = $request->input('type_property');
//        $unit->status           = $request->input('Status');
//        $unit->beds             = $request->input('beds');
//        $unit->baths            = $request->input('baths');
//        $unit->area             = $request->input('area');
//        $unit->garages          = $request->input('garages');
//        $unit->Address          = $request->input('address');
//        $unit->map_lat          = $request->input('map_lat');
//        $unit->map_lon          = $request->input('map_lon');
//        $unit->israting         = !empty($request->input('israting')) ? 1 : 0;
//        $features               = $request->input('property_features');
//        $all_features ="";
//
//        if(!empty($features) && count($features) > 0){
//            foreach($features as $selected_features){
//                if(!next($features)){
//                    $all_features .= $selected_features ;
//                }else{
//                    $all_features .= $selected_features . "|";
//                }
//
//            }
//        }
//
//        $unit->property_features = $all_features;
//        $unit->created_at =  date('Y-m-d H:i:s', time());

//        $unit->save();

//        $featured = new Featured();
//
//        $featured->featured()->create(['user_id'=>$user->id,'unit_id'=>$unit->id]);
//
//        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($slug)
    {
        //
//        $unit = Units::findBySlugOrFail($slug)->first();
        $unit = Units::where('slug','=',$slug)
                ->orWhere('id',$slug)->first();

        $owner_units = Units::where('user_id','=',$unit->user_id)->limit(10)->get();

        $photos = $unit->unitPhotos()->get();

        $comments = Comment::where('unit_id','=',$unit->id)->limit(10)->get();


        $flrPlan= [];

        if($photos){
            foreach($photos as $flrplanPhotos){
                if(!empty($flrplanPhotos->remark) && $flrplanPhotos->remark == 'floorplan'){
                    $flrPlan[] = $flrplanPhotos->path;

                }
            }
        }

        $property_selected_features = explode('|',$unit->property_features);

        if(count($property_selected_features) > 0){
                foreach($property_selected_features as $feature){

                    $myFeatures[] = Features::findOrFail($feature);
                }
        }

        $featured_units = Featured::offset(0)->limit(10)->get();

//        return $featured_units[0]->unit_detail->Title;


//        return $myFeatures;


        return view('units.property-details',compact('unit','photos','myFeatures','flrPlan','owner_units','featured_units','comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($hash_id)
    {
        //
//        return $id;
        $modify = 1;

        $unit = Units::where('hash_id','=',$hash_id)->orWhere('slug',$hash_id)->first();
//        return $unit->property_features;
//        return $unit;
//        $unit = Units::findBySlugOrFail($hash_id);



        $cities = Cities::pluck('name','id');


        $property_type = propertyType::pluck('name','id')->all();
        $status = Status::pluck('name','id')->all();

//        $property_features = Features::pluck('name', 'id');



        $property_features = Features::where('created_by','=', 0)
            ->orWhere('created_by','=',$unit->user->id)->get();

        $property_selected_features = explode('|',$unit->property_features);

//        return $property_selected_features;

        return view('units.form', compact('unit','cities', 'property_type', 'status','property_features','property_selected_features','modify'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUnitRequest $request, $id)
    {
        //



        $inputs = $request->all();

//        return dd($request->israting);

        date_default_timezone_set('Asia/Manila');


//        $inputs['user_id'] = $user->id;
        $inputs['israting'] = !empty($request->israting) ? 1 : 0;
        $inputs['allow_comment'] = !empty($request->allow_comment) ? 1 : 0;
        $features               = $request->input('property_features');
        $all_features ="";


        if(!empty($features) && count($features) > 0){
            foreach($features as $selected_features){
                if(!next($features)){
                    $all_features .= $selected_features ;
                }else{
                    $all_features .= $selected_features . "|";
                }

            }
        }


        $inputs['property_features'] = $all_features;



        if($files = $request->file('file')){

            $all_files = "";

            foreach($files as $file){

                $photo['path'] = time() . $file->getClientOriginalName();
                $photo['imageable_id'] = $id;
                $photo['imageable_type'] = 'App\Unit';

                $file->move('images', $photo['path']);

                $photoID = Photo::create($photo);

                if(!next($files)){
                    $all_files .= $photoID->id;
                }else{
                    $all_files .= $photoID->id . "|";
                }
            }

            $inputs['photos'] = $all_files;
        }



//        $unit = $user->properties()->create($inputs);

        Auth::user()->properties()->whereId($id)->first()->update($inputs);

        return $this->myProperties();



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


        Units::findOrFail($id)->delete();


        $photos = Photo::Where('imageable_id', '=', $id)->where('imageable_type','=','App\Unit')->get();



        if($photos){
            foreach($photos as $photo){

                unlink(public_path() . $photo->path);
                Photo::findOrFail($photo->id)->delete();
            }

//            echo $photos;
//
        }



        return redirect('/my-properties');
    }

    public  function deleteSelectedProperties(Request $request){

        $units = Units::findOrFail($request->checkboxSelectedProperties);

        foreach($units as $unit){
            $photos = Photos::where('imageable_id','=',$unit->id)->where('imageable_type','=','App\Unit')->get();
//            return dd($photo);
            if($photos){
                foreach($photos as $photo){
                    unlink(public_path() . $photo->path);
                    $photo->delete();
                }

            }

            $unit->delete();

        }
      return redirect()->back();


    }

    public function send_email(Request $request){

        $inputs = $request->all();


        $unit = Units::findOrFail($inputs['unitID'])->limit(1)->first();

//        Return $unit->Title;


        $data=[
            'title'=>'Quick Contact',
            'name'=>$inputs['inquiry_name'],
            'fromEmail'=>$inputs['inquiry_email'],
            'content'=>$inputs['inquiry_message'],
            'unitID'=>$unit->slug,
            'inquire_property_name'=>$unit->Title,
            'inquire_property_address'=>$unit->Address
        ];

        Mail::send('emails.email',$data, function($message){
            $message->to('jerryaustria@gmail.com', 'Jerry')->subject('Quick Contact');
        });

//        return redirect('/');


    }




}






















