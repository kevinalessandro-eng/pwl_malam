<html>
    
    <form class="form" action="{{ action([App\Http\Controllers\JurusanController::class, 'store']) }}" method="post">
        @csrf
        <table>
            <div class="form-group">
            <label>Nama Jurusan :</label>
            <input type="text" name="nama_jurusan" size="40">
            <br>
            </div>

            <div class="form-group">
            <label>Kode Jurusan :</label>
            <input type="text" name="kode_jurusan" size="40">
            <br>
            </div>

            <button type="submit" class="button">Add</button>
            <button type="reset" class="button">Clear</button>
        </table>
    </form>
</html>