<?php
    //INSERT OPERATION
    if(isset($_POST['eventbtn'])) {
        $obj = new query();

        $title = $obj->FilterString($_POST['name']);

        $designation = $obj->FilterString($_POST['designation']);
        $education = $obj->FilterString($_POST['education']);
        $client_id = $obj->FilterString($_POST['client_id']);
        $date = $obj->FilterString($_POST['date']);
        $address = $obj->FilterString($_POST['address']);
        

        //IMAGE
        $file = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $filetempname = $_FILES['image']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/client/" . $filenewname;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('client_id'=>$client_id,'address'=>$address,'date'=>$date,'name' => $title,'image' => $filenewname,'designation'=>$designation,'education'=>$education);
            $result2 = $obj->InsertData('client_info',$array); // SENDING DYNAMIC PARAMETERS
          
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
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php?page=9',"_self")
              </script>
            <?php
        }
    }
?>