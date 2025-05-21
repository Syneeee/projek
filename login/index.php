<?php
session_start();
require_once "../database.php"; // Hindari redeklarasi dengan require_once

$error_message = null;
$error_message1 = null;

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $conn = getDatabaseConnection();

        $stmt = $conn->prepare("SELECT * FROM tb_user WHERE username = :username");
        $stmt->execute([':username' => $username]);

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $row['role'];
                $_SESSION['login'] = true;

                if ($row['role'] === 'admin') {
                    header("Location: ../admin/dashboard/index.php");
                    exit;
                } elseif ($row['role'] === 'kasir') {
                    header("Location: /laundry_project/dashboard_kasir/index.php");
                    exit;
                } elseif ($row['role'] === 'owner') {
                    header("Location: /laundry_project/dashboard_owner/index.php");
                    exit;
                }
            } else {
                $error_message = "Password salah!";
            }
        } else {
            $error_message1 = "Username tidak ditemukan!";
        }

    } catch (PDOException $e) {
        $error_message = "Database error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
      <!-- SVG/logo bisa disisipkan di sini jika perlu -->
    </div>

    <?php if (isset($error_message)): ?>
      <div class="text-red-500 text-sm mb-4">
        <?= htmlspecialchars($error_message) ?>
      </div>
    <?php endif; ?>

    <?php if (isset($error_message1)): ?>
      <div class="text-red-500 text-sm mb-4">
        <?= htmlspecialchars($error_message1) ?>
      </div>
    <?php endif; ?>

    <div class="w-full sm:max-w-md mt-6 px-8 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
      <form method="POST" action="">

        <div>
          <label class="block font-serif text-3xl text-blue-500 mb-2">Login</label>
        </div>

        <div>
          <label class="block font-medium text-sm text-gray-700 mb-1" for="username">Username</label>
          <input class="px-3 py-2 border border-gray-300 focus:border-indigo-500 focus:outline-indigo-500 rounded-md shadow-sm block w-full" id="username" type="text" name="username" required autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
          <label class="block font-medium text-sm text-gray-700 mb-1" for="password">Password</label>
          <input class="px-3 py-2 border border-gray-300 focus:border-indigo-500 focus:outline-indigo-500 rounded-md shadow-sm block w-full" id="password" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="mt-4">
          <label for="remember_me" class="flex items-center">
            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">Remember me</span>
          </label>
        </div>

        <div class="flex items-center justify-end mt-4">
          <button type="submit" class="px-6 py-2 min-w-[120px] text-center text-white bg-violet-600 border border-violet-600 rounded hover:bg-transparent hover:text-violet-600 focus:outline-none focus:ring w-full" name="submit">Log in</button>
        </div>

        <div class="mt-4 text-center">
          Belum punya akun? <a class="text-blue-900" href="/laundry_project/register/index.php">Register</a>
        </div>

      </form>
    </div>
  </div>
</div>
</body>
</html>
