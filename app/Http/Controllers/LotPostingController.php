<?php

namespace App\Http\Controllers;

use App\Models\LotPosting;
use Illuminate\Http\Request\LotPostingRequest;

class LotPostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lot_posting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LotPostingRequest $lotPostingRequest, LotPosting $lotPosting)
    {
        $posting = $lotPosting::create($lotPostingRequest->all());
        return response()->json(['message' => 'Lot Posting has been successfully saved', 'data' => $posting]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lot_posting  $lot_posting
     * @return \Illuminate\Http\Response
     */
    public function show(lot_posting $lot_posting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lot_posting  $lot_posting
     * @return \Illuminate\Http\Response
     */
    public function edit(lot_posting $lot_posting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lot_posting  $lot_posting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lot_posting $lot_posting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lot_posting  $lot_posting
     * @return \Illuminate\Http\Response
     */
    public function destroy(lot_posting $lot_posting)
    {
        //
    }
}
