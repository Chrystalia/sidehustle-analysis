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

<body>
    <div class="bg-[#F4F4F4]">
        <div class="text-center font-bold text-2xl p-4 bg-cBlue m-2 text-white rounded-xl drop-shadow-xl">Side Hustle
            Analysis
            Dashboard
            <br> 2018-2023
        </div>
        <div
            class="m-2 p-2 rounded-md bg-white flex flex-row justify-between drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue">
            {{-- <h1>Search Side Hustle</h1>
            <span class="material-symbols-outlined">
                search
            </span> --}}
            <select id="myDropdown" class="w-full bg-transparent border-transparent">
                <option value="option1">Select Side Hustle</option>
                <option value="option2">Freelancing</option>
                <option value="option3">Blogging</option>
                <option value="option3">Youtube Channel</option>
                <option value="option3">Podcast</option>
                <option value="option3">Dog Walking</option>
            </select>
        </div>
        <div class="grid grid-cols-4 gap-2 mx-2 text-center font-semibold">
            <div id="buttonView" onclick="changeColor()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue"> All
            </div>
            <div id="buttonView2" onclick="changeColor2()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue">
                Interest By Region</div>
            <div id="buttonView3" onclick="changeColor3()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue">
                Interest Over Time</div>
            <div id="buttonView4" onclick="changeColor4()"
                class="rounded-xl p-2 bg-white drop-shadow-xl hover:ring-2 hover:ring-cSoftBlue">
                Cloudlist Related Query</div>
        </div>
        <div class="grid grid-cols-4 gap-2 mx-2 mt-2">
            <div
                class=" text-white drop-shadow-xl bg-cBlue rounded-md flex flex-col text-center justify-around py-2 px-2 h-[400px]">
                <div class="font-light">
                    <h1>Description</h1>
                    <h2>We can analyze the interest of a particular topic across different regions. This information can
                        be useful for understanding market demand, identifying target regions for specific side hustles,
                        or tailoring marketing strategies to different geographic areas.</h2>
                </div>
                <div>
                    <h1 class="font-light">Interest Max</h1>
                    <h2 class="font-semibold">92</h2>
                </div>
                <div>
                    <h1 class="font-light">Interest Min</h1>
                    <h2 class="font-semibold">2</h2>
                </div>
            </div>
            <div class="col-span-2 w-full bg-white rounded-md">2</div>
            <div class="w-full bg-white rounded-md">3</div>
        </div>
    </div>

</body>

<script>
    function changeColor() {
        var element = document.getElementById("buttonView");
        element.style.backgroundColor = "#002559";
        element.style.color = "#F2AE29";
    }

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
