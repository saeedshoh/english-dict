<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">

    @include('navbar')
    <div class="relative flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-[400px] mx-auto p-6 lg:p-8">

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $dict->en }}</h5>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 myText">*********</p>
                <button type="button" id="myButton" class="w-1/2 inline-flex items-center text-blue-600">
                    Показать
                </button>

                <a href="{{ route('random') }}" class="inline-flex items-center text-blue-600">
                    Обновить
                </a>
            </div>

        </div>
    </div>
</body>
<script>
    const myButton = document.getElementById("myButton");
    const myText = document.querySelector(".myText");
    const originalText = "{{ $dict->ru }}";
    myButton.addEventListener("click", function() {
        if (myText.innerHTML === "*********") {
            myText.innerHTML = originalText;
        } else {
            myText.innerHTML = "*********";
        }
    });
</script>

</html>
