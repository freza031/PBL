<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join Oncom</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#E9EDC9]">
    <div class="flex items-center justify-center h-screen ">
        <div class="bg-[#E9EDC9] rounded-2xl flex flex-col p-20">
            <div class="flex flex-row">
                <div class="w-1/2 p-5">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <form action="POST" class="w-1/2 gap-3 flex flex-col">
                    <div class="w-auto">
                        <p class="text-white font-roboto-condensed">Nama</p>
                        <input type="text" name="" id="" class="w-60 rounded-md h-8 p-2" placeholder="nama">
                    </div>
                    <div class="w-auto">
                        <p class="text-white font-roboto-condensed">Email</p>
                        <input type="email" name="" id="" class="w-60 rounded-md h-8 p-2" placeholder="email">
                    </div>
                    <div class="w-full">
                        <p class="text-white font-roboto-condensed">Password</p>
                        <input type="password" name="" id="" class="w-60 rounded-md h-8 p-2" placeholder="password">
                    </div>
                    <div class="w-60 rounded-md h-8 bg-[#D4A373] text-center items-center justify-center font-bold">
                        <button class=" text-white">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>