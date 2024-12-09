<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-white">

    <!-- Header Section -->
    <div class="relative bg-gradient-to-tr from-purple-900 via-blue-900 to-gray-800
    ">
        <div class="absolute inset-0">
            <!-- Subtle Pattern -->
            <div class="bg-[url('https://www.transparenttextures.com/patterns/dark-mosaic.png')] opacity-30"></div>
        </div>
        <div class="absolute inset-0">
            <!-- Moving Gradient Overlay -->
            <div class="bg-gradient-to-br from-indigo-800 via-purple-700 to-blue-800 opacity-20 animate-pulse"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10">
            <h1 class="text-3xl md:text-5xl font-extrabold text-white text-center drop-shadow-lg">
                CORBITAL TECHNOLOGIES
            </h1>
        </div>

        <!-- Overlay Image -->
        <div class="absolute inset-x-0 -bottom-16 flex justify-center">
            <img src="{{ asset('images/logo-only.svg') }}" alt="Logo"
                class="rounded-full shadow-xl border-2 border-white w-24 h-24 sm:w-32 sm:h-32 transition-transform duration-500 hover:scale-110 hover:shadow-purple-500/50" />
        </div>
    </div>

    <!-- Notification Card -->
    <div class="pt-16 flex items-center justify-center px-4 lg:px-44">
        <section
            class="relative md:py-10 overflow-hidden my-10 bg-gradient-to-r from-gray-800/80 via-gray-900/90 to-blue-900/80 backdrop-blur-lg text-white w-full rounded-xl shadow-2xl md:p-12 text-center border border-gray-600">
            <div class="relative container px-4 mx-auto">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-wrap -mx-4 items-center">
                        <!-- Left Section: Heading and Form -->
                        <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
                            <div class="relative z-10 max-w-lg mx-auto">
                                <!-- Heading with additional padding on small screens -->
                                <h4
                                    class="font-heading text-4xl sm:text-4xl lg:text-5xl text-white font-bold mb-6 mt-6">
                                    Sign up for our newsletter
                                </h4>
                                <div class="md:flex mb-16">
                                    <div class="max-w-xs mx-auto text-center">
                                        <p class="text-lg font-semibold text-gray-400">
                                            Stay in the loop with everything you need to know.
                                        </p>
                                    </div>
                                </div>
                                <div class="sm:flex items-center">
                                    <form
                                        class="flex flex-col gap-4 sm:flex-row justify-center items-center max-w-md mx-auto w-full">
                                        <!-- Email input - Larger width on all screens -->
                                        <div class="w-full sm:w-4/5 md:w-2/3 lg:w-3/4">
                                            <input type="email" name="email" placeholder="Enter your email"
                                                class="w-full px-6 py-4 rounded-lg border border-gray-700 bg-gray-800/80 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 hover:ring-2 hover:ring-purple-400 transition"
                                                required>
                                        </div>

                                        <!-- Submit button - Full width on small screens, auto width on larger screens -->
                                        <div class="w-full sm:w-auto">
                                            <button type="submit"
                                                class="w-full sm:w-auto bg-gradient-to-r from-purple-600 to-blue-500 hover:from-blue-500 hover:to-purple-600 text-white px-6 py-4 rounded-lg font-medium shadow-lg hover:shadow-purple-500/50 transition-transform transform hover:scale-105">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Right Section: Image -->
                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative max-w-lg mx-auto flex justify-center items-center">
                                <!-- Background image that is centered on small and medium screens -->
                                <img class="relative block w-full xl:max-w-sm mx-auto rounded-md"
                                    src="{{ asset('images/side_image.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <!-- Footer Section -->
    <div class="text-center py-6">
        <p class="text-md text-white-400">
            Powered by <span class="bg-gradient-to-r text-white bg-clip-text text-transparent font-semibold">CORBITAL
                TECHNOLOGIES
            </span>
        </p>
    </div>
    <script id="ACXConnectScript" type="text/javascript"
        src="https://campaigns.corbitaltech.dev/websites/6751cf0c4f09a/connect.js"></script>
    <script>
        $(function() {

        })
    </script>
</body>

</html>
