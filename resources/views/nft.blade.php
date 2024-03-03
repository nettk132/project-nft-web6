<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NFT') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <h1 style="text-align: center; color: #333; font-size: 24px;">Game</h1>
            <div class="nft-container">
                <div class="grid-container">
                    @foreach ($nftdata as $nft)
                        @if ($nft->catagory_name === 'game')
                            <div class="nft-card">
                                <div class="image-container">
                                    <img src="{{ $nft->image }}" alt="">
                                </div>
                                <div class="content">
                                    <h2>{{ $nft->name }}</h2>
                                    <p>{{  $nft->creator}}</p>
                                    <p>{{ $nft->catagory_name }}</p>
                                    <div class="buttons">
                                        <a href="{{ route('nftid', ['id' => $nft->nft_id]) }}" class="btn btn-primary">รายละเอียด</a>
                                        <form method="POST" action="{{ route('orderstorecar') }}">
                                            @csrf <!-- เพิ่ม CSRF token เพื่อความปลอดภัย -->
                                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                            <input type="hidden" name="nft_id" value="{{ $nft->nft_id }}">
                                                <button type="submit" class="submit">
                                                    <i class="text-white fa-solid fa-cart-plus"></i>
                                                </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>


        <div class="py-12">
            <h1 style="text-align: center; color: #333; font-size: 24px;">Art</h1>
                <div class="nft-container">
                    <div class="grid-container">
                        @foreach ($nftdata as $nft)
                            @if ($nft->catagory_name === 'Art')
                                <div class="nft-card">
                                    <div class="image-container">
                                        <img src="{{ $nft->image }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h2>{{ $nft->name }}</h2>
                                        <p>{{  $nft->creator}}</p>
                                        <p>{{ $nft->catagory_name }}</p>
                                        <div class="buttons">
                                            <a href="{{ route('nftid', ['id' => $nft->nft_id]) }}" class="btn btn-primary">รายละเอียด</a>
                                            @if ()

                                            @endif
                                            <form method="POST" action="{{ route('orderstorecar') }}">
                                                @csrf <!-- เพิ่ม CSRF token เพื่อความปลอดภัย -->
                                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                <input type="hidden" name="nft_id" value="{{ $nft->nft_id }}">
                                                    <button type="submit" class="submit">
                                                        <i class="text-white fa-solid fa-cart-plus"></i>
                                                    </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="py-12">
                <h1 style="text-align: center; color: #333; font-size: 24px;">Photo</h1>
                    <div class="nft-container">
                        <div class="grid-container">
                            @foreach ($nftdata as $nft)
                                @if ($nft->catagory_name === 'photo')
                                    <div class="nft-card">
                                        <div class="image-container">
                                            <img src="{{ $nft->image }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h2 style="font-size: 18px;">{{ $nft->name }}</h2>
                                            <p style="font-size: 16px;">{{  $nft->creator}}</p>
                                            <p style="font-size: 16px;">{{ $nft->catagory_name }}</p>
                                            <div class="buttons">
                                                <a href="{{ route('nftid', ['id' => $nft->nft_id]) }}" class="btn btn-primary" style="font-size: 14px;">รายละเอียด</a>
                                                <form method="POST" action="{{ route('orderstorecar') }}">
                                                    @csrf <!-- เพิ่ม CSRF token เพื่อความปลอดภัย -->
                                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                    <input type="hidden" name="nft_id" value="{{ $nft->nft_id }}">
                                                        <button type="submit" class="submit">
                                                            <i class="text-white fa-solid fa-cart-plus"></i>
                                                        </button>
                                                </form>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
            </div>

</div>


</x-app-layout>

<style>
.nft-container {
    display: flex;
    justify-content: center;
    padding: 20px;
}


.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 30px;
}

.image-container {
    height: 250px;
    overflow: hidden;

}



.nft-card {
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}
.nft-card img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* ปรับขนาดรูปภาพให้เต็มความสูงและความกว้างของคอนเทนเนอร์ */
}


.content {
    padding: 20px;
    flex-grow: 1;
}

.content h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.nft-card h1 {
    font-size: 20px;
    margin-bottom: 10px;
}

.content p {
    font-size: 16px;
    color: #666;
    margin-bottom: 10px;
}

.nft-card button {
    padding: 10px 20px;
    background-color: #0fa31d;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.nft-card button:hover {
    background-color: #208647;
}

.buttons {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;

}

.buttons a,
.buttons button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    width: 100%;
    box-sizing: border-box;
}


.buttons a {
    text-align: center;
    background-color: #007bff;
    color: #fff;
}

.buttons button {
    background-color: #0fa31d;
    color: #fff;
}

.buttons a:hover{
    background-color: #0e4885;
}

.buttons button:hover {
    background-color: #077220;
}

h1{
    margin-left: 20px;
    font-size: 25px;
}

.btn{
    padding: 10px 0; /* เพิ่ม Padding ด้านบนและด้านล่างของ .buttons */
    display: flex;
    flex-direction: column; /* แสดงเนื้อหาในคอลัมน์เดียวกัน */
    align-items: center; /* จัดเนื้อหาให้ตรงกลางของพื้นที่ปุ่ม */
    margin-top: auto; /* ขยับ .buttons ไปที่ขอบล่างของ .nft-card */
}
</style>

