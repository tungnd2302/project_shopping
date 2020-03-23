<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role as Roles;
use App\Models\User_info as userInfo;
use App\User as Users;
use Alert;
use DB;
use Auth;
use App\Http\Requests\UpdateProfilerequest;
use App\Http\Requests\ChangePasswordRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userid = Auth::user()->id;
       $user = Users::find($userid);
       return view('backend.main.profile.index', compact('user'));
    }

    public function timeline(){
        return view('backend.main.profile.timeline');
    }

    public function editprofile(){
        $userid = Auth::user()->id;
        $user = Users::find($userid);
        return view('backend.main.profile.editprofile', compact('user'));
    }
    
    public function updateprofile(UpdateProfilerequest $request){
        // dd($request->all());
        // die;
        DB::beginTransaction();
        try {
            $user = Users::find(Auth::user()->id);
            $user_info = userInfo::where('user_id', '=', $user->id)->firstOrFail();
            $userid = $user_info->id;

            $user = Users::find(Auth::user()->id);
            $user->name = $request->name;
            $saveUser = $user->save();
    
           
            $user_info = userInfo::find($userid);
            $user_info->fullname = $request->fullname;
            $user_info->phone   = $request->phone;
            $user_info->address = $request->address;
            $user_info->sex = $request->sex;
            $user_info->birthday = $request->birthday;
            $saveUserInfo = $user_info->save();
            DB::commit();
            if ($saveUserInfo) {
                alert()->success('Cập nhật thông tin thành công', 'Successfully');
                return redirect()->route('backend.profile.index');
            }
        } catch (Exception $e) {
            DB::rollBack();
            
            throw new Exception($e->getMessage());
        }
    }

    public function changepassword(){
        return view('backend.main.profile.changepassword');
    }

    public function dataAjax(Request $request)
    {
    	$data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("users")
                    ->join('user_info','users.id','user_info.user_id')
            		->select("users.id as userid","fullname")
            		->where("fullname",'LIKE',"%$search%")
            		->get();
        }else{
            $data = DB::table("users")
            ->join('user_info','users.id','user_info.user_id')
            ->select("users.id as userid","fullname")
            ->get();
        }


        return response()->json($data);
    }

    public function updatepassword(ChangePasswordRequest $request)
    {
        dd(bcrypt($request->oldpassword));
        die;
        $userid = Auth::user()->id;
        $user = Users::find($userid);
        if($user->password != bcrypt($request->oldpassword)){
            return redirect()->route('backend.profile.changepassword')->withErrors("Mật khẩu cũ chưa đúng");
        }else{
            echo 'đúng rồi';
        }
    }

}
