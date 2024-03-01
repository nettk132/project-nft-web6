<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NFT') }}
        </h2>
    </x-slot>
    <h1>game</h1>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                @foreach ($nftdata as $nft)
                @if ($nft->nft_id == $id)
                    <h1>{{ $nft->name }}</h1>
                    <img src="{{ $nft->image }}" alt="">
                    <h1>{{ $nft->catagory_name }}</h1>
                    <button>ซื้อ</button>
                @endif
            @endforeach

            </div>
        </div>
    </div>

</x-app-layout>

