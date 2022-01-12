<?php

namespace App\Http\Controllers;

use App\Models\Boardroom;
use Illuminate\Http\Request;

class BoardroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $paginationTheme = "bootstrap";
    public function index()
    {
        $boardrooms = Boardroom::orderBy('id','desc')
            ->paginate();
        return view('index', compact('boardrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $visitor = Boardroom::create($request->all());
        return redirect()->route('boardroom.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boardroom  $boardroom
     * @return \Illuminate\Http\Response
     */
    public function show(Boardroom $boardroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boardroom  $boardroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Boardroom $boardroom)
    {
        return view('edit', compact('boardroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boardroom  $boardroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boardroom $boardroom)
    {
        $boardroom->update($request->all());
        return redirect()->route('boardroom.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boardroom  $boardroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boardroom $boardroom)
    {
        $boardroom->delete();
        return redirect()->route('boardroom.index');
    }
}
