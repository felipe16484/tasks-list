<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tasks = DB::table('tasks')->where('user_id',Auth::user()->id)->orderBy('expiration_date','desc')->paginate(10);

        return view('index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'expiration_date' => 'required'
        ]);

        Task::create($request->all());
        
        $email = new ContactController();
        $email->send($request);

        return redirect()->route('tasks.index')->with('success','¡La tarea ha sido creada satisfactoriamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task): View
    {
        return view('edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'expiration_date' => 'required'
        ]);

        if($request->status == 'Completada'){
            $email = new ContactController();
            $email->send($request);
        }

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success','¡La tarea ha sido actualizada satisfactoriamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success','¡La tarea ha sido eliminada satisfactoriamente!');
    }
}
