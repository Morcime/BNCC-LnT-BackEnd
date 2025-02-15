<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>

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
            position: relative;
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

        
        .menu-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
            z-index: 1;
        }

        h1 {
            font-weight: 600;
            color: #333;
        }

        .btn-custom {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            font-weight: 400;
            border-radius: 5px;
            transition: 0.3s;
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

    <div class="menu-container">
        <h1 class="mb-4">Menu Utama</h1>
        <a href="{{ url('/employees') }}" class="btn btn-primary btn-custom mb-2">1. Lihat Karyawan</a>
        <a href="{{ url('/employees/create') }}" class="btn btn-success btn-custom mb-2">2. Tambah Karyawan</a>
        <a href="{{ url('/employees/update-select') }}" class="btn btn-warning btn-custom mb-2">3. Update Karyawan</a>
        <a href="{{ url('/employees/delete-select') }}" class="btn btn-danger btn-custom">4. Hapus Karyawan</a>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
