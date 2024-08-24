<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('perhitungan.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="namaBarang">Nama Barang</label>
                        <input type="text" class="form-control" id="namaBarang" name="nama_barang" placeholder="Masukkan Nama Barang">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stock" step="0.01" placeholder="Masukkan Stok">
                    </div>
                    <div class="form-group">
                        <label for="jumlahTerjual">Jumlah Terjual</label>
                        <input type="number" class="form-control" id="jumlahTerjual" name="jumlah_terjual" step="0.01" placeholder="Masukkan Jumlah Terjual">
                    </div>
                    <div class="form-group">
                        <label for="tanggalTransaksi">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="tanggalTransaksi" name="tanggal_transaksi">
                    </div>
                    <div class="form-group">
                        <label for="jenisBarang">Jenis Barang</label>
                        <input type="text" class="form-control" id="jenisBarang" name="jenis_barang" placeholder="Masukkan Jenis Barang">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
