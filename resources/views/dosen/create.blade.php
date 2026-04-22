<html>
    
    <form class="form" action="{{ action([App\Http\Controllers\DosenController::class, 'store']) }}" method="post">
        @csrf
        <table>
            <div class="form-group">
            <label>Nama Lengkap :</label>
            <input type="text" name="fullname" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Nomor Induk Pegawai :</label>
            <input type="text" name="NIP" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Nomor Induk Dosen Nasional :</label>
            <input type="text" name="NIDN" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Pendidikan Terakhir :</label>
            <input type="text" name="pendidikan_terakhir" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Jurusan ID :</label>
            <input type="text" name="jurusan_id" size="40">
            <br>
            </div>      

            <div class="form-group">
            <label>Tempat Lahir :</label>
            <input type="text" name="tempat_lahir" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Tanggal Lahir :</label>
            <input type="text" name="tanggal_lahir" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Alamat :</label>
            <textarea type="text" name="alamat" size="40"></textarea>
            <br>
            </div>

            <button type="submit" class="button">Add</button>
            <button type="reset" class="button">Clear</button>
        </table>
    </form>
</html>