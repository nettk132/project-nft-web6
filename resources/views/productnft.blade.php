<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NFT') }}
        </h2>
    </x-slot>

    @foreach ($nftdata as $nft)
        @if ($nft->nft_id == $id)
            <div class="nft-details">
                <div class="grid grid-cols-2 md:grid-cols-2 gap-6 lg:gap-8">
                    <h1 class="category">{{ $nft->catagory_name }}</h1>
                    <h1 class="name">{{ $nft->name }}</h1>
                    <div class="image-container">
                        <img src="{{ $nft->image }}" alt="{{ $nft->name }}" class="image">
                        <h1>Owned_by</h1>
                        <p>{{$nft->Owned_by}}</p>
                        <p>{{ $nft->desc_name }}</p>

                    </div>
                    <p style="font-size: 18px">{{ $nft->desc }}</p> <!-- แก้ไข style attribute -->







                    <hr>
                </div>

                <div class="buttons">
                    <a href="{{ route('nftid', ['id' => $nft->nft_id]) }}" class="btn btn-primary">รายละเอียด</a>
                    @if ($orderdata->where('nft_id', $nft->nft_id)->isNotEmpty())
                    <h1 >อยู่ในตะกร้า</h1>
                    @else
                    <form  method="POST" action="{{ route('orderstorecar') }}">
                    @csrf <!-- เพิ่ม CSRF token เพื่อความปลอดภัย -->
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <input type="hidden" name="nft_id" value="{{ $nft->nft_id }}">
                    <button>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 36 36"
                        width="36px"
                        height="36px"
                        >
                        <rect width="36" height="36" x="0" y="0" fill="#fdd835"></rect>
                        <path
                            fill="#e53935"
                            d="M38.67,42H11.52C11.27,40.62,11,38.57,11,36c0-5,0-11,0-11s1.44-7.39,3.22-9.59 c1.67-2.06,2.76-3.48,6.78-4.41c3-0.7,7.13-0.23,9,1c2.15,1.42,3.37,6.67,3.81,11.29c1.49-0.3,5.21,0.2,5.5,1.28 C40.89,30.29,39.48,38.31,38.67,42z"
                        ></path>
                        <path
                            fill="#b71c1c"
                            d="M39.02,42H11.99c-0.22-2.67-0.48-7.05-0.49-12.72c0.83,4.18,1.63,9.59,6.98,9.79 c3.48,0.12,8.27,0.55,9.83-2.45c1.57-3,3.72-8.95,3.51-15.62c-0.19-5.84-1.75-8.2-2.13-8.7c0.59,0.66,3.74,4.49,4.01,11.7 c0.03,0.83,0.06,1.72,0.08,2.66c4.21-0.15,5.93,1.5,6.07,2.35C40.68,33.85,39.8,38.9,39.02,42z"
                        ></path>
                        <path
                            fill="#212121"
                            d="M35,27.17c0,3.67-0.28,11.2-0.42,14.83h-2C32.72,38.42,33,30.83,33,27.17 c0-5.54-1.46-12.65-3.55-14.02c-1.65-1.08-5.49-1.48-8.23-0.85c-3.62,0.83-4.57,1.99-6.14,3.92L15,16.32 c-1.31,1.6-2.59,6.92-3,8.96v10.8c0,2.58,0.28,4.61,0.54,5.92H10.5c-0.25-1.41-0.5-3.42-0.5-5.92l0.02-11.09 c0.15-0.77,1.55-7.63,3.43-9.94l0.08-0.09c1.65-2.03,2.96-3.63,7.25-4.61c3.28-0.76,7.67-0.25,9.77,1.13 C33.79,13.6,35,22.23,35,27.17z"
                        ></path>
                        <path
                            fill="#01579b"
                            d="M17.165,17.283c5.217-0.055,9.391,0.283,9,6.011c-0.391,5.728-8.478,5.533-9.391,5.337 c-0.913-0.196-7.826-0.043-7.696-5.337C9.209,18,13.645,17.32,17.165,17.283z"
                        ></path>
                        <path
                            fill="#212121"
                            d="M40.739,37.38c-0.28,1.99-0.69,3.53-1.22,4.62h-2.43c0.25-0.19,1.13-1.11,1.67-4.9 c0.57-4-0.23-11.79-0.93-12.78c-0.4-0.4-2.63-0.8-4.37-0.89l0.1-1.99c1.04,0.05,4.53,0.31,5.71,1.49 C40.689,24.36,41.289,33.53,40.739,37.38z"
                        ></path>
                        <path
                            fill="#81d4fa"
                            d="M10.154,20.201c0.261,2.059-0.196,3.351,2.543,3.546s8.076,1.022,9.402-0.554 c1.326-1.576,1.75-4.365-0.891-5.267C19.336,17.287,12.959,16.251,10.154,20.201z"
                        ></path>
                        <path
                            fill="#212121"
                            d="M17.615,29.677c-0.502,0-0.873-0.03-1.052-0.069c-0.086-0.019-0.236-0.035-0.434-0.06 c-5.344-0.679-8.053-2.784-8.052-6.255c0.001-2.698,1.17-7.238,8.986-7.32l0.181-0.002c3.444-0.038,6.414-0.068,8.272,1.818 c1.173,1.191,1.712,3,1.647,5.53c-0.044,1.688-0.785,3.147-2.144,4.217C22.785,29.296,19.388,29.677,17.615,29.677z M17.086,17.973 c-7.006,0.074-7.008,4.023-7.008,5.321c-0.001,3.109,3.598,3.926,6.305,4.27c0.273,0.035,0.48,0.063,0.601,0.089 c0.563,0.101,4.68,0.035,6.855-1.732c0.865-0.702,1.299-1.57,1.326-2.653c0.051-1.958-0.301-3.291-1.073-4.075 c-1.262-1.281-3.834-1.255-6.825-1.222L17.086,17.973z"
                        ></path>
                        <path
                            fill="#e1f5fe"
                            d="M15.078,19.043c1.957-0.326,5.122-0.529,4.435,1.304c-0.489,1.304-7.185,2.185-7.185,0.652 C12.328,19.467,15.078,19.043,15.078,19.043z"
                        ></path>
                        </svg>
                        <span class="now">now!</span>
                        <span class="play">BUY</span>
                    </button>
                </form>
                @endif
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
            margin-left: auto;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);

        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

                button,button::after {
        padding: 10px 50px;
        font-size: 20px;
        border: none;
        border-radius: 5px;
        color: rgb(14, 14, 14);
        background-color: transparent;
        position: relative;
        }

        button::after {
        --move1: inset(50% 50% 50% 50%);
        --move2: inset(31% 0 40% 0);
        --move3: inset(39% 0 15% 0);
        --move4: inset(45% 0 40% 0);
        --move5: inset(45% 0 6% 0);
        --move6: inset(14% 0 61% 0);
        clip-path: var(--move1);
        content: 'BUYNOW';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: block;
        }

        button:hover::after {
        animation: glitch_4011 1s;
        text-shadow: 10 10px 10px black;
        animation-timing-function: steps(2, end);
        text-shadow: -3px -3px 0px #1df2f0, 3px 3px 0px #E94BE8;
        background-color: transparent;
        border: 3px solid rgb(0, 255, 213);
        }

        button:hover {
        text-shadow: -1px -1px 0px #1df2f0, 1px 1px 0px #E94BE8;
        }

        button:hover {
        background-color: transparent;
        border: 1px solid rgb(0, 255, 213);
        box-shadow: 0px 10px 10px -10px rgb(0, 255, 213);
        }

        @keyframes glitch_4011 {
        0% {
            clip-path: var(--move1);
            transform: translate(0px,-10px);
        }

        10% {
            clip-path: var(--move2);
            transform: translate(-10px,10px);
        }

        20% {
            clip-path: var(--move3);
            transform: translate(10px,0px);
        }

        30% {
            clip-path: var(--move4);
            transform: translate(-10px,10px);
        }

        40% {
            clip-path: var(--move5);
            transform: translate(10px,-10px);
        }

        50% {
            clip-path: var(--move6);
            transform: translate(-10px,10px);
        }

        60% {
            clip-path: var(--move1);
            transform: translate(10px,-10px);
        }

        70% {
            clip-path: var(--move3);
            transform: translate(-10px,10px);
        }

        80% {
            clip-path: var(--move2);
            transform: translate(10px,-10px);
        }

        90% {
            clip-path: var(--move4);
            transform: translate(-10px,10px);
        }

        100% {
            clip-path: var(--move1);
            transform: translate(0);
        }
        }



        .category {
            font-size: 25px;
        }

        p {
            margin-right: 10px;
        }
        .nft-details .category p,
        .nft-details .name p,
        .nft-details .buy-button p {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้กับกรอบข้อความที่อยู่ใกล้กับหมวดหมู่, ชื่อ, และปุ่มซื้อ */
        }

    </style>
</x-app-layout>
