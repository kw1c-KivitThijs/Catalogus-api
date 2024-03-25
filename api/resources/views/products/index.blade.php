<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
<div id="app"></div>
    <h1>Welcome to Our Store!</h1>
    @foreach($products as $product)
        <div class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
            <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl items-center justify-evenly" href="/products/{{ $product->slug }}">
                <img class="object-cover" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
            </a>
            <div class="mt-4 px-5 pb-5">
                <a href="/products/{{ $product->slug }}">
                    <h5 class="text-xl tracking-tight text-slate-900">{{ $product->name }}</h5>
                </a>
                <div class="mt-2 mb-5 flex items-center justify-between">
                    <p>
                        <span class="text-3xl font-bold text-slate-900">${{ $product->price }}</span>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>



