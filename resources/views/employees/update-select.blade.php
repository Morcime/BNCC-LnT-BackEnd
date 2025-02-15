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

        .container-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 900px;
            overflow-x: auto;
            z-index: 1;
        }

        h1 {
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .btn-custom {
            padding: 12px;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
            width: 100%;
            max-width: 200px;
            margin-top: 20px;
        }

        .btn-custom:hover {
            transform: scale(1.05);
        }

        .form-container {
            margin-top: 20px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .alert {
            display: none;
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

    <div class="container-box">
        <h1>Update Karyawan</h1>
        
        <h2 class="mb-3">Daftar Karyawan</h2>
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody id="employee-list">
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->nama }}</td>
                    <td>{{ $employee->umur }}</td>
                    <td>{{ $employee->alamat }}</td>
                    <td>{{ $employee->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="form-container">
            <h5>Masukkan ID karyawan yang ingin diupdate:</h5>

            <div class="alert alert-danger" id="error-message">
                ID tidak ditemukan. Silakan masukkan ID yang valid.
            </div>

            <form action="{{ url('/employees/update-input') }}" method="POST" onsubmit="return validateID()">
                @csrf
                <div class="form-group">
                    <label for="id">ID Karyawan</label>
                    <input type="number" name="id" id="id" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-warning btn-custom">Lanjutkan</button>
            </form>
        </div>

        <a href="/" class="btn btn-primary btn-custom mt-3">Kembali ke Menu Utama</a>
    </div>

    <script>
        function validateID() {
            let inputID = document.getElementById("id").value;
            let employeeIDs = [];

            document.querySelectorAll("#employee-list tr td:first-child").forEach(td => {
                employeeIDs.push(td.textContent.trim());
            });

            if (!employeeIDs.includes(inputID)) {
                document.getElementById("error-message").style.display = "block";
                return false;
            }

            return true;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
