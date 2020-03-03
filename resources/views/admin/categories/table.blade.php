@foreach ($categories as $cate)
<tr>
    <td>{{ $cate->id}}</td>
    <td>{{ $cate->name }}</td>
    <td>
    <a class="btn btn-primary btn-sm d-inline" href="{{ route('categories.edit', [$cate->id]) }}">Sửa</a>
    {{-- <a class="btn btn-danger btn-sm d-inline" href="{{ route('categories.destroy', [$cate->id]) }}" >Xóa</a> --}}
    <form class="d-inline" action="{{ route('categories.destroy', [$cate->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm d-inline" onclick="return destroy()">Xóa</button>
    </form>
    </td>
</tr>
@endforeach
