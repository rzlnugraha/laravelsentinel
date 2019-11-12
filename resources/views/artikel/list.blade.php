<table class="table">
    <thead>
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Foto</th>
        <th colspan="3"><center>Action</center></th>
    </tr>
    </thead>
    <tbody>
    @forelse ($artikel as $item)
    <tr>
        <td>{{ $item->title }}</td>
        <td>{{ str_limit($item->content, $limit=20, $end='...') }}</td>
        <td>{{ $item->author }}</td>
        <td><img src="{{ $item->img_article() }}" width="120" height="70" alt="" srcset=""></td>
        <td><a href="{{ route('article.show',$item->id) }}" class="btn btn-primary btn-xs mdi mdi-eye" title="Read"></a></td>
        <td><a href="{{ route('article.edit',$item->id) }}" class="btn btn-info btn-xs mdi mdi-pencil" title="Edit"></a></td>
        <td>
            <form action="{{ route('article.destroy',$item->id) }}" method="post">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-xs mdi mdi-delete" title="Delete" onclick="return confirm('Yakin hapus data?')"></button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6"><center><strong>Data Tidak Ditemukan</strong></center></td>
    </tr>
    @endforelse
</tbody>