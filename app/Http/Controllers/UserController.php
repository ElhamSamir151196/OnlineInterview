<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Users = User::orderBy('id','desc')->get();

        return view('Dashboard/User/Show_All' , compact('Users'));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Profile()
    {
        //

        return view('UserInterface/Profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fields  = $request->get('Category');
       
        
        if($fields =='flexRadioDefault1'){
            $Category_User="Client";

        }
        else{
            $Category_User="Admin";
        }

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' =>['required', 'string', 'max:255'],
            'Second_name' =>  ['required', 'string', 'max:255'],
            'Address' => ['required', 'string', 'max:500'],
            'Phone' => 'required',
            'password'         =>  ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => 'required||min:8|same:password'
        ]);
       
        $new_user= new User;
        $new_user->name=$request->name;
        $new_user->email=$request->email;
        $new_user->Second_name=$request->Second_name;
        $new_user->Address=$request->Address;
        $new_user->Category=$Category_User;
        $new_user->Phone=$request->Phone;

        $new_user->IQGrade="none";
        $new_user->IQFlag="F";
        $new_user->EnglishGrade="none";
        $new_user->EnglishFlag="F";
        $new_user->TechnicalGrade="none";
        $new_user->TechnicalFlag="F";

        $new_user->password= Hash::make($request->password) ;
        $new_user->save();

        
        session()->flash('success' ,'User Created Successfully');
        return redirect()->back();
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
        $user= User::find($id);
        return view('Dashboard/User/ShowUser' , compact('user'));


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
        $user = User::find($id);
        return view('Dashboard/User/EditUser' , compact('user'));
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
            
        $request->validate([
            'name' =>['required', 'string', 'max:255'],
            'Second_name' =>  ['required', 'string', 'max:255'],
            'Address' => ['required', 'string', 'max:500'],
            'Phone' => 'required',
            
        ]);
        $data = $request->all();
        $target_user = User::find($id);
       
        if($request->email !=$target_user->email){
           
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'] , 
            ]);
    
        }
       
        $target_user->update($data);
        session()->flash('success' ,'User Updated Successfully');
        return redirect()->back();

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_password($id)
    {
        //
       // $user = User::find($id);
        $user= User::find($id);
        return view('Dashboard/User/EditUserPassword' , compact('user'));
       
       // return view('Dashboard/User/EditPassword' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_password(Request $request, $id)
    {
        //
            
        $request->validate([
            'password'         =>  ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => 'required||min:8|same:password'
            
        ]);
       
        $request->password= Hash::make($request->password) ;
        $pass = array("password"=>$request->password);    
        $target_user = User::find($id);
        $target_user->update($pass);
        session()->flash('success' ,'User Password Updated Successfully');
        return redirect()->back();

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
        $target_id=$id;
        User::destroy($id);
        return view('Dashboard/User/DeleteUser' , compact('target_id'));
    }
}
