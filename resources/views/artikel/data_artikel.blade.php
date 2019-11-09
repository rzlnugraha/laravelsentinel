<div class="card-body data-artikel">
    <h1 class="card-title mb-4">{{ $article->title }}</h2>
    <div class="fluid-container">
    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
        <div class="col-md-1">
        <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('assets') }}/images/faces/face1.jpg" alt="profile image">
        </div>
        <div class="ticket-details col-md-9">
        <div class="d-flex">
            <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Author :</p>
            <p class="text-primary mr-1 mb-0">{{ $article->author }}</p>
        </div>
        <p class="mb-0 ellipsis"></p>
        <p class="text-gray ellipsis mb-2">{{ $article->content }}
        </p>
        <div class="row text-gray d-md-flex d-none">
            <div class="col-6 d-flex">
            <small class="mb-0 mr-2 text-muted text-muted">Dibuat :</small>
            <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{ $ada = empty($article->created_at) ? 'Di buat pake seeder' : $article->created_at->diffForHumans() }}</small>
            </div>
        </div>
        <div class="row text-gray d-md-flex d-none">
            <div class="col-6 d-flex">
            @if (!empty($article->created_at != $article->updated_at))
            <small class="mb-0 mr-2 text-muted text-muted">Dirubah :</small>
            <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{ $ada = empty($article->updated_at) ? 'Di buat pake seeder' : $article->updated_at->diffForHumans() }}</small>
            @else
            <small class="mb-0 mr-2 text-muted text-muted">Belum pernah dirubah :</small>
            <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{ $ada = empty($article->updated_at) ? 'Di buat pake seeder' : $article->updated_at->diffForHumans() }}</small>
            @endif
            </div>
        </div>

        </div>
        <div class="ticket-actions col-md-2">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">
                <a class="mdi mdi-pencil" title="Edit Data"> Edit</a>
            </button>
        </div>
    </div>
    </div>
</div>