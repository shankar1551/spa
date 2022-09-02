<?php
    //UPDATE OPERATION
    if(isset($_POST['updateeventbtn'])) {
        $obj = new query();

        $name = $obj->filterString($_POST['name']);
        $designation = $obj->filterString($_POST['designation']);
        $edudcation = $obj->filterString($_POST['education']);

        $uid = $obj->filterString($_POST['id']);

        $array = array('name'=>$name,'designation' => $designation,'education'=>$edudcation);
        $result2 = $obj->UpdateTable('client_info',$array, $uid); // SENDING DYNAMIC PARAMETERS
        
        if($result2 == 1) { //CONCLUDING THE RESULT
            ?>
            <script>
                
            window.open('./index.php?page=7',"_self")
            </script>
        <?php
        }else {
            ?>
            <script>
                alert("Error Occured!");
            window.open('./index.php?page=7',"_self")
            </script>
        <?php
        }
    }
?>