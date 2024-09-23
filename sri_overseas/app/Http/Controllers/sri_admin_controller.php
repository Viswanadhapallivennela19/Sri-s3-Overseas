<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class sri_admin_controller extends Controller
{
    //
    public function admin_data(){
        return view('sri_admin');
    }

    public function admin_contact(){
        if(!Auth::check()){
            return redirect(route('login'));
        }
        $contact_data=DB::table('contact_table')->get();
        return view('contact_table',compact('contact_data'));
    }

    //Team Data
    public function admin_team(){
        if(!Auth::check()){
            return redirect(route('login'));
        }
        $team_data=DB::table('team_table')->get();
        return view('team_table',compact('team_data'));
    }

    
    public function team_form(){
        return view('team_form');
    }
    public function team_insert(Request $request){
         // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with max length of 255
        'designation' => 'required|string|max:255' // Validate that designation is required and is a string with max length of 255
    ]);
       

        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/team/', $filename);
            $image='uploads/images/team/'.$filename;}
            // dd($image);
        DB::table('team_table')->insert([
            'image'=>$image,
            'fullname'=>$request->name,
            'designation'=>$request->designation
        ]);
        return view('sri_admin');
    }
    public function team_delete($id)
    {
        // Retrieve the record to find the image path
        $teamMember = DB::table('team_table')->where('id', $id)->first();
    
        if ($teamMember) {
            // Define the full path to the image
            $imagePath = public_path($teamMember->image);
    
            // Check if the file exists and delete it
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
    
            // Delete the record from the database
            DB::table('team_table')->where('id', $id)->delete();
            
            return redirect()->back()->with('success', 'Team member and associated image deleted successfully.');
        }
    
        return redirect()->back()->with('error', 'Team member not found.');
    }
    
    // Faq data
    public function admin_faq(){
        if(!Auth::check()){
            return redirect(route('login'));
        }
        $faq_data=DB::table('faq_table')->get();
        $student_asked_question=DB::table('students_questions_table')->get();
        return view('faq_table',compact('faq_data','student_asked_question'));
    }

   

    public function faq_form(){
        return view('faq_form');
    }
    public function faq_insert(Request $request){
        // dd("fhuegihru");
        // Validate the request data
     $request->validate([
        'question' => 'required|string|max:255', // Validate that the question is required and is a string with a max length of 255
        'answer' => 'required|string' // Validate that the answer is required and is a string
    ]);
         
        DB::table('faq_table')->insert([
        
            'question'=>$request->question,
            'answer'=>$request->answer
        ]);
        return view('sri_admin');
    }
    public function faq_delete($id){
        $path=DB::table('faq_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }
    public function student_asked_question_delete($id){
        
        $path=DB::table('students_questions_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }
    

    // destination Routes function

    public function admin_destination(){
        if(!Auth::check()){
            return redirect(route('login'));
        }
        // dd("ihuwdih");
        $destination_data=DB::table('destination_table')->get();
        return view('destination_table',compact('destination_data'));
    }
    public function destination_form(){
        return view('destination_form');
    }
    public function destination_insert(Request $request){
        // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'famous' => 'required|string' // Validate that famous is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/destination/', $filename);
            $image='uploads/images/destination/'.$filename;}
            
        DB::table('destination_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'famous'=>$request->famous
        ]);
        return view('sri_admin');
    }
    public function destination_delete($id)
{
    // Retrieve the image path from the database
    $path = DB::table('destination_table')->where('id', $id)->value('image');

    // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();

    // Redirect back with a success message
    return redirect()->back()->with('status', 'Destination deleted successfully');
}


// University Routes function

    public function admin_university(){
        if(!Auth::check()){
            return redirect(route('login'));
        }
        // dd("ihuwdih");
        $usa_data=DB::table('usa_table')->get();
        $uk_data=DB::table('uk_table')->get();
        $canada_data=DB::table('canada_table')->get();
        $ireland_data=DB::table('ireland_table')->get();
        $australia_data=DB::table('australia_table')->get();
        $scotland_data=DB::table('scotland_table')->get();
        $germany_data=DB::table('germany_table')->get();
        $france_data=DB::table('france_table')->get();
        $southafrica_data=DB::table('southafrica_table')->get();
        $uae_data=DB::table('uae_table')->get();
        return view('university_table',compact('usa_data','uk_data','canada_data','ireland_data','australia_data','scotland_data','germany_data','france_data','southafrica_data','uae_data'));
    }

    // usa data function
    public function usa_form(){
        return view('usa_form');
    }
    public function usa_insert(Request $request){
        // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the university image is required, is an image, and has specific mime types
        'importance_1' => 'required|string', // Validate importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate discription_2 is required and is a string
        'name' => 'required|string|max:255', // Validate name is required and is a string with a max length of 255
        'specialty' => 'required|string', // Validate specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}
            

            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
                
        DB::table('usa_table')->insert([
            'image'=>$image,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'name'=>$request->name,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function usa_delete($id){
        $path=DB::table('usa_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }


    // uk data function
    public function uk_form(){
        return view('uk_form');
    }
    public function uk_insert(Request $request){
        // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the university image is required, is an image, and has specific mime types
        'importance_1' => 'required|string', // Validate importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate discription_2 is required and is a string
        'name' => 'required|string|max:255', // Validate name is required and is a string with a max length of 255
        'specialty' => 'required|string', // Validate specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('uk_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function uk_delete($id){
        $path=DB::table('uk_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }


    // canada data function
    public function canada_form(){
        return view('canada_form');
    }
    public function canada_insert(Request $request){
        // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('canada_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function canada_delete($id){
        $path=DB::table('canada_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }

    // ireland data function
    public function ireland_form(){
        return view('ireland_form');
    }
    public function ireland_insert(Request $request){
        // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}



            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('ireland_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function ireland_delete($id){
        $path=DB::table('ireland_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }


    // australia data function
    public function australia_form(){
        return view('australia_form');
    }
    public function australia_insert(Request $request){
         // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('australia_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function australia_delete($id){
        $path=DB::table('australia_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }

    // scotland data function
    public function scotland_form(){
        return view('scotland_form');
    }
    public function scotland_insert(Request $request){
         // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('scotland_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function scotland_delete($id){
        $path=DB::table('scotland_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }


    // germany data function
    public function germany_form(){
        return view('germany_form');
    }
    public function germany_insert(Request $request){
        // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('germany_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function germany_delete($id){
        $path=DB::table('germany_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }


    // france data function
    public function france_form(){
        return view('france_form');
    }
    public function france_insert(Request $request){
         // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);

        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('france_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function france_delete($id){
        $path=DB::table('france_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }


    // southafrica data function
    public function southafrica_form(){
        return view('southafrica_form');
    }
    public function southafrica_insert(Request $request){
        // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/'.$filename;}
            
        DB::table('southafrica_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function southafrica_delete($id){
        $path=DB::table('southafrica_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }



     // southafrica data function
     public function uae_form(){
        return view('uae_form');
    }
    public function uae_insert(Request $request){
         // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'universityimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the university image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'importance_1' => 'required|string', // Validate that importance_1 is required and is a string
        'importance_2' => 'required|string', // Validate that importance_2 is required and is a string
        'importance_3' => 'required|string', // Validate that importance_3 is required and is a string
        'discription_1' => 'required|string', // Validate that discription_1 is required and is a string
        'discription_2' => 'required|string', // Validate that discription_2 is required and is a string
        'specialty' => 'required|string', // Validate that specialty is required and is a string
        'auxiliary_details' => 'required|string' // Validate that auxiliary_details is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/university/', $filename);
            $image='uploads/images/university/'.$filename;}


            if($request->has('universityimage')){
                $file= $request->file('universityimage');
                $extention=$file->getClientOriginalExtension();
                $filename=time().".".$extention;
                $file->move('uploads/images/university/', $filename);
                $university_image='uploads/images/university/'.$filename;}
            
        DB::table('uae_table')->insert([
            'image'=>$image,
            'name'=>$request->name,
            'universityimage'=>$university_image,
            'importance_1'=>$request->importance_1,
            'importance_2'=>$request->importance_2,
            'importance_3'=>$request->importance_3,
            'discription_1'=>$request->discription_1,
            'discription_2'=>$request->discription_2,
            'specialty'=>$request->specialty,
            'auxiliary_details'=>$request->auxiliary_details
        ]);
        return view('sri_admin');
    }
    public function uae_delete($id){
        $path=DB::table('uae_table')->where('id','=',$id)->delete();
         // Construct the full path to the file
    $fullPath = public_path($path);

    // Check if the file exists and delete it
    if (File::exists($fullPath)) {
        File::delete($fullPath);
    }

    // Delete the record from the database
    DB::table('destination_table')->where('id', $id)->delete();
        return redirect()->back();
    }

// milestones_data

public function admin_milestones(){
    if(!Auth::check()){
        return redirect(route('login'));
    }
    $milestones_data=DB::table('milestones_table')->get();
    return view('milestones_table',compact('milestones_data'));
}
 public function milestones_form(){
        return view('milestones_form');
    }
    public function milestones_insert(Request $request){
         // Validate the request data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate that the image is required, is an image, and has specific mime types
        'name' => 'required|string|max:255', // Validate that name is required and is a string with a max length of 255
        'designation' => 'required|string|max:255', // Validate that designation is required and is a string with a max length of 255
        'discription' => 'required|string' // Validate that description is required and is a string
    ]);
        // dd("fhuegihru");
        if($request->has('image')){
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().".".$extention;
            $file->move('uploads/images/milestones/', $filename);
            $image='uploads/images/milestones/'.$filename;}
            // dd($image);
        DB::table('milestones_table')->insert([
            'image'=>$image,
            'fullname'=>$request->name,
            'designation'=>$request->designation,
            'discription'=>$request->discription
           
        ]);
         
        return view('sri_admin');
    }
    public function milestones_delete($id)
    {
        // Retrieve the record to get the file path before deletion
        $milestone = DB::table('milestones_table')->where('id', $id)->first();
        
        if ($milestone) {
            // Assuming the file path is stored in a column named 'file_path'
            $filePath = $milestone->file_path;
    
            // Construct the full path to the file
            $fullPath = public_path($filePath);
    
            // Check if the file exists and delete it
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
    
            // Delete the record from the database
            DB::table('milestones_table')->where('id', $id)->delete();
        }
    
        return redirect()->back();
    }
    

    public function student_documents_data_get(){
        if(!Auth::check()){
            return redirect(route('login'));
        }
         
        $student_documents_data_get=DB::table('documents_table')->get();
        return view('student_documents_table',compact('student_documents_data_get'));
    }



    // admin registration data
    public function registration(){
        if(Auth::check()){
            return redirect(route('admin'));
        }
        return view('registration');
    }
    public function registration_insert(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'alpha_num|unique:users'

        ]);
         
          $data['name']=$request->name;
          $data['email']=$request->email;
          $data['password']=bcrypt($request->password);
          $user=User::create($data);
         
          if(!$user){
            return redirect(route('registration'))->with("error","Registration Failed, Please Try Again.");
          }
          return redirect(route('login'))->with("success","Registration Success, Login to Access The Admin Panel");
    }


    // admin login data
    public function login(){
        if(Auth::check()){
            return redirect(route('admin'));
        }
        return view('login');
    }
    public function login_insert(Request $request){
        $request->validate([
            
            'email'=>'required',
            'password'=>'alpha_num|unique:users'

        ]);
        $credentials=$request->only('email','password');
        // dd($credentials);
        if(Auth::attempt($credentials)){
            // dd('drftgiyhuji');
            return redirect()->intended(route('admin'))->with("success","Login Successfully");
        }
        return redirect(route('login'))->with("error","Login Details are incorrect");
        DB::table('users')->insert([
            // 'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return view('login');
    }



    
     Function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
     }
    
    

}
