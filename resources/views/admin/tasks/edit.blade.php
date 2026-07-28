<x-app-layout>


    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800">

            Admin - Edit Task

        </h2>

    </x-slot>



    <div class="py-12">


        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white shadow-md rounded-lg p-8">


                <div class="mb-6">

                    <p class="text-sm text-gray-500">

                        Task Owner

                    </p>


                    <p class="font-semibold">

                        {{ $task->user->name }}

                    </p>


                </div>



                <form method="POST"
                      action="{{ route('admin.tasks.update',$task->id) }}">


                    @csrf
                    @method('PUT')



                    <!-- Title -->

                    <div class="mb-6">

                        <label class="block text-sm font-medium text-gray-700 mb-2">

                            Task Title

                        </label>


                        <input
                            type="text"
                            name="title"
                            value="{{ old('title',$task->title) }}"
                            class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                        >

                    </div>




                    <!-- Description -->

                    <div class="mb-6">


                        <label class="block text-sm font-medium text-gray-700 mb-2">

                            Description

                        </label>



                        <textarea
                            name="description"
                            rows="5"
                            class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                        >{{ old('description',$task->description) }}</textarea>


                    </div>



                    <div class="flex justify-end gap-3">


                        <a href="{{ route('admin.tasks.index') }}"
                           class="px-5 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">

                            Cancel

                        </a>




                        <button
                            class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">


                            Update Task


                        </button>


                    </div>



                </form>


            </div>


        </div>


    </div>


</x-app-layout>