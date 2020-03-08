@foreach ($users as $user)
<tr>
    <td>{{ $user->id}}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->post->count() }}</td>
    <td>
        @if ($user->role == 1)
        User
        @else
        Admin
        @endif
    </td>
    <td>
    <a class="btn btn-primary btn-sm d-inline" href="{{ route('users.edit', [$user->id]) }}">Sửa</a>
    {{-- <a class="btn btn-danger btn-sm d-inline" href="{{ route('users.destroy', [$user->id]) }}" >Xóa</a> --}}
    <form class="d-inline" action="{{ route('users.destroy', [$user->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm d-inline" onclick="return destroy()">Xóa</button>
    </form>
    </td>
</tr>
@endforeach
