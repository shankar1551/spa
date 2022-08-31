<?php
    //INSERT OPERATION
    if(isset($_POST['sliderbtn'])) {
        $obj = new query();

        //Slider Other Information
        $txt_1 = $_POST['text_1'];
        $txt_2 = $_POST['text_2'];
        $txt_3 = $_POST['text_3'];
        $txt_4 = $_POST['text_4'];
        $txt_5 = $_POST['text_5'];

        //IMAGE
        $file = $_FILES['slider'];
        $filename = $_FILES['slider']['name'];
        $filetempname = $_FILES['slider']['tmp_name'];
        $filenewname = uniqid(true).$filename;

        $filedestination = "./assets/img/slider/" . $filenewname ;

        $fileUploadResult = $obj->UploadFile($filenewname,$filetempname,$filedestination); // UPLOADING FILE

        if($fileUploadResult == 1) {
            $array = array('image' => $filenewname,'slider_text_1'=>$txt_1,'slider_text_2'=>$txt_2,'slider_text_3'=>$txt_3,'slider_text_4'=>$txt_4,'slider_text_line'=>$txt_5);
            $result2 = $obj->InsertData('slider',$array); // SENDING DYNAMIC PARAMETERS
          
            if($result2 == 1) { //CONCLUDING THE RESULT
                ?>
                <script>
                    window.open('./index.php',"_self")
                </script>
                <?php
            }else {
                ?>
                <script>
                    alert("Error Occured!");
                    window.open('./index.php',"_self")
                </script>
                <?php
            }
        }else {
            ?>
              <script>
                  alert("Error Occured While Uploading File!");
                window.open('./index.php',"_self")
              </script>
            <?php
        }
    }
?>