<?php
    //DELETE OPERATION
    if(isset($_POST['eventdelbtn'])) {
        $obj = new query();

        //DELETE DATA
        $filteredId = $obj->FilterString($_POST['id']);
        $imagename = $_POST['image'];

        //UNLINK IMAGE
        $one = "./assets/img/client/".$imagename;
        unlink($one);

        $delete = new query(); //CALLING CLASS
        $result3 = $delete->DeleteData('client_info', $filteredId); //SENDING DYNAMIC PARAMETERS

        if($result3 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                window.open('./index.php?page=7',"_self")
            </script>
            <?php
        }else {
        ?>
            <script>
            alert('Error!');
            window.open('./index.php?page=7',"_self");
            </script>
        <?php
        }
    }
?>