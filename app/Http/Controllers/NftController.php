<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\nft;
use App\Models\catagories;
use App\Http\Requests\StorenftRequest;
use App\Http\Requests\UpdatenftRequest;

class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nftdata = nft::join('catagories','catagories.catagory_id','=','nfts.catagory_id')
        ->select('nfts.*','catagory_name')
        ->get();
        $orderdata = Order::join('users', 'orders.user_id', '=', 'users.id')
        ->join('nfts', 'orders.nft_id', '=', 'nfts.nft_id')
        ->select('orders.*', 'users.*', 'nfts.*')
        ->get();
        return view('nft', compact('nftdata', 'orderdata'));
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
    public function show(nft $nft , $id)
    {
        $orderdata = Order::join('users', 'orders.user_id', '=', 'users.id')
        ->join('nfts', 'orders.nft_id', '=', 'nfts.nft_id')
        ->select('orders.*', 'users.*', 'nfts.*')
        ->get();
        
        $nftdata = nft::join('catagories','catagories.catagory_id','=','nfts.catagory_id')
        ->select('nfts.*','catagory_name')
        ->get();
    return view('productnft', compact('nftdata','id','orderdata'));
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
