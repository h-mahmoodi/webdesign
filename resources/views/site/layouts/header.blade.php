<div class="container mx-auto flex justify-between items-center">
    <div>
        logo
    </div>
    <div>
        <ul class="flex gap-8 items-center justify-center font-semibold">
            <li class=" text-blue-700 font-semibold">
                Home
            </li>
            <li class="relative text-gray-700" x-data="{modal:false}">
                <div @click="modal=!modal" class="cursor-pointer font-bold bg-white px-4 py-2 rounded-lg shadow-md">
                    Services
                </div>
                <div x-show="modal" x-transition x-cloak
                class="absolute top-16 left-0 bg-white p-5 rounded-lg shadow-md w-[550px]">
                    <div class="flex gap-8 items-center">
                        <div class="w-2/5 flex flex-col gap-5 border-r pr-5">

                            <div class="relative group">
                                <a class="flex gap-5 justify-between items-center" href="">
                                    <div class="flex items-center gap-2">
                                        <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
                                            <i class="fa-brands fa-figma"></i>
                                        </span>
                                        <h2 class="font-semibold  flex flex-col">
                                            <span class="font-bold">
                                                UI/UX
                                            </span>
                                            <span class="text-xs">
                                                Design By Figma
                                            </span>
                                        </h2>
                                    </div>
                                    {{-- <span class="hidden group-hover:flex">
                                        <i class="fa-solid fa-arrow-right text-xl"></i>
                                    </span> --}}
                                </a>

                            </div>


                            <a class="flex items-center gap-2 group" href="">
                                <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
                                    <i class="fa-brands fa-wordpress-simple"></i>
                                </span>
                                <h2 class="font-semibold  flex flex-col">
                                    <span class="font-bold">
                                        Wordpress
                                    </span>
                                    <span class="text-xs">
                                        Wordpress WebDesign
                                    </span>
                                </h2>
                            </a>

                            <a class="flex items-center gap-2 group" href="">
                                <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
                                    <i class="fa-brands fa-laravel"></i>
                                </span>
                                <h2 class="font-semibold  flex flex-col">
                                    <span class="font-bold">
                                         Laravel
                                    </span>
                                    <span class="text-xs">
                                        PHP Web Application
                                    </span>
                                </h2>
                            </a>


                        </div>
                        <div class="w-3/5">
                            <div class=" bg-white p-3 rounded-lg  flex flex-col gap-1">
                                <div class="font-bold">
                                    What is UI/UX ?
                                </div>
                                <div class="">
                                    Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                     quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </li>
            <li class=" text-gray-700">
                Blog
            </li>
            <li class=" text-gray-700">
                About Us
            </li>
            <li class=" text-gray-700">
                Contact Us
            </li>
        </ul>
    </div>
    <div class="flex gap-3 items-center">
        <span class="flex w-8 h-8 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
            <i class="fa-brands fa-facebook-f"></i>
        </span>
        <span class="flex w-8 h-8 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
            <i class="fa-brands fa-linkedin-in"></i>
        </span>
        <span class="flex w-8 h-8 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
            <i class="fa-brands fa-instagram"></i>
        </span>
        <span class="flex w-8 h-8 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
            <i class="fa-brands fa-whatsapp"></i>
        </span>
    </div>
</div>
