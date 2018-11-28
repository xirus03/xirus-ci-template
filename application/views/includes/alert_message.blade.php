<?php if( isset($_SESSION['success_message']) ): ?>
    <div class="ui icon positive message" hidden>
        <i class="check icon"></i>
        <i class="close icon"></i>
        <div class="content">
            <div class="header">
                Success Message
            </div>
            <p class="list">&nbsp;<?= $_SESSION['success_message'] ?></p>
        </div>
    </div>
<?php 
unset($_SESSION['success_message']);
endif;
?>

<?php if( isset($_SESSION['error_message']) ): ?>
    <div class="ui icon negative message" hidden>
        <i class="times icon"></i>
        <i class="close icon"></i>
        <div class="content">
            <div class="header">
                Error Message
            </div>
            <p class="list">&nbsp;<?= $_SESSION['error_message'] ?></p>
            <!-- <ul class="list">
            </ul> -->
        </div>
    </div>
<?php 
unset($_SESSION['error_message']);
endif;
?>