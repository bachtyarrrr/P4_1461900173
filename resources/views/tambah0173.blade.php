<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
</head>

<body>
    <h3>Tambah Buku</h3>
    <a href="/index"> Kembali</a>
    <br />
    <br />
    <form action="/index/store" method="post">
        {{ csrf_field() }}
        Judul <input type="text" name="judul" required="required"> <br />
        Tahun Terbit <textarea name="tahun_terbit" required="required"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>