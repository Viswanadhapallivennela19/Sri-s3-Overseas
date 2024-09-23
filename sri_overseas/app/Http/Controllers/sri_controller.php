<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class sri_controller extends Controller
{
    //
    public function home(){
        
        $milestones_data_get=DB::table('milestones_table')->get();
        
        // dd($milestones_data_get);
        return view('sri_overseas',compact('milestones_data_get'));
    }

    public function visa_assistance(){
        return view('visa_assistance');
    }

    public function  program_selection(){
        return view('program_selection');
    }

    public function students_questions(Request $request){
        if(!Auth::check()){
            return redirect(route('user_register'));
        }
        // Validate the request data
    $request->validate([
        'question' => 'required|string|max:1000' // Ensure question is required, a string, and does not exceed 1000 characters
    ]);

        DB::table('students_questions_table')->insert([
            'question'=>$request->question

        ]);
        return redirect()->back()->with('message', 'Successfully submitted');

    }
    public function about(){
        
        $team_data_get=DB::table('team_table')->get();
        
        // dd($team_data_get);
        return view('about',compact('team_data_get'));
    }

    public function contact(){
        if(!Auth::check()){
            return redirect(route('user_register'));
        }
        return view('contact');
    }
    public function usa(){
        $usa_data=DB::table('usa_table')->get();
        return view('usa',compact('usa_data'));
    }
    public function uk(){
        $uk_data=DB::table('uk_table')->get();
        return view('uk',compact('uk_data'));
    }
    public function canada(){
        $canada_data=DB::table('canada_table')->get();
        return view('canada',compact('canada_data'));
    }
    public function ireland(){
        $ireland_data=DB::table('ireland_table')->get();
        return view('ireland',compact('ireland_data'));
    }
    public function australia(){
        $australia_data=DB::table('australia_table')->get();
        return view('australia',compact('australia_data'));
    }
    public function scotland(){
        $scotland_data=DB::table('scotland_table')->get();
        return view('scotland',compact('scotland_data'));
    }
    public function germany(){
        $germany_data=DB::table('germany_table')->get();
        return view('germany',compact('germany_data'));
    }
    public function france(){
        $france_data=DB::table('france_table')->get();
        return view('france',compact('france_data'));
    }
    public function southafrica(){
        $southafrica_data=DB::table('southafrica_table')->get();
        return view('southafrica',compact('southafrica_data'));
    }
    public function uae(){
        $uae_data=DB::table('uae_table')->get();
        return view('uae',compact('uae_data'));
    }

    public function documents(){
        if(!Auth::check()){
            return redirect(route('user_register'));
        }
        return view('documents');
    }

    public function dream_destination(){
        $destination_data_get=DB::table('destination_table')->get();
        return view('dream_destination',compact('destination_data_get'));
    }

    public function faq(){
        $faq_data_get=DB::table('faq_table')->get();
        
         //dd($faq_data_get);
        return view('faq',compact('faq_data_get'));
    }

    public function services(){
        return view('services');
    }

    // public function sri_overseas(){
    //     return view('sri_overseas');
    // }

    public function success(){
        $milestones_data_get=DB::table('milestones_table')->get();
        
        // dd($milestones_data_get);
        return view('success',compact('milestones_data_get'));
    }

    public function universities(){
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
        return view('universities',compact('usa_data','uk_data','canada_data','ireland_data','australia_data','germany_data','scotland_data','france_data','southafrica_data','uae_data'));
    }

    public function contact_data_insert(Request $request){
         // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255', // Ensure name is required, a string, and does not exceed 255 characters
        'email' => 'required|email|max:255', // Ensure email is required, a valid email format, and does not exceed 255 characters
        'subject' => 'required|string|max:255', // Ensure subject is required, a string, and does not exceed 255 characters
        'message' => 'required|string|max:2000', // Ensure message is required, a string, and does not exceed 2000 characters
        'number' => 'nullable|string|max:15' // Ensure number is optional, a string, and does not exceed 15 characters
    ]);
         
        DB::table('contact_table')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'number'=>$request->number
            
        ]);
        return redirect()->back()->with('message', 'Successfully submitted');
    }

//Documents for Students 

public function documents_data_insert(Request $request)
{
    // Validate request inputs
    $request->validate([
        'name' => 'required|string|min:3|max:100|unique:documents_table',
        'passport_front' => 'required|mimes:pdf|max:10240|unique:documents_table',
        'passport_back' => 'mimes:pdf|max:10240',
        'scorecard' => 'mimes:pdf|max:10240',
        'ssc' => 'mimes:pdf|max:10240',
        'intermediate' => 'mimes:pdf|max:10240',
        'graduation' => 'mimes:pdf|max:10240',
        'cmm_pc_od' => 'mimes:pdf|max:10240',
        'lor' => 'mimes:pdf|max:10240',
        'resume' => 'mimes:pdf|max:10240',
        'experience' => 'mimes:pdf|max:10240',
        'sop' => 'mimes:pdf|max:10240'
    ]);

    // Initialize variables
    $passport_front = null;
    $passport_back = null;
    $scorecard = null;
    $ssc = null;
    $intermediate = null;
    $graduation = null;
    $cmm_pc_od = null;
    $lor = null;
    $resume = null;
    $experience = null;
    $sop = null;

    // Ensure the directory exists
    if (!file_exists('uploads/images')) {
        mkdir('uploads/images', 0755, true);
    }

    // Handle file uploads
    $fields = [
        'passport_front', 'passport_back', 'scorecard', 'ssc', 
        'intermediate', 'graduation', 'cmm_pc_od', 'lor', 
        'resume', 'experience', 'sop'
    ];

    foreach ($fields as $field) {
        if ($request->hasFile($field) && $request->file($field)->isValid()) {
            $file = $request->file($field);
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "_" . $field . "." . $extension;
            $file->move('uploads/images', $filename);
            $$field = 'uploads/images/' . $filename;
            Session([$field => $$field]); // Store the file path in the session
        }
    }

    // Insert into the database
    DB::table('documents_table')->insert([
        'name' => $request->name,
        'passport_front' => $passport_front,
        'passport_back' => $passport_back,
        'scorecard' => $scorecard,
        'ssc' => $ssc,
        'intermediate' => $intermediate,
        'graduation' => $graduation,
        'cmm_pc_od' => $cmm_pc_od,
        'lor' => $lor,
        'resume' => $resume,
        'experience' => $experience,
        'sop' => $sop
    ]);

    return redirect()->back()->with('success', 'Documents uploaded successfully.');
}




// public function otp_get(){
//     $otp_get=DB::table('user_otps')->get();
//     return view('otp',compact('otp_get'));
// }
public function registration(){
    return view('user_registration');
}
public function user_registration_data_insert(Request $request){


    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'alpha_num|unique:users',
        'number'=>'required|max_digits:10|unique:users,number'

    ]);
     
      $data['name']=$request->name;
      $data['email']=$request->email;
      $data['number']=$request->number;
      $data['password']=bcrypt($request->password);
      $user=User::create($data);
     
      if(!$user){
        return redirect(route('user_register'))->with("error","Registration Failed, Please Try Again.");
      }
      return redirect(route('otp_login'))->with("success","Registration Success, Login to Access The Admin Panel");

    // $request->validate([
    //     'name'=>'required|unique:user_logins,name',
    //     'number'=>'unique:user_logins,number',
    //     'email'=>'unique:user_logins,email'
    // ]);
    // DB::table('user_logins')->insert([
    //     'name'=>$request->name,
    //     'number'=>$request->number,
    //     'email'=>$request->email
    //     // 'email_verified_at'=>$request->name,
    // ]);
    // return redirect()->route('otp_login')->with('message','Successfully Registered');
}





    // public function documents_data_insert(Request $request){

    //     $request->validate([
             
    //         'passport_front'=>'mimes:pdf|unique:table,column,except,id',
    //         'passport_back'=>'mimes:pdf',
    //         'scorecard'=>'mimes:pdf',
    //         'ssc'=>'mimes:pdf',
    //         'intermediate'=>'mimes:pdf',
    //         'graduation'=>'mimes:pdf',
    //         'cmm_pc_od'=>'mimes:pdf',
    //         'lor'=>'mimes:pdf',
    //         'resume'=>'mimes:pdf',
    //         'experience'=>'mimes:pdf',
    //         'sop'=>'mimes:pdf'
             
             
    //     ]);
    //     if($request->has('passport_front')){
    //         $file= $request->file('passport_front');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $passport_front='uploads/images/'.$filename;}
    //         dd($passport_front);
         
    //     if($request->has('passport_back')){
    //         $file= $request->file('passport_back');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $passport_back='uploads/images/'.$filename;
    //     }
    //     if($request->has('scorecard')){
    //         $file= $request->file('scorecard');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $scorecard='uploads/images/'.$filename;
    //     }
    //     if($request->has('ssc')){
    //         $file= $request->file('ssc');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $ssc='uploads/images/'.$filename;
    //     }
    //     if($request->has('intermediate')){
    //         $file= $request->file('intermediate');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $intermediate='uploads/images/'.$filename;
    //     }
    //     if($request->has('graduation')){
    //         $file= $request->file('graduation');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $graduation='uploads/images/'.$filename;
    //     }
    //     if($request->has('cmm_pc_od')){
    //         $file= $request->file('cmm_pc_od');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $cmm_pc_od='uploads/images/'.$filename;
    //     }
    //     if($request->has('lor')){
    //         $file= $request->file('lor');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $lor='uploads/images/'.$filename;
    //     }
    //     if($request->has('resume')){
    //         $file= $request->file('resume');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $resume='uploads/images/'.$filename;
    //         }
    //     if($request->has('experience')){
    //         $file= $request->file('experience');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $experience='uploads/images/'.$filename;
    //     }
    //     if($request->has('sop')){
    //         $file= $request->file('sop');
    //         $extention=$file->getClientOriginalExtension();
    //         $filename=time().".".$extention;
    //         $file->move('uploads/images', $filename);
    //         $sop='uploads/images/'.$filename;
    //     }
       
    //     // dd('hjlb;uicoj');
       
    //     //  dd($request->all());
        
    //         DB::table('documents_table')->insert([
            
    //         'passport_front'=>$passport_front,
    //         'passport_back'=>$passport_back,
    //         'scorecard'=>$scorecard,
    //         'ssc'=>$ssc,
    //         'intermediate'=>$intermediate,
    //         'graduation'=>$graduation,
    //         'cmm_pc_od'=>$cmm_pc_od,
    //         'lor'=>$lor,
    //         'resume'=>$resume,
    //         'experience'=>$experience,
    //         'sop'=>$sop
             
            
    //     ]);
    //     return redirect()->back();
    // }
}
