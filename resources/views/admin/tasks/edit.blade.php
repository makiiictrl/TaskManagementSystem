<x-app-layout>

<x-slot name="header">
    <h2>
        Edit Task
    </h2>
</x-slot>


    <div>

        <form method="POST"
        action="{{ route('admin.tasks.update',$task->id) }}">

            @csrf
            @method('PUT')


            <label>
            Title
            </label>

            <input 
            type="text"
            name="title"
            value="{{ $task->title }}"
            >


            <label>
            Description
            </label>

            <textarea name="description">
            {{ $task->description }}
            </textarea>


            <label>
            Status
            </label>

            <select name="status">

            <option value="pending">
            Pending
            </option>

            <option value="completed">
            Completed
            </option>

            </select>


            <button>
            Update
            </button>


        </form> 

    </div>

</x-app-layout>