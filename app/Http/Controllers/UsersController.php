<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role as Roles;
use App\Models\User_info as userInfo;
use App\User as Users;
use App\Http\Requests\StoreUsersRequest;
use Alert;

class UsersController extends Controller
{   
    public function overview(){
        return view('backend.main.staffs.users.overview');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::with(['userInfo','roles'])
                ->paginate(10);
        // foreach ($users as $value) {
        //     $value['name_role'] = $value->roles->;
        // }
        //    echo '<pre>';
        // print_r($users);
        // echo '</pre>';
        // die;
        return view('backend.main.staffs.users.index',compact('users'));
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
     
       return view('backend.main.staffs.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        //   echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // die;

        $user = new Users();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->email); 
        $saveUser = $user->save();

        $user_info = new User_info(); 
        $user_info->fullname = $request->fullname;
        $user_info->phone = $request->phone;
        $user_info->role_id = $request->roleid;
        $user_info->address = $request->address;
        $user_info->sex = $request->sex;
        $user_info->birthday = $request->birthday;
        $user_info->status = $request->status;
        $user_info->user_id = $user->id;
        $saveUserInfo = $user_info->save();
        if($saveUserInfo){
            alert()->success('Thêm nhân viên thành công', 'Successfully');
            return redirect()->route('backend.user.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.main.staffs.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.main.staffs.users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
