<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\apps_countries as Countries;
use App\propertyTypeModel as PropertyType;
use App\Unit as Unit;
use App\Photo as Photo;
use App\User as User;
use App\FeaturedUnit as Featured;

class ContentsController extends Controller
{


    //
    public function home()
    {
//        $photo = Photo::findOrFail(1);
//        return $photo ->imageable;

        $countries = new Countries();
        $user = Auth::User();
        $propertyType = new PropertyType();

        $data=[];
        $data['countries']          = $countries->getActiveCountries();
        $data['user_country']       = $countries->UserCountries();
        $data['propertyType']       = $propertyType->all();
        $data['maxAmount']          = Unit::max('price');
//        $data['featuredUnits']      = $this->showFeatured();
//        $data['maxAmount']         = $Units->getTheMaxAmount();
//        return $data['featuredUnits'];
        return view('contents/home',$data);
    }

    public function showFeaturedPhoto(){
        $featured_all = Featured::all();


    }

}
