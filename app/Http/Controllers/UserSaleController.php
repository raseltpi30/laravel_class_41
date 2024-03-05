<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserSaleController extends Controller
{
    public function index($id){
        $this->data['user'] = User::findOrFail($id);
        // return $this->data['sales'] = $user->sales;
        $this->data['tab_menu'] = 'sales';
        return view('users.sales.sales',$this->data);
    }
}
