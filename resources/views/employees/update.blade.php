<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Karyawan</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ddeaf7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            position: relative;
            padding: 20px;
            overflow: hidden;
        }

        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            opacity: 0.1;
            z-index: -1;
            pointer-events: none;
        }

        .background-pattern span {
            font-size: 60px;
            font-weight: 700;
            color: black;
            margin: 50px;
            opacity: 0.2;
            user-select: none;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
            z-index: 1;
        }

        h1 {
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
        }

        .text-muted {
            font-size: 12px;
            color: gray;
        }

        .btn-custom {
            padding: 12px;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
            width: 100%;
        }

        .btn-custom:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="background-pattern">
        <span>PT ChipiChapa</span>
        <span>PT ChipiChapa</span>
        <span>PT ChipiChapa</span>
        <span>PT ChipiChapa</span>
        <span>PT ChipiChapa</span>
        <span>PT ChipiChapa</span>
    </div>

    <div class="form-container">
        <h1>Update Data Karyawan</h1>
        
        <form action="{{ url('/employees/update/'.$employee->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $employee->nama }}" required minlength="5" maxlength="20">
                <small class="text-muted">Nama harus 5-20 karakter.</small>
            </div>

            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" name="umur" id="umur" class="form-control" value="{{ $employee->umur }}" required min="21">
                <small class="text-muted">Minimal 21 tahun.</small>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $employee->alamat }}" required minlength="10" maxlength="40">
                <small class="text-muted">Alamat harus 10-40 karakter.</small>
            </div>

            <div class="form-group">
                <label for="phone">Telepon</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}" required pattern="08[0-9]{8,10}">
                <small class="text-muted">Harus diawali dengan 08, panjang 9-12 digit.</small>
            </div>

            <button type="submit" class="btn btn-warning btn-custom mt-3">Simpan Perubahan</button>
        </form>

        <a href="/" class="btn btn-primary btn-custom mt-3">Kembali ke Menu Utama</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
