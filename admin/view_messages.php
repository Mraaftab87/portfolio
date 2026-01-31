<?php
session_start();
require_once '../db_connect.php';

// Simple authentication (In production, use proper authentication)
$admin_password = 'admin123'; // Change this!

if (!isset($_SESSION['admin_logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
        if ($_POST['password'] === $admin_password) {
            $_SESSION['admin_logged_in'] = true;
        } else {
            $error = 'Invalid password';
        }
    }
    
    if (!isset($_SESSION['admin_logged_in'])) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin Login</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../assets/css/style.css">
        </head>
        <body>
            <div class="container">
                <div class="row justify-content-center align-items-center min-vh-100">
                    <div class="col-md-4">
                        <div class="contact-form-wrapper">
                            <h2 class="text-center mb-4">Admin Login</h2>
                            <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                            <?php endif; ?>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

// Mark message as read
if (isset($_GET['mark_read'])) {
    $id = (int)$_GET['mark_read'];
    $stmt = $pdo->prepare("UPDATE contact_messages SET is_read = 1 WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: view_messages.php');
    exit;
}

// Delete message
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM contact_messages WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: view_messages.php');
    exit;
}

// Fetch all messages
$stmt = $pdo->query("SELECT * FROM contact_messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="section-title">Contact Messages</h1>
                    <a href="?logout=1" class="btn btn-outline-primary">Logout</a>
                </div>
                
                <?php if (empty($messages)): ?>
                <div class="alert alert-info">No messages yet.</div>
                <?php else: ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($messages as $msg): ?>
                            <tr style="<?php echo $msg['is_read'] ? 'opacity: 0.6;' : ''; ?>">
                                <td><?php echo date('M d, Y', strtotime($msg['created_at'])); ?></td>
                                <td><?php echo htmlspecialchars($msg['name']); ?></td>
                                <td><?php echo htmlspecialchars($msg['email']); ?></td>
                                <td><?php echo htmlspecialchars($msg['subject']); ?></td>
                                <td><?php echo htmlspecialchars(substr($msg['message'], 0, 50)) . '...'; ?></td>
                                <td>
                                    <?php if ($msg['is_read']): ?>
                                    <span class="badge bg-secondary">Read</span>
                                    <?php else: ?>
                                    <span class="badge bg-primary">New</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if (!$msg['is_read']): ?>
                                    <a href="?mark_read=<?php echo $msg['id']; ?>" class="btn btn-sm btn-success">
                                        <i class="bi bi-check"></i>
                                    </a>
                                    <?php endif; ?>
                                    <a href="?delete=<?php echo $msg['id']; ?>" 
                                       class="btn btn-sm btn-danger"
                                       onclick="return confirm('Delete this message?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: view_messages.php');
    exit;
}
?>
