<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN-SERVER</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <section class="bg-teal-700 text-gray-200 font-semibold">
        <nav>
            <ul class="flex flex-row justify-center gap-24 py-4">
               <li><a href="{{route('adminhomepage')}}">Home</a></li>
               <li><a href="{{route('adminhomepage')}}">Home</a></li>
               <li><a href="{{route('adminhomepage')}}">Home</a></li>
               <li><a href="{{route('adminhomepage')}}">Home</a></li>
               <li><a href="{{route('adminhomepage')}}">Home</a></li>
               <li><a href="{{route('adminhomepage')}}">Home</a></li>
            </ul>
        </nav>
    </section>

    <section class="mx-24 my-4">
        <div>
            @yield('content')
        </div>
    </section>
    
</body>
</html>