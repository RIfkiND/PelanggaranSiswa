<!-- siswa.blade.php -->
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Total Pelanggaran Score</th>
            <th>Total Kejadian</th>
            <!-- Add more columns if needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->kelas->nama }}</td>
                <td>{{ $siswa->jurusan->nama }}</td>
                <td>{{ $siswa->total_pelanggaran_score }}</td>
                <td>{{ $siswa->kejadians->count()}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
