<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

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

    <nav id="navbar" class="bg-[#FFFFFF] sticky top-0 z-40 w-full flex justify-between items-center h-15 p-2 xl:p-4">
        <a href="{{ route('home') }}" class="flex justify-center align-center">
            <button class="flex justify-center items-center w-10 h-10 rounded-full bg-[#D9D9D9] text-brown"><i
                    class="fa-solid fa-arrow-left"></i></button>
            <h1 class="flex justify-center items-center mx-6 text-md text-xl text-brown font-bold">Kembali</h1>
        </a>

        <div id="nav-menu"
            class="nav-menu fixed bottom-0 left-0 flex w-full bg-[#FFFFFF] drop-shadow-[-4px_-4px_10px_rgba(0,0,0,0.5)] xl:relative xl:bg-transparent text-[#FFFFFF] drop-shadow-[-4px_-4px_10px_rgba(0,0,0,0.5)]">
            <ul
                class="flex grid-col-4 gap-12 text-center p-4 bg-[#FFFFFF] justify-center w-full text-2xl font-made text-brown drop-shadow-[2px_2px_2px_#6F4E37] font-regular xl:text-[#FFFFFF] bg-transparent drop-shadow-[2px_2px_2px_#6F4E37]">
                <li
                    class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <a href="{{ route('home') }}"><i class="fa-solid fa-house block xl:hidden"></i></a><a
                        href="{{ route('home') }}" class="hidden xl:block">Home</a>
                </li>
                <li
                    class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <i class="fa-solid fa-users block xl:hidden"></i><a href="" class="hidden xl:block">About</a>
                </li>
                <li
                    class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <a href="{{ route('allmenu') }}"><i class="fa-solid fa-bars block xl:hidden"></i></a><a
                        href="{{ route('allmenu') }}" class="hidden xl:block">Menu</a>
                </li>
                <li
                    class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                    <i class="fa-solid fa-phone block xl:hidden"></i><a href=""
                        class="hidden xl:block">Contact</a>
                </li>
            </ul>
        </div>

        <div class="flex justify-center items-center">
            <ul class="flex text-base text-center">
                <li><i
                        class='text-[#6F4E37] rounded-full h-8 w-8 flex justify-center items-center hover:bg-light_brown hover:text-brown fa-solid drop-shadow-[4px_4px_4px_#6F4E37] fa-search mx-2 xl:text-3xl xl:mx-3 xl:w-12 xl:h-12 transition transition-duration-700 ease-in-out'></i>
                </li>
                <li><i
                        class='text-[#6F4E37] rounded-full h-8 w-8 flex justify-center items-center hover:bg-light_brown hover:text-brown fa-solid drop-shadow-[4px_4px_4px_#6F4E37] fa-shopping-cart mx-2 xl:text-3xl xl:mx-3 xl:w-12 xl:h-12 transition transition-duration-700 ease-in-out'></i>
                </li>
            </ul>
        </div>
    </nav>



    <!-- Title -->
    <div class="text-center my-4">
        <div class="logo flex justify-center align-center">
            <h1
                class="text-[#FFFFFF] text-3xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#6F4E37] mx-1 xl:text-5xl">
                Le
            </h1>
            <h1
                class="text-brown text-3xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#E5E1DA] mx-1 xl:text-5xl">
                Caffe</h1>
        </div>
        <h2 class="text-2xl font-bold text-brown-600">ALL MENU</h2>
    </div>

    <!-- Menu Minuman -->
    <div class="px-4 mb-64">
        <!-- Menu Item -->
        @foreach ($menu as $row)
            @if ($row->jenis_menu == 'Minuman')
                <h3 class="text-lg font-semibold my-6">Menu Minuman</h3>
                <div class="grid grid-cols-3 gap-4 md:grid-cols-4">
                    <a href="">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ $row->img_menu }}" alt="Cappucino" class="w-full aspect-square object-cover">
                            <div class="p-2">
                                <h4 class="font-bold">{{ $row->nama_menu }}</h4>
                                <p class="text-gray-500">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ $row->img_menu }}" alt="Cappucino" class="w-full aspect-square object-cover">
                            <div class="p-2">
                                <h4 class="font-bold">{{ $row->nama_menu }}</h4>
                                <p class="text-gray-500">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ $row->img_menu }}" alt="Cappucino" class="w-full aspect-square object-cover">
                            <div class="p-2">
                                <h4 class="font-bold">{{ $row->nama_menu }}</h4>
                                <p class="text-gray-500">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ $row->img_menu }}" alt="Cappucino" class="w-full aspect-square object-cover">
                            <div class="p-2">
                                <h4 class="font-bold">{{ $row->nama_menu }}</h4>
                                <p class="text-gray-500">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @else
                <h3 class="text-lg font-semibold my-6">Menu Makanan</h3>
                <div class="grid grid-cols-3 gap-4 md:grid-cols-4">
                    <a href="">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ $row->img_menu }}" alt="Cappucino" class="w-full h-24 object-cover">
                            <div class="p-2">
                                <h4 class="font-bold">{{ $row->nama_menu }}</h4>
                                <p class="text-gray-500">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach

    </div>


</body>

</html>
