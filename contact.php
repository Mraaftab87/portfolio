<?php
require_once 'db_connect.php';
require_once 'includes/header.php';

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $subject, $message]);
            $success = true;
        } catch(PDOException $e) {
            $error = 'Failed to send message. Please try again later.';
        }
    }
}
?>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="section-title text-center mb-2">Get In Touch</h1>
                <p class="text-center text-muted mb-5">Have a question or want to work together? Drop me a message!</p>
                
                <?php if ($success): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>
                    Thank you for your message! I'll get back to you soon.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>
                
                <?php if ($error): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <?php echo htmlspecialchars($error); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>

                <div class="contact-form-wrapper">
                    <form method="POST" action="" class="contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="name" 
                                       name="name" 
                                       value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                                       required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email" 
                                       name="email" 
                                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                       required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="subject" 
                                   name="subject" 
                                   value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>"
                                   required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" 
                                      id="message" 
                                      name="message" 
                                      rows="6" 
                                      required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-send me-2"></i>Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info mt-5">
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <div class="contact-info-item">
                                <i class="bi bi-envelope-fill"></i>
                                <h5>Email</h5>
                                <p><?php echo USER_EMAIL; ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="contact-info-item">
                                <i class="bi bi-telephone-fill"></i>
                                <h5>Phone</h5>
                                <p><?php echo USER_PHONE; ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="contact-info-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <h5>Location</h5>
                                <p><?php echo USER_LOCATION; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
