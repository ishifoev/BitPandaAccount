<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserDetail;
use App\Models\User;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/users', function () {
    //$users = UserDetail::with(['country' => function ($query) {
      //  $query->where('name', '=','Austria');
    //}])->get();
    //return $users;
    $users = DB::table('user_details')
            ->select('users.id','users.email', 'user_details.first_name', 'user_details.last_name', 'user_details.phone_number')
            ->join('users', 'user_details.user_id', '=', 'users.id')
            ->join('countries', 'countries.id', '=', 'user_details.citizenship_country_id')
            ->where('countries.name', 'Austria')
            ->where('users.active', 1)
            ->get();
    return $users;
    //exit;
    //return UserDetail::with(['user'=> function ($query) {
      //   $query->where('active', 1);
      //}]
     // )->where('citizenship_country_id', 1)->get();
});

Route::patch('/userDetail/edit/{userDetail}', function (UserDetail $userDetail, Request $request) {
    $request->validate([
        'user_id' => ['required'],
        'citizenship_country_id' => ['required'],
        'first_name' => ['required'],
        'last_name' => ['required'],
        'phone_number' => ['required'],
    ]);
        $userDetail->update([
            'user_id' => $request->user_id,
            'citizenship_country_id' => $request->citizenship_country_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number
        ]);
        return response()->json([
            'user_detail' => $userDetail
        ], 200);
   
});

Route::delete('/user/delete/{user}', function(User $user) {
    $userDetail = UserDetail::where('user_id', $user->id)->first();
    if(empty($userDetail)) {
        $user->delete();
        return response()->json([
            'Message' => 'The user deleted successfull'
        ], 200);
    } else {
        return response()->json([
            'Message' => 'The user can not delete because User Detail is exists'
        ], 400);
    }
});
