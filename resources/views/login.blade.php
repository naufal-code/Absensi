<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ARTINDO</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #070b14;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* CARD */
        .card {
            background: #111827;
            padding: 35px;
            border-radius: 16px;
            width: 380px;
            color: #fff;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.6);
        }

        /* LOGO */
        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .logo img {
            width: 70px;
            height: 70px;
            background: #0f172a;
            padding: 12px;
            border-radius: 16px;
            border: 1px solid #334155;
            box-shadow: 0 0 20px rgba(56, 189, 248, 0.15);
        }

        /* TITLE */
        .title {
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* TABS */
        .tabs {
            display: flex;
            background: #0f172a;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 10px;
            cursor: pointer;
            color: #9ca3af;
            transition: 0.3s;
        }

        .tab.active {
            background: #1f2937;
            color: #38bdf8;
        }

        /* INPUT */
        .input-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 13px;
            color: #9ca3af;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            background: #0f172a;
            border: none;
            border-radius: 8px;
            color: #fff;
        }

        /* ROW */
        .row {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-top: 5px;
        }

        /* BUTTON */
        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: linear-gradient(90deg, #38bdf8, #60a5fa);
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        /* ERROR */
        .error {
            color: #f87171;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="card">

        <!-- LOGO -->
        <div class="logo">
            <img src="{{ asset('assets/logo-artindo.png') }}" alt="logo">
        </div>

        <!-- TITLE -->
        <div class="title">ARTINDO</div>

        <!-- TAB -->
        <div class="tabs">
            <div id="karyawanTab" class="tab active" onclick="switchTab('karyawan')">Karyawan</div>
            <div id="adminTab" class="tab" onclick="switchTab('admin')">Admin</div>
        </div>

        <!-- ERROR -->
        @if (session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <!-- FORM -->
        <form method="POST" action="/login">
            @csrf

            <div class="input-group">
                <label id="label">ID Karyawan</label>
                <input type="text" name="email" placeholder="Enter your ID">
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••">
            </div>

            <div class="row">
                <label><input type="checkbox"> Remember me</label>
                <span style="color:#38bdf8;">Forgot password?</span>
            </div>

            <input type="hidden" name="role" id="role" value="karyawan">

            <button>Secure Login</button>
        </form>

    </div>

    <script>
        function switchTab(role) {
            const k = document.getElementById('karyawanTab');
            const a = document.getElementById('adminTab');
            const label = document.getElementById('label');
            const roleInput = document.getElementById('role');

            if (role === 'karyawan') {
                k.classList.add('active');
                a.classList.remove('active');
                label.innerText = "ID Karyawan";
                roleInput.value = "karyawan";
            } else {
                a.classList.add('active');
                k.classList.remove('active');
                label.innerText = "Username Admin";
                roleInput.value = "admin";
            }
        }
    </script>

</body>

</html>
