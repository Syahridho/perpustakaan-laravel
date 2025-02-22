<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="w-4/5 my-12 mx-auto">
        <div class="flex justify-between ">
            <h1 class="text-4xl font-semibold">Books</h1>
            <button class="bg-blue-500 shadow px-4 py-2 rounded text-white">Tambahkan Buku</button>
        </div>

        <div class="grid gap-8 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 my-12">
            <div class="group w-full cursor-pointer">
                <img src="https://www.perpustakaankarmelindo.org/lib/minigalnano/createthumb.php?filename=images/docs/30.165..jpg.jpg&width=200"
                    alt="Cover Buku"
                    class="w-32 h-44 md:w-44 md:h-60 group-hover:scale-105 transition rounded shadow-xl  duration-500 object-cover">
                <h4 class="text-md truncate font-semibold text-gray-800 mt-2">10 Dosa Besar Soeharto</h4>
            </div>
            <div class="group w-full cursor-pointer">
                <img src="https://www.perpustakaankarmelindo.org/lib/minigalnano/createthumb.php?filename=images/docs/30.165..jpg.jpg&width=200"
                    alt="Cover Buku"
                    class="w-32 h-44 md:w-44 md:h-60 group-hover:scale-105 transition rounded shadow-xl  duration-500 object-cover">
                <h4 class="text-md truncate font-semibold text-gray-800 mt-2">10 Dosa Besar Soeharto</h4>
            </div>
            <div class="group w-full cursor-pointer">
                <img src="https://www.perpustakaankarmelindo.org/lib/minigalnano/createthumb.php?filename=images/docs/30.165..jpg.jpg&width=200"
                    alt="Cover Buku"
                    class="w-32 h-44 md:w-44 md:h-60 group-hover:scale-105 transition rounded shadow-xl  duration-500 object-cover">
                <h4 class="text-md truncate font-semibold text-gray-800 mt-2">10 Dosa Besar Soeharto</h4>
            </div>
        </div>
    </div>
</body>

</html>
