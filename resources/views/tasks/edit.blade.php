<x-app-layout>

<x-slot name="header">
    <h2>
        Edit Task
    </h2>
</x-slot>


<div>

<form method="POST"
      action="{{ route('tasks.update',$task->id) }}">

@csrf
@method('PUT')


<div>

<label>
Title
</label>

<input 
type="text"
name="title"
value="{{ $task->title }}"
>

</div>


<div>

<label>
Description
</label>

<textarea name="description">
{{ $task->description }}
</textarea>

</div>


<button type="submit">
Update Task
</button>


</form>

</div>


</x-app-layout>