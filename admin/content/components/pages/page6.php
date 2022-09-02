<?php include("./php/viewnewsletters.php"); ?>
<?php include("./php/deletenewsletters.php"); ?>

<div class="mt-5" id="page6" style="display:none">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>News Letters</span>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="messagesdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($newsletters) > 0) {
                            $counter = 1;
                            $newsletters = array_reverse($newsletters);
                            foreach($newsletters as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['phone']; ?></td>
                                        
                                        <td id="messagesmoment<?php echo $item['id'] ?>">
                                            <?php echo $item['created_at']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#messagesmoment<?php echo $item['id'] ?>')
                                            .innerText = moment(document.querySelector('#messagesmoment<?php echo $item['id'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td><button data-toggle="modal" data-target="#deletenewsletter<?php echo $item['id']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="deletenewsletter<?php echo $item['id'] ?>" tabindex="1" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete  Newsletter?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="id" value="<?php echo $item['id']; ?>" style="display:none" required>
                                                                <button name="letterdelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
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