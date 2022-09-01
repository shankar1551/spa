<?php
    //UPDATE OPERATION
    if(isset($_POST['updatecounterbtn'])) {
        $obj = new query();

        $happy_clients = $obj->filterString($_POST['happy_clients']);
        $award = $obj->filterString($_POST['award']);
        $trainer = $obj->filterString($_POST['trainer']);
        $treatment = $obj->filterString($_POST['treatment']);
        $uid = $obj->filterString($_POST['id']);

        $array = array('happy_clients'=>$happy_clients,'award' => $award,'trainer'=>$trainer,'treatment'=>$treatment);
        $result2 = $obj->UpdateTable('clients',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
            window.open('./index.php?page=2',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=2',"_self")
            </script>
        <?php
        }
    }
?>