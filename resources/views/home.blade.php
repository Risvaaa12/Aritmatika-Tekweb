<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center h-screen ">
        <div class="text-center text-to-blue-gray-600">
            <h1 class="text-5xl font-bold ">Welcome to math operation!</h1>
        <div class="flex items-center justify-center">
            <img src="{{ asset('https://camo.githubusercontent.com/117d0191569b7e00e69062ce99d26fe9c251dc735c57386b497c75b0b26dda08/68747470733a2f2f63646e2e6472696262626c652e636f6d2f75736572732f313035393538332f73637265656e73686f74732f343137313336372f636f64696e672d667265616b2e676966') }}">
        </div>
        <div class="flex justify-center space-x-2">
            <div>
                <button type="button" class="inline-block px-6 py-2 mr-5 text-xs font-medium font-extrabold leading-tight text-black uppercase transition duration-150 ease-in-out border-2 border-black rounded-lg hover:bg-black hover:bg-opacity-10 focus:outline-none focus:ring-0"><a href="/kalkulator">KALKULATOR</a></button>
            </div>
        </div>
    </div>
</body>

</html>
