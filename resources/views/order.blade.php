<x-app-layout>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @foreach ( $orderdata as $order )
                    @if ($order->user_id === auth()->id())
                    <h1>{{$order->name}}</h1>
                    <h1>{{$order->Owned_by}}</h1>
                    <h1>{{$order->price}}</h1>
                    <img src="{{ $order->image }}" alt="">
                    <form method="POST" action="{{ route('order.destroy',['id' => $order->nft_id])}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">ยกเลิกสินค้า</button>
                    </form>
                    @endif
                    @endforeach
                            </div>
                        </div>
                    </div>
</x-app-layout>
