<x-app-layout>

<x-slot name="header">
    <h2>
        Create Task
    </h2>
</x-slot>


<div>

<form method="POST" action="{{ route('tasks.store') }}">

@csrf


<div>

<label>
Title
</label>

<input type="text" name="title">

</div>


<div>

<label>
Description
</label>

<textarea name="description"></textarea>

</div>


<button type="submit">
Save Task
</button>


</form>

</div>


</x-app-layout>