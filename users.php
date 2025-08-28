<?php
if (!defined('IN_SITE')) {
    die('Truy cập không hợp lệ');
}
require_once(__DIR__ . "/layout/header.php");
$title = "Dữ Liệu";
// ===== CHECK KEY =====
if (!isset($_GET['key']) || $_GET['key'] !== 'taolahacker') {
    echo "<h2 style='color:red;text-align:center;margin-top:50px;'>🚧 Bảo Trì 🚧</h2>";
    exit;
}

$username_search = isset($_GET['username']) ? xss($_GET['username']) : '';
$records = [];

// ===== FORM CỘNG/TRỪ TIỀN =====
if (isset($_POST['money_action'])) {
    $uname = xss($_POST['act_username']);
    $amount = floatval($_POST['act_amount']);
    if ($uname !== '' && $amount != 0) {
        $user = $NNL->get_row("SELECT * FROM users WHERE username = '$uname'");
        if ($user) {
            if ($amount > 0) {
                // Cộng tiền
                $NNL->cong("users", "money", $amount, " `username` = '$uname' ");
                $NNL->cong("users", "total_money", $amount, " `username` = '$uname' ");
            } else {
                // Trừ tiền
                $NNL->tru("users", "money", abs($amount), " `username` = '$uname' ");
                $NNL->tru("users", "total_money", abs($amount), " `username` = '$uname' ");
            }
            echo "<div class='alert success'>✅ Đã cập nhật số dư cho <b>{$uname}</b>.</div>";
        } else {
            echo "<div class='alert error'>❌ Không tìm thấy username.</div>";
        }
    } else {
        echo "<div class='alert error'>⚠ Nhập username và số tiền hợp lệ.</div>";
    }
}

// ===== FORM CẬP NHẬT TRỰC TIẾP TRONG BẢNG =====
if (isset($_POST['update_id']) && !isset($_POST['money_action'])) {
    $id = intval($_POST['update_id']);
    $data = [
        'username' => xss($_POST['username']),
        'level' => xss($_POST['level']),
        'money' => floatval($_POST['money']),
        'total_money' => floatval($_POST['total_money']),
        'email' => xss($_POST['email']),
        'banned' => xss($_POST['banned']),
        'qrcodeauth' => xss($_POST['qrcodeauth']),
        'googleauth' => xss($_POST['googleauth']),
    ];
    $NNL->update("users", $data, "id = '$id'");
    echo "<div class='alert success'>✅ Đã cập nhật dữ liệu ID {$id}.</div>";
}

// ===== TRUY VẤN BẢNG USERS =====
if ($username_search !== '') {
    $records = $NNL->get_list("
        SELECT id, username, level, money, total_money, email, banned, qrcodeauth, googleauth
        FROM users
        WHERE username LIKE '%$username_search%'
        ORDER BY id DESC
    ");
}
?>

<style>
    body {
        font-family: "Segoe UI", sans-serif;
        background: #f4f6f8;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1200px;
        margin: auto;
        padding: 20px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
        border-radius: 10px;
    }
    h2 { color: #333; }
    .search-form {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
        background: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
    }
    .search-form input,
    .search-form button {
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
    }
    .search-form button {
        background: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    .search-form button:hover {
        background: #45a049;
    }
    .alert {
        padding: 12px 15px;
        margin-bottom: 15px;
        border-radius: 6px;
        font-size: 14px;
    }
    .alert.success { background: #e6f9ee; border: 1px solid #28a745; color: #2d8a3c; }
    .alert.error { background: #fdeaea; border: 1px solid #dc3545; color: #a71d2a; }
    .table-wrapper { overflow-x: auto; border-radius: 8px; }
    table { border-collapse: collapse; width: 100%; min-width: 800px; }
    table thead { background: #4CAF50; color: white; }
    table th, table td { padding: 10px; border-bottom: 1px solid #ddd; }
    table input { width: 100%; padding: 6px; border-radius: 4px; border: 1px solid #ccc; }
    .btn-save {
        background: #2196F3;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 6px;
        cursor: pointer;
    }
</style>

<div class="container">
    <h2>💰 Form cộng/trừ tiền</h2>
    <form method="post" class="search-form">
        <input type="hidden" name="money_action" value="1">
        <input type="text" name="act_username" placeholder="Nhập username">
        <input type="number" step="0.01" name="act_amount" placeholder="Số tiền (+/-)">
        <button type="submit">Cập nhật</button>
    </form>

    <h2>👤 Dữ liệu bảng <code>users</code></h2>
    <form method="get" class="search-form">
        <input type="hidden" name="key" value="taolahacker">
        <input type="text" name="username" placeholder="Nhập username" value="<?php echo htmlspecialchars($username_search); ?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php if ($username_search === ''): ?>
        <p>⚠ Không có dữ liệu (chưa nhập username).</p>
    <?php elseif (empty($records)): ?>
        <p>⚠ Không tìm thấy dữ liệu.</p>
    <?php else: ?>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Money</th>
                        <th>Total Money</th>
                        <th>Email</th>
                        <th>Banned</th>
                        <th>QR Code Auth</th>
                        <th>Google Auth</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $row): ?>
                        <tr>
                            <form method="post">
                                <td><?php echo $row['id']; ?><input type="hidden" name="update_id" value="<?php echo $row['id']; ?>"></td>
                                <td><input type="text" name="username" value="<?php echo htmlspecialchars($row['username']); ?>"></td>
                                <td><input type="text" name="level" value="<?php echo htmlspecialchars($row['level']); ?>"></td>
                                <td><input type="number" step="0.01" name="money" value="<?php echo htmlspecialchars($row['money']); ?>"></td>
                                <td><input type="number" step="0.01" name="total_money" value="<?php echo htmlspecialchars($row['total_money']); ?>"></td>
                                <td><input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"></td>
                                <td><input type="text" name="banned" value="<?php echo htmlspecialchars($row['banned']); ?>"></td>
                                <td><input type="text" name="qrcodeauth" value="<?php echo htmlspecialchars($row['qrcodeauth']); ?>"></td>
                                <td><input type="text" name="googleauth" value="<?php echo htmlspecialchars($row['googleauth']); ?>"></td>
                                <td><button type="submit" class="btn-save">Lưu</button></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
