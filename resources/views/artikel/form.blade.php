<div class="form-group">
    <input type="hidden" name="article_id" id="article_id">
    <label for="title">Judul Artikel</label>
    <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : ''}}" id="title" placeholder="Judul Artikel" name="title" value="{{ old('title') ?? $article->title }}">
    {!! $errors->first('title','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control {{ $errors->has('content')? ' is-invalid' : '' }}" id="content" placeholder="Nama Pengarang" name="content" value="{{ old('content') ?? $article->content }}">
    {!! $errors->first('content','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control {{ $errors->has('author') ? ' is-invalid' : ''}}" id="author" placeholder="Nama Penerbit" name="author" value="{{ old('author') ?? $article->author }}">
    {!! $errors->first('author','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="modal-footer">
    <button type="{{ $type }}" class="btn btn-primary" id="button-edit-artikel">{{ $button }}</button>
</div>