@extends( 'homepage' )

@section( 'content' )
    <table class="table-stripes">
        <tr>
            <h3><th>Task</th></h3>
            <h3><th>Client</th></h3>
        </tr>
        @foreach( $tasks as $task )
            <tr>
                <td>{{ $task->task_name }}</td>
                <td>{{ $task->client }}</td>
                <td><a href="" class="btn remove-task-button align-right">Remove</a></td>
            </tr>
        @endforeach
    </table>
@endsection
