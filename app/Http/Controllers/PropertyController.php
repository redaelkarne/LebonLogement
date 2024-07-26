<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    //
    function index(){
        return view('frontend.property_post');
    }

    function  store(Request $request){

        $user_id=Auth::user()->id;
        //get file
        $image_01=$request->file('image_01');
        $image_02=$request->file('image_02');
        $image_03=$request->file('image_03');
        $image_04=$request->file('image_04');
        $image_05=$request->file('image_05');
//extension
        $image_01_ext=$image_01->getClientOriginalExtension();
        $name_01=$image_01->getClientOriginalName();
        $name_01=explode('.',$name_01);
        array_pop($name_01);
        $name_01=join($name_01);
        $name_01="$name_01".$user_id.".$image_01_ext";

        if($image_02 !=null){
            $image_02_ext=$image_02->getClientOriginalExtension();
            $name_02=$image_02->getClientOriginalName();
            $name_02=explode('.',$name_02);
            array_pop($name_02);
            $name_02=join($name_02);
            $name_02="$name_02".$user_id.".$image_02_ext";
        }else $name_02=null;
        if ($image_03 !=null){
            $image_03_ext=$image_03->getClientOriginalExtension();
            $name_03=$image_03->getClientOriginalName();
            $name_03=explode('.',$name_03);
            array_pop($name_03);
            $name_03=join($name_03);
            $name_03="$name_03".$user_id.".$image_03_ext";


        }else $name_03=null;
        if($image_04 !=null){
            $image_04_ext=$image_04->getClientOriginalExtension();
            $name_04=$image_04->getClientOriginalName();
            $name_04=explode('.',$name_04);
            array_pop($name_04);
            $name_04=join($name_04);
            $name_04="$name_04".$user_id.".$image_04_ext";
        }else $name_04=null;
        if ($image_05 !=null){
            $image_05_ext=$image_05->getClientOriginalExtension();
            $name_05=$image_05->getClientOriginalName();
            $name_05=explode('.',$name_05);
            array_pop($name_05);
            $name_05=join($name_05);
            $name_05="$name_05".$user_id.".$image_05_ext";
        } else $name_05=null;

        //isset
        if(isset($request->lift)){
            $lift = $request->lift;

        }else{
            $lift = 'no';
        }
        if(isset($request->security_guard)){
            $security_guard =$request->security_guard;
        }else{
            $security_guard = 'no';
        }
        if(isset($request->play_ground)){
            $play_ground =$request->play_ground;

        }else{
            $play_ground = 'no';
        }
        if(isset($request->garden)){
            $garden =$request->garden;

        }else{
            $garden = 'no';
        }
        if(isset($request->water_supply)){
            $water_supply =$request->water_supply;

        }else{
            $water_supply = 'no';
        }
        if(isset($request->power_backup)){
            $power_backup =$request->power_backup;

        }else{
            $power_backup = 'no';
        }
        if(isset($request->parking_area)){
            $parking_area = $request->parking_area;
        }else{
            $parking_area = 'no';
        }
        if(isset($request->gym)){
            $gym =$request->gym;

        }else{
            $gym = 'no';
        }
        if(isset($request->shopping_mall)){
            $shopping_mall = $request->shopping_mall;
        }else{
            $shopping_mall = 'no';
        }
        if(isset($request->hospital)){
            $hospital =$request->hospital;
        }else{
            $hospital = 'no';
        }
        if(isset($request->school)){
            $school =$request->school;
        }else{
            $school = 'no';
        }
        if(isset($request->market_area)){
            $market_area = $request->market_area;

        }else{
            $market_area = 'no';
        }
        Property::create([
            'user_id'=>Auth::user()->id,
            'user_name'=>Auth::user()->name,
            'property_name'=>$request->property_name,
            'address'=>$request->address,
            'price'=>$request->price,
            'type'=>$request->type,
            'offer'=>$request->offer,
            'status'=>$request->status,
            'furnished'=>$request->furnished,
            'bnk'=>$request->bhk,
            'deposite'=>$request->deposite,
            'bedroom'=>$request->bedroom,
            'bathroom'=>$request->bathroom,
            'balcony'=>$request->balcony,
            'carpet'=>$request->carpet,
            'age'=>$request->age,
            'total_floors'=>$request->total_floors,
            'room_floor'=>$request->room_floor,
            'loan'=>$request->loan,
            'lift'=>$lift,
            'security_guard'=>$security_guard,
            'play_guard'=>$play_ground,
            'garden'=>$garden,
            'water_supply'=>$water_supply,
            'power_backup'=>$power_backup,
            'parking_area'=>$parking_area,
            'gym'=>$gym,
            'shopping_mall'=>$shopping_mall,
            'hospital'=>$hospital,
            'school'=>$school,
            'market_area'=>$market_area,
            'image_01'=>$name_01,
            'image_02'=>$name_02,
            'image_03'=>$name_03,
            'image_04'=>$name_04,
            'image_05'=>$name_05,
            'description'=>$request->description
        ]);
        $property=Property::latest()->first();
        $property_id=$property->id;
        $image_01->move(public_path('attachments/'.$user_id.'/'.$property_id),$name_01);
        if($image_02 !=null)
        $image_02->move(public_path('attachments/'.$user_id.'/'.$property_id),$name_02);
        if($image_03 !=null)
        $image_03->move(public_path('attachments/'.$user_id.'/'.$property_id),$name_03);
        if($image_04 !=null)
        $image_04->move(public_path('attachments/'.$user_id.'/'.$property_id),$name_04);
        if($image_05 !=null)
        $image_05->move(public_path('attachments/'.$user_id.'/'.$property_id),$name_05);
        return redirect()->back();

    }

    function all_listings(){

        $properties=Property::all();
        return view('frontend.listings',compact('properties'));
    }


    function all_listings_property_admin(){

        $properties=Property::all();
        return view('admin.listings',compact('properties'));
    }

     function view_property($id){
        $property=Property::findorfail($id);
        $user_id=$property->user_id;
        $user=User::findorfail($user_id);
        return view('frontend.view_property',compact('property','user'));
     }

    public  function search(Request $request){
        $search_box=$request->search_box;
        $properties = DB::table('property')
            ->where('property_name', 'like', '%'.$search_box.'%')
            ->orWhere('address', 'like', '%'.$search_box.'%')

            ->get();
        return view('admin.listings',compact('properties'));
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        
        // Find all users who have favorited this property
        $favorites = Favorite::where('property_id', $id)->get();
        $users = $favorites->pluck('user');

        // Notify users
        Notification::send($users, new PropertyDeleted($property));

        // Delete the property
        $property->delete();

        return redirect()->route('admin.properties')->with('success', 'Property deleted and users notified.');
    }
    function admin_view_property($id){

        $property=Property::findorfail($id);
        $user_id=$property->user_id;
        $user=User::findorfail($user_id);
        return view('admin.view_property',compact('property','user'));
    }
    public function addToFavorites($propertyId)
    {
        $userId = Auth::id();

        // Check if the property is already in the user's favorites
        $existingFavorite = Favorite::where('user_id', $userId)
            ->where('property_id', $propertyId)
            ->first();

        if ($existingFavorite) {
            return redirect()->back()->with('message', 'Property already in favorites');
        }

        // Add to favorites
        Favorite::create([
            'user_id' => $userId,
            'property_id' => $propertyId,
        ]);

        return redirect()->back()->with('message', 'Property added to favorites');
    }
}

