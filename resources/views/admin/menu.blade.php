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

    <div class="flex">
        @include('components.aside')

        <main class="hidden flex-1 p-8 xl:block">
            <h2 class="text-3xl font-bold mb-6">Menu</h2>
            <div class="overflow-x-auto mt-[40px]">
                <table class="min-w-full bg-white shadow-md overflow-hidden">
                    <thead class="bg-[#D9D9D9]">
                        <tr>
                            <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Nama</th>
                            <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Jenis</th>
                            <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Harga</th>
                            <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Quantity</th>
                            <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menu as $row)
                            <tr class="border-t">
                                <td class="px-6 py-4">{{ $row->nama_menu }}</td>
                                <td class="px-6 py-4">{{ $row->jenis_menu }}</td>
                                <td class="px-6 py-4">{{ $row->harga }}</td>
                                <td class="px-6 py-4">{{ $row->quantity }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-start items-center">
                                        <button data-modal-target="editMenuModalDekstop-{{ $row->id_menu }}"
                                            data-modal-toggle="editMenuModalDekstop-{{ $row->id_menu }}"
                                            class="block bg-brown w-2 aspect-square rounded-full mx-2 text-white bg-blue-700 hover:text-brown hover:bg-light_brown focus:ring-4 focus:outline-none focus:ring-brown font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-brown"
                                            type="button">
                                            <i class="flex justify-center items-center fa-solid fa-pencil"></i>
                                        </button>
                                        <form action="{{ route('menu.destroy', $row->id_menu) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button
                                                class="block bg-brown w-2 aspect-square rounded-full mx-2 text-white bg-blue-700 hover:text-brown hover:bg-light_brown focus:ring-4 focus:outline-none focus:ring-brown font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-brown"
                                                type="submit">
                                                <i class="flex justify-center items-center fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                                <div id="editMenuModalDekstop-{{ $row->id_menu }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Edit {{ $row->nama_menu }}
                                                </h3>
                                                <button type="button"
                                                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="editMenuModalDekstop-{{ $row->id_menu }}">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5">
                                                <form class="space-y-4"
                                                    action="{{ route('menu.update', $row->id_menu) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div>
                                                        <label for="nama_menu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                            Menu</label>
                                                        <input type="text" name="nama_menu" id="nama_menu"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="Nama Menu" required
                                                            value="{{ $row->nama_menu }}" />
                                                    </div>
                                                    <div>
                                                        <label for="jenis_menu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                                            Menu</label>
                                                        <select
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            name="jenis_menu" id="jenis_menu">
                                                            <option value="Minuman">Minuman</option>
                                                            <option value="Makanan">Makanan</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="quantity"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                                        <input type="number" name="quantity" id="quantity"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="Quantity" required
                                                            value="{{ $row->quantity }}" />
                                                    </div>
                                                    <div>
                                                        <label for="harga"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                                        <input type="text" name="harga" id="harga"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="Harga" required value="{{ $row->harga }}" />
                                                    </div>
                                                    <div>
                                                        <label for="img_menu"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                                                            Menu</label>
                                                        <input
                                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                            id="img_menu" name="img_menu" type="file" required
                                                            value="{{ $row->nama_menu }}">
                                                    </div>
                                                    <div>
                                                        <input type="hidden" name="id_menu" id=""
                                                            value="{{ $row->id_menu }}">
                                                    </div>
                                                    <button type="submit"
                                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <i class="fa-solid fa-pencil mr-2"></i>
                                                        Edit Menu
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <button data-modal-target="createMenuModal" data-modal-toggle="createMenuModal"
        class="block fixed m-6 bottom-0 right-0 text-white w-10 h-10 bg-brown rounded-full hover:bg-light_brown hover:text-brown focus:ring-4 focus:outline-none focus:ring-brown-400 font-medium text-sm flex items-center justify-center dark:bg-brown dark:hover:bg-light-brown dark:focus:ring-brown"
        type="button">
        <i class="fa-solid fa-plus"></i>
    </button>

    <nav id="navbar"
        class="sticky block bg-[#FFFFFF] top-0 z-40 w-full flex justify-between align-center h-15 p-2 xl:hidden">
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
                    <a href="{{ route('logout') }}"><i
                            class="fa-solid fa-right-from-bracket block xl:hidden"></i></a>
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

        <div class="flex justify-center items-center">
            <ul class="flex text-base text-center">
                <li>
                    <button data-modal-target="createMenuModal" data-modal-toggle="createMenuModal"
                        class="block text-white w-10 h-10 bg-brown rounded-full hover:bg-light_brown hover:text-brown focus:ring-4 focus:outline-none focus:ring-brown-400 font-medium text-sm flex items-center justify-center dark:bg-brown dark:hover:bg-light-brown dark:focus:ring-brown"
                        type="button">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Title -->
    <div class="text-center my-4 xl:hidden">
        <h2 class="text-2xl font-bold text-brown">ALL MENU</h2>
    </div>

    <!-- Menu Minuman -->
    <div class="px-4 mb-64 xl:hidden">
        <!-- Menu Item -->
        @foreach ($menu as $row)
            @if ($row->jenis_menu == 'Minuman')
                <h3 class="text-lg font-semibold my-6">Menu Minuman</h3>
                <div class="grid grid-cols-3 gap-4 md:grid-cols-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ $row->img_menu }}" alt="Cappucino" class="w-full aspect-square object-cover">
                        <div class="p-2">
                            <h4 class="font-bold">{{ $row->nama_menu }}</h4>
                            <p class="text-gray-500">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="action-card flex flex-row justify-end m-2">
                            <button data-modal-target="editMenuModal-{{ $row->id_menu }}"
                                data-modal-toggle="editMenuModal-{{ $row->id_menu }}"
                                class="bg-brown w-[26px] h-[26px] rounded-md mx-2 text-white bg-blue-700 hover:bg-light_brown hover:text-brown focus:ring-2 focus:outline-none focus:ring-brown font-medium text-[10px] flex justify-center items-center"
                                type="button">
                                <i class="fa-solid fa-pencil text-[14px]"></i>
                            </button>

                            <form action="{{ route('menu.destroy', $row->id_menu) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button
                                    class="bg-brown w-[26px] h-[26px] rounded-md text-white bg-blue-700 hover:bg-light_brown hover:text-brown focus:ring-2 focus:outline-none focus:ring-brown font-medium text-[4px] flex justify-center items-center"
                                    type="submit">
                                    <i class="fa-solid fa-trash-can text-[14px]"></i>
                                </button>

                            </form>
                        </div>
                    </div>

                    <div id="editMenuModal-{{ $row->id_menu }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Edit {{ $row->nama_menu }}
                                    </h3>
                                    <button type="button"
                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="editMenuModal-{{ $row->id_menu }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <form class="space-y-4" action="{{ route('menu.update', $row->id_menu) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div>
                                            <label for="nama_menu"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Menu</label>
                                            <input type="text" name="nama_menu" id="nama_menu"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Nama Menu" required value="{{ $row->nama_menu }}" />
                                        </div>
                                        <div>
                                            <label for="jenis_menu"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                                Menu</label>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                name="jenis_menu" id="jenis_menu">
                                                <option value="Minuman">Minuman</option>
                                                <option value="Makanan">Makanan</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="quantity"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                            <input type="number" name="quantity" id="quantity"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Quantity" required value="{{ $row->quantity }}" />
                                        </div>
                                        <div>
                                            <label for="harga"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                            <input type="text" name="harga" id="harga"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Harga" required value="{{ $row->harga }}" />
                                        </div>
                                        <div>
                                            <label for="img_menu"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                                                Menu</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="img_menu" name="img_menu" type="file" required
                                                value="{{ $row->nama_menu }}">
                                        </div>
                                        <div>
                                            <input type="hidden" name="id_menu" id=""
                                                value="{{ $row->id_menu }}">
                                        </div>
                                        <button type="submit"
                                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <i class="fa-solid fa-pencil mr-2"></i>
                                            Edit Menu
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h3 class="text-lg font-semibold my-6">Menu Makanan</h3>
                <div class="grid grid-cols-3 gap-4 md:grid-cols-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ $row->img_menu }}" alt="Cappucino" class="w-full aspect-square object-cover">
                        <div class="p-2">
                            <h4 class="font-bold">{{ $row->nama_menu }}</h4>
                            <p class="text-gray-500">Rp {{ number_format($row->harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="action-card flex flex-row justify-end m-2">
                            <button data-modal-target="editMenuModal-{{ $row->id_menu }}"
                                data-modal-toggle="editMenuModal-{{ $row->id_menu }}"
                                class="bg-brown w-[26px] h-[26px] rounded-md mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium text-[10px] flex justify-center items-center"
                                type="button">
                                <i class="fa-solid fa-pencil text-[14px]"></i>
                            </button>

                            <form action="{{ route('menu.destroy', $row->id_menu) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button
                                    class="bg-brown w-[26px] h-[26px] rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium text-[4px] flex justify-center items-center"
                                    type="submit">
                                    <i class="fa-solid fa-trash-can text-[14px]"></i>
                                </button>

                            </form>
                        </div>
                    </div>

                    <div id="editMenuModal-{{ $row->id_menu }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Edit {{ $row->nama_menu }}
                                    </h3>
                                    <button type="button"
                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="editMenuModal-{{ $row->id_menu }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <form class="space-y-4" action="{{ route('menu.update', $row->id_menu) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div>
                                            <label for="nama_menu"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Menu</label>
                                            <input type="text" name="nama_menu" id="nama_menu"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Nama Menu" required value="{{ $row->nama_menu }}" />
                                        </div>
                                        <div>
                                            <label for="jenis_menu"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                                Menu</label>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                name="jenis_menu" id="jenis_menu">
                                                <option value="Minuman">Minuman</option>
                                                <option value="Makanan">Makanan</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="quantity"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                            <input type="number" name="quantity" id="quantity"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Quantity" required value="{{ $row->quantity }}" />
                                        </div>
                                        <div>
                                            <label for="harga"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                            <input type="text" name="harga" id="harga"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Harga" required value="{{ $row->harga }}" />
                                        </div>
                                        <div>
                                            <label for="img_menu"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                                                Menu</label>
                                            <input
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="img_menu" name="img_menu" type="file" required
                                                value="{{ $row->nama_menu }}">
                                        </div>
                                        <div>
                                            <input type="hidden" name="id_menu" id=""
                                                value="{{ $row->id_menu }}">
                                        </div>
                                        <button type="submit"
                                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <i class="fa-solid fa-pencil mr-2"></i>
                                            Edit Menu
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <!-- Main modal -->
    </div>

    <div id="createMenuModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add New Menu
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="createMenuModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('menu.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div>
                            <label for="nama_menu"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Menu</label>
                            <input type="text" name="nama_menu" id="nama_menu"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Nama Menu" required />
                        </div>
                        <div>
                            <label for="jenis_menu"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Menu</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                name="jenis_menu" id="jenis_menu">
                                <option value="Minuman">Minuman</option>
                                <option value="Makanan">Makanan</option>
                            </select>
                        </div>
                        <div>
                            <label for="quantity"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                            <input type="number" name="quantity" id="quantity"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Quantity" required />
                        </div>
                        <div>
                            <label for="harga"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input type="text" name="harga" id="harga"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Harga" required />
                        </div>
                        <div>
                            <label for="img_menu"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                                Menu</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="img_menu" name="img_menu" type="file" required>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fa-solid fa-plus mr-2"></i>
                            Add New Menu
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
