<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App;
use App\Http\Controllers\Auth;
use app\Requests;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Database\Eloquent\Model; 
use App\Item; 
use App\Image; 



class MainController extends Controller
{
	public function index(){

		$data = Item::with('images')->get();


		return view('indexx',compact('data'));
	}

	public function create(){
		
		return view('dash.create');
	}

	public function store(Request $request){

		$request->validate([
			'title'=>'required',
            'quantity'=>'required',
			'image'=>'required',
			'mainImage'=>'required',
			'price'=>'required',
			'priceOffer'=>'required',
            'type'=>'required',
			
			
		]);

		$MainImage = $request->file('mainImage');

        $new_name = rand() . '.' . $MainImage->getClientOriginalExtension();
        $MainImage->move(public_path('images'), $new_name);

		$items  = Item::create([
			'name' => $request->title,
            'quantity' => $request->quantity,
			'mainImage'=> $new_name ,
			'price'=>$request->price,
            'type'=>$request->type,
			'priceOffer'=>$request->priceOffer, ]);


	$images=array();
    if($files=$request->file('image')){
        foreach($files as $file){
            $name=rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $name);
             $photos = explode("," , $request->get('photos'));
        foreach ($photos as $photo) {
        
        	 $form_data  = array(
          'url' =>$name,
        		 'imageable_id' => $items->id ,
        	 'imageable_type' =>'App\Item' ,
      );
        Image::create($form_data);
        }
            
        }
    }


	//	$image = $request->file('image');
	//	  $new_name = rand() . '.' . $image->getClientOriginalExtension();
    //    $image->move(public_path('images'), $new_name);
        // $photos = explode("," , $request->get('photos'));
        // foreach ($photos as $photo) {
        // 	Image::create([
        // 		'url' =>$images,
        // 		 'imageable_id' => $items->id ,
        // 	 'imageable_type' =>'App\Item' ,
        // 	]);
        // }

        return redirect('indexx')->with('success', 'Data Added successfully.');
	}

	public function activity(Request $request,$id)
    {
        
        $data = Item::findOrFail($id);
        if($data->status==1){
        $status=0;
        $form_data = array(
            'status'       => $status );
        }

        else{
         $status=1;
        
        $form_data = array(
            'status'       => $status );}
      
 Item::whereId($id)->update($form_data);
      return redirect('indexx');
    }

	public function destroy(Request $request, $id){
		 $data = Item::findOrFail($id);

        $data->delete();
        // $data2 = Image::findOrFail($id);
         

		return redirect('/indexx')->with('success', 'Data Added successfully.');
	}

	
 }