<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;

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
        return view('order', compact('orderdata'));
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
        return redirect()->route('nftdata');
    //return view('order', compact('orderdata'));
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
    public function destroy(order $order, $nft_id)
    {
        $order = Order::where('user_id', auth()->id())->findOrFail($nft_id);
        // ค้นหาคำสั่งซื้อโดยใช้ ID
        Log::info($order);
        // เช็คว่า user_id ของคำสั่งซื้อตรงกับผู้ใช้ที่เข้าสู่ระบบหรือไม่
        if ($order->user_id === auth()->id()) {
            // ลบคำสั่งซื้อ
            $order->delete();
            // ส่งกลับการสำเร็จและข้อความที่ต้องการ
            return redirect()->route('order');
        } else {
            // ถ้าไม่ตรงกัน ส่งกลับผู้ใช้กลับไปที่หน้าที่เหมาะสม หรือส่งข้อความแจ้งเตือน
            return redirect()->back()->with('error', 'You are not authorized to delete this order.');
        }
    }

}
