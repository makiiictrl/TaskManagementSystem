<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Admin Task Management
            </h2>

        </div>

    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <form method="GET"
                    action="{{ route('admin.tasks.index') }}"
                    class="mb-6 flex gap-3">


                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Search tasks..."
                            class="rounded-lg border-gray-300 w-full"
                        >


                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">

                            Search

                        </button>


                       @if(request('search'))

                            <a href="{{ route('admin.tasks.index') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg whitespace-nowrap flex items-center">

                                Clear Filter

                            </a>

                        @endif


                    </form>


                    <div class="overflow-x-auto">


                        <table class="min-w-full divide-y divide-gray-200">


                            <thead class="bg-gray-50">

                                <tr>


                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Task
                                    </th>


                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Owner
                                    </th>


                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>


                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>


                                </tr>

                            </thead>



                            <tbody class="bg-white divide-y divide-gray-200">


                                @forelse($tasks as $task)


                                <tr class="hover:bg-gray-50">


                                    <td class="px-6 py-4">

                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $task->title }}
                                        </div>


                                        <div class="text-sm text-gray-500">
                                            {{ Str::limit($task->description, 50) }}
                                        </div>

                                    </td>



                                    <td class="px-6 py-4">

                                        <div class="text-sm text-gray-900">
                                            {{ $task->user->name }}
                                        </div>

                                    </td>



                                    <td class="px-6 py-4 text-center">


                                        @if($task->status == 'completed')

                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">
                                                Completed
                                            </span>

                                        @else

                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">
                                                Pending
                                            </span>

                                        @endif


                                    </td>



                                    <td class="px-6 py-4 text-center">


                                        <div class="flex justify-center gap-2">


                                            <a href="{{ route('admin.tasks.edit',$task->id) }}"
                                               class="px-3 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700">

                                                Edit

                                            </a>



                                            <form method="POST"
                                                  action="{{ route('admin.tasks.destroy',$task->id) }}">

                                                @csrf
                                                @method('DELETE')


                                                <button
                                                    class="px-3 py-2 bg-red-600 text-white text-sm rounded-lg hover:bg-red-700">

                                                    Delete

                                                </button>


                                            </form>


                                        </div>


                                    </td>



                                </tr>


                                @empty


                                <tr>

                                    <td colspan="4"
                                        class="px-6 py-4 text-center text-gray-500">

                                        No tasks found.

                                    </td>

                                </tr>


                                @endforelse


                            </tbody>


                        </table>

                        <div class="mt-6">

                            {{ $tasks->links() }}

                        </div>


                    </div>


                </div>


            </div>


        </div>

    </div>


</x-app-layout>