<table border=1>
    <thead>
        <th>No</th>
        <th>Nama Jurusan</th>
        <th>Kode Jurusan</th>
        <th>Tanggal Pembuatan</th>
    </thead>

    <tbody>
        @foreach ($jurusan as $j)
        <tr>
            <td>{{$j->id}}</td> 
            <td>{{$j->nama_jurusan}}</td>
            <td>{{$j->kode_jurusan}}</td>
            <td>{{$j->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>