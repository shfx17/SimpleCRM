<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreateTaskRequest;
use App\Task;
use App\User;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {   
        $tasks = Task::latest()->get();
        return view('home')->with('tasks', $tasks);
    }

    public function show($id){
        $task = Task::findOrFail($id);
        return view('show')->with('task', $task);
    }

    public function create(){
        return view('create');
    }

    public function store(CreateTaskRequest $request){
        Task::create($request->all());
        Session::flash('task_added', 'Task has been added!');
        return redirect('home');
    }

    public function edit($id){
        $task = Task::findOrFail($id);
        return view('edit')->with('task', $task);
    }

    public function update($id, CreateTaskRequest $request){
        $task = Task::findOrFail($id);
        $task->update($request->all());
        Session::flash('task_changed', 'Task has been changed!');
        return redirect('home');
    }
}
