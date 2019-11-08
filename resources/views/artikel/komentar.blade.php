@forelse ($comments as $item)
    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
        <div class="col-md-1">
        <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('assets') }}/images/faces/face1.jpg" alt="profile image">
        </div>
        <div class="ticket-details col-md-9">
        <div class="d-flex">
            <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Author :</p>
            <p class="text-primary mr-1 mb-0">{{ $item->user }}</p>
        </div>
        <p class="mb-0 ellipsis"></p>
        <p class="text-gray ellipsis mb-2">{{ $item->content }}
        </p>
        <div class="row text-gray d-md-flex d-none">
            <div class="col-6 d-flex">
            <small class="mb-0 mr-2 text-muted text-muted">Dibuat :</small>
            <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{ $item->created_at->diffForHumans() }}</small>
            </div>
        </div>
        </div>
    </div>
@empty
    <center><strong>Data Kosong</strong></center>
@endforelse