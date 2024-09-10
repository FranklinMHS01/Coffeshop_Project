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

    @include('components.footer')
</body>

</html>
