<!DOCTYPE html>
<html lang="en">
<style>
    .badge {
        font-family: 'Share Tech', sans-serif;
        font-weight: 600;
        display: inline-block;
        padding: 0.25rem 0.75rem;
        font-size: 0.875rem;
        cursor: pointer;
        transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease;
        text-align: center;
        border: none;
    }

    .badge--default {
        background-color: #e0e0e0;
        color: #4a4a4a;
    }

    .badge--outline {
        border: 2px solid #000000;
        color: #000000;
    }

    .badge--solid {
        background-color: #000000;
        color: #ffffff;
    }

    .badge--surface {
        background-color: #ffeb66;
        color: #000000;
        border: 2px solid #000000;
    }

    .badge--sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }

    .badge--md {
        padding: 0.375rem 0.625rem;
        font-size: 0.875rem;
    }

    .badge--lg {
        padding: 0.5rem 1rem;
        font-size: 1rem;
    }

    .badge:hover {
        opacity: 0.9;
    }

    .badge:active {
        transform: scale(0.98);
    }

    .navbar-button {
        padding: 0.5rem 1rem;
        font-size: 1rem;
    }

    button.badge--solid {
        background-color: #FFCC00;
        color: white;
    }

    button.badge--outline {
        background-color: transparent;
        border: 2px solid #FFCC00;
        color: #FFCC00;
    }

    .input,
    .input--solid {
        font-family: 'Share Tech', sans-serif;
        font-weight: 600;
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
        border: 2px solid #000000;
        border-radius: 0rem;
        width: 60%;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .input--solid {
        background-color: #ffffff;
        color: #4a4a4a;
    }

    .input:focus,
    .input--solid:focus {
        outline: none;
        border-color: #FFCC00;
        box-shadow: 0 0 0 2px rgba(255, 204, 0, 0.3);
    }

    .input--disabled {
        background-color: #f5f5f5;
        color: #c0c0c0;
        cursor: not-allowed;
    }

    .input-error {
        border-color: #e53e3e;
        box-shadow: 0 0 0 2px rgba(229, 62, 62, 0.3);
    }

    .error-message {
        font-size: 0.75rem;
        color: #e53e3e;
        margin-top: 0.25rem;
    }
</style>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <nav class="bg-primary-500 p-4 shadow-lg">
        <div class="container mx-auto flex items-center justify-between">
            <div class="space-x-4">
                <a href="{{ route('home') }}">
                    <button class="badge badge--surface w-full p-4">Home</button>
                </a>

                <a href="{{ route('forum.index') }}">
                    <button class="badge badge--surface w-full p-4">Forums</button>
                </a>


                <a href="{{ route('login') }}">
                    <button class="badge badge--surface w-full p-4">Login</button>
                </a>
                <!-- 
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="badge badge--solid badge--lg w-1/3">Logout</button>
                </form> -->

            </div>

        </div>
    </nav>
    @yield('content')
</body>

</html>