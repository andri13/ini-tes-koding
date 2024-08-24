<div class="modal fade" id="editModal-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{ $value->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel-{{ $value->id }}">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('perhitungan.update', $value->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $value->nama_barang }}" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $value->stock }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_terjual">Jumlah Terjual</label>
                        <input type="number" class="form-control" id="jumlah_terjual" name="jumlah_terjual" value="{{ $value->jumlah_terjual }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_transaksi">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ \Carbon\Carbon::parse($value->tanggal_transaksi)->format('Y-m-d') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="{{ $value->jenis_barang }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
