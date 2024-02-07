@extends('welcome')

@section('isi')
<!DOCTYPE html>
<html>
<head>
    <title>Pesan Kesalahan</title>
    <style>
        body {
            /* background-color: rgba(182, 177, 177, 0.7); */
            color: #fff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .popup-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .popup {
            background-color: #ffffff;
            color: #fff;
            border-radius: 7px;
            text-align: center;
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .close-button {
            background-color: #222;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .close-button:hover {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="popup-container">
        <div class="popup">
            <h1 style="color: #000000">Anda Tidak Diberikan Akses</h1>
            <p style="color: #000000">Mohon hubungi administrator untuk bantuan lebih lanjut.</p>
            <button class="close-button" onclick="closePopup()">Tutup</button>
        </div>
    </div>
</body>
</html>

<script>
    function closePopup() {
        window.history.back();
    }
</script>
@endsection
