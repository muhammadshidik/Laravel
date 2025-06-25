<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Aritmatika</title>
</head>

<body>
    <h1>{{ $title ?? '' }}</h1>5 
    <a href="{{ url('belajar1') }}">Kembali</a>
    <form action="{{ route('tambah-action') }}" method="post">
        @csrf
        <input type="hidden" name="jenis" value="tambah">
        <label for="">Angka 1</label>
        <input type="number" name="angka1" placeholder="Masukkan Angka">
        <br>
        <label for="">Angka 2</label>
        <input type="number" name="angka2" placeholder="Masukkan Angka">
        <br>
        <button type="submit">Simpan</button>
    </form>
    @if (isset($jumlah))
        <h1>Hasilnya adalah {{ $jumlah }}</h1>
    @endif
    @if (isset($error))
        <h2>{{ $error }}</h2>
    @endif

    <a href="{{ url('data/hitungan') }}">Data Hitungan</a>
</body>

</html>
