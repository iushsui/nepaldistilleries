<?php
/*
Template Name: Age Gate
*/

//get_header();
?>

<style>
/* Keep your original styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    position: relative;
    background: url('<?php the_field('background_image' , 'option'); ?>') no-repeat center center/cover;
    font-family: Arial, sans-serif;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.content-box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-width: 800px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    display: flex;
    min-height: 400px;
}

.left-section {
    flex: 1;
    padding: 20px;
    background: url('<?php the_field('main_image' , 'option'); ?>') left center/cover;
    border-radius: 10px 0 0 10px;
}

.right-section {
    flex: 1;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.age-form {
    margin-top: 20px;
    width: 100%;
}

.date-inputs {
    display: flex;
    gap: 10px;
    margin: 15px 0;
}

select {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: white;
}

button {
    background-color: #28a745;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}

h2 {
    margin-bottom: 10px;
    color: #333;
}

p {
    margin-bottom: 15px;
    color: #666;
    line-height: 1.5;
    text-align: center;
}

/* Modal Styles */
.agegate-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    z-index: 9999;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 30px;
    border-radius: 8px;
    text-align: center;
    max-width: 400px;
}

.modal-close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    font-size: 20px;
}

@media (max-width: 768px) {
    .content-box {
        flex-direction: column;
        width: 90%;
    }

    .left-section {
        height: 200px;
        border-radius: 10px 10px 0 0;
    }

    .date-inputs {
        flex-direction: column;
    }
}
</style>

<div class="overlay"></div>
<div class="content-box">
    <div class="left-section"></div>
    <div class="right-section">
        

        <h2>Age Verification Required</h2>
        <p>To access this website, you must be at least 21 years of age.</p>

        <form class="age-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="age_verification">
            <?php wp_nonce_field('age_verification_nonce', 'verification_nonce'); ?>
            
            <div class="date-inputs">
                <select name="day" required>
                    <option value="" disabled selected>Day</option>
                    <?php for ($day = 1; $day <= 31; $day++) : ?>
                        <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                    <?php endfor; ?>
                </select>
                
                <select name="month" required>
                    <option value="" disabled selected>Month</option>
                    <?php
                    $months = ['January', 'February', 'March', 'April', 'May', 'June',
                              'July', 'August', 'September', 'October', 'November', 'December'];
                    foreach ($months as $index => $month) : ?>
                        <option value="<?php echo $index; ?>"><?php echo $month; ?></option>
                    <?php endforeach; ?>
                </select>
                
                <select name="year" required>
                    <option value="" disabled selected>Year</option>
                    <?php for ($year = date('Y'); $year >= date('Y') - 100; $year--) : ?>
                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            
            <button type="submit">Enter Site</button>
        </form>
        
        <p class="legal-text">By entering, you agree to our Terms of Service.</p>
    </div>
</div>

<!-- Error Modal -->
<div class="agegate-modal" id="errorModal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <h3>Access Restricted</h3>
        <p>You are not of the legal age limit to visit our website at this time.<br>
        Please return when you're 21 or older!</p>
        <button onclick="closeModal()">Close</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    <?php if(get_transient('age_gate_error')) : ?>
        document.getElementById('errorModal').style.display = 'block';
        <?php delete_transient('age_gate_error'); ?>
    <?php endif; ?>
});

function closeModal() {
    document.getElementById('errorModal').style.display = 'none';
}

window.onclick = function(event) {
    const modal = document.getElementById('errorModal');
    if (event.target == modal) {
        closeModal();
    }
}
</script>

<?php //get_footer(); ?>