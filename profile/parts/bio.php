<?php
 $user_id = $_SESSION['user_id'];
 $Query = $db->prepare("SELECT bio FROM users WHERE id = ?");
 $Query->execute(array($user_id));
 $r = $Query->fetch(PDO::FETCH_OBJ);
 if(empty($r->bio)){
  $bio = "Add Bio";
 } else {
  $bio = "Update Bio";
 }
 $bio_value = $r->bio;



 ?>
<div class="modal" fade tabindex="-1" role="dialog" id="bio">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo $bio; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="bio-error error"></div>
                                </div>
                                <form action="">
                                    <div class="form-group">
                                        <textarea class="form-control profile-input" id="bio" cols="30" rows="10" placeholder="Add Bio..."><?php if(isset($bio_value)): echo $bio_value; endif; ?></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" onclick="add_bio(this.form.bio.value);">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- modal-content -->
                    </div>
</div><!-- modal -->