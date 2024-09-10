<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Le Caffe</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @include('components.style_script')

    <script>
        document.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar'),
                Menu = document.getElementById('nav-menu')
            if (window.scrollY < 10) {
                navbar.classList.remove('bg-brown');
                Menu.classList.add('drop-shadow-[2px_2px_2px_#6F4E37]');
                Menu.classList.remove('drop-shadow-[2px_2px_2px_#E5E1DA]');
            } else {
                navbar.classList.add('bg-brown');
                Menu.classList.add('drop-shadow-[2px_2px_2px_#E5E1DA]');
                Menu.classList.remove('drop-shadow-[2px_2px_2px_#6F4E37]');
            }
        })

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


    @include('components.navbarCustomers')


    <div
        class="hero z-20 bg-hero bg-center flex flex-column items-center bg-cover w-screen h-60 md:h-tb w-screen xl:h-screen w-screen">
        <div class="text mx-10">
            <h6
                class="text-brown my-4 text-base font-made font-semibold drop-shadow-[1px_1px_10px_#E5E1DA] mx-2 md:text-3xl xl:text-5xl">
                Welcome
                To
                Le Caffe</h6>
            <h1
                class="text-[#FFFFFF] my-4 text-base font-lm w-3/4 font-semibold drop-shadow-[2px_2px_10px_#6F4E37] mx-2 md:text-3xl xl:text-5xl">
                Make
                Your Day Full Of Energy</h1>
            <button
                class="border-4 my-4 border-light_brown rounded-full text-light_brown bg-brown drop-shadow-[4px_4px_4px_#6F4E37] hover:bg-light_brown hover:text-brown transition duration-500 ease-in-out"><i
                    class="fa-solid fa-bars text-xs md:text-xl px-3 xl:text-2xl px-4"></i><a
                    class="font-poppins text-xs font-extrabold md:text-xl px-3 xl:text-2xl px-4"
                    href="{{ route('allmenu') }}">Menu</a></button>
        </div>
    </div>

    <div class="menu">
        <div class="our-recomendation ">
            <div class="title flex justify-center items-center flex-col mt-[71px] mb-[40px] px-4">
                <h1 class="font-lm text-xl mb-6 md:text-2xl xl:text-4xl">Our Recomendation</h1>
                <div class="h-[4px] w-[172px] bg-brown"></div>
            </div>
            <div
                class="allCard flex justify-center content-center align-center grid grid-cols-2 grid-flow-row grid-rows-2 gap-4 md:grid-cols-3">
                <div class="flex justify-center items-center w-full">
                    <div
                        class="card-menu bg-cardMenu bg-center bg-cover flex justify-center items-center flex-col w-48 h-24 drop-shadow-[2px_2px_5px_rgba(0,0,0,0.8)] rounded-tr-[25px] rounded-bl-[25px] md:w-56 md:h-28 xl:w-72 xl:h-36">
                        <div class="content flex justify-center items-center flex-row">
                            <img src="./css/image/coffe.png" class="aspect-square w-14 md:w-20 xl:w-28" alt="">
                            <div class="text-content">
                                <h1
                                    class="text-xs text-[#FFFFFF] font-lm drop-shadow-[2px_2px_1px_rgba(0,0,0,0.8)] md:text-md xl:text-xl">
                                    Cappucino</h1>
                                <p class="text-[5px] w-24 text-[#FFFFFF] font-poppins xl:text-[8px] w-28">A cappuccino
                                    is a hot
                                    coffee
                                    drink
                                    that is
                                    made of equal proportions of espresso,
                                    steamed milk, and milk foam.</p>
                            </div>
                        </div>
                        <a href="{{ route('allmenu') }}"
                            class="border-[1px] border-[#FFFFFF] text-[5px] font-poppins font-semibold text-center text-[#FFFFFF] px-4 rounded-[2px] xl:text-[10px] hover:bg-white hover:text-black transition duration-500 ease-in-out">Order
                            Now</a>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    <div
                        class="card-menu bg-cardMenu bg-center bg-cover flex justify-center items-center flex-col w-48 h-24 drop-shadow-[2px_2px_5px_rgba(0,0,0,0.8)] rounded-tr-[25px] rounded-bl-[25px] md:w-56 md:h-28 xl:w-72 xl:h-36">
                        <div class="content flex justify-center items-center flex-row">
                            <img src="./css/image/coffe.png" class="aspect-square w-14 md:w-20 xl:w-28" alt="">
                            <div class="text-content">
                                <h1
                                    class="text-xs text-[#FFFFFF] font-lm drop-shadow-[2px_2px_1px_rgba(0,0,0,0.8)] md:text-md xl:text-xl">
                                    Cappucino</h1>
                                <p class="text-[5px] w-24 text-[#FFFFFF] font-poppins xl:text-[8px] w-28">A cappuccino
                                    is a hot
                                    coffee
                                    drink
                                    that is
                                    made of equal proportions of espresso,
                                    steamed milk, and milk foam.</p>
                            </div>
                        </div>
                        <a href="{{ route('allmenu') }}"
                            class="border-[1px] border-[#FFFFFF] text-[5px] font-poppins font-semibold text-center text-[#FFFFFF] px-4 rounded-[2px] xl:text-[10px] hover:bg-white hover:text-black transition duration-500 ease-in-out">Order
                            Now
                        </a>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    <div
                        class="card-menu bg-cardMenu bg-center bg-cover flex justify-center items-center flex-col w-48 h-24 drop-shadow-[2px_2px_5px_rgba(0,0,0,0.8)] rounded-tr-[25px] rounded-bl-[25px] md:w-56 md:h-28 xl:w-72 xl:h-36">
                        <div class="content flex justify-center items-center flex-row">
                            <img src="./css/image/coffe.png" class="aspect-square w-14 md:w-20 xl:w-28" alt="">
                            <div class="text-content">
                                <h1
                                    class="text-xs text-[#FFFFFF] font-lm drop-shadow-[2px_2px_1px_rgba(0,0,0,0.8)] md:text-md xl:text-xl">
                                    Cappucino</h1>
                                <p class="text-[5px] w-24 text-[#FFFFFF] font-poppins xl:text-[8px] w-28">A cappuccino
                                    is a hot
                                    coffee
                                    drink
                                    that is
                                    made of equal proportions of espresso,
                                    steamed milk, and milk foam.</p>
                            </div>
                        </div>
                        <a href="{{ route('allmenu') }}"
                            class="border-[1px] border-[#FFFFFF] text-[5px] font-poppins font-semibold text-center text-[#FFFFFF] px-4 rounded-[2px] xl:text-[10px] hover:bg-white hover:text-black transition duration-500 ease-in-out">Order
                            Now</a>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    <div
                        class="card-menu bg-cardMenu bg-center bg-cover flex justify-center items-center flex-col w-48 h-24 drop-shadow-[2px_2px_5px_rgba(0,0,0,0.8)] rounded-tr-[25px] rounded-bl-[25px] md:w-56 md:h-28 xl:w-72 xl:h-36">
                        <div class="content flex justify-center items-center flex-row">
                            <img src="./css/image/coffe.png" class="aspect-square w-14 md:w-20 xl:w-28" alt="">
                            <div class="text-content">
                                <h1
                                    class="text-xs text-[#FFFFFF] font-lm drop-shadow-[2px_2px_1px_rgba(0,0,0,0.8)] md:text-md xl:text-xl">
                                    Cappucino</h1>
                                <p class="text-[5px] w-24 text-[#FFFFFF] font-poppins xl:text-[8px] w-28">A cappuccino
                                    is a hot
                                    coffee
                                    drink
                                    that is
                                    made of equal proportions of espresso,
                                    steamed milk, and milk foam.</p>
                            </div>
                        </div>
                        <a href="{{ route('allmenu') }}"
                            class="border-[1px] border-[#FFFFFF] text-[5px] font-poppins font-semibold text-center text-[#FFFFFF] px-4 rounded-[2px] xl:text-[10px] hover:bg-white hover:text-black transition duration-500 ease-in-out">Order
                            Now</a>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    <div
                        class="card-menu bg-cardMenu bg-center bg-cover flex justify-center items-center flex-col w-48 h-24 drop-shadow-[2px_2px_5px_rgba(0,0,0,0.8)] rounded-tr-[25px] rounded-bl-[25px] md:w-56 md:h-28 xl:w-72 xl:h-36">
                        <div class="content flex justify-center items-center flex-row">
                            <img src="./css/image/coffe.png" class="aspect-square w-14 md:w-20 xl:w-28" alt="">
                            <div class="text-content">
                                <h1
                                    class="text-xs text-[#FFFFFF] font-lm drop-shadow-[2px_2px_1px_rgba(0,0,0,0.8)] md:text-md xl:text-xl">
                                    Cappucino</h1>
                                <p class="text-[5px] w-24 text-[#FFFFFF] font-poppins xl:text-[8px] w-28">A cappuccino
                                    is a hot
                                    coffee
                                    drink
                                    that is
                                    made of equal proportions of espresso,
                                    steamed milk, and milk foam.</p>
                            </div>
                        </div>
                        <button
                            class="border-[1px] border-[#FFFFFF] text-[5px] font-poppins font-semibold text-center text-[#FFFFFF] px-4 rounded-[2px] xl:text-[10px] hover:bg-white hover:text-black transition duration-700 ease-in-out">Order
                            Now</button>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    <div
                        class="card-menu bg-cardMenu bg-center bg-cover flex justify-center items-center flex-col w-48 h-24 drop-shadow-[2px_2px_5px_rgba(0,0,0,0.8)] rounded-tr-[25px] rounded-bl-[25px] md:w-56 md:h-28 xl:w-72 xl:h-36">
                        <div class="content flex justify-center items-center flex-row">
                            <img src="./css/image/coffe.png" class="aspect-square w-14 md:w-20 xl:w-28" alt="">
                            <div class="text-content">
                                <h1
                                    class="text-xs text-[#FFFFFF] font-lm drop-shadow-[2px_2px_1px_rgba(0,0,0,0.8)] md:text-md xl:text-xl">
                                    Cappucino</h1>
                                <p class="text-[5px] w-24 text-[#FFFFFF] font-poppins xl:text-[8px] w-28">A cappuccino
                                    is a hot
                                    coffee
                                    drink
                                    that is
                                    made of equal proportions of espresso,
                                    steamed milk, and milk foam.</p>
                            </div>
                        </div>
                        <button
                            class="border-[1px] border-[#FFFFFF] text-[5px] font-poppins font-semibold text-center text-[#FFFFFF] px-4 rounded-[2px] xl:text-[10px] hover:bg-white hover:text-black transition duration-500 ease-in-out">Order
                            Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-menu">
            <div class="title flex justify-center items-center flex-col mt-[71px] mb-[40px] px-4">
                <h1 class="font-lm text-xl mb-6 md:text-2xl xl:text-4xl">Our Menu</h1>
                <div class="h-[4px] w-[172px] bg-brown"></div>
            </div>
            <div class="all-card grid grid-cols-3 gap-2 flex justify-center mb-12 xl:mb-16">
                <div class="flex justify-center w-full">
                    <div
                        class="card bg-[#FFFFFF] rounded-[5px] drop-shadow-[2px_2px_20px_rgba(0,0,0,0.8)] md:rounded-[10px] xl:rounded-[15px] xl:w-48">
                        <img src="./css/image/Tea.png"
                            class="aspect-square rounded-[5px] w-24 h-24 md:w-36 md:h-32 md:rounded-[10px] xl:rounded-[15px] xl:w-48 xl:h-44"
                            alt="">
                        <div class="text text-center">
                            <h5 class="font-poppins font-extrabold text-[7px] my-2 md:text-sm lg:text-xl">Tea</h5>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center w-full">
                    <div
                        class="card bg-[#FFFFFF] rounded-[5px] drop-shadow-[2px_2px_20px_rgba(0,0,0,0.8)] md:rounded-[10px] xl:rounded-[15px] xl:w-48">
                        <img src="./css/image/Latte.png"
                            class="aspect-square rounded-[5px] w-28 h-24 md:w-36 md:h-32 md:rounded-[10px] xl:rounded-[15px] xl:w-48 xl:h-44"
                            alt="">
                        <div class="text text-center">
                            <h5 class="font-poppins font-extrabold text-[7px] my-2 md:text-sm lg:text-xl">Latte</h5>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center w-full">
                    <div
                        class="card bg-[#FFFFFF] rounded-[5px] drop-shadow-[2px_2px_20px_rgba(0,0,0,0.8)] md:rounded-[10px] xl:rounded-[15px] xl:w-48">
                        <img src="./css/image/Snack.png"
                            class="aspect-square rounded-[5px] w-28 h-24 md:w-36 md:h-32 md:rounded-[10px] xl:rounded-[15px] xl:w-48 xl:h-44"
                            alt="">
                        <div class="text text-center">
                            <h5 class="font-poppins font-extrabold text-[7px] my-2 md:text-sm lg:text-xl">Snack</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
