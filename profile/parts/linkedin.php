<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT linkedin FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->linkedin)){
  $linkedin = "Add Linkedin Account";
} else {
  $linkedin = "Update Linkedin";
}
$linkedin_db = $r->linkedin;


 ?>

<div class="modal" fade tabindex="-1" role="dialog" id="linkedin">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo $linkedin; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-input" id="add_linkedin" placeholder="Add LinkedIn Account..." 
                                        value="<?php if(isset($linkedin_db)): echo $linkedin_db; endif; ?>">
                                        <div class="linkedin-error error"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" onClick="add_linkedin_url(this.form.add_linkedin.value)">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- modal-content -->
                    </div>
</div><!-- modal -->