<x-app-layout>

<x-slot name="header">

<div class="flex justify-between items-center">

<h2 class="font-semibold text-xl text-gray-800">
    My Tasks
</h2>


<a href="{{ route('tasks.create') }}"
class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">

+ Create Task

</a>

</div>

</x-slot>


<div class="py-8">

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded mb-5">

{{ session('success') }}

</div>

@endif

<form method="GET"
      action="{{ route('tasks.index') }}"
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

        <a href="{{ route('tasks.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg whitespace-nowrap flex items-center">

            Clear Filter

        </a>

    @endif


</form>

<div class="grid md:grid-cols-3 gap-6">


@forelse($tasks as $task)


<div class="bg-white shadow rounded-lg p-6">


<h3 class="text-xl font-bold mb-2">

{{ $task->title }}

</h3>



<p class="text-gray-600 mb-4">

{{ $task->description }}

</p>



<span class="
px-3 py-1 rounded-full text-sm

{{ $task->status == 'completed'
? 'bg-green-100 text-green-700'
: 'bg-yellow-100 text-yellow-700'
}}
">

{{ ucfirst($task->status) }}

</span>



<div class="mt-5 flex gap-3">


<a href="{{ route('tasks.edit',$task->id) }}"
class="bg-blue-500 text-white px-3 py-2 rounded">

Edit

</a>



<form method="POST"
action="{{ route('tasks.destroy',$task->id) }}">

@csrf
@method('DELETE')


<button
class="bg-red-500 text-white px-3 py-2 rounded">

Delete

</button>




</form>

@if($task->status == 'pending')

<form method="POST"
      action="{{ route('tasks.complete',$task->id) }}">

    @csrf

    <button
        class="bg-green-600 text-white px-3 py-2 rounded-lg">

        Mark Complete

    </button>

</form>

@endif


</div>


</div>


@empty

<div>
    No tasks available.
</div>

@endforelse


</div>


<div class="mt-6">

    {{ $tasks->links() }}

</div>


</div>

</div>


</x-app-layout>