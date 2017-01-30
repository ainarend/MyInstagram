<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PictureController extends Controller
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
     * Store uploaded pictures to db and disk
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        //check if we have the picture
        if($request->uploadPicture !== null)
        {
            //TO DO: validation

            //get the uploaded file
            $file = $request->file('uploadPicture');
            //create a random name
            $fileName = uniqid('img_'.date('Y').'_'.date('m').'_'.date('d').'_'.date('H').'_'.date('i').'_', true);
            $extension = $file->getClientOriginalExtension();
            //store the image
            \Storage::disk('public')->put($fileName.'.'.$extension,  \File::get($file));
            //save to db
            $url = \Storage::url($fileName.'.'.$extension);
            $pic = new \App\Picture(['description' => $request->desc, 'url' => $url]);
            auth()->user()->pictures()->save($pic);
            //all done, redirect
            return redirect(url('/feed'));

        } else {
            return redirect(url('/'));
        }


    }
}
