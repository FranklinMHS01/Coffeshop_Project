<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('components.style_script')

</head>

<body class="flex justify-center bg-bgMobile w-screen h-screen xl:bg-hero_2 bg-no-repeat bg-cover backdrop-blur-sm bg-center">
    <div class="relative w-full max-w-md">
        <div class="flex justify-center items-center w-full h-full">
            <div class="flex flex-col justify-center rounded-xl bg-white w-full m-12">
                <div class="p-[18px]">
                    <div class="flex justify-center my-12">
                        <h1
                            class="text-[#FFFFFF] text-4xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#6F4E37] mx-1 xl:text-5xl">
                            Le
                        </h1>
                        <h1
                            class="text-brown text-4xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#E5E1DA] mx-1 xl:text-5xl">
                            Caffe</h1>
                    </div>
                    <form action="{{ route('admin.login') }}" method="POST" autocomplete="off">
                        @method('POST')
                        @csrf
                        <div class="flex justify-center flex-col space-y-3">
                            <label class="">Username</label>
                            <input type="text" name="username"
                                class="p-2 border-2 border-[#A4A4A4] rounded-lg h-[38px]" placeholder="Le caffe"
                                required>
                            <label>Password</label>
                            <input type="password" name="password"
                                class="p-2 border-2 border-[#A4A4A4] rounded-lg h-[38px]" placeholder="*********"
                                required>
                        </div>

                        @if ($errors->any())
                            <div style="color: red;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mt-[70px] flex justify-center">
                            <button type="submit"
                                class="bg-[#6F4E37] w-full rounded-lg h-[46px] text-[#FED8B1] uppercase font-extrabold m-6">
                                Login </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
