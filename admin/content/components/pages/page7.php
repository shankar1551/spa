<?php include("./php/insertclient.php"); ?>
<?php include("./php/vieweclient.php"); ?>
<?php include("./php/deleteclient.php"); ?>
<?php include("./php/updateclient.php"); ?>

<div class="mt-5" id="page9" style="display:none;">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Manage Clients</span>
            </div>
            <div class="add" data-toggle="modal" data-target="#addevent">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="eventdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Education</th>
                        <th>Crated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($clients) > 0) {
                            $counter = 1;
                            $clients = array_reverse($clients);
                            foreach($clients as $item) {
                                ?>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $item['name']; ?></td>
                        <td>
                            <div class="img" style="width:50px;height:50px;border-radius:9px">
                                <img src="./assets/img/client/<?php echo $item['image']; ?>" alt=""
                                    style="width:100%;height:100%;object-fit:cover;" />
                            </div>
                        </td>

                        <td>
                            <?php echo $item['designation']  ?>
                        </td>
                        <td>
                            <?php echo $item['education']  ?>
                        </td>
                       

                        <td id="eventmoment<?php echo $item['id'] ?>">
                            <?php echo $item['created_at']; ?>
                        </td>
                        <!-- SCRIPT FOR MOMENT JS -->
                        <script>
                        document.querySelector('#eventmoment<?php echo $item['id'] ?>')
                            .innerText = moment(document.querySelector('#eventmoment<?php echo $item['id'] ?>')
                                .innerText).fromNow();
                        </script>

                        <td>
                            <button data-toggle="modal" data-target="#editevent<?php echo $item['id']; ?>"
                                class="btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                            <button data-toggle="modal" data-target="#deleteevent<?php echo $item['id']; ?>"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                        <!-- UPDATE MODAL -->
                        <div class="modal fade editevent" id="editevent<?php echo $item['id'] ?>" tabindex="1"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="post">
                                        <div class="modal-header">
                                            <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                Edit Client Details
                                            </p>
                                        </div>
                                        <div class="modal-body">
                                            <input name="name" type="text" class="event w-100 mb-3"
                                                value="<?php echo $item['name']; ?>" placeholder="Edit Name">
                                           
                                                <input name="designation" type="text" class="event w-100 mb-3"
                                                value="<?php echo $item['designation']; ?>" placeholder="Edit Name">
                                           
                                                <input name="education" type="text" class="event w-100 mb-3"
                                                value="<?php echo $item['education']; ?>" placeholder="Edit Name">
                                            
                                            <input name="id" type="text" value="<?php echo $item['id']; ?>"
                                                style="display:none;">
                                        </div>
                                        <div class="modal-footer">
                                            <button name="updateeventbtn"
                                                class="event float-right btn btn-md">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- DELETE MODAL -->
                        <div class="modal fade" id="deleteevent<?php echo $item['id'] ?>" tabindex="1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p class="text-right">
                                            <span data-dismiss="modal"
                                                style="font-size:20px;cursor:pointer;">&times;</span>
                                        </p>
                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                            Are you sure you want to delete this Event?
                                        </p>
                                        <form method="post">
                                            <p class="text-right">
                                                <input type="text" name="id" value="<?php echo $item['id']; ?>"
                                                    style="display:none" required>
                                                <input type="text" name="image" value="<?php echo $item['image']; ?>"
                                                    style="display:none" required>
                                                <button name="eventdelbtn" class="btn btn-md btn-danger text-white"><i
                                                        class="fas fa-trash-alt"></i></button>
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
        <!-- Modal -->
        <div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Client</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="name" type="text" class="event w-100 mb-3" placeholder="Name" required>
                        
                        <input name="designation" type="text" class="event w-100 mb-3" placeholder=" designation" required>
                        
                        <input name="education" type="text" class="event w-100 mb-3" placeholder=" education" required>
                        
                        <input name="image" type="file" class="w-100 mb-5" required>
                        <button name="eventbtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#eventdatas').DataTable();
    });
    </script>
</div>