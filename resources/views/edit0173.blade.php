<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
</head>

<body>
    <h3>Edit Buku</h3>
    <a href="/index"> Kembali</a>
    <br />
    <br />
    @foreach($buku as $b)
    <form action="/index/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->id }}"> <br />
        Judul <input type="text" required="required" name="judul" value="{{ $b->judul }}"> <br />
        Tahun Terbit <textarea required="required" name="tahun_terbit">{{ $b->tahun_terbit }}</textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>

</html>