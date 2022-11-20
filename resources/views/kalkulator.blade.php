<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Aritmatika</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- component -->
    <div class="content">
        <form class="text-white bg-sky-800" action="" method="post">
            @csrf
            <div class="pl-12 border rounded-lg">
            <div class="m-6 mt-10 mb-10 text-3xl font-bold text-center text-white uppercase">
                <h1>KALKULATOR</h1>
            </div>
            <h2 class="mt-6 font-bold">Masukkan Angka Pertama</h2>
            <div class="flex items-center mb-6 text-lg md:mb-8">
                <input name="angka1" type="text" id="angka1" class="py-2 pl-2 text-center text-black bg-gray-200 rounded-lg w-content required md:py-4 focus:outline-none" placeholder="Angka Pertama" />
            </div>
            <h2 class="font-bold">Masukkan Angka Kedua</h2>
            <div class="flex items-center mb-6 text-lg md:mb-8">
                <input name="angka2" type="number" id="angka2" class="py-2 pl-2 text-center text-black rounded-lg w-content required bg-gray200 md:py-4 focus:outline-none" placeholder="Angka Kedua" />
            </div>
            <h2 class="font-bold">Silahkan Pilih Operasi Matematika</h2>
            <div class="flex items-center mb-6 text-lg md:mb-8">
                <select class="py-2 pl-8 text-black bg-gray-200 rounded-lg md:py-4 focus:outline-none wfull" name="operasi" id="operasi">
                    <option value="tambah">+</option>
                    <option value="Pengurangan">-</option>
                    <option value="Perkalian">x</option>
                    <option value="Pembagian">/</option>
                    <option value="Modulus">%</option>
                </select>
            </div>
            <div class="flex mb-6">
                <div class="flex mr-2">
                    <button
                        class="px-4 py-2 mt-3 text-base text-white transition duration-300 ease-in-out bg-blue-500 rounded-md cursor-pointer hover:shadow-lg hover:opacity-50">
                        Cek Hasil
                    </button>
                </div>
                <div class="flex mr-2">
                    <a href="/kalkulator"
                        class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-red-500 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                        Reset
                    </a>
                </div>
                <div class="flex mr-2">
                <a href="/"
                    class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-slate-800 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                    Kembali
                </a>
                </div>
            </div>
        </form>
        <div class="w-1/4 p-6 mb-16 border rounded-lg shadow-lg bg-sky-600 ">
            <h1 class="text-xl font-bold text-white ">HASIL</h1>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-auto">
            <div class="inline-block min-w-full sm:px-6">
                <div class="overflow-hidden">
                    <div class="flex items-center pt-4 text-lg">
                        <input disabled type="number" id="angka2" class="w-full py-2 pl-12 text-black bg-gray-200 rounded-lg md:py-4 focus:outline-none" value="{{$hasil}}"/>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>  
</body>

</html>
