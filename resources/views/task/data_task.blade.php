<div class="table-responsive">
    <table class="table table-stripped" id="myTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Task</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp
        @forelse ($task as $item)
        <tbody>
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="" class="btn btn-info btn-sm"><i class="mdi mdi-eye"></i></a>
                    <a href="{{ route('task.destroy',$item->id) }}" class="btn btn-danger btm-sm" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-delete"></i>
                
                        <form id="logout-form" action="{{ route('task.destroy',$item->id) }}" method="POST" style="display: none;">
                            @csrf @method('DELETE')
                        </form>
                    </a>
                </td>
            </tr>
        </tbody>
        @empty
        <tr>
            <td colspan="3"><center><strong>Data tidak ditemukan</strong></center></td>
        </tr>
        @endforelse
    </table>
</div>