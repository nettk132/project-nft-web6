<?php

namespace App\Http\Controllers;

use App\Models\nft;
use App\Http\Requests\StorenftRequest;
use App\Http\Requests\UpdatenftRequest;

class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nftdata = nft::all();
        return view('nft', compact('nftdata'));
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
    public function store(StorenftRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(nft $nft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenftRequest $request, nft $nft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nft $nft)
    {
        //
    }
}
