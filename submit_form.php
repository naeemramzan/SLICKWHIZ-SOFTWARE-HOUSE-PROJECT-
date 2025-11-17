<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $idea = filter_input(INPUT_POST, 'idea', FILTER_SANITIZE_STRING);

    // Set default values if not provided
    if (empty($service)) {
        $service = 'General Inquiry';
    }
    if (empty($idea)) {
        $idea = '';
    }
    if (empty($phone)) {
        $phone = '';
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO callback_requests (full_name, email, phone, service_selected, project_idea) VALUES (?, ?, ?, ?, ?)");
        
        if ($stmt->execute([$name, $email, $phone, $service, $idea])) {
            // Replaced the JavaScript alert with a clean PHP header redirect.
            // This will redirect to the contact page and show a success message.
            header('Location: contact.php?status=success');
            exit;
        } else {
            // Simple error handling
            header('Location: contact.php?status=error');
            exit;
        }
    } catch (PDOException $e) {
        // Log error (in a real app, don't echo sensitive info)
        // error_log($e->getMessage());
        header('Location: contact.php?status=error');
        exit;
    }
} else {
    // If not a POST request, redirect to home
    header('Location: index.php');
    exit;
}
?>