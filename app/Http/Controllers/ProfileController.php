<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role as Roles;
use App\Models\User_info as userInfo;
use App\User as Users;
use Alert;
use DB;
use Auth;

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
        return view('backend.main.profile.editprofile');
    }

    public function changepassword(){
        return view('backend.main.profile.changepassword');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles  =  Roles::where('status', 1)
            ->get();

        return view('backend.main.staffs.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
    DB::beginTransaction();
    try {
        $user = new Users();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $saveUser = $user->save();

        $user_info = new userInfo();
        $user_info->fullname = $request->fullname;
        $user_info->phone   = $request->phone;
        $user_info->role_id = $request->roleid;
        $user_info->address = $request->address;
        $user_info->sex = $request->sex;
        $user_info->birthday = $request->birthday;
        $user_info->status = $request->status;
        $user_info->user_id = $user->id;
        $saveUserInfo = $user_info->save();
        DB::commit();
        if ($saveUserInfo) {
            alert()->success('Thêm nhân viên thành công', 'Successfully');
            return redirect()->route('backend.user.index');
        }
    } catch (Exception $e) {
        DB::rollBack();
        
        throw new Exception($e->getMessage());
    }

       

        // } catch (Exception $e) {
        //     DB::rollBack();

        //     throw new Exception($e->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::find($id);
        // dd($user);
        return view('backend.main.staffs.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $roles = Roles::where('status', 1)
        ->get();
        $user = Users::find($id);
        // dd($id);
        return view('backend.main.staffs.users.edit',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request)
    { 
       
        DB::beginTransaction();
        try {
            $user = Users::find($request->id);
            $user_info = userInfo::where('user_id', '=', $user->id)->firstOrFail();
            $userid = $user_info->id;

            $user = Users::find($request->id);
            $user->name = $request->name;
            $saveUser = $user->save();
    
           
            $user_info = userInfo::find($userid);
            $user_info->fullname = $request->fullname;
            $user_info->phone   = $request->phone;
            $user_info->role_id = $request->roleid;
            $user_info->address = $request->address;
            $user_info->sex = $request->sex;
            $user_info->birthday = $request->birthday;
            $user_info->status = $request->status;
            $saveUserInfo = $user_info->save();
            DB::commit();
            if ($saveUserInfo) {
                alert()->success('Cập nhật nhân viên thành công', 'Successfully');
                return redirect()->route('backend.user.index');
            }
        } catch (Exception $e) {
            DB::rollBack();
            
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Thêm số lượng sản phẩm
    public function addmore($id)
    {
        return view('backend.main.users.addmore');
    }

    public function search(Request $request){
        
        $email     = $request->email;
        $roleid    = $request->roleid;
        
        
        $roles = Roles::where('status', 1)
                ->get();
        if($request->roleid == -1){
            $users =  DB::table('user_info')
            ->join('users', 'user_info.user_id', '=', 'users.id')
            ->join('roles', 'user_info.role_id', '=', 'roles.id')
            ->select('user_info.fullname','roles.name','users.email','user_info.phone','roles.status as rolestatus','users.id as id','user_info.status as userstatus')
            ->where('users.email','LIKE',"%$request->email%")
            ->paginate(5);
        }else{
            // echo " Tồn tại role";
            // die;
            $users =  DB::table('user_info')
            ->join('users', 'user_info.user_id', '=', 'users.id')
            ->join('roles', 'user_info.role_id', '=', 'roles.id')
            ->select('user_info.fullname','roles.name','users.email','user_info.phone','roles.status as rolestatus','users.id as id','user_info.status as userstatus')
            ->where([
                ['users.email','LIKE',"%$request->email%"],
                ['user_info.role_id',$roleid],
            ])
            ->paginate(5);
        }
        // dd($users);
        // if(empty($fullname)){
        //     echo 'empty';
        // }


        
         $users->appends(['roleid' => $request->roleid]);
         return view('backend.main.staffs.users.index',compact('users','roleid','email','roles'));
    }

   

    public function changestatus(Request $request){
        $user = Users::find($request->id);
        $userstatus = $user->userInfo->status;
        if($userstatus == 1){
            $changestatus = 0;
        }else{
            $changestatus = 1;
        }
        $user = Users::find($request->id);
        $user_info = userInfo::where('user_id', '=', $user->id)->firstOrFail();
        $userid = $user_info->id;
        $user_info->status = $changestatus;
        $saveUserInfo = $user_info->save();
        if ($saveUserInfo) {
            $user = Users::find($request->id);
            alert()->success('Thay đổi trạng thái thành công', 'Successfully');
            return view('backend.main.staffs.users.show',compact('user'));
        }
    }
}
