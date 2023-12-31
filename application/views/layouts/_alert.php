<?php
$success = $this->session->flashdata('success');
$error = $this->session->flashdata('error');
$warning = $this->session->flashdata('warning');

if ($success) {
    $alert_status = 'alert-success';
    $status = 'Good Job!';
    $message = $success;
}

if ($error) {
    $alert_status = 'alert-danger';
    $status = 'Oops.!';
    $message = $error;
}

if ($warning) {
    $alert_status = 'alert-warning';
    $status = 'Warning!';
    $message = $warning;
}
?>

<?php if ($success || $error || $warning) : ?>
    <div class="alert <?= $alert_status; ?> alert-dismissible fade show" role="alert">
        <strong><?= $status; ?></strong> <?= $message; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>