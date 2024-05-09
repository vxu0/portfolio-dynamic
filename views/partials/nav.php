<nav class="flex justify-center">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href='/' class="<?= urlIs('/') ? 'bg-gray-400 text-white' : 'text-gray-400' ?> hover:bg-gray-400 hover:text-white px-3 py-1 rounded-md text-base font-normal">
                        home</a>
                        <a href='/about' class="<?= urlIs('/about') ? 'bg-gray-400 text-white' : 'text-gray-400' ?> hover:bg-gray-400 hover:text-white px-3 py-1 rounded-md text-base font-normal">
                        about</a>
                        <a href='/technical' class="<?= urlIs('/technical') ? 'bg-gray-400 text-white' : 'text-gray-400' ?> hover:bg-gray-400 hover:text-white px-3 py-1 rounded-md text-base font-normal">
                        technical</a>
                        <a href='/creative' class="<?= urlIs('/creative') ? 'bg-gray-400 text-white' : 'text-gray-400' ?> hover:bg-gray-400 hover:text-white px-3 py-1 rounded-md text-base font-normal">
                        creative</a>
                        <a href='/contact' class="<?= urlIs('/contact') ? 'bg-gray-400 text-white' : 'text-gray-400' ?> hover:bg-gray-400 hover:text-white px-3 py-1 rounded-md text-base font-normal">
                        contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>