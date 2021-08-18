<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Hadi</title>
</head>
<body>
    
    <div class="container">
    <h1>
        Data transaksi
    </h1>
    <h2>Tabel Barang</h2>
    <table class="table table-stripped">
        <thead>
           
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Satuan</th>
            </tr>
            
        </thead>
        <tbody> 
            @foreach($barang as $bar)
            <tr>
                <td>{{ $bar->id }}</td>
                <td>{{ $bar->nama_barang }}</td>
                <td>{{ $bar->jumlah_barang }}</td>
                <td>{{ $bar->harga_satuan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Tabel Transaksi</h2>
    <table class="table table-stripped">
        <thead>
           
            <tr>
                <th>No</th>
                <th>Tanggal Transaksi</th>
            </tr>
            
        </thead>
        <tbody> 
            @foreach($tanggal as $tgl)
            <tr>
                <td>{{ $tgl->id }}</td>
                <td>{{ $tgl->tanggal_transaksi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Tabel Detail Transaksi</h2>
    <table class="table table-stripped">
        <thead>
           
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Tanggal Transaksi</th>
            </tr>
            
        </thead>
        <tbody> 
            @foreach($detail as $dtl)
            <tr>
                <td>{{ $dtl->id }}</td>
                <td>{{ $dtl->barang->nama_barang }}</td>
                <td>{{ $dtl->jumlah_pembelian }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>