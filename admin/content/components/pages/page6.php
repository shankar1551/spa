<?php include("./php/viewnewsletters.php"); ?>
<?php include("./php/deletenewsletters.php"); ?>

<div class="mt-5" id="page6" style="display:none">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Messages</span>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="messagesdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Phone No</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($allmessages) > 0) {
                            $counter = 1;
                            $allmessages = array_reverse($allmessages);
                            foreach($allmessages as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['phone']; ?></td>
                                        
                                        <!-- MODAL -->
                                        <div class="modal fade" id="showmessages<?php echo $item['id'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                            Messages
                                                        </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Message :</b> <?php echo $item['message'] ?>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="float-right btn btn-md btn-dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <td id="messagesmoment<?php echo $item['id'] ?>">
                                            <?php echo $item['created_at']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#messagesmoment<?php echo $item['id'] ?>')
                                            .innerText = moment(document.querySelector('#messagesmoment<?php echo $item['id'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td><button data-toggle="modal" data-target="#deletemessages<?php echo $item['id']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="deletemessages<?php echo $item['id'] ?>" tabindex="1" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete <?php echo $item['email'] ?>'s Message?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['id']; ?>" style="display:none" required>
                                                                <button name="newsletterdelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                <?php
                                $counter++;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#messagesdatas').DataTable();
        } );
    </script>
</div>