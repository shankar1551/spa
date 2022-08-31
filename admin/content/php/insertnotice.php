<?php
    //INSERT OPERATION
    if(isset($_POST['noticebtn'])) {
        $obj = new query();

        $title = $obj->FilterString($_POST['title']);

        $fnotice = $obj->FilterString($_POST['notice']);
        $notice = $obj->RemoveWhiteSpace($fnotice);

        //IMAGE
        $file = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $filetempname = $_FILES['image']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/notice/" . $filenewname;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('title' => $title, 'description' => $notice, 'image' => $filenewname);
            $result2 = $obj->InsertData('notice',$array); // SENDING DYNAMIC PARAMETERS
          
            if($result2 == 1) { //CONCLUDING THE RESULT
                ?>
                <script>
                    window.open('./index.php?page=3',"_self")
                </script>
                <?php
            }else {
                ?>
                <script>
                    alert("Error Occured!");
                    window.open('./index.php?page=3',"_self")
                </script>
                <?php
            }
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php?page=3',"_self")
              </script>
            <?php
        }
    }
?>