<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateUserEmailRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Task;
use App\User;
use Session;

class PanelController extends Controller
{
    public function panelTasks(){
    	$tasks = Task::latest()->get();
    	return view('tasks')->with('tasks', $tasks);
    }

    public function panelCreateTasks(){
    	return view('create');
    }

    public function panelLists(){
    	$users = User::latest()->get();
    	return view('lists')->with('users', $users);
    }

    public function panelSettings($id){
    	$user = User::findOrFail($id);
        return view('settings')->with('user', $user);
    }

    public function panelUpdateSettings($id, UpdateUserRequest $request){
        $user = User::findOrFail($id);
        $user->update($request->all());
        Session::flash('name_changed', 'Name has been changed!');
        return redirect("settings/$id");
    }

    public function panelUpdateEmailSettings($id, UpdateUserEmailRequest $request){
    	$user = User::findOrFail($id);
    	$user->update($request->all());
    	Session::flash('email_changed', 'Email has been changed!');
    	return redirect("settings/$id");
    }

    public function panelUpdatePasswordSettings($id, UpdateUserPasswordRequest $request){
    	$user = User::findOrFail($id);
    	$user->password = Hash::make($request->input('password'));
    	$user->save();
    	Session::flash('password_changed', 'Password has been changed!');
    	return redirect("settings/$id");
    }
}

