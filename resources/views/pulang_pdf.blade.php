<!DOCTYPE html>
<html>
<head>
  <title>Laporan Produk</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .letterhead {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table, th, td {
      border: 1px solid #333;
    }
    th, td {
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #555;
      color: #fff;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .signature {
      float: right; /* Added to move the signature to the right */
    }
  </style>
</head>
<body>
  <div class="letterhead">
    <h1>SMKN 1 SUBANG</h1>
    <p>Tanggal: <?php echo date("Y-m-d"); ?></p>
  </div>
  <p>Subang, Jawa Barat</p>
  <p>Kepada: Kepala Sekolah SMKN 1 Subang</p>
  <p>Lampiran: Surat Izin Pulang Sekolah</p>
  <div class="container">
    <p>Dengan Hormat Saya:</p>
    <p>
      Saya, siswa SMKN 1 Subang ,
      mohon izin untuk pulang sekolah pada tanggal <?php echo date("Y-m-d");?> dengan alasan Sakit. dengan Hormat saya</p>
    @foreach ($t as $product)
    <p>NISN:  {{ $product->nis }}</p>
    <p>Nama Lengkap: {{ $product->name }}</p>
    <p>Kelas:  {{ $product->kelas }}</p>
    @endforeach
    <br>
    <div class="signature">
      <p>Kepala Sekolah SMKN 1 SUBANG</p>
      <br>
      <h4 style="margin-bottom: 5px;"><u>Nurul Eka Maryana S.Kom</u></h4>
      <p style="margin-top: 5px;">NIP:12345</p>
      <br>
    </div>
  </div>
</body>
</html>
