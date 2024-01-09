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
               <li class="hover:underline"><a href="{{route('adminhomepage')}}">Home</a></li>
               <li class="hover:underline"><a href="{{route('adminusermonitoring')}}">User Monitoring</a></li>
               <li class="hover:underline"><a href="{{route('adminbarterplace')}}">Barterplace</a></li>
               <li class="hover:underline"><a href="#">Customer Support</a></li>
               <li class="hover:underline"><a href="#">Inquiry</a></li>
               <li class="hover:underline"><a href="#">Options</a></li>
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