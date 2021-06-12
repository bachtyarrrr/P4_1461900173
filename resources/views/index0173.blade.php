<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Perpustakaan</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #94d0cc;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    <a href="/index/export" target="_blank">Export Excel<a>
    <a class="tambah" href="/index/tambah">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <td>Jenis</td>
                <th>Tahun terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($rak_buku as $b)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->jenis}}</td>
                <td>{{ $b->tahun_terbit }}</td>
                <td>
                    <a class="tambah" href="/index/edit/{{ $b->id }}">Edit</a>
                    |
                    <form action="/index/hapus/{{ $b->id }" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>