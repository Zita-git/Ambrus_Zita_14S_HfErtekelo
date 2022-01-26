<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;
use App\Http\Requests\HomeworkRequest;

class HomeworkController extends Controller
{
    public function index()
    {
        $homeworks = Homework::orderBy('name')->get();
        return view('homeworks.index', [ 'homeworks' => $homeworks ]);
    }

    public function create()
    {
        return view('homeworks.create');
    }

    public function store(HomeworkRequest $request)
    {
        $adatok = $request->only(['name','task','url','points','message']);
        $homework = new Homework();
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homeworks.index');
    }

    public function show($id)
    {
        $homework = Homework::find($id);
        return view('homeworks.show', ['homework' => $homework]);
    }

    public function edit($id)
    {
        $homework = Homework::find($id);
        return view('homeworks.edit', ['homework' => $homework]);
    }

    public function update(HomeworkRequest $request, Homework $homework)
    {
        $adatok = $request->only(['name','task','url','points','message']);
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homeworks.show', $homework->id);
    }

    
    public function destroy(Homework $homework)
    {
        $homework->delete();
        return redirect()->route('homeworks.index');
    }
}
