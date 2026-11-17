<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\HabitRequest;
use App\Models\Habit; 
use App\Models\HabitLog;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HabitController extends Controller
{

    public function index()
    {

        $habits = Auth::user()->habits;
        return view('dashboard', compact('habits'));
    }


    /**
     * Display a listing of the resource.
     */
    public function create(): View
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();
        
            Auth::user()->habits()->create($validated);

        return redirect()
            ->route('habits.index')
            ->with('success', 'Hábito criado com sucesso!');
    
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
    public function edit(Habit $habit)
    {
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if($habit->user_id !== Auth::user()->id){
            abort(403, 'Sem permissão!');
        }

        $habit->update($request->all());

        return redirect()
            ->route('habits.index')
            ->with('success', 'Hábito atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if($habit->user_id !== Auth::user()->id){
            abort(403, 'Sem permissão!');
        }

        $habit->delete();

        return redirect()
            ->route('habits.index')
            ->with('success', 'Hábito removido com sucesso!');
            
    }

    public function settings(): View
    {

        $habits = Auth::user()->habits;
        return view('habits.settings', compact('habits'));

    }

    // public function toggle(Habit $habit){

    //     if($habit->user_id !== Auth::user()->id){
    //         abort(403, 'Sem permissão!');
    //     }

    //     $today = Carbon::today()->toDateString();

    //     $log = HabitLog::query()
    //         ->where('habit_id', $habit->id)
    //         ->where('completed_at', $today)
    //         ->first();

    //     if($log){
    //         $log->delete();
    //         $message = "Hábito desmarcado.";

    //     }else{
    //         HabitLog::create([
    //             'habit_id' => $habit->id,
    //             'completed_at' => $today 
    //         ]);

    //         $message = "Hábito concluído.";
    //     }

    //     return redirect()
    //         ->route('habits.index')
    //         ->with('success', $message);
    // }
}
