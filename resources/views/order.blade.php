<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-3xl font-bold mb-6">Your Orders</h2>
                @foreach ($orderdata as $order)
                    @if ($order->user_id === auth()->id())
                    <div class="border rounded-lg p-4 mb-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="{{ $order->image }}" alt="{{ $order->name }}" class="mr-4 rounded-lg" style="width: 200px; height: 200px;">
                            <div>
                                <h3 class="text-xl font-bold mb-2">{{ $order->name }}</h3>
                                <p class="text-gray-600 mb-2">Owned by: {{ $order->Owned_by }}</p>
                                <p class="text-gray-600 mb-2">Price: ${{ $order->price }}</p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('order.destroy',['id' => $order->nft_id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Cancel Order</button>
                        </form>
                    </div>

                    @endif
                @endforeach
                <div class="py-4 flex justify-end">
                    <a href="{{ route('address') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Proceed to Payment</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>


<style>

/* ระยะห่างระหว่างรายการสินค้า */
.divider {
    border-bottom: 1px solid #e5e7eb;
    margin-bottom: 1.5rem;
}

/* สไตล์ปุ่มยกเลิกสินค้า */
.cancel-button {
    background-color: #EF4444;
    color: #ffffff;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.cancel-button:hover {
    background-color: #DC2626;
}

/* สไตล์ลิงก์จ่ายเงิน */
.payment-link {
    background-color: #3B82F6;
    color: #ffffff;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.payment-link:hover {
    background-color: #2563EB;
}

</style>
