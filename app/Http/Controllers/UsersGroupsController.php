<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Group;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;

class UsersGroupsController extends Controller
{
    public function index(){
        $this->data['groups'] = Group::all();
        return view('groups.group',$this->data);
    }
    public function create(){
        return view('groups.create');
    }
    public function store(Request $request){
        $formData = $request->all();
        if(Group::create($formData)){
            Session::flash('message','Group Created Successfully');
        }
        return redirect()->to('groups');
    }
    public function destroy($id){
        if(Group::find($id)->delete()){
            Session::flash('message','Group Deleted Successfully');
        }
        return redirect()->to('groups');
    }
}
