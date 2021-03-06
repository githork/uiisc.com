<?php
if (!defined('IN_SYS')) {
    // exit('禁止访问');
    header("Location: ../../clientarea.php");
    exit;
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php echo (getMsg("msg_notify")); ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="panel-title"><?php echo $lang->I18N('tickets-details'); ?></span>
                    <div class="pull-right">
                        <a class="btn btn-default btn-xs" href="<?php echo setRouter('clientarea', 'tickets'); ?>"><?php echo $lang->I18N('list'); ?></a>
                        <a class="btn btn-default btn-xs" href="<?php echo setRouter('clientarea', 'tickets_add'); ?>"><?php echo $lang->I18N('add'); ?></a>
                    </div>
                </div>
                <div class="panel-body">
                    <p>Type: <?php echo $ticket_types[$data['department']]; ?></p>
                    <p>Status: <?php echo $status_types[$data['status']]; ?></p>
                    <p>Subject: <?php echo $data['subject']; ?></p>
                    <hr />
                    <?php echo htmlspecialchars_decode($data['content']); ?>
                    <hr />
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="Comment">Comment: <sup>*</sup></label>
                            <textarea name="comment" id="comment" class="form-control summernote" value="<?php echo ($data['comment']); ?>" rows="10" maxlength="5000" placeholder="Comment"></textarea>
                            <span class="text-warning"><?php echo isset($err["comment_err"]) ? $err["comment_err"] : ""; ?></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="do_comment_tickets" class="btn btn-primary">Add Comment</button>
<?php if ($data['status'] == 1) { ?>
                            <button type="submit" name="do_close_tickets" class="btn btn-primary">Close Tickets</button>
<?php } else { ?>
                            <button type="submit" name="do_open_tickets" class="btn btn-primary">Open Tickets</button>
<?php } ?>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</div>