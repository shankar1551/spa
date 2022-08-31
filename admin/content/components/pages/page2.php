<?php include("./php/viewclients.php"); ?>
<?php include("./php/deleteapplicants.php"); ?>

<div class="mt-5" id="page2" style="display:none">
    <div class="wrapper">
        <div class="top">
            <div class="title">
                <span>Applicants</span>
            </div>
        </div>
        <hr>
        <div class="bottom p-1 mt-2">
            <table class="table w-100 table-sm-responsive" id="applicantsdatas">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Happy Clients</th>
                        <th>award</th>
                        <th>trainer</th>
                        <th>Treatment</th>
                        <th>Date</th> 
                       <!-- <th>Action</th> -->
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
                                        <td><?php echo $item['happy_clients']; ?></td>
                                        <td><?php echo $item['award']; ?></td>
                                        <td><?php echo $item['trainer']; ?></td>
                                        <td><?php echo $item['treatment']; ?></td>

                                        <!-- MODAL -->
                                        
                                        
                                        <td id="applicantsmoment<?php echo $item['uid'] ?>">
                                            <?php echo $item['created_at']; ?>
                                        </td>
                                        <!-- SCRIPT FOR MOMENT JS -->
                                        <script>
                                            document.querySelector('#applicantsmoment<?php echo $item['uid'] ?>')
                                            .innerText = moment(document.querySelector('#applicantsmoment<?php echo $item['uid'] ?>')
                                            .innerText).fromNow();
                                        </script>

                                        <td><button data-toggle="modal" data-target="#deleteapplicants<?php echo $item['uid']; ?>" class="btn btn-md btn-danger"><i class="fas fa-trash"></i></button></td>
                                        <!-- MODAL -->
                                        
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
            $('#applicantsdatas').DataTable();
        } );
    </script>
</div>