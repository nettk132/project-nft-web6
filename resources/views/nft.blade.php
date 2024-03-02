<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function submitData(nft_id) {
    var formData = new FormData();
    formData.append('nft_id', nft_id);
    formData.append('user_id', '{{ Auth::id() }}');

    // ส่งคำขอ POST ไปยังเซิร์ฟเวอร์ Laravel ผ่าน AJAX
    $.ajax({
        type: "POST",
        url: "{{ route('Addorder') }}",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            alert('การสั่งซื้อสำเร็จ!');
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NFT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <h1>Game</h1>
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
                                        <button onclick="submitData('{{ $nft->nft_id }}')">สั่งซื้อ</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>


        <div class="py-12">
            <h1>Art</h1>
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
                                            <button onclick="submitData('{{ $nft->nft_id }}')">สั่งซื้อ</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="py-12">
                <h1 style="text-align: center; color: #333; font-size: 24px;">รูปภาพ</h1>
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
                                                <button onclick="submitData('{{ $nft->nft_id }}')" style="font-size: 14px;">สั่งซื้อ</button>
                                            </div>
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
    padding: 20px; /* Add padding to move content away from screen edges */
}


.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 30px;
}

.image-container {
    height: 250px; /* Set a fixed height for the image container */
    overflow: hidden;
}

.nft-card {
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
}

.nft-card img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
    object-fit: cover;

}

.content {
    padding: 20px;
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
    justify-content: space-between;
}

.buttons a,
.buttons button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.buttons a {
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


</style>

