<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Components\ImagePathController;
use App\Http\Requests\StoreTrenerRequest;
use App\Http\Requests\UpdateTrenerRequest;
use App\Models\Trener;

class TrenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treners = Trener::all();
        return view('treners.index', compact('treners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrenerRequest $request)
    {
        $trener = new Trener();
        $trener->name = $request->name;
        $trener->image = ImagePathController::getPath($request);
        $trener->rank = $request->rank;
        $trener->description = $request->description;
        $trener->contacts = $request->contacts;

        $trener->save();

        return redirect()->route('treners.index')->with('Тренер был добавлен!');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trener $trener)
    {
        return view('treners.show', compact('trener'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trener $trener)
    {
        return view('treners.edit', compact('trener'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($trenerId, UpdateTrenerRequest $request)
    {
        $trener = Trener::find($trenerId);
        $trener->name = $request->name;
        $trener->image = ImagePathController::getPath($request);
        $trener->rank = $request->rank;
        $trener->description = $request->description;
        $trener->contacts = $request->contacts;

        $trener->save();

        return redirect()->route('treners.index')->with('Запись тренер был обнавлен!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trener $trener)
    {
        $trener->delete();
        return redirect()->route('treners.index')->with('success', 'Запись успешна удалена!');
    }
}
