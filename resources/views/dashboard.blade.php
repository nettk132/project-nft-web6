<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to Web NFT
        </h2>
    </x-slot>

    <div class="py-12 text-center">
        <h1 class="text-5xl mb-6 font-bold">Welcome to Web NFT</h1>
        <img src="https://media.discordapp.net/attachments/1036083622400233501/1213234316163817554/379961713_871375617664730_1485444727757880112_n.png?ex=65f4bb81&is=65e24681&hm=a293a7684db164b76790df9187a044d4425e5c24e762af2230a3c88fd1dca9ec&=&format=webp&quality=lossless&width=625&height=625" alt="" style="display: block; margin: auto; width: 500px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="button-container">
            <a href="{{ route('nftdata') }}" class="cssbuttons-io-button">
                Get started
                <div class="icon">
                    <svg
                        height="24"
                        width="24"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>

<style>
    .cssbuttons-io-button {
        background: #464d92;
        color: white;
        font-family: inherit;
        padding: 0.35em 3em; /* ปรับความยาวโดยกำหนดค่า padding-left และ padding-right */
        font-size: 17px;
        font-weight: 500;
        border-radius: 0.9em;
        border: none;
        letter-spacing: 0.05em;
        display: flex;
        align-items: center;
        box-shadow: inset 0 0 1.6em -0.6em #2b3167;
        overflow: hidden;
        position: relative;
        height: 2.8em;
        cursor: pointer;
        text-decoration: none; /* เพิ่มเพื่อไม่ให้มี underline บนลิงก์ */
    }

    .button-container {
        display: flex;
        justify-content: center; /* จัดให้ปุ่มอยู่ตรงกลางตามแนวนอน */
        align-items: center; /* จัดให้ปุ่มอยู่ตรงกลางตามแนวตั้ง */
        margin-top: 20px; /* กำหนดระยะห่างด้านบน */
    }

    .cssbuttons-io-button .icon {
        background: white;
        margin-left: 1em;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 2.2em;
        width: 2.2em;
        border-radius: 0.7em;
        box-shadow: 0.1em 0.1em 0.6em 0.2em #7b52b9;
        right: 0.3em;
        transition: all 0.3s;
    }

    .cssbuttons-io-button:hover .icon {
        width: calc(100% - 0.6em);
    }

    .cssbuttons-io-button .icon svg {
        width: 1.1em;
        transition: transform 0.3s;
        color: #7b52b9;
    }

    .cssbuttons-io-button:hover .icon svg {
        transform: translateX(0.1em);
    }

    .cssbuttons-io-button:active .icon {
        transform: scale(0.95);
    }
</style>
