<?php

namespace App\Http\Controllers;


use App\Http\Requests\editUser;
use App\Http\Requests\NewPasswordRequest;
use App\Http\Requests\UserRequest;
//use Faker\Provider\Address;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User as User;
use App\Photo as Photo;
use App\agency as Agency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct ()
    {
//        $this->users = User::all();
//        $this->agencies = $agencies->all();
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Agency $agencies)
    {


        $data = [];
        $data['modify'] = 0;
        $data['agencies']= $agencies->all();
        return view('/users/create',$data);

    }

    public function register(){
        return view('/register');
    }


    public function store(Request $request)
    {




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    show */
    public function show($id)
    {
        //
//        $data = [];
//        $data['modify'] = 1;
//        return view('/users/create',$data);


    }

    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    display Users */

    public function DisplayUsers(){


        $users = User::withTrashed()->get();

//        return view('Readata',compact('users'));

        return view('users.index',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    User Profile */
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


    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    update */
    public function update(editUser $request, $id)
    {

        if($request->has('user-profile')){
            $user = User::findOrFail($id);
            $input = $request->all();



            if($file = $request->file('file')){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);

                $photo = Photo::create(['path'=>$name, 'imageable_type'=>'App\User','imageable_id'=>$user->id]);

                $input['photo_id'] = $photo->id;
            }

            if(!$request->is_active == null || !empty($request->is_active)){
                $input['is_active'] = 1;
            }else{
                $input['is_active'] = 0;
                Session::flash('disabled_user','The user ' . $request->name . ' has been disabled');
            }


            $user->update($input);

            Session::flash('updated_user','The user ' . $request->name . ' has been Updated');

            return redirect('/User/Profile');
//            return view('admin.users', $id);

        }



    }


    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    update password */


    /**
     * @param NewPasswordRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updatePassword(NewPasswordRequest $request, $id)
    {

        $user = User::findOrFail($id);

        $currentPassword = $user->password;
        $FormPassword = Hash::make($request->password);

/* ******************   This is working module   ******************** */
//        $request->validate([
//
//        'password'=>['required',function($attribute, $value, $fail){
//            if(!Hash::check($value, Auth::user()->password)){
//                return $fail('The current password is incorrect');
//            }
//        }]
//
//        ]);
//
///
///  /* ******************   This is working module   ******************** */

        $request->validate([
            'password'=>['required', new MatchOldPassword],
        ]);

        $input = $request->all();

        $input['password'] = bcrypt($request->new_password);

        $user->update($input);

        return redirect('/User/Profile');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    destroy */
    public function destroy($id)
    {
        //

//        User::findorFail($id)->delete();
        $user =   User::findorFail($id);

        $user->is_active = 0;

        $user->update();
        unlink(public_path()  . $user->userPhoto->path);

        Photo::findorFail($user->userPhoto->id)->delete();
        $user->delete();


        return redirect('/');
    }



/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    User Profile */

    public function userProfile(){

        $user = Auth::user();
//        $agency = Agency::pluck('name','id')->all();

        $data=[];

        if($user->is_active == 0){
            Session::flash('disabled_user','The user ' . $user->name . ' has been disabled');
        }

        $data['user'] = $user;
        $data['agency']= Agency::pluck('name','id')->all();

//        return dd($data['agency']);

        return view('users.form', $data);

    }

    /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++    AdminUsersView : admin.users */

    public function AdminUsersView($id){

        $data=[];

        $user = User::withTrashed()->where('id',$id)->get();

        $data['user'] = $user[0];

        $data['agency']= Agency::pluck('name','id')->all();


        return view('users.form', $data);

    }

}
