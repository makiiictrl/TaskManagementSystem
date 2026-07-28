<x-app-layout>

    <x-slot name="header">
        <h2>
            My Tasks
        </h2>
    </x-slot>


    <div class="py-12">

        <div>
            <a href="{{ route('tasks.create') }}">
                Create Task
            </a>
        </div>


        @foreach($tasks as $task)

            <div>
                <h3>
                    {{ $task->title }}
                </h3>

                <p>
                    {{ $task->description }}
                </p>

                <p>
                    Status:
                    {{ $task->status }}
                </p>


                <a href="{{ route('tasks.edit',$task->id) }}">
                    Edit
                </a>


                <form method="POST"
                      action="{{ route('tasks.destroy',$task->id) }}">

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Delete
                    </button>

                </form>

            </div>

        @endforeach


    </div>

</x-app-layout>