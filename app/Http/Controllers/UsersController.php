<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $this->validate($request,[
            'prof_pic'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'username'=>'required',
            'status'=>'required',

        ]);


        $username=$request->input('username');
        $status=$request->input('status');

        $prof_pic="/uploads"."/".$request->input('prof-pic');

        //uploading image to public/uploads  folder
        if(Input::hasFile('prof_pic')){
            $file= Input::file('prof_pic');
            $file->move(public_path().'/uploads', $file->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $file->getClientOriginalName();


//getting user id
            $user_id=Auth::user()->id;
//upating user table
            DB::update("UPDATE users SET username = ?, status = ? , profile_img = ? WHERE id = ?",[$username,$status,$url,$user_id]);

        }




        return redirect('/home')->with('response','Profile updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
