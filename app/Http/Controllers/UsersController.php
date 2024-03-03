<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Group;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['users'] = User::all();
        return view('users.user',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $groups = Group::all();
        // $this->data['groups'] = [];
        // foreach($groups as $group){
        //     $this->data['groups'][$group->id] = $group->title;
        // }
        $this->data['groups'] = Group::arrayForSelect();
        return view('users.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $formData = $request->all();
        if(User::create($formData)){
            Session::flash('message','Users Created Successfully');
        }
        return redirect()->to('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->data['user'] = User::findOrFail($id);
        $this->data['groups'] = Group::arrayForSelect();
        return view('users.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        
        $user = User::find($id);
        $user->group_id = $data['group_id'];
        $user->name = $data['name'];    
        $user->email = $data['email'];    
        $user->phone = $data['phone'];   
        $user->address = $data['address'];   
        $user->password = $data['password'];   
        $user->save();

        if($user->save()){
            Session::flash('message','User Data Update Successfully');
        }
        return redirect()->to('users');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        if(User::find($id)->delete()){
            Session::flash('message','Users Deleted Successfully');
        }
        return redirect()->to('users');
    }
}
