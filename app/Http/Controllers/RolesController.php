<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JsValidator;
use App\Http\Requests\StoreRolesRequest;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesRequest $request)
    {
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
        return view('backend.main.staffs.roles.edit');
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

    // Tìm kiếm chức vụ
    public function search(Request $request)
    {   

        $roles = role::where('name','like',"%$request->name%")->paginate(3)->setpath(''); // => Xem lại code
        // echo '<pre>';
        // print_r($roles);
        // echo '</pre>';
       return view('backend.main.staffs.roles.index',compact('roles'));
    }

}
