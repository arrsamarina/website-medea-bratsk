<?php
// submit_promo.php
declare(strict_types=1);

// 1) БД
require_once 'db.php'; // здесь создаётся $pdo (PostgreSQL, PDO::ERRMODE_EXCEPTION)

// 2) Данные
$email = trim($_POST['email'] ?? '');
$agreement = isset($_POST['agreement']); // чекбокс

$errors = [];

// 3) Валидация
if (!$agreement) {
    $errors[] = 'Нужно дать согласие на обработку персональных данных';
}

if ($email === '') {
    $errors[] = 'Email обязателен для заполнения';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Введите корректный email';
}

// 4) Если ошибки — редирект назад
$redirect = 'akcii.html';
if ($errors) {
    $msg = urlencode(implode(', ', $errors));
    header("Location: {$redirect}?error={$msg}");
    exit;
}

// 5) Попытка записи
try {
    $stmt = $pdo->prepare(
        'INSERT INTO promo_subscriptions (email, created_at)
         VALUES (:email, NOW())'
    );
    $stmt->execute([':email' => strtolower($email)]);
    header("Location: {$redirect}?success=1");
    exit;

} catch (PDOException $e) {
    // 23505 — уникальный ключ нарушен (дубликат email)
    if ($e->getCode() === '23505') {
        header("Location: {$redirect}?error=" . urlencode('Этот email уже подписан'));
        exit;
    }
    error_log('DB error (submit_promo): ' . $e->getMessage());
    header("Location: {$redirect}?error=" . urlencode('Ошибка сервера. Попробуйте позже.'));
    exit;
}
