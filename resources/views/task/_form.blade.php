<div class="form-group">
    <label for="judul">Name</label>
    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : ''}}" id="judul" placeholder="Name" name="name" value="{{ old('name') ?? $task->name }}">
    {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="pengarang">Description</label>
    <textarea name="description" id="pengarang" cols="30" rows="5" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Deskripsi Tugas">{{ old('description') ??  $task->description }}</textarea>
    {!! $errors->first('description','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>