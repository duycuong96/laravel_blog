@foreach ($comments as $comment)
<tr>
    <td>{{ $comment->id}}</td>
    <td>{{ $comment->title}}</td>
    <td>
    <a class="btn btn-primary btn-sm d-inline" href="{{ url('admin/comments/'. $comment->id . '/edit') }}">Sửa</a>
        {{-- <a onclick="return destroy()" href="{{ route('comments.destroy') }}" class="btn btn-danger btn-sm">Xóa</a> --}}
        <form class="d-inline" action="{{ url('admin/comments' , $comment->id ) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm d-inline" onclick="return destroy()">Delete</button>
        </form>
    </td>
</tr>
@endforeach
