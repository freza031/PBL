<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oncom Login</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
    @vite('resources/css/app.css')

</head>
<body class="bg-[#BDD5EA]">
    <div class="w-full flex flex-row justify-center items-center h-screen bg-[#FAEDCD]">
        <div class="w-1/2 bg-[#FAEDCD] h-screen flex justify-center items-center px-20">
            <form class="space-y-4 w-full p-10" action="#">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 text-[#CCD5AE]">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="email" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-white text-[#CCD5AE]">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                </div>
                <div class="flex items-center justify-end">
                    <p class="text-sm font-medium font-roboto-condensed text-white">Belum terdaftar? </p><a href="#" class="text-sm font-roboto-condensed font-medium text-[#D4A373] hover:underline">Daftar</a>
                </div>
                <button type="submit" class="w-full text-white bg-[#D4A373] hover:bg-[#d94a41] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">LOGIN</button>
            </form>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        
    </div>
</body>
</html>