<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h3, .header h2, .header h1 {
            margin: 5px;
        }

        .address {
            font-size: 14px;
            margin-top: 10px;
        }

        .header img {
            width: 100px;
            display: block;
            margin: 0 auto 10px auto;
        }

        .line {
            border: 3px solid black; 
            margin-top: 5px;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center; 
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>

<div class="invoice-header">
    <div class="invoice-info">
        <h2>Roemah Soebhakti</h2>
        <p><strong>NPM/2210631170028/Fakultas/IlmuKomputer</strong></p>
    </div>
</div>

<hr>

<div class="section details">
    <div>
        <p><strong>DITERBITKAN ATAS NAMA</strong></p>
        <p>Penjual: <strong>Room Soebhakti</strong></p>
    </div>
    <div>
        <p><strong>Pesanan Konsumen</strong></p>
        <p>Pembeli: <strong>M.Subhakti A. Maulana</strong></p>
        <p>Tanggal Pembelian: <strong>22 November 2024</strong></p>
        <p>Alamat Pengiriman: <strong>Soebhakti_Moelana</strong> (6285893265952)</p>
        <p>Perumahan Taman Singaperbangsa, Jalan Gurame 1 Blok B3 No.6, Rt19/Rw6, Teluk Jambe Timur (Masjid Jamie Nurul Iman, Warna Abu-Abu), Telukjambe Timur, Kab. Karawang, 41361 Jawa Barat</p>
    </div>
</div>

<hr>

<h2>Pembelian Product Data Roemah Soebhakti</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Unit</th>
            <th>Type</th>
            <th>Information</th>
            <th>Qty</th>
            <th>Producer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $product)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->unit }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->information }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->producer }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="footer">
    <p>M.SUBHAKTI A. MAULANA - INFORMATIKA - ILMU KOMPUTER</p>
    <p>UNIVERSITAS SINGAPERBANGSA KARAWANG</p>
    <p>2024/2025</p>
</div>

</body>
</html>
