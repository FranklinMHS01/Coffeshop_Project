<aside class="hidden xl:sticky xl:block xl:top-0 xl:left-0 w-64 h-screen bg-white drop-shadow-xl">
    <div class="logo flex justify-start align-center m-6">
        <h1 class="text-[#FFFFFF] text-xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#6F4E37] mx-1 xl:text-4xl">
            Le
        </h1>
        <h1 class="text-brown text-xl font-poppins font-semibold drop-shadow-[2px_2px_2px_#E5E1DA] mx-1 xl:text-4xl">
            Caffe</h1>
    </div>
    <nav class="mt-10">
        <a href="{{ route('pemesanan.index') }}"
            class="flex items-center h-12 my-6 m-2 p-4 text-brown rounded hover:bg-brown hover:text-light_brown">
            <i class="fa-solid  text-3xl fa-bag-shopping"></i>
            <p class="ml-[30px] font-bold text-md">Pesanan</p>
        </a>
        <a href="{{ route('pembayaran.index') }}"
            class="flex items-center h-12 my-6 m-2 p-4 text-brown rounded hover:bg-brown hover:text-light_brown">
            <i class="fa-brands text-3xl fa-cc-mastercard"></i>
            <p class="ml-[30px] font-bold text-md">Pembayaran</p>
        </a>
        @if ($level_session == '1')
            <a href="{{ route('user.index') }}"
                class="flex items-center h-12 my-6 m-2 p-4 text-brown rounded hover:bg-brown hover:text-light_brown">
                <i class="fa-solid  text-3xl fa-users"></i>
                <p class="ml-[30px] font-bold text-md">Admin</p>
            </a>
        @endif
        <a href="{{ route('menu.index') }}"
            class="flex items-center h-12 my-6 m-2 p-4 text-brown rounded hover:bg-brown hover:text-light_brown">
            <i class="fa-solid  text-3xl fa-list-ul"></i>
            <p class="ml-[30px] font-bold text-md">Menu</p>
        </a>
        <div class="mt-32">
            <a href="{{ route('logout') }}"
                class="flex items-center text-brown  h-12 my-6 m-2 p-4 rounded hover:bg-brown hover:text-light_brown">
                <i class="fa-solid  text-3xl fa-right-from-bracket"></i>
                <p class="ml-[30px] font-bold text-md">Log out</p>
            </a>
        </div>
    </nav>
</aside>
