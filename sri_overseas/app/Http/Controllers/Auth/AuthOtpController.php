<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Models\User;
use App\Models\User;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\user_otp;
use Illuminate\Support\Facades\Session;

class AuthOtpController extends Controller
{
    public function login(){
        return view('user_login');
    }
    public function generate(Request $request)
{
    // Validate the number with the correct column name
    $request->validate([
        'number' => 'required|exists:users,number|max_digits:10'
    ]);

    // Generate OTP and send SMS
    $userOtp = $this->generateOTP($request->number);
    $userOtp->sendSMS($request->number);

    return redirect()->route('otp_verification', [$userOtp->user_id])
                     ->with('success', 'OTP has been sent to your mobile number.');
}

public function generateOTP($number)
{
    $user = User::where('number', $number)->first(); // Use the correct column name
    if (!$user) {
        // Handle user not found case
        throw new \Exception('User not found');
    }

    $userOtp = user_otp::where('user_id', $user->id)->latest()->first();
    $now = now();

    if ($userOtp && $now->isBefore($userOtp->expire_at)) {
        return $userOtp;
    }

    return user_otp::create([
        'user_id' => $user->id,
        'otp' => rand(123456, 999999),
        'expire_at' => $now->addMinutes(10),
    ]);
}

    
    public function verification($user_id){
        return view('otp')->with([
            'user_id'=>$user_id
        ]);
    }
    public function loginWithOtp(Request $request)
{
    // Validate input
    $request->validate([
        'otp' => 'required',
        'user_id' => 'required|exists:users,id'  // Check the correct table and column
    ]);
   

    // Retrieve OTP and user
    $userOtp = user_otp::where('user_id', $request->user_id)
                        ->where('otp', $request->otp)
                        ->first();
    $now = now();

    if (!$userOtp) {
        return redirect()->back()->with('error', 'Your OTP is incorrect');
    } elseif ($userOtp && $now->isAfter($userOtp->expire_at)) {
        return redirect()->back()->with('error', 'Your OTP has expired');
    }

    $user = User::find($request->user_id);
    if ($user) {
        $userOtp->update([
            'expire_at' => now()
        ]);
        Auth::login($user);
        return redirect(route('home'));
    }

    return redirect()->route('otp_login')->with('error', 'Your OTP is not correct');
}
Function user_logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('home'));
 }

}
