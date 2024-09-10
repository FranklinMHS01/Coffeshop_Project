<nav id="navbar" class="fixed top-0 z-40 w-full flex justify-between align-center h-15 p-2 xl:p-4">
    <div class="logo flex justify-center align-center">
        <h1 class="text-[#FFFFFF] text-xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#6F4E37] mx-1 xl:text-5xl">
            Le
        </h1>
        <h1 class="text-brown text-xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#E5E1DA] mx-1 xl:text-5xl">
            Caffe</h1>
    </div>

    <div id="nav-menu"
        class="nav-menu fixed bottom-0 left-0 flex w-[100%] bg-[#FFFFFF] drop-shadow-[-4px_-4px_10px_rgba(0,0,0,0.5)] xl:relative xl:bg-transparent text-[#FFFFFF] drop-shadow-[-4px_-4px_10px_rgba(0,0,0,0.5)]">
        <ul
            class="flex grid-col-4 gap-12 text-center p-4 bg-[#FFFFFF] justify-center w-full text-2xl font-made text-brown drop-shadow-[2px_2px_2px_#6F4E37] font-regular xl:text-[#FFFFFF] bg-transparent drop-shadow-[2px_2px_2px_#6F4E37]">
            <li
                class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                <a href="{{ route('home') }}"><i class="fa-solid fa-house block xl:hidden"></i></a><a
                    href="{{ route('home') }}" class="hidden xl:block">Home</a>
            </li>
            <li
                class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                <a href="{{ route('about') }}"><i class="fa-solid fa-users block xl:hidden"></i></a><a
                    href="{{ route('about') }}" class="hidden xl:block">About</a>
            </li>
            <li
                class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                <a href="{{ route('allmenu') }}"><i class="fa-solid fa-bars block xl:hidden"></i></a><a
                    href="{{ route('allmenu') }}" class="hidden xl:block">Menu</a>
            </li>
            <li
                class="mx-2 text-md h-8 w-8 flex justify-center items-center hover:bg-brown md:mx-4 xl:rounded-lg xl:w-24 xl:mx-2 hover:text-[#FFFFFF] xl:hover:bg-light_brown xl:hover:text-brown xl:hover:drop-shadow-[1px_1px_2px_#FFFFFF] transition transition-duration-700 ease-in-out">
                <i class="fa-solid fa-phone block xl:hidden"></i><a href="" class="hidden xl:block">Contact</a>
            </li>
        </ul>
    </div>

    <div class="flex justify-center items-center">
        <ul class="flex text-base text-center">
            <li><i
                    class='text-[#FFFFFF] rounded-full h-8 w-8 flex justify-center items-center hover:bg-light_brown hover:text-brown fa-solid drop-shadow-[4px_4px_4px_#6F4E37] fa-search mx-2 xl:text-3xl xl:mx-3 xl:w-12 xl:h-12 transition transition-duration-700 ease-in-out'></i>
            </li>
            <li><i
                    class='text-[#FFFFFF] rounded-full h-8 w-8 flex justify-center items-center hover:bg-light_brown hover:text-brown fa-solid drop-shadow-[4px_4px_4px_#6F4E37] fa-shopping-cart mx-2 xl:text-3xl xl:mx-3 xl:w-12 xl:h-12 transition transition-duration-700 ease-in-out'></i>
            </li>
        </ul>
    </div>
</nav>
