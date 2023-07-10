<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Dashboard</title>
</head>

<style>
    * {
        font-family: 'Poppins', sans-serif;
        /* border: 2px solid red; */
    }
</style>

<div class="z-10 w-full bg-[#F4F4F4] fixed h-[162px] -mt-3"></div>

<body class="bg-[#F4F4F4] h-screen">
    <div class="bg-[#F4F4F4]">
        <div class="z-20 text-center font-bold text-2xl p-4 bg-cBlue m-2 text-white rounded-xl drop-shadow-xl fixed w-[99%]">
            Side Hustle Analysis Dashboard {{ $datas->id != 1 ? 'for ' . $datas->name : '' }}
            <br> 2018-2023
        </div>
        <div
            class="z-20 m-2 p-2 rounded-md bg-white flex flex-row justify-between drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue fixed mt-[104px] w-[99%]">
            {{-- <h1>Search Side Hustle</h1>
            <span class="material-symbols-outlined">
                search
            </span> --}}
            <form action="/side-hustle/category" method="POST" class="w-full" id="form">
                @csrf
                <input type="hidden" name="side_hustle_id" id="side-hustle">
                <select id="myDropdown" class="w-full bg-transparent border-transparent" onchange="submitForm();">
                    <option value="" class="option text-center">-- Select Side Hustle --</option>
                    @foreach ($sidehustles as $sidehustle)
                        <option value="{{ $sidehustle->id }}" class="option ">{{ $sidehustle->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        {{-- <div class="grid grid-cols-3 gap-2 mx-2 text-center font-semibold fixed mt-[150px] w-[99%]"> --}}
        {{-- <div id="buttonView" onclick="changeColor()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue"> All
            </div> --}}
        {{-- <div id="buttonView2" onclick="changeColor2()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue hover:bg-[#002559] hover:text-[#F2AE29]">
                Interest By Region</div>
            <div id="buttonView3" onclick="changeColor3()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue">
                Interest Over Time</div>
            <div id="buttonView4" onclick="changeColor4()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue">
                Cloudlist Related Query</div>
        </div> --}}
    </div>

    {{-- <div class="grid grid-cols-4 gap-2 mx-2 mt-2"> --}}
    <div class="mx-2 my-2 flex z-0">
        <div
            class="z-10 w-[32.5%] mr-2 mt-[150px] text-white drop-shadow-xl bg-cBlue rounded-md flex flex-col text-center justify-around py-20 px-5 h-[75%] fixed">
            <div class="font-light">
                <h1>Description</h1>
                <h2>We can analyze the interest of a particular topic across different regions. This information can
                    be useful for understanding market demand, identifying target regions for specific side hustles,
                    or tailoring marketing strategies to different geographic areas.</h2>
            </div>
            @if ($datas->id != 1)
                <div>
                    <h1 class="font-light">Interest Min</h1>
                    <h2 class="font-semibold">
                        {{ $datas->min_interest . ', ' . date('d M Y', strtotime($datas->min_date)) }}</h2>
                </div>
                <div>
                    <h1 class="font-light">Interest Max</h1>
                    <h2 class="font-semibold">
                        {{ $datas->max_interest . ', ' . date('d M Y', strtotime($datas->max_date)) }}</h2>
                </div>
            @endif
        </div>
        <div class="mt-[150px] w-full h-full z-0 mb-0">
            <div
                class="flex justify-center flex-col ml-[33.5%] mb-2 overflow-hidden bg-white rounded-md w-[66.5%] h-[60%] -z-10">
                <div class="w-[100%] flex flex-col justify-center ">
                    {!! file_get_contents(public_path($datas->interest_over_time)) !!}
                    <div class="text-xs ml-10 mb-10" style="color: red">*data smoothing with 8 window size</div>
                </div>
                @if ($datas->interest_by_region != null)
                    <div class="w-[100%] flex justify-center ">
                        {!! file_get_contents(public_path($datas->interest_by_region)) !!}
                    </div>
                    <div class="w-[100%] flex justify-center ">
                        <img src="{{ $datas->related_queries }}" alt="">
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

<script>
    function submitForm() {
        var selectBox = document.getElementById("myDropdown");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;

        var input = document.getElementById("side-hustle")
        input.value = selectedValue;

        var form = document.getElementById("form");
        form.submit();
    }

    // function changeColor() {
    //     var element = document.getElementById("buttonView");
    //     element.style.backgroundColor = "#002559";
    //     element.style.color = "#F2AE29";
    //     element.scrollIntoView();
    // }

    function changeColor2() {
        var element = document.getElementById("buttonView2");
        element.style.backgroundColor = "#002559";
        element.style.color = "#F2AE29";
    }

    function changeColor3() {
        var element = document.getElementById("buttonView3");
        element.style.backgroundColor = "#002559";
        element.style.color = "#F2AE29";
    }

    function changeColor4() {
        var element = document.getElementById("buttonView4");
        element.style.backgroundColor = "#002559";
        element.style.color = "#F2AE29";
    }
</script>

</html>
