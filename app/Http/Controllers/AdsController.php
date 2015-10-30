<?php

namespace App\Http\Controllers;


use App\Model\Ads;
use Illuminate\Http\Request;


/**
 * 
 */
class AdsController extends Controller{


	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index(){

    	$ads = Ads::all();

		return $ads;
	}


	    /**
     * Show the specified photo comment.
     *
     * @param  int  $photoId
     * @param  int  $commentId
     * @return Response
     */
    public function show($id)
    {
       $ad = Ads::find($id);
	   return $ad;
    }



    /**
     * Show the specified photo comment.
     *
     * @param  int  $photoId
     * @param  int  $commentId
     * @return Response
     */
    public function store(Request $request)
    {
       	$title = $request->input('title');
       	$description = $request->input('description');
       	$ad = new Ads();
       	$ad->title = $title;
       	$ad->description = $description;
       	$ad->save();

    }




    /**
     * Show the specified photo comment.
     *
     * @param  int  $photoId
     * @param  int  $commentId
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
       $ad = Ads::destroy($id);
    }
	
	
}


?>