<div class="container">
<?php if($this->session->userdata('is_logged_in')):?>
    <?php $this->load->view('home'); ?>
<?php else: ?>
    <?php $this->load->view('home-guest'); ?>
<?php endif; ?>
</div>