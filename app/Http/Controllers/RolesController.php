<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JsValidator;
use App\Http\Requests\StoreRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use App\Models\Role as role;
use Alert;
class RolesController extends Controller
{   
    public function overview(){
        return view('backend.main.staffs.roles.overview');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(3);
        return view('backend.main.staffs.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.main.staffs.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request`
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesRequest $request)
    {
        $role = role::where('name','=',"$request->name")->get();
        // echo '<pre>';
        // print_r($role);
        // echo '</pre>';
        // die;
        // if(count($role) > 0){
        //     echo 'Tồn tại';
        // }else{
        //     echo 'Không tồn tại';
        // }
        // die;
        $role = new Role;
        $role->name = $request->name;
        $role->status = $request->status;
        $role->description = $request->description;
        $role->save();
        alert()->success('Thêm chức vụ thành công', 'Successfully');
        return redirect()->route('backend.role.index');
        // die;
        // return route('backend.role.create')
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.main.staffs.roles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        $role = role::find($id);
       
        return view('backend.main.staffs.roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolesRequest $request)
    {
        $role = role::find($request->id);
        $role->name = $request->name;
        $role->status = $request->status;
        $role->description = $request->description;
        $role->save();
        alert()->success('Sửa chức vụ thành công', 'Successfully');
        return redirect()->route('backend.role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        role::destroy($id);
        alert()->success('Xóa chức vụ thành công', 'Successfully');
        return redirect()->route('backend.role.index');
    }

    // Tìm kiếm chức vụ
    public function search(Request $request)
    {   
        $result  = $request->name;
        $roles = role::where('name','like',"%$request->name%")
                 ->paginate(3);
         $roles->appends(['name' => $request->name]);

        // echo '<pre>';
        // print_r($roles);
        // echo '</pre>';
       return view('backend.main.staffs.roles.index',compact('roles','result'));
    }

}
