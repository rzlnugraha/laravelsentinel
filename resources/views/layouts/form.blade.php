<div class="form-group">
    <label for="judul">Judul Buku</label>
    <input type="text" class="form-control {{ $errors->has('judul_buku') ? ' is-invalid' : ''}}" id="judul" placeholder="Judul Buku" name="judul_buku" value="{{ old('judul_buku') ?? $book->judul_buku }}">
    {!! $errors->first('judul_buku','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="pengarang">Pengarang</label>
    <input type="text" class="form-control {{ $errors->has('pengarang')? ' is-invalid' : '' }}" id="pengarang" placeholder="Nama Pengarang" name="pengarang" value="{{ old('pengarang') ?? $book->pengarang }}">
    {!! $errors->first('pengarang','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="penerbit">Penerbit</label>
    <input type="text" class="form-control {{ $errors->has('penerbit') ? ' is-invalid' : ''}}" id="penerbit" placeholder="Nama Penerbit" name="penerbit" value="{{ old('penerbit') ?? $book->penerbit }}">
    {!! $errors->first('penerbit','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="tahun_tebit">Tahun Terbit</label>
    <input type="number" class="form-control {{ $errors->has('tahun_terbit') ? ' is-invalid' : ''}}" id="tahun_tebit" placeholder="Tahun Penebitan Buku" name="tahun_terbit" value="{{ old('tahun_terbit') ?? $book->tahun_terbit }}">
    {!! $errors->first('tahun_terbit','<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>