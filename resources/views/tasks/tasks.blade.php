<h1>タスク一覧</h1>

    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            @if (!empty($tasks))
            <tbody>
               
             
               @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id] ) !!}</td>
                    <td>{{$task->status}}</td>
                    <td>{{$task->content}}</td>
                    
                </tr>
                @endforeach
               
                
            </tbody>
            @endif   
    
        
                   
        </table>
   
    {{ $tasks->links('pagination::bootstrap-4') }}
    {!! link_to_route('tasks.create', '新規タスクの入力', [], ['class' => 'btn btn-primary']) !!}
