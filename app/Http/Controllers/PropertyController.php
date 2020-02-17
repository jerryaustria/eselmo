<?php

namespace App\Http\Controllers;

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
use Carbon\Carbon;

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

//        $units = Units::where('user_id', Auth::user()->id)->get();
        $units = Auth::user()->properties()->get();
//        $photo = Auth::user()->Unitphotos()->first();
        $photos = Photo::where('imageable_id','=',Auth::user()->id)
                ->where('imageable_type','=','App\Unit')->get();


        return view('units.my-properties',compact('units'));
    }


    public function index()
    {
        //

//        return Carbon::now()->addDays(10)->diffForHumans();
//        return Carbon::now()->subMonth(5)->diffForHumans();
//        return Carbon::now()->yesterday()->diffForHumans();
//        return Carbon::now()->yesterday();

        $user= Auth::user();

        $cities = new Cities();
        $all_cities = $cities->orderBy('name','ASC')->get();

        $all_property = propertyType::pluck('name','id')->all();

        $all_status = AppStatus::pluck('name','id')->all();


        $all_features = Features::where('created_by','=', 0)
                        ->orWhere('created_by','=',$user->id)->get();

        $data = [];
        $data['user']               = $user;
        $data['cities']             = $all_cities;
        $data['property_type']      = $all_property;
        $data['property_features']  =  $all_features;
        $data['status']             =$all_status;

//        return view('units/form',compact('user', $cities));

        return view('units/form',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Units $unit)
    {

//        $user= Auth::user();
//        $data = [];
//
//        $data['title'] = $request->input('title');
//        $data['user_id'] = $user->id;
//        $data['price'] = $request->input('price');
//        $data['Description'] = $request->input('submit-description');
//        $data['Cities'] = $request->input('type-location');
//        $data['property_type'] = $request->input('type-property');
//        $data['status'] = $request->input('type-status');
//        $data['beds'] = $request->input('Beds');
//        $data['baths'] = $request->input('Baths');
//        $data['area'] = $request->input('area');
//        $data['garages'] = $request->input('garages');
//        $data['Address'] = $request->input('address');
//        $data['map_lat'] = $request->input('latitude');
//        $data['map_lon'] = $request->input('longitude');
//        $data['israting'] = !empty($request->input('rating')) ? 1 : 0;
//        date_default_timezone_set('Asia/Manila');
//        $features = $request->input('property_features');
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
//
//        $data['property_features'] = $all_features;
//        $data['created_at'] =  date('Y-m-d H:i:s', time());
//
//        if( $request->isMethod('post') )
//        {
//            $this->validate(
//                $request,
//                [
//                    'title'              => 'required|min:5',
//                    'price'             => 'required:required|regex:/^\d+(\.\d{1,2})?$/',
//                    'submit-description'=>'required|min:10',
//                    'address'           => 'required|min:5',
//                    'Beds'              => 'required',
//                    'type-location'     => 'required',
//                    'Baths'              => 'required'
//                ]
//            );
//
//
//
//            $unit->insert($data);
//
//            return redirect('/');
//
//        }
//
//        return redirect('/', $data);
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
        $inputs['user_id'] = $user->id;
        $inputs['israting'] = !empty($request->israting) ? 1 : 0;
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


        if($files = $request->file('file')){
            $all_files = "";

//            return dd($files);

            foreach($files as $file){

                $photo['path'] = time() . $file->getClientOriginalName();
                $photo['imageable_id'] = $user->id;
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


        $inputs['property_features'] = $all_features;

        $unit = $user->properties()->create($inputs);

        $featured = new Featured();

        $featured->featured()->create(['user_id'=>$user->id,'unit_id'=>$unit->id]);

        return redirect('/');



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

//        return $id;


        $unit = Units::findOrFail($id);

        $cities = Cities::pluck('name','id');
        $property_type = propertyType::pluck('name','id')->all();
        $status = Status::pluck('name','id');
        $property_features = Features::pluck('name', 'id');
        $property_selected_features = explode('|',$unit->property_features);

//        return $property_selected_features;

        return view('units.edit', compact('unit','cities', 'property_type', 'status','property_features','property_selected_features'));

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
                $photo['imageable_id'] = Auth::user()->id;
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


        $unit = Units::findOrFail($id)->limit(1)->get();



//        $unitPhoto = $unit->photos;

//
//        return $this->myProperties();
//
        unlink(public_path() . $unit->photos->path);
        $unit->delete();

        return $this->myProperties();
    }




}






















