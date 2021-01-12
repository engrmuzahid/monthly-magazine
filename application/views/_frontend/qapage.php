 <style>
     .error {
    border: 0px solid red !important;
}
.form-control{
    margin: 15px auto;
}
 </style>
 
 <div class="qa-form col-md-9 col-sm-12 default_margin">

                        <h3 class="qa-heading">প্রশ্ন করুন</h3>



                        <?php if (isset($success)): ?>

                            <span class="article-type"> <?php echo $success; ?></span>

                        <?php elseif (isset($error)): ?>

                           

                            <span class="article-type"> <?php echo $error; ?></span>

                            

                        <?php endif; ?>



                        <form method="post" action="<?php echo site_url('qa'); ?>"    enctype="multipart/form-data">

                            <input type="text" name="QA[sender_name]" class="form-control" placeholder="নাম" >

                            <span class="error"><?php echo form_error('QA[sender_name]'); ?></span>

                            <input type="email" name="QA[sender_email]" class="form-control" placeholder="ই-মেইল">

                            <span class="error"><?php echo form_error('QA[sender_email]'); ?></span>

                            <input type="text" name="QA[sender_address]" class="form-control" placeholder="ঠিকানা ">

                            <span class="error"><?php echo form_error('QA[sender_address]'); ?></span>

                            <textarea name="QA[question]" class="form-control" id="" cols="30" rows="10" placeholder="প্রশ্ন"></textarea>

                            <span class="error"><?php echo form_error('QA[question]'); ?></span>

                            <button name="sendqa" type="submit">প্রশ্ন  করুন</button>

                        </form>

                    </div>