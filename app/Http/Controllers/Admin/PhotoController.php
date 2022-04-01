<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo; 
use App\Models\User; 
use App\Helper\Helper;
use Illuminate\Support\Facades\DB;
use Auth;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug,$id)
    {
        
        //
         $photos = Photo::where(['user_id' => auth()->user()->id,'listing_id'=>$id])->paginate(5);
         
        //  if(!$photos->hasPages()){
        //      return redirect('/admin/listings/{$slug}/{$id}/photos/create');
        //  }
         if($photos->total() < 1){
               return redirect('/admin/listings/{$slug}/{$id}/photos/create');
         }
        return view('admin/listings/photos/index',[
            'photos' =>$photos,
            'slug' =>$slug,
            'id' => $id

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug, $id)
    {
        //
        return view('admin/listings/photos/create',[
            'slug' => $slug,
            'id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug, $id)
    {
         //

       
        // $this->authorize('create',Listing::class);
     
        request()->validate([
             'image' => 'required|image',
        ]);
        $newName = time(). '-' .$request->file('image')->getClientOriginalName();

        $size = $request->file('image')->getSize();
        $name =  $newName;
        $request->file('image')->move(public_path('img'),$name);
        $photo = new Photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->user_id = auth()->user()->id;
       $photo->listing_id = $id;
       $photo->featured = 0;
        // $photo->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");
        $photo->save();
        return redirect("/admin/listings/{$slug}/{$id}/photos")->with('success','Listing create successfully');
        //  return redirect("/admin/listings/{$slug}/{$id}/photos/{$photo->id}/edit")->with('success','Listing create successfully');
    }


   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug,$id,$photo_id)
    {
        //
         $listing = Photo::find($photo_id);
        // $this->authorize('delete',$listing);
        $listing->delete();
        return redirect("/admin/listings/{$slug}/{$id}/photos")->with('success','Photo has been Delete Successfully');

    }
    public function featured($slug,$id,$photo_id)
    {
        //
         $old_photo = Photo::where([
             'listing_id' => $id,
            'featured' => 1
          
        ])->first();
        if($old_photo != null){
 $old_photo->featured = 0;
        $old_photo->save();
        }

       
        $new_photo = Photo::where([
             'listing_id' => $id,
            'id' => $photo_id
          
        ])->first();
       $new_photo->featured = 1;
        $new_photo->save();
        return redirect("/admin/listings/{$slug}/{$id}/photos")->with('success','Photo has been made featured Successfully');

    }
}
