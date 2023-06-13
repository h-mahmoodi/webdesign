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
                <div @click="modal=!modal" class="cursor-pointer font-bold text-base">
                    Services
                </div>
                <div x-show="modal" x-transition x-cloak
                class="absolute top-12 left-0 bg-white p-3 rounded-lg shadow-md w-60">
                    <div class="flex flex-col gap-3">

                        <div class="relative group">
                            <a class="flex justify-between items-center  " href="">
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
                                <span class="hidden group-hover:flex">
                                    <i class="fa-solid fa-arrow-right text-xl"></i>
                                </span>
                            </a>
                            <div class="absolute -top-3 left-60 bg-white p-3 rounded-lg shadow-md w-52 hidden group-hover:flex flex-col gap-1">
                                <div class="font-bold text-xs">
                                    What is UI/UX ?
                                </div>
                                <div class="text-xs ">
                                    Lorem ipsum dolor sitamet consectetur adipisicing elit. Voluptate tenetur numquam aliquam,
                                     quod ipsam est, mollitia reiciendis, eum incidunt ab ut? Nobis sunt eveniet ducimus
                                      perferendis voluptatibus provident ea iusto?
                                </div>
                            </div>
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
    <div>
        cta
    </div>
</div>
