<?php
// Handle age verification
add_action('admin_post_age_verification', 'handle_age_verification');
add_action('admin_post_nopriv_age_verification', 'handle_age_verification');

function handle_age_verification() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['verification_nonce'], 'age_verification_nonce')) {
        wp_die('Security check failed');
    }

    // Validate inputs
    $day = isset($_POST['day']) ? intval($_POST['day']) : 0;
    $month = isset($_POST['month']) ? intval($_POST['month']) : -1;
    $year = isset($_POST['year']) ? intval($_POST['year']) : 0;

    // Validate date
    if (!checkdate($month + 1, $day, $year)) {
        set_transient('age_gate_error', '1', 60);
        wp_redirect(home_url('/age-gate'));
        exit;
    }

    // Calculate age
    $birthdate = new DateTime("$year-" . ($month + 1) . "-$day");
    $today = new DateTime();
    $age = $today->diff($birthdate)->y;

    if ($age >= 21) {
        // Set secure cookie
        setcookie('age_verified', '1', [
            'expires' => time() + 86400 * 30,
            'path' => '/',
            'domain' => parse_url(home_url(), PHP_URL_HOST),
            'secure' => is_ssl(),
            'httponly' => true,
            'samesite' => 'Lax'
        ]);
        
        // Redirect to home
        wp_redirect(home_url());
    } else {
        set_transient('age_gate_error', '1', 60);
        wp_redirect(home_url('/age-gate'));
    }
    exit;
}

// Redirect logic
add_action('template_redirect', 'custom_age_gate_redirect');
function custom_age_gate_redirect() {
    if (is_page('age-gate') || is_admin() || wp_doing_ajax()) return;

    if (!isset($_COOKIE['age_verified'])) {
        wp_redirect(home_url('/age-gate'));
        exit;
    }
}
