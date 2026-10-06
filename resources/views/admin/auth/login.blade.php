<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Nexteck Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #0C1B33;
            --gold: #B8933F;
            --bg: #F8FAFC;
            --line: #E2E8F0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', system-ui, sans-serif; background: var(--bg); color: var(--ink); height: 100vh; display: flex; align-items: center; justify-content: center; }

        .login-card { background: #fff; width: 100%; max-width: 420px; padding: 2.5rem; border-radius: 16px; border: 1px solid var(--line); box-shadow: 0 15px 35px rgba(12, 27, 51, 0.08); }
        .login-header { text-align: center; margin-bottom: 2rem; }
        .logo { font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--ink); text-decoration: none; }
        .logo span { color: var(--gold); }
        .login-header p { font-size: 0.9rem; color: #64748B; margin-top: 0.4rem; }

        .form-group { margin-bottom: 1.2rem; }
        .form-group label { display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem; }
        .form-control { width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--line); border-radius: 8px; font-size: 0.95rem; }
        .form-control:focus { outline: none; border-color: var(--gold); box-shadow: 0 0 0 3px rgba(184,147,63,0.15); }

        .btn-login { width: 100%; padding: 0.85rem; background: var(--ink); color: #fff; border: none; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: background 0.2s; }
        .btn-login:hover { background: #1E2D4A; }

        .alert-error { background: #FEE2E2; color: #991B1B; border: 1px solid #FECACA; padding: 0.75rem 1rem; border-radius: 8px; font-size: 0.88rem; margin-bottom: 1.2rem; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <a href="#" class="logo">Nexte<span>c</span>k Admin</a>
            <p>Enter your credentials to access management dashboard</p>
        </div>

        @if($errors->any())
            <div class="alert-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="admin@nexteck.co.uk">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="••••••••">
            </div>

            <button type="submit" class="btn-login">Sign in to Dashboard</button>
        </form>
    </div>
</body>
</html>
