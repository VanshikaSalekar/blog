<?php
/* Template Name: Contact Page */

get_header();
global $wpdb;

$table_name = $wpdb->prefix . "contact_messages";

if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . "wp-admin/includes/upgrade.php");
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta($sql);
}

$success = "";
$error = "";

// --- FORM PROCESSING LOGIC ---
if (isset($_POST["save_message"])) {

    if (!isset($_POST["contact_nonce"]) || !wp_verify_nonce($_POST["contact_nonce"], "save_contact_form")) {
        $error = "Security check failed!";
    } else {
        
        // CRITICAL FIX: Changed $_POST["name"] to $_POST["contact_name"] to avoid WordPress 404 conflicts.
        $name = sanitize_text_field($_POST["contact_name"]);
        $message = sanitize_textarea_field($_POST["message"]);

        if (!empty($name) && !empty($message)) {
            
            $wpdb->show_errors();

            $inserted = $wpdb->insert(
                $table_name,
                [
                    "name" => $name, // The database column is still called "name"
                    "message" => $message
                ],
                [
                    "%s", 
                    "%s"  
                ]
            );

            if ($inserted) {
                $success = "Message saved successfully!";
            } else {
                $error = "Database error: " . $wpdb->last_error;
            }
        } else {
            $error = "All fields are required!";
        }
    }
}
?>

<section class="section">
  <div class="container">
    <h1>Contact</h1>

    <?php if ($success): ?>
      <p style="color:green; font-weight:bold;"><?php echo esc_html($success); ?></p>
    <?php endif; ?>

    <?php if ($error): ?>
      <p style="color:red; font-weight:bold;"><?php echo esc_html($error); ?></p>
    <?php endif; ?>

    <div class="card">
      <form method="post" action="">

        <?php wp_nonce_field("save_contact_form", "contact_nonce"); ?>

        <label for="form_name">Name</label><br>
        <input type="text" id="form_name" name="contact_name" required
          style="width:100%; padding:10px; margin:10px 0;"><br>

        <label for="form_message">Message</label><br>
        <textarea id="form_message" name="message" required rows="5"
          style="width:100%; padding:10px; margin:10px 0;"></textarea><br>

        <button class="btn" type="submit" name="save_message">
          Save Message
        </button>

      </form>
    </div>

  </div>
</section>

<?php get_footer(); ?>