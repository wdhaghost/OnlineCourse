<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/assets/app.3a90fd2c.css">
    <title>{{$title}}</title>
</head>

<body>
    <header">
    <nav class="justify-between">
        <h1 class="font-sans bg-gray-600">{{ $subtitle }}</h1>


    </nav>

    </header>
    <main>
        <ul>
            @foreach ($courses as $course)

                <li>{{ $course->name }}</li>
            
            @endforeach
        </ul>
    </main>
</body>

</html>