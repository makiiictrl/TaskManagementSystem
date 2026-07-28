<x-app-layout>

<x-slot name="header">

<h2 class="font-semibold text-xl">
Create Task
</h2>

</x-slot>


<div class="py-8">

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">


<form method="POST"
action="{{ route('tasks.store') }}">

@csrf


<div class="mb-4">

<label class="block font-medium">
Title
</label>


<input
type="text"
name="title"
class="w-full border rounded p-2"
>

</div>



<div class="mb-4">

<label class="block font-medium">
Description
</label>


<textarea
name="description"
class="w-full border rounded p-2">
</textarea>


</div>



<button
class="bg-blue-600 text-white px-5 py-2 rounded">

Save Task

</button>


</form>


</div>

</div>


</x-app-layout>