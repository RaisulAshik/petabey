<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petabay</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="">
    <div class="h-screen flex flex-wrap mx-auto">
        <div class="w-1/6 py-12">
            <div class=" px-12">
                <img src="{{Request::root()}}/img/logopetaby.png" />
            </div>
            <div class="py-12">
                <div class="relative block px-12 py-3 hover:bg-red-100 hover:border-l-4 hover:border-red-700 hover:pl-12 hover:text-[#E00000]">
                    <span class="absolute flex items-center ">
                        <img src="{{Request::root()}}/img/Home.png" />
                    </span>
                    <div class="pl-6 ">
                        Dashboard
                    </div>
                </div>
    
                <div class="relative block px-12 py-3 hover:bg-red-100 hover:border-l-4 hover:border-red-700 hover:pl-12 hover:text-[#E00000]">
                    <span class="absolute flex items-center pt-1">
                        <img src="{{Request::root()}}/img/Chart.png" />
                    </span>
                    <div class="pl-6 ">
                        Consumptions
                    </div>
                </div>
    
                <div class="relative block px-12 py-3 hover:bg-red-100 hover:border-l-4 hover:border-red-700 hover:pl-12 hover:text-[#E00000]">
                    <span class="absolute flex items-center ">
                        <img src="{{Request::root()}}/img/Password.png" />
                    </span>
                    <div class="pl-6 ">
                        Access Control
                    </div>
                </div>
            </div>
            <div class="pt-36 pl-12 flex flex-warp">
                <div class="pr-2">
                    <img src="{{Request::root()}}/img/Info Square.png" />
                </div>
                Help&Support
            </div>
        </div>
        <div class="w-5/6 bg-[#E5E5E5]">
            <div class="ml-12 mt-12 bg-white">
                @yield('content')
            </div>
        </div>
    </div>
    <!--main-body-start-->
    <!--main-body-end-->
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>


</html>
