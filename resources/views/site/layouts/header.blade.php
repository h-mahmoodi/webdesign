<div class="bg-violet-900 shadow-md py-2">
    <div class="container mx-auto flex flex-col gap-3 md:flex-row justify-between items-center">

        <div class="text-white font-semibold">
            Web Design | Web Application | ECommerce
        </div>

        <div class="flex gap-3 items-center">
            <span class="flex w-7 h-7 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
                <i class="fa-brands fa-facebook-f"></i>
            </span>
            <span class="flex w-7 h-7 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
                <i class="fa-brands fa-linkedin-in"></i>
            </span>
            <span class="flex w-7 h-7 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
                <i class="fa-brands fa-instagram"></i>
            </span>
            <span class="flex w-7 h-7 items-center justify-center shadow-md rounded-md text-xl bg-white group-hover:bg-slate-800 group-hover:text-slate-100">
                <i class="fa-brands fa-whatsapp"></i>
            </span>
        </div>

    </div>

</div>
<div class="bg-white shadow-md py-2 px-2">
    <div class="container mx-auto flex justify-between items-center ">
        <div>
            <div class="text-2xl md:text-3xl font-semibold">
                WEB SHATEL
            </div>
            <div class="text-sm md:text-base font-semibold">
                Digital Marketing Agancy
            </div>
        </div>
        {{-- Menu Desktop --}}
        <div class="hidden md:flex">
            <ul class="flex gap-3 items-center justify-center font-semibold">
                <li class="cursor-pointer  bg-gray-200 t px-4 py-2 rounded-md ">
                    Design & Geraphic
                </li>
                <li class="cursor-pointer  bg-gray-200 t px-4 py-2 rounded-md ">
                    Web Site & Application
                </li>
                <li class="cursor-pointer  bg-gray-200 t px-4 py-2 rounded-md ">
                    Web Application
                </li>
                <li class=" text-gray-700 " x-data="{modal:false}">
                    <div @click="modal=!modal" class="cursor-pointer  bg-violet-900 text-white px-4 py-2 rounded-md ">
                        Services
                    </div>
                    <div x-show="modal" x-transition x-cloak
                    class="absolute mt-2 top-28 left-0  w-screen flex items-center justify-center">
                        <div class="grid grid-cols-12 gap-3  items-center w-[800px] bg-white p-5 rounded-lg shadow-md" x-data="{tab:0}">
                            <div class="col-span-8 grid grid-cols-2 gap-2 border-r pr-3">

                                <div class="relative group">
                                    <a @mouseover="tab=1" @mouseleave="tab=0"
                                     class="flex gap-5 justify-between items-center hover:bg-gray-100 p-2 rounded-lg duration-200" href="">
                                        <div class="flex items-center gap-2">
                                            <span
                                            class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-indigo-800 duration-200 group-hover:text-slate-100">
                                                <i class="fa-brands fa-figma"></i>
                                            </span>
                                            <h2 class="font-semibold  flex flex-col">
                                                <span class="font-bold text-sm">
                                                    UI/UX
                                                </span>
                                                <span class="text-xs">
                                                    Design UI By Figma
                                                </span>
                                            </h2>
                                        </div>
                                        <span class="hidden group-hover:flex text-indigo-800 duration-200">
                                            <i class="fa-solid fa-arrow-right text-xl"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="relative group">
                                    <a @mouseover="tab=2" @mouseleave="tab=0"
                                     class="flex gap-5 justify-between items-center hover:bg-gray-100 p-2 rounded-lg duration-200" href="">
                                        <div class="flex items-center gap-2">
                                            <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-indigo-800 duration-200 group-hover:text-slate-100">
                                                <i class="fa-brands fa-wordpress-simple"></i>
                                            </span>
                                            <h2 class="font-semibold  flex flex-col">
                                                <span class="font-bold text-sm">
                                                    Wordpress
                                                </span>
                                                <span class="text-xs">
                                                    Deploy By Wordpress
                                                </span>
                                            </h2>
                                        </div>
                                        <span class="hidden group-hover:flex text-indigo-800 duration-200">
                                            <i class="fa-solid fa-arrow-right text-xl"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="relative group">
                                    <a @mouseover="tab=3" @mouseleave="tab=0"
                                     class="flex gap-5 justify-between items-center hover:bg-gray-100 p-2 rounded-lg duration-200" href="">
                                        <div class="flex items-center gap-2">
                                            <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-indigo-800 duration-200 group-hover:text-slate-100">
                                                <i class="fa-brands fa-laravel"></i>
                                            </span>
                                            <h2 class="font-semibold  flex flex-col">
                                                <span class="font-bold text-sm">
                                                    Laravel
                                                </span>
                                                <span class="text-xs">
                                                    BackEnd Development
                                                </span>
                                            </h2>
                                        </div>
                                        <span class="hidden group-hover:flex text-indigo-800 duration-200">
                                            <i class="fa-solid fa-arrow-right text-xl"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="relative group">
                                    <a @mouseover="tab=4" @mouseleave="tab=0"
                                     class="flex gap-5 justify-between items-center hover:bg-gray-100 p-2 rounded-lg duration-200" href="">
                                        <div class="flex items-center gap-2">
                                            <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-indigo-800 duration-200 group-hover:text-slate-100">
                                                <i class="fa-solid fa-chart-line"></i>
                                            </span>
                                            <h2 class="font-semibold  flex flex-col">
                                                <span class="font-bold text-sm">
                                                    Google SEO
                                                </span>
                                                <span class="text-xs">
                                                    RankUp On Google
                                                </span>
                                            </h2>
                                        </div>
                                        <span class="hidden group-hover:flex text-indigo-800 duration-200">
                                            <i class="fa-solid fa-arrow-right text-xl"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="relative group">
                                    <a @mouseover="tab=5" @mouseleave="tab=0"
                                     class="flex gap-5 justify-between items-center hover:bg-gray-100 p-2 rounded-lg duration-200" href="">
                                        <div class=" flex items-center gap-2">
                                            <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-indigo-800 duration-200 group-hover:text-slate-100">
                                                <i class="fa-brands fa-vuejs"></i>
                                            </span>
                                            <h2 class="font-semibold  flex flex-col">
                                                <span class="font-bold text-sm">
                                                    Vue.JS
                                                </span>
                                                <span class="text-xs">
                                                    FrontEnd Development
                                                </span>
                                            </h2>
                                        </div>
                                        <span class="hidden group-hover:flex text-indigo-800 duration-200">
                                            <i class="fa-solid fa-arrow-right text-xl "></i>
                                        </span>
                                    </a>
                                </div>

                                <div class="relative group">
                                    <a @mouseover="tab=6" @mouseleave="tab=0"
                                     class="flex gap-5 justify-between items-center hover:bg-gray-100 p-2 rounded-lg duration-200" href="">
                                        <div class="flex items-center gap-2">
                                            <span class="flex w-10 h-10 items-center justify-center shadow-md rounded-md text-2xl bg-white group-hover:bg-indigo-800  duration-200 group-hover:text-slate-100">
                                                <i class="fa-brands fa-google"></i>
                                            </span>
                                            <h2 class="font-semibold  flex flex-col">
                                                <span class="font-bold text-sm">
                                                    Google Ads
                                                </span>
                                                <span class="text-xs">
                                                    Advertise On Google
                                                </span>
                                            </h2>
                                        </div>
                                        <span class="hidden group-hover:flex text-indigo-800 duration-200">
                                            <i class="fa-solid fa-arrow-right text-xl"></i>
                                        </span>
                                    </a>
                                </div>


                            </div>
                            <div class="col-span-4  h-full flex items-center rounded-lg py-6 px-3">
                                <div class="w-full flex flex-col gap-4 items-center justify-center" x-show="tab==0" >
                                    <div class="text-3xl font-bold">
                                        WEB SHATEL
                                    </div>
                                    <div class="text-lg font-bold">
                                          SERVICES
                                    </div>
                                    <div class="flex gap-1 items-center justify-center">
                                        <span>
                                            We Made It With
                                        </span>
                                        <i class="fa-solid fa-heart text-red-600 text-lg"></i>
                                        <span>
                                            For You
                                        </span>
                                    </div>
                                    {{-- <div class="text-sm">
                                        Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                         quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                    </div> --}}
                                </div>

                                <div  x-show="tab==1" >
                                    <div class="text-lg font-bold">
                                        What is UI/UX ?
                                    </div>
                                    <div class="text-sm">
                                        Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                         quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                    </div>
                                </div>

                                <div  x-show="tab==2">
                                    <div class="text-lg font-bold">
                                        What is Wordpress ?
                                    </div>
                                    <div class="text-sm">
                                        Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                         quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                    </div>
                                </div>

                                <div  x-show="tab==3">
                                    <div class="text-lg font-bold">
                                        What is Laravel ?
                                    </div>
                                    <div class="text-sm">
                                        Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                         quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                    </div>
                                </div>

                                <div  x-show="tab==4">
                                    <div class="text-lg font-bold">
                                        What is SEO ?
                                    </div>
                                    <div class="text-sm">
                                        Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                         quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                    </div>
                                </div>

                                <div  x-show="tab==5">
                                    <div class="text-lg font-bold">
                                        What is Vue.js ?
                                    </div>
                                    <div class="text-sm">
                                        Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                         quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                    </div>
                                </div>

                                <div  x-show="tab==6">
                                    <div class="text-lg font-bold">
                                        What is Google Ads ?
                                    </div>
                                    <div class="text-sm">
                                        Lorem ipsum dolor sitamet conse ctetur adipis icing elit. Voluptate tenetur numquam aliquam,
                                         quod ipsam est, mollitia reici endis, eum incidunt ab ut?
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="cursor-pointer  bg-gray-200 hover:bg-gray-300 t px-4 py-2 rounded-md ">
                    Blog
                </li>
                <li class="cursor-pointer  bg-gray-200 t px-4 py-2 rounded-md ">
                    About Us
                </li>
                <li class="cursor-pointer  bg-gray-200 t px-4 py-2 rounded-md ">
                    Contact Us
                </li>
            </ul>
        </div>

        {{-- Mobile Menu --}}

        <div class="flex gap-1 items-center md:hidden">
            {{-- <span class="font-semibold text-base">
                Menu
            </span> --}}
            <i class="fa-solid fa-bars text-3xl"></i>
        </div>
        <div class="hidden md:flex gap-3 items-center">
            <a href="" class=" py-2 px-4 bg-gray-800 text-white rounded-md font-semibold">
                Order Now
            </a>
            <a href="" class=" py-2 px-4 bg-gray-800 text-white rounded-md font-semibold">
                Order Now
            </a>
        </div>
    </div>
</div>
