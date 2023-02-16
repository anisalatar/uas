<div class="row mt-2">
    <div class="col-12 mx-auto">
        <div class="card">
            <div class="card-header">
                Form Input Mahasiswa
            </div>
            <div class="card-body">
                <form action="index.php?page=mahasiswa_save" method="POST">
                    <div class="mb-1">
                        <label class="form-label" for="">NIM</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukan NIM Anda">
                    </div>
                    <div class="mb-">
                        <label class="form-label" for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan Anda">
                    </div>
                    <div class="mb-">
                        <label class="form-label" for="">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="5" placeholder="Msaukan Alamat"></textarea>
                    </div>
                    <div class="mb-1">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
      


  