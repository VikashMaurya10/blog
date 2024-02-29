<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- @include('components.layout.header', ['authors' => \App\Models\User::all()]) --}}
    @include('components.layout.header')
    <main class="min-h-[80vh] max-w-screen-xl mx-auto font-inter px-4">
        {{ $slot }}
    </main>
    @include('components.layout.footer')
</body>

</html>
