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
                @if ($nft->catagory_name === 'game')
                    <h1>{{ $nft->name }}</h1>
                    <img src="{{ $nft->image }}" alt="">
                    <h1>{{ $nft->catagory_name }}</h1>
                    <a href="{{ route('nftid', ['id' => $nft->nft_id]) }}" class="btn btn-primary">รายละเอียด</a>
                @endif
            @endforeach
            </div>
        </div>
    </div>

    <h1>Art</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($nftdata as $nft)
                @if ($nft->catagory_name === 'Art')
                    <h1>{{ $nft->name }}</h1>
                    <img src="{{ $nft->image }}" alt="">
                    <h1>{{ $nft->catagory_name }}</h1>
                    <a href="{{ route('nftid', ['id' => $nft->nft_id]) }}" class="btn btn-primary">รายละเอียด</a>
                @endif
            @endforeach
            </div>
        </div>
    </div>

    <h1>photo</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($nftdata as $nft)
                @if ($nft->catagory_name === 'photo')
                    <h1>{{ $nft->name }}</h1>
                    <img src="{{ $nft->image }}" alt="">
                    <h1>{{ $nft->catagory_name }}</h1>
                    <a href="{{ route('nftid', ['id' => $nft->nft_id]) }}" class="btn btn-primary">รายละเอียด</a>
                @endif
            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
