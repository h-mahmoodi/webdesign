@extends('site.layouts.master')

@section('content')

<div>
    <div class="relative h-[500px] bg-violet-900 flex items-center justify-center"  >
        <div class="h-full w-full absolute z-0" style="background-image: url('{{ asset('assets/images/banner.jpg') }}');    background-repeat: no-repeat;
        background-size: cover;">

        </div>
        <div class="h-full w-full absolute z-10  bg-gradient-to-b from-white/40 to-violet-900">

        </div>
        <div class=" h-full w-full relative flex flex-col items-center z-20" >
            <div class="my-20">
                <h1 class="text-4xl font-semibold text-gray-200">
                    Digital Marketing Agancy
                </h1>
                <h1 class="text-7xl font-bold text-gray-100">
                    WEB SHATEL
                </h1>
            </div>

            <h1 class="text-5xl font-bold text-gray-100 absolute bottom-0 left-0 w-full flex items-center justify-center my-20">
                WE Can Improve Your Bussines
            </h1>


        </div>



    </div>
</div>



@endsection
