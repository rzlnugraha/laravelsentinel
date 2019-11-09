<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
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
                <td>{{ str_limit($item->description, 120) }}</td>
            </tr>
        </tbody>
        @empty
        <tr>
            <td colspan="3"><center><strong>Data tidak ditemukan</strong></center></td>
        </tr>
        @endforelse
    </table>
</div>