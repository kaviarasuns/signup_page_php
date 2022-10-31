<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT name FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);

$name = $r->name;


 ?>

<div class="modal" fade tabindex="-1" role="dialog" id="update_name">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-input" id="update_name" placeholder="Add Name..." 
                                        value="<?php if(isset($name)): echo $name; endif; ?>" >
                                        <div class="name-error error"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button"  onclick="change_name(this.form.update_name.value);">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- modal-content -->
                    </div>
</div><!-- modal -->