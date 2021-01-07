<?php if (!empty($user_comments)): ?>
    <?php foreach ($user_comments as $user_comment): ?>
        <div class="comments">
            <div style=" padding: 20px;">
                <p style="text-align: justify;"><?php echo $user_comment->comments; ?> </p>
                <p style="text-align: right;margin: 0;"> <?php echo $user_comment->commenter_name; ?>  </p>
                <p style="text-align: right;margin: 0"><?php echo $user_comment->commenter_email; ?>  </p>
            </div>

        </div>

    <?php endforeach; ?>    

<?php endif; ?>
