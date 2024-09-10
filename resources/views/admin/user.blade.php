@php
    use Illuminate\Support\Facades\Crypt;
@endphp

@if ($level_session != '1')
    @php
        return redirect()->route('logout');
    @endphp
@endif

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

<body>

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
                                <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Email</th>
                                <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Password</th>
                                <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Level</th>
                                <th class="px-6 py-3 text-start text-xs font-bold text-black uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $row)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $no++ }}</th>
                                    <td class="px-6 py-4">{{ $row->username }}</td>
                                    <td class="px-6 py-4">{{ $row->password }}</td>
                                    <td class="px-6 py-4">{{ $row->nama_level }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center items-center">
                                            <button data-modal-target="editAkunModalDesktop-{{ $row->id_user }}"
                                                data-modal-toggle="editAkunModalDesktop-{{ $row->id_user }}"
                                                class="block bg-brown w-2 aspect-square rounded-full mx-2 text-white bg-blue-700 hover:text-brown hover:bg-light_brown focus:ring-4 focus:outline-none focus:ring-brown font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-brown"
                                                type="button">
                                                <i class="flex justify-center items-center fa-solid fa-pencil"></i>
                                            </button>
                                            <form action="{{ route('user.destroy', $row->id_user) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button
                                                    class="block bg-brown w-2 aspect-square rounded-full mx-2 text-white bg-blue-700 hover:text-brown hover:bg-light_brown focus:ring-4 focus:outline-none focus:ring-brown font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-brown"
                                                    type="submit">
                                                    <i
                                                        class="flex justify-center items-center fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal Edit Akun -->
                                <div id="editAkunModalDesktop-{{ $row->id_user }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Edit Akun {{ $row->username }}
                                                </h3>
                                                <button type="button"
                                                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="editAkunModalDesktop-{{ $row->id_user }}">
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
                                                    action="{{ route('user.update', $row->id_user) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div>
                                                        <label for="username"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                                        <input type="text" name="username" id="username"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="Username" required
                                                            value="{{ $row->username }}" />
                                                    </div>
                                                    <div>
                                                        <label for="password"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                                        <input type="password" name="password" id="password"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            placeholder="Password" required
                                                            value="{{ Crypt::decrypt($row->password) }}" />
                                                    </div>
                                                    <div>
                                                        <label for="level"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                                                        <select
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            name="level" id="level">
                                                            @foreach ($levels as $item)
                                                                <option value="{{ $item->id_level }}">
                                                                    {{ $item->nama_level }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <input type="hidden" name="id_user" id="id_user"
                                                            value="{{ $row->id_user }}">
                                                    </div>
                                                    <button type="submit"
                                                        class="my-4 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <i class="fa-solid fa-pencil mr-2"></i>
                                                        Edit User
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>

        <button data-modal-target="createuserModal" data-modal-toggle="createuserModal"
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
                        <button data-modal-target="createuserModal" data-modal-toggle="createuserModal"
                            class="block text-white w-10 h-10 bg-brown rounded-full hover:bg-light_brown hover:text-brown focus:ring-4 focus:outline-none focus:ring-brown-400 font-medium text-sm flex items-center justify-center dark:bg-brown dark:hover:bg-light-brown dark:focus:ring-brown"
                            type="button">
                            <i class="fa-solid fa-plus"></i>
                        </button>

                    </li>
                </ul>
            </div>
        </nav>

        <div
            class="hero block z-20 bg-hero bg-center flex flex-column items-center bg-cover w-full h-60 md:h-tb w-screen xl:h-screen w-screen xl:hidden">
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

        <h1 class="title block my-6 mx-6 font-poppins font-extrabold xl:hidden"> Data User</h1>

        <div class="relative block h-56 mb-48 overflow-x-auto xl:hidden">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead
                    class="bg-[#D9D9D9] text-xs font-bold text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-bold">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Level
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $row)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}</th>
                            <td class="px-6 py-4">{{ $row->username }}</td>
                            <td class="px-6 py-4">{{ $row->password }}</td>
                            <td class="px-6 py-4">{{ $row->nama_level }}</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center items-center">
                                    <button data-modal-target="editakunmodal-{{ $row->id_user }}"
                                        data-modal-toggle="editakunmodal-{{ $row->id_user }}"
                                        class="block bg-brown w-2 aspect-square rounded-full mx-2 text-white bg-blue-700 hover:text-brown hover:bg-light_brown focus:ring-4 focus:outline-none focus:ring-brown font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-brown"
                                        type="button">
                                        <i class="flex justify-center items-center fa-solid fa-pencil"></i>
                                    </button>
                                    <form action="{{ route('user.destroy', $row->id_user) }}" method="post">
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
                        </tr>
                        <!-- Modal Edit Akun -->
                        <div id="editakunmodal-{{ $row->id_user }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Edit Akun {{ $row->username }}
                                        </h3>
                                        <button type="button"
                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="editakunmodal-{{ $row->id_user }}">
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
                                        <form class="space-y-4" action="{{ route('user.update', $row->id_user) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div>
                                                <label for="username"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                                <input type="text" name="username" id="username"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Username" required value="{{ $row->username }}" />
                                            </div>
                                            <div>
                                                <label for="password"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                                <input type="password" name="password" id="password"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Password" required
                                                    value="{{ Crypt::decrypt($row->password) }}" />
                                            </div>
                                            <div>
                                                <label for="level"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                                                <select
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    name="level" id="level">
                                                    @foreach ($levels as $item)
                                                        <option value="{{ $item->id_level }}">{{ $item->nama_level }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <input type="hidden" name="id_user" id="id_user"
                                                    value="{{ $row->id_user }}">
                                            </div>
                                            <button type="submit"
                                                class="my-4 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <i class="fa-solid fa-pencil mr-2"></i>
                                                Edit User
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <!-- Modal Tambah User -->
        <div id="createuserModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add New User
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="createuserModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="{{ route('user.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div>
                                <label for="username"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">username</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Username" required />
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Password" required />
                            </div>
                            <div>
                                <label for="level"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                                <select
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    name="level" id="level">
                                    @foreach ($levels as $item)
                                        <option value="{{ $item->id_level }}">{{ $item->nama_level }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit"
                                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fa-solid fa-plus mr-2"></i>
                                Add New User
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
