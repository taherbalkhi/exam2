<?php

namespace App\Http\Controllers;

use App\Models\QBanck;
use Illuminate\Http\Request;

class QbanckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res = QBanck::where('status',1)->get();
        return view('qbanck.index',compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(QBanck $qBanck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QBanck $qBanck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QBanck $qBanck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QBanck $qBanck)
    {
        //
    }
}
