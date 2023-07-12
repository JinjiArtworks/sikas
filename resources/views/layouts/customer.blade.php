<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/cust.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" />

</head>

<body>
    <nav class="bg-gray-800">
        <div class="container flex">
            <div class="flex items-center justify-between flex-grow py-5">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="/" class="text-gray-200  hover:text-red ">Home</a>
                    <a href="/shop" class="text-gray-200 hover:text-white transition">Shop</a>
                    <a href="/faq-cust" class="text-gray-200 hover:text-white transition">FAQ</a>
                </div>
                <a href="/login" class="text-gray-200 hover:text-white transition">Login</a>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- footer -->
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
        <div class="container grid grid-cols-1 ">
            <div class="flex justify-between col-span-1 space-y-4">
                <img src="assets/images/logo.svg" alt="logo" class="w-30">
                <div class="mr-2">
                    <p class="text-gray-500">
                        Alamat Kami :
                    </p>
                    <span>
                        <p>Jalan Raya Cilinaya ASASASASASASAS</p>
                    </span>
                    <p class="text-gray-500 mt-2">
                       Hubungi Kami : 
                    </p>
                    <span>
                        <p>(+62)821-3829-3339</p>
                    </span>
                </div>
                <div class="mr-2">
                    <p class="text-gray-500 mb-2">
                        Google Map  :
                    </p>
                        <img src="{{ asset('img/map.png') }}" width="350px" alt="">
                </div>
            </div>

        </div>
    </footer>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    @yield('script')
</body>

</html>
