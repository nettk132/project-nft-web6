<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Http\Requests\StoreaddressRequest;
use App\Http\Requests\UpdateaddressRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class AddressController extends Controller
{
    /** @param  array<string, string>  $input
     * Display a listing of the resource.
     */
    public function index()
    {
        $addressdata = address::join('users', 'addresses.address_id', '=', 'users.address_id')
        ->select('addresses.*', 'users.*')
        ->get();
        return view('Address', compact('addressdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $address =new address();
        $address->province =$request->province;
        $address->disctrict =$request->disctrict;
        $address->address_1 =$request->address_1;
        $address->save();
        return redirect()->route('nftdata');
    }

    /**
     * Display the specified resource.
     */
    public function show(address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateaddressRequest $request, address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(address $address)
    {
        //
    }
}
