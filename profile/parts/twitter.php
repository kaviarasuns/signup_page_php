<!-- === Modal === -->

<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT twitter FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->twitter)){
  $twitter = "Add Twitter Account";
} else {
  $twitter = "Update Twitter";
}
$twitter_db = $r->twitter;


 ?>

<div class="modal" fade tabindex="-1" role="dialog" id="twitter">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo $twitter; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-input" id="add_twitter" placeholder="Add Twitter Handle..." value="<?php if(isset($twitter_db)): echo $twitter_db; endif;?>">
                                        <div class="twitter-error error"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" onClick="add_twitter_account(this.form.add_twitter.value);">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- modal-content -->
                    </div>
</div><!-- modal -->


