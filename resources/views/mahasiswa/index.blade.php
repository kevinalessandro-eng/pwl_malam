<table border=1>
    <thead>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIM</th>
        <th>NIDN</th>
        <th>Tempat/Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Tanggal Pembuatan</th>
    </thead>
    @foreach ($mahasiswa as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->fullname}}</td>
        <td>{{$m->NIM}}</td>
        <td>{{$m->tempat_lahir}}</td>
        <td>{{$m->alamat}}</td>
        <td>{{$m->created_at}}</td>
    </tr>
</table>