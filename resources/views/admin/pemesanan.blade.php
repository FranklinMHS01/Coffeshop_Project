@php
    use Illuminate\Support\Facades\Crypt;
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('components.style_script')

    <script>
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            loader.style.opacity = '0'; // Mulai fade out

            // Setelah transisi selesai, hilangkan elemen loader dari tampilan
            setTimeout(() => {
                loader.style.display = 'none';
            }, 1000); // Durasi ini harus sesuai dengan durasi transisi yang ditentukan di CSS
        });
    </script>
</head>


<body class="bg-[#F4F5F6]">
    @include('components.loader')


    <div class="flex">
        @include('components.aside')


        <main class="hidden flex-1 p-8 xl:block">
            <h2 class="text-3xl font-bold mb-6">Pemesanan</h2>
            <div
                class="bg-white shadow-lg rounded-lg w-[1000px] h-[98px] p-6 flex justify-between items-start mt-[50px]">
                <div>
                    <h3 class="text-xl font-bold">TABLE 1</h3>
                    <p class="mt-2 text-gray-700">1 Iced Latte, 1 Waffle Chocolate</p>
                </div>
                <div class="text-right">
                    <p class="text-black font-semibold">Take Away</p>
                    <a href="#" class="text-blue-600 mt-2 block">check order here</a>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg w-[1000px] h-[98px] p-6 flex justify-between items-start mt-[50px]">
                <div>
                    <h3 class="text-xl font-bold">TABLE 1</h3>
                    <p class="mt-2 text-gray-700">1 Iced Latte, 1 Waffle Chocolate</p>
                </div>
                <div class="text-right">
                    <p class="text-black font-semibold">Take Away</p>
                    <a href="#" class="text-blue-600 mt-2 block">check order here</a>
                </div>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg w-[1000px] h-[98px] p-6 flex justify-between items-start mt-[50px]">
                <div>
                    <h3 class="text-xl font-bold">TABLE 1</h3>
                    <p class="mt-2 text-gray-700">1 Iced Latte, 1 Waffle Chocolate</p>
                </div>
                <div class="text-right">
                    <p class="text-black font-semibold">Take Away</p>
                    <a href="#" class="text-blue-600 mt-2 block">check order here</a>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg w-[1000px] h-[98px] p-6 flex justify-between items-start mt-[50px]">
                <div>
                    <h3 class="text-xl font-bold">TABLE 1</h3>
                    <p class="mt-2 text-gray-700">1 Iced Latte, 1 Waffle Chocolate</p>
                </div>
                <div class="text-right">
                    <p class="text-black font-semibold">Take Away</p>
                    <a href="#" class="text-blue-600 mt-2 block">check order here</a>
                </div>
            </div>

            @foreach ($pemesanan as $item)
                <div class="grid">
                    <div
                        class="bg-white shadow-lg rounded-lg w-[1000px] h-[98px] p-6 flex justify-between items-start mt-[50px]">
                        <div>
                            <h3 class="text-xl font-bold">TABLE 1</h3>
                            <p class="mt-2 text-gray-700">{{ $item->menu_dipesan }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-black font-semibold">{{ $item->jenis_pemesanan }}</p>
                            <a href="#" class="text-blue-600 mt-2 block">check order here</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </main>
    </div>

    <nav id="navbar"
        class="sticky bg-[#FFFFFF] top-0 z-40 w-full flex justify-between align-center h-15 p-2 xl:hidden">
        <div class="logo flex justify-center align-center">
            <h1
                class="text-[#FFFFFF] text-xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#6F4E37] mx-1 xl:text-5xl">
                Le
            </h1>
            <h1
                class="text-brown text-xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#E5E1DA] mx-1 xl:text-5xl">
                Caffe</h1>
        </div>

        <div id="nav-menu"
            class="nav-menu fixed bottom-0 left-0 flex w-full bg-[#FFFFFF] drop-shadow-[-4px_-4px_10px_rgba(0,0,0,0.5)] xl:relative xl:bg-transparent text-[#FFFFFF] drop-shadow-[-4px_-4px_10px_rgba(0,0,0,0.5)]">
            <ul
                class="flex grid-col-4 gap-12 text-center p-4 bg-[#FFFFFF] justify-center w-full text-2xl font-made text-brown drop-shadow-[2px_2px_2px_#6F4E37] font-regular xl:text-[#FFFFFF] bg-transparent drop-shadow-[2px_2px_2px_#6F4E37]">
                <li
                    class="text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket block xl:hidden"></i></a>
                </li>
                <li
                    class="text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <a href="{{ route('pembayaran.index') }}"><i
                            class="fa-brands fa-cc-mastercard block xl:hidden"></i></a>
                </li>
                <li
                    class="text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <a href="{{ route('pemesanan.index') }}"><i
                            class="fa-solid fa-bag-shopping block xl:hidden"></i></a>
                </li>
                @if ($level_session == '1')
                    <li
                        class="text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                        <a href="{{ route('user.index') }}"><i class="fa-solid fa-user block xl:hidden"></i></a>
                    </li>
                @endif
                <li
                    class="text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <a href="{{ route('menu.index') }}"><i class="fa-solid fa-list-ul block xl:hidden"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    <div
        class="hero z-20 bg-hero bg-center flex flex-column items-center bg-cover w-full h-60 md:h-tb w-screen xl:h-screen w-screen xl:hidden">
        <div class="text mx-10">
            <h6
                class="text-brown my-4
                     text-base font-made font-semibold drop-shadow-[1px_1px_10px_#E5E1DA] mx-2 md:text-3xl xl:text-5xl">
                Welcome
                To
                Le Caffe {{ $username_session }}</h6>
            <h1
                class="text-[#FFFFFF] my-4 text-base font-lm w-3/4 font-semibold drop-shadow-[2px_2px_10px_#6F4E37] mx-2 md:text-3xl xl:text-5xl">
                Make
                Your Day Full Of Energy</h1>
        </div>
    </div>

    <h1 class="title my-6 mx-6 font-poppins font-extrabold xl:hidden"> Data Pemesanan</h1>

    <div class="w-full px-6 mb-64 grid grid-cols-1 xl:hidden">
        <div class="bg-white shadow-lg rounded-lg w-full h-[98px] p-6 flex justify-between items-start mt-[50px]">
            <div>
                <h3 class="text-md font-bold ">TABLE 1</h3>
                <p class="mt-2 text-xs text-gray-700">1 Iced Latte, 1 Waffle Chocolate</p>
            </div>
            <div class="text-right">
                <p class="text-black font-semibold text-xs">Take Away</p>
                <a href="#" class="text-blue-600 mt-2 block text-xs">check order here</a>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg w-full h-[98px] p-6 flex justify-between items-start mt-[50px]">
            <div>
                <h3 class="text-md font-bold ">TABLE 1</h3>
                <p class="mt-2 text-xs text-gray-700">1 Iced Latte, 1 Waffle Chocolate</p>
            </div>
            <div class="text-right">
                <p class="text-black font-semibold text-xs">Take Away</p>
                <a href="#" class="text-blue-600 mt-2 block text-xs">check order here</a>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg w-full h-[98px] p-6 flex justify-between items-start mt-[50px]">
            <div>
                <h3 class="text-md font-bold ">TABLE 1</h3>
                <p class="mt-2 text-xs text-gray-700">1 Iced Latte, 1 Waffle Chocolate</p>
            </div>
            <div class="text-right">
                <p class="text-black font-semibold text-xs">Take Away</p>
                <a href="#" class="text-blue-600 mt-2 block text-xs">check order here</a>
            </div>
        </div>
    </div>

</body>

</html>
