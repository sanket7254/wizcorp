

<p><?php echo $this->session->flashdata('statusMsg'); ?></p>

<!-- file upload form -->

<form method="post" action="documents" enctype="multipart/form-data">
    <?php echo form_hidden('id',$this->session->userdata('sid')); ?>
	<?php echo $sid; ?>
	
    <div class="form-group">
        <label>Choose Files</label>
        <input type="file" name="files[]" multiple/>

         
    </div>
    <div class="form-group">

        <input type="submit" name="fileSubmit" value="UPLOAD"/>
    </div>
</form>




