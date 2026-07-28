<x-app-layout>

<x-slot name="header">
    <h2>
        Admin Task Management
    </h2>
</x-slot>


<div class="py-12">

    <h3>All Tasks</h3>


    @foreach($tasks as $task)

        <div>

            <h4>
                {{ $task->title }}
            </h4>


            <p>
                Owner:
                {{ $task->user->name }}
            </p>


            <p>
                Description:
                {{ $task->description }}
            </p>


            <p>
                Status:
                {{ $task->status }}
            </p>


        </div>

    @endforeach


</div>

</x-app-layout>