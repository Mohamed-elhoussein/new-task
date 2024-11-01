@extends('layouts.app')

@section('content')
<div class="container">
    <h1>قائمة المهام</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">إضافة مهمة جديدة</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>العنوان</th>
                <th>الوصف</th>
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">حذف</button>
                        </form>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">تعديل</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
