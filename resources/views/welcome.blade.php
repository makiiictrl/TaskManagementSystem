<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Task Management System</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="bg-gray-100">


    <div class="min-h-screen flex flex-col">


        <!-- Navigation -->

        <nav class="bg-white shadow-sm">

            <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">


                <div class="text-xl font-bold text-gray-800">

                    Task Management System

                </div>



                <div class="flex gap-4">


                    @auth

                        <a href="{{ url('/dashboard') }}"
                           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">

                            Dashboard

                        </a>


                    @else


                        <a href="{{ route('login') }}"
                           class="px-4 py-2 text-gray-700 hover:text-blue-600">

                            Login

                        </a>


                        <a href="{{ route('register') }}"
                           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">

                            Register

                        </a>


                    @endauth


                </div>


            </div>

        </nav>



        <!-- Hero Section -->


        <main class="flex-1">


            <section class="max-w-7xl mx-auto px-6 py-20">


                <div class="grid md:grid-cols-2 gap-10 items-center">


                    <div>


                        <h1 class="text-5xl font-bold text-gray-800 leading-tight">

                            Manage Your Tasks
                            <span class="text-blue-600">
                                Easily
                            </span>

                        </h1>



                        <p class="mt-6 text-lg text-gray-600">

                            A simple and efficient task management system
                            that allows users to organize tasks while giving
                            administrators full control over task management.

                        </p>



                        <div class="mt-8 flex gap-4">


                            @guest

                            <a href="{{ route('register') }}"
                               class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">

                                Get Started

                            </a>


                            @else


                            <a href="{{ url('/dashboard') }}"
                               class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">

                                Go to Dashboard

                            </a>


                            @endguest


                        </div>


                    </div>




                    <div class="bg-white rounded-xl shadow-lg p-8">


                        <div class="space-y-5">


                            <div class="flex items-center gap-4">

                                <div class="bg-blue-100 p-3 rounded-lg">

                                    ✓

                                </div>


                                <div>

                                    <h3 class="font-semibold">

                                        Task Management

                                    </h3>


                                    <p class="text-gray-500 text-sm">

                                        Create, update and organize tasks.

                                    </p>


                                </div>

                            </div>




                            <div class="flex items-center gap-4">

                                <div class="bg-green-100 p-3 rounded-lg">

                                    ✓

                                </div>


                                <div>

                                    <h3 class="font-semibold">

                                        Role Based Access

                                    </h3>


                                    <p class="text-gray-500 text-sm">

                                        Separate access for users and administrators.

                                    </p>


                                </div>

                            </div>




                            <div class="flex items-center gap-4">

                                <div class="bg-yellow-100 p-3 rounded-lg">

                                    ✓

                                </div>


                                <div>

                                    <h3 class="font-semibold">

                                        Search and Pagination

                                    </h3>


                                    <p class="text-gray-500 text-sm">

                                        Easily find and manage tasks.

                                    </p>


                                </div>

                            </div>


                        </div>


                    </div>


                </div>


            </section>


        </main>



        <footer class="bg-white py-5 text-center text-gray-500">

            Task Management System © {{ date('Y') }}

        </footer>


    </div>


</body>

</html>