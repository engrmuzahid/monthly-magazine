<style>
.section span.select2 {
    width: 100% !important;
}
</style>
<div class="admin-form" id="survey1" >
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> New Article  </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="viewAllArticle"> <span class="fa fa-table"></span>  View All Article </a></span>
        </div>

        <form method="post" action="<?php echo site_url('article/int_edit_article') . '/' . $article->id; ?>" id="frmEdit"  enctype="multipart/form-data">
            <div class="panel-body p25">
 

                <div class="section row">
                    <div class="col-md-4"  style="display: none;">
                        <div class="section">
                            <label for="division_id" class="field-label">Version</label>
                            <label for="division_id" class="field prepend-icon">
                                <select class="gui-input" name="Article[bookinfo_id]" id="division_id">
                                    <?php foreach ($bookinfo as $book): ?>
                                        <option <?php if ($book->id == $article->bookinfo_id): ?> selected="selected" <?php endif; ?>  value="<?php echo $book->id; ?>"> <?php echo $book->title; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </label> 
                        </div> 


                    </div>
  <div class=" col-md-4">
                        <div class="section">
                            <label for="category_id" class="field-label">Category </label>
                            <label for="category_id" class="field prepend-icon">
                                <select class="gui-input" name="Article[category_id]" id="category_id">
                                    <?php foreach ($categories as $category): ?>
                                        <option <?php if ($category->id == $article->category_id): ?> selected="selected" <?php endif; ?>  value="<?php echo $category->id; ?>"> <?php echo $category->name; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </label> 
                        </div> 


                    </div>
                   <div class=" col-md-4">  <div class="section">
                            <label for="writer_id" class="field-label">Select Writer Name</label>
                            <select class="gui-input" name="Article[writer_id]" id="edit_writer_id">
                                <option>Select A Writer</option>
                                <?php foreach ($writers as $writer): ?>
                                    <option <?php if ($writer->id == $article->writer_id): ?> selected="selected" <?php endif; ?>  value="<?php echo $writer->id; ?>"> <?php echo $writer->writer_name; ?> </option>
                                <?php endforeach; ?>
                            </select>

                        </div>     </div> 
 <div class="col-md-4">

                        <div class="section">
                            <label for="sort_order" class="field-label">Sort order</label>
                            <input type="text" name="Article[sort_order]" id="sort_order" class="gui-input" value="<?php echo $article->sort_order; ?>">

                        </div> 


                    </div>



                </div>

 
                <div class="section row">
                    <div class="col-md-12">

                        <div class="section">
                            <label for="title" class="field-label">Title</label>
                            <input type="text" name="Article[title]" id="title" class="gui-input" value="<?php echo $article->title; ?>"  style="font-size:22px;line-height:35px;">

                        </div> 


                    </div>

                    <div class="col-md-12">

                        <div class="section">
                            <label for="article_details_edit" class="field-label"> Description</label>
                            <textarea name="Article[description]" id="article_details_edit" rows="60" class="gui-textarea summernote"><?php echo $article->description; ?></textarea> 

                        </div> 


                    </div>

                    <div class="col-md-12"  style="display: none;" >

                        <div class="section">
                            <label for="reference_details_edit" class="field-label"> Reference</label>
                            <textarea name="Article[reference]" id="reference_details_edit" rows="60" class="gui-textarea summernote"><?php echo $article->reference; ?></textarea> 

                        </div> 


                    </div>


                </div>
                <div class="section row">
                    <div class="col-md-12">

                        <div class="section">
                            <img src="<?php echo base_url('assets/site/images/'.$article->article_photo); ?>" alt="" width="400"><br>
                            <label for="article_image" class="field-label">Article Image</label>
                            <input type="file" name="article_image" id="article_image" class="gui-input">
                        </div> 

                       
                        
                        <div class="section">
                            <label for="is_needed" class="field-label">Select Subject</label>

                            <?php
                                if($subjects){
                                    foreach ($subjects as $row) {

                                    $this->db->where('article_id', $article->id);
                                    $this->db->where('subject_id', $row->id);
                                    $has_id = $this->db->get('subject_relation');
                                    $selected_subject = count($has_id->result());
                                             
                                ?>
                                               <span class="col-md-3" style="height:30px;" >
                                                     
                                               <input  type="checkbox"  
                                                <?php if($selected_subject == 1){ echo "checked"; } ?>
                                               name="subjects[]" value="<?php echo $row->id;?>">&nbsp; &nbsp; &nbsp; <?php echo $row->subject_name;?>
                                              </span>
                                              
                                            <?php    
                                            
                                        }

                                } 
                            ?>

                        </div> 

                    </div>


                </div>
                <div class="section row">
                    <div class="col-md-12">



                        <div class="section">
                            <label for="is_needed" class="field-label">Important Article</label>
                            <select name="Category[is_needed]" class="gui-input">
                                <option <?php echo $article->is_needed == "0" ? "selected" : ""; ?> value="0"> No </option>
                                <option <?php echo $article->is_needed == "1" ? "selected" : ""; ?>  value="1"> Yes </option>
                            </select> 

                        </div> 
                    </div>
                   
                   


                </div>



                <div class="section row">
                    <div class="col-md-12" id="errorDiv"></div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="button btn-danger btnCancel"><span class="fa fa-close"></span>  CANCEL</button>
                <button type="submit" id="btnEdit" class="button btn-info pull-right"><span class="fa fa-save"></span> SAVE</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#article_details_edit').summernote({
            height: 400,
        });

        $('#reference_details_edit').summernote({
            height: 200,
        });
        $( "#article_edit_datepicker" ).datepicker();
        $('#edit_writer_id').select2();
    });
</script>
