<?php include('../includes/header.php'); ?>
<div class="pp-breadcrumb-wrapper fix bg-cover position-relative">
    <video autoplay muted loop playsinline class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover z-n1">
        <source src="../assets/breadcom.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container position-relative text-center">
        <div class="pp-page-heading">
            <div class="pp-breadcrumb-sub-title">
                <h1 class="wow fadeInUp text-white" data-wow-delay=".3s">Certificate Check</h1>
            </div>
        </div>
    </div>
</div>
<div class="checker-container">
    <form method="POST" action="">
        <h2>🔍 Verify Your Certificate</h2>
        <label for="cert_no">Enter Certificate Number</label><br><br>
        <input type="text" name="cert_no" id="cert_no" placeholder="e.g., HH8-CA-1234" required><br>
        <button type="submit">Check</button>
    </form>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('../includes/footer.php'); ?>
