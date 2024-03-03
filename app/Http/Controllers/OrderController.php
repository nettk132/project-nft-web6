<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use Illuminate\Support\Facades\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$orderdata = Order::all();

        return view('order', compact('orderdata'));*/
        $orderdata = Order::join('users', 'orders.user_id', '=', 'users.id')
        ->join('nfts', 'orders.nft_id', '=', 'nfts.nft_id')
        ->select('orders.*', 'users.*', 'nfts.*')
        ->get();
        return view('Order', compact('orderdata'));
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

    public function store(StoreorderRequest $request,order $order)
    {
        $orderdata = Order::join('users', 'orders.user_id', '=', 'users.id')
        ->join('nfts', 'orders.nft_id', '=', 'nfts.nft_id')
        ->select('orders.*', 'users.*', 'nfts.*')
        ->get();

        $validatedData = $request->validate([
            'user_id' => 'required',
            'nft_id' => 'required',
        ]);

        $order = Order::create([
            'user_id' => $validatedData['user_id'],
            'nft_id' => $validatedData['nft_id'],
            // สามารถเพิ่มฟิลด์อื่น ๆ ตามต้องการได้
        ]);
    return view('order', compact('orderdata'));
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order,$id)
    {
       // ค้นหาคำสั่งซื้อโดยใช้ ID
    $order = Order::findOrFail($id);

    // ตรวจสอบว่าผู้ใช้ที่ล็อกอินเข้าถึงคำสั่งซื้อเป็นเจ้าของหรือไม่
    if ($order->user_id === auth()->id()) {
        // ลบคำสั่งซื้อ
        $order->delete();

        // ส่งกลับการสำเร็จและข้อความที่ต้องการ
        return redirect()->route('order')->with('success', 'Order deleted successfully');
    } else {
        // ถ้าไม่ใช่เจ้าของคำสั่งซื้อ
        return redirect()->route('order')->with('error', 'You are not authorized to delete this order');
    }
    }
}
