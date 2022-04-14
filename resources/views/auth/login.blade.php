<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petabay</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<!-- height: 976px;
width: 1440px;
left: -1786px;
top: 2806px;
border-radius: 0px; -->


<body class="">
    <!-- <div class="h-screen flex flex-wrap max-w-screen-xl mx-auto justify-center items-center"> -->
    <div class="h-screen flex flex-wrap px-4 py-4 max-w-screen-lg justify-center mx-auto items-center">
        <div class="w-full md:w-1/2">
            <div class="text-left bg-[#e5e5e5] p-[4.5rem]">
                <div class="pb-10">
                    <img src="{{Request::root()}}/img/logopetaby.png" />
                </div>
                <div>
                    <h1 class="pb-1 text-2xl font-bold font-skModernistBold">
                        Hi welcome to GARDIM
                    </h1>
                    <h1 class="pb-7 text-lg font-skModernistBold">
                        Please login to your account
                    </h1>
                </div>
                <div class="relative block pt-2">
                    <span class="absolute flex items-center pl-2 pt-2">
                        <img src="{{Request::root()}}/img/Message.png" />
                    </span>
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Enter your email..." type="text" name="search"/>
                </div>
                <div class="pt-4 ">
                    <span class="absolute flex items-center pl-2 pt-2">
                        <img src="{{Request::root()}}/img/Lock.png" />
                    </span>
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Password..." type="text" name="search"/>
                </div>
                <div class="pt-1 text-[#E00000] text-right">
                    Forget password
                </div>

                <div class="pt-6 pb-12">
                    <button class="w-full bg-[#E00000] hover:bg-red-500 text-white font-bold py-2 px-4 rounded-md">
                        Login
                    </button>
                </div>
                <div class="pt-12 text-center">
                    Don't have any account,<span class="text-[#E00000] text-sm"> Sign Up</a>
                </div>
            </div>
        </div>
        
        <div class="w-full pr-4 md:w-1/2">
            <div class="bg-[#e00000]">
                <div class="p-20">
                    <div class="py-16">
                        <img src="{{Request::root()}}/img/logoBig.png" />
                    </div>
                    <div class="text-center pt-20">
                        <h1 class="text-lg text-white font-bold font-skModernistBold">
                            Welcome
                        </h1>
                        <h1 class="text-sm text-white font-skModernistBold">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </h1>
                        <div class="flex justify-center pt-1">
                            <img src="{{Request::root()}}/img/slider.png" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img
              src={require("../../../assets/img/Carp-fishing.jpg")}
              class="w-full rounded-2xl"
              alt="aboutimg"
            /> -->
        </div>
    </div>
</body>

</html>
