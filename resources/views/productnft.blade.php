<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NFT') }}
        </h2>
    </x-slot>

    @foreach ($nftdata as $nft)
        @if ($nft->nft_id == $id)
            <div class="nft-details">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <h1 class="category">{{ $nft->catagory_name }}</h1>
                    <h1 class="name">{{ $nft->name }}</h1>
                    <div class="image-container">
                        <img src="{{ $nft->image }}" alt="{{ $nft->name }}" class="image">
                    </div>
                    <p style="font-size: 18px">{{ $nft->desc }}</p> <!-- แก้ไข style attribute -->
                    <p>{{ $nft->desc_name }}</p>
                    <hr>
                </div>
                <button class="buy-button">ซื้อ</button>
            </div>
        @endif
    @endforeach

    <style>
        .nft-details {
            text-align: center;
            margin-top: 20px;
        }

        .category {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .name {
            font-size: 28px;
            color: #222;
            margin-bottom: 10px;
        }

        .image-container {
            max-width: 500px; /* Set a fixed width for the image container */
            margin: 0 auto;
            margin-left: 70px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .buy-button {
            padding: 10px 20px;
            margin: 10px auto; /* แก้ไขการจัดวางปุ่มให้อยู่ตรงกลาง */
            font-size: 18px;
            background-color: #0fa31d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buy-button:hover {
            background-color: #0056b3;
        }

        .category {
            font-size: 25px;
        }

        p {
            margin-right: 10px;
        }
    </style>
</x-app-layout>
