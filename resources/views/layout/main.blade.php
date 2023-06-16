<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<body class="bg-purple-200">
<nav class="bg-gray-200 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-xl font-semibold text-gray-900 dark:text-white">Amandito Store</span>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                <a href="{{ route('product.index') }}" class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">All Product</a>
                <a href="{{ route('product.available') }}" class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">Available Product</a>
                <a href="{{ route('product.unavailable') }}" class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">Unavailable Product</a>
            </div>
        </div>
    </div>
</nav>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        @yield('content')
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
