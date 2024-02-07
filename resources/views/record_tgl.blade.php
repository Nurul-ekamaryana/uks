<!DOCTYPE html>
<html>

<head>
    <title>Laporan medical record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #333;
        }

        th,
        td {
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

        h1 {
            font-size: 24px;
            margin: 0;
        }
    </style>
</head>

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recordM as $product)
                <tr>
                    <td>{{ $product->name_siswa}}</td>
                    <td>{{ $product->kelas }}</td>
                    <td>{{ $product->tg }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
