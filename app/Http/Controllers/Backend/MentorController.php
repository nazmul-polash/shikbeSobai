<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Image;
use File;


class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::orderBy('fullname', 'asc')->get();
        return view('backend.pages.mentor.manage', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mentor = new Mentor();

        $mentor->fullname       = $request->fullname;
        $mentor->designation    = $request->designation;
        $mentor->slug           = Str::slug($request->fullname);
        $mentor->overview       = $request->overview;
        $mentor->phone          = $request->phone;
        $mentor->email          = $request->email;
        $mentor->address        = $request->address;
        $mentor->fiverr_url     = $request->fiverr_url;
        $mentor->upwork_url     = $request->upwork_url;
        $mentor->status         = $request->status;

        if( $request->image )
        {
            $image = $request->file('image');
            $imgname = time() .'.'.$image->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/'. $imgname);
            Image::make($image)->save($location);
            $mentor->profile_pic = $imgname;
        }

        if( $request->fiverr_img )
        {
            $fiverr = $request->file('fiverr_img');
            $fvr =rand().'.'.$fiverr->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/badge/'. $fvr);
            Image::make($fiverr)->save($location);
            $mentor->fiverr_img = $fvr;
        }

        if( $request->upwork_img )
        {
            $upwork = $request->file('upwork_img');
            $upr = rand().'.'.$upwork->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/badge/'. $upr);
            Image::make($upwork)->save($location);
            $mentor->upwork_img = $upr;
        }
        
        $mentor->save();
        return redirect()->route('mentor.manage')->with('success','New Mentor Added Successfully');
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
        $mentor = Mentor::find($id);

        if( !is_null($mentor) )
        {
           return view('backend.pages.mentor.edit', compact('mentor')); 
        }
        else
        {
            return redirect()->route('mentor.manage');
        }
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
        $mentor = Mentor::find($id);

        $mentor->fullname       = $request->fullname;
        $mentor->designation    = $request->designation;
        $mentor->slug           = Str::slug($request->fullname);
        $mentor->overview       = $request->overview;
        $mentor->phone          = $request->phone;
        $mentor->email          = $request->email;
        $mentor->address        = $request->address;
        $mentor->fiverr_url     = $request->fiverr_url;
        $mentor->upwork_url     = $request->upwork_url;
        $mentor->status         = $request->status;

        if( !empty($request->image) )
        {
            if( File::exists('backend/img/mentor/'. $mentor->profile_pic) ){
                File::delete('backend/img/mentor/'. $mentor->profile_pic);
            }

            $image = $request->file('image');
            $imgname = time() .'.'.$image->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/'. $imgname);
            Image::make($image)->save($location);
            $mentor->profile_pic = $imgname;

        }
        if( !empty($request->fiverr_img) )
        {
            if( File::exists('backend/img/mentor/badge/'. $mentor->fiverr_img) ){
                File::delete('backend/img/mentor/badge/'. $mentor->fiverr_img);
            }

            $fiverr = $request->file('fiverr_img');
            $fvr =rand().'.'.$fiverr->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/badge/'. $fvr);
            Image::make($fiverr)->save($location);
            $mentor->fiverr_img = $fvr;
        }
        if( !empty($request->upwork_img) )
        {
            if( File::exists('backend/img/mentor/badge/'. $mentor->upwork_img) ){
                File::delete('backend/img/mentor/badge/'. $mentor->upwork_img);
            }

            $upwork = $request->file('upwork_img');
            $upr = rand().'.'.$upwork->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/badge/'. $upr);
            Image::make($upwork)->save($location);
            $mentor->upwork_img = $upr;
        }

        $mentor->save();
        return redirect()->route('mentor.manage')->with('info','Mentor Information Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = Mentor::find($id);

        if( File::exists('backend/img/mentor/'. $mentor->profile_pic) ){
            File::delete('backend/img/mentor/'. $mentor->profile_pic);
        }

        if( File::exists('backend/img/mentor/badge/'. $mentor->fiverr_img) ){
            File::delete('backend/img/mentor/badge/'. $mentor->fiverr_img);
        }
   
        if( File::exists('backend/img/mentor/badge/'. $mentor->upwork_img) ){
            File::delete('backend/img/mentor/badge/'. $mentor->upwork_img);
        }
   
        $mentor->delete();
        return redirect()->route('mentor.manage')->with('danger','Delete The Mentor Information');
    }
}
