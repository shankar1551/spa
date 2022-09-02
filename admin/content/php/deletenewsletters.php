<?php
    //DELETE OPERATION
    if(isset($_POST['newsletterdelbtn'])) {
        $obj = new query();

        //DELETE DATA
        $filteredId = $obj->FilterString($_POST['uid']);

        $delete = new query(); //CALLING CLASS
        $result3 = $delete->DeleteData('newsletter', $filteredId); //SENDING DYNAMIC PARAMETERS

        if($result3 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                window.open('./index.php?page=6',"_self")
            </script>
            <?php
        }else {
        ?>
            <script>
            alert('Error!');
            window.open('./index.php?page=6',"_self");
            </script>
        <?php
        }
    }
?>