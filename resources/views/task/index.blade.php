@extends('layouts.app')
@section('title','Task Index Page')
@push('style')
    
@endpush

@section('content')
    
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <ul class="list-inline">
                    <h1 class="card-title">Tabel Task</h1>
                    <p class="card-description">
                        Tasks milik {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}
                    </p>
                    <li class="list-inline-item">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">
                        <a class="mdi mdi-plus" title="Tambah Data"></a>
                    </button>
                    </li>
                    <li class="list-inline-item">
                    <form class="form-inline form-task" style="margin-left:620px">
                        @csrf
                        <label for="cari" class="control-label ml-5 mr-3"><strong>Cari</strong></label>
                        <input type="text" name="cari" id="cari-task" class="form-control" placeholder="Cari">
                    </form>
                    </li>
                </ul>
                <div class="data-task">
                    @include('task.data_task')
                </div>
                {{ $task->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('task.store') }}" method="post">
            @csrf
            @include('task._form', [
                'task' => new App\Task,
                'button' => 'Save',
            ])
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
    
@endpush