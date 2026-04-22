<table border=1>
    <thead>
        <th>No</th>
        <th>Jurusan ID</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>Dosen ID</th>
        <th>Tanggal Pembuatan</th>
    </thead>

    <tbody>
        @foreach ($matakuliah as $mk)
        <tr>
            <td>{{$mk->id}}</td> 
            <td>{{$mk->jurusan_id}}</td>
            <td>{{$mk->kode_mk}}</td>
            <td>{{$mk->nama_mk}}</td>
            <td>{{$mk->sks}}</td>
            <td>{{$mk->dosen_id}}</td>
            <td>{{$mk->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>