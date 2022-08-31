<?php include("./php/inserttestimonials.php"); ?>
<?php include("./php/viewtestimonials.php"); ?>
<?php include("./php/deletetestimonials.php"); ?>
<?php include("./php/updatetestimonial.php"); ?>

<div class="mt-5" id="page3" style="display:none;">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Notice Board</span>
            </div>
            <div class="add" data-toggle="modal" data-target="#addnotice">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="noticedatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(count($allnotice) > 0) {
                            $counter = 1;
                            $allnotice = array_reverse($allnotice);
                            foreach($allnotice as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $item['title']; ?></td>
                                        <td>
                                            <div class="img" style="width:50px;height:50px;border-radius:9px">
                                                <img src="./assets/img/notice/<?php echo $item['image']; ?>" alt=""
                                                    style="width:100%;height:100%;object-fit:cover;"
                                                />
                                            </div>
                                        </td>
                                        
                                        <td>    
                                            <span class="btn btn-sm btn-info" data-toggle="modal" data-target="#shownotice<?php echo $item['uid'] ?>">
                                                <i class="fas fa-eye"></i>
                                            </span> 
                                        </td>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="shownotice<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                            Details
                                                        </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-left" style="font-size:17px;">
                                                            <b>Notice Description :</b> <?php echo $item['description'] ?>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="float-right btn btn-md btn-dark">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <td id="noticemoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['inserted']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#noticemoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#noticemoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td>
                                            <button data-toggle="modal" data-target="#editnotice<?php echo $item['uid']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <button data-toggle="modal" data-target="#deletenotice<?php echo $item['uid']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                        <!-- UPDATE MODAL -->
                                        <div class="modal fade editnotice" id="editnotice<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post">
                                                        <div class="modal-header">
                                                            <p class="text-right m-0" style="font-size:20px;font-weight:600;">
                                                                Edit Notice Details
                                                            </p>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input name="title" type="text" class="notice w-100 mb-3" value="<?php echo $item['title']; ?>" placeholder="Edit Title">
                                                            <textarea name="notice" class="notice w-100 mb-3" placeholder="Remark / Notice" cols="30" rows="5" required><?php echo $item['description']; ?></textarea>
                                                            <input name="uid" type="text" value="<?php echo $item['uid']; ?>" style="display:none;">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="updatenoticebtn" class="notice float-right btn btn-md">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DELETE MODAL -->
                                        <div class="modal fade" id="deletenotice<?php echo $item['uid'] ?>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="text-right">
                                                            <span data-dismiss="modal" style="font-size:20px;cursor:pointer;">&times;</span>
                                                        </p>
                                                        <p class="text-left text-dark" style="font-size:17px;font-weight:600;">
                                                            Are you sure you want to delete this Notice?
                                                        </p>
                                                        <form method="post">
                                                            <p class="text-right">
                                                                <input type="text" name="uid" value="<?php echo $item['uid']; ?>" style="display:none" required>
                                                                <input type="text" name="image" value="<?php echo $item['image']; ?>" style="display:none" required>
                                                                <button name="noticedelbtn" class="btn btn-md btn-danger text-white"><i class="fas fa-trash-alt"></i></button>
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
        <div class="modal fade" id="addnotice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="my-0">
                            <b>Insert Notice</b>
                        </p>
                    </div>
                    <form method="post" class="modal-body mt-2 mb-3" enctype="multipart/form-data">
                        <input name="title" type="text" class="notice w-100 mb-3" placeholder="Notice Title" required>
                        <textarea name="notice" class="notice w-100 mb-3" placeholder="Remark / Notice" cols="30" rows="5" required></textarea>
                        <input name="image" type="file" class="w-100 mb-5" required>
                        <button name="noticebtn" class="w-100 btn btn-md">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#noticedatas').DataTable();
        } );
    </script>
</div>
