<?php

    
    class query extends Database {
        //FILTERING STRING TO PREVENT XXS AND SQL INJECTION
        public function FilterString($string) {
            return htmlentities($this->connect()->real_escape_string($string));
        }

        //REMOVING DOUBLE SPACE
        public function RemoveWhiteSpace($string) {
            return preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);
        }

        //HASHING STRING
        public function HashString($string) {
            $options = [
                'cost' => 12,
            ];
            return password_hash($string,PASSWORD_BCRYPT,$options);
        }
        
        //VERIFYING HASHED STRING
        public function VerifyString($oldstring,$newstring) {
            return password_verify($oldstring,$newstring);
        }

        //RETRIVE DATA
        public function RetriveData($tablename,$array = null) {
            if(isset($tablename)) {
                if($array === null) {
                    $query = "SELECT * FROM $tablename ORDER BY id DESC";
                }else {
                    $totalFields = count($array);
                    $query = "SELECT * FROM $tablename WHERE ";
                    $counter = 1;
                    foreach($array as $fieldname=>$value) {
                        if($totalFields == $counter) {
                            $query .= "$fieldname = '$value' ORDER BY id DESC";
                        }else {
                            $query .= "$fieldname = '$value' AND ";
                        }
                        $counter++;
                    }
                }
                $exe = $this->connect()->query($query);
                $arrays = [];
                if($exe->num_rows > 0) {
                    while($rows = $exe->fetch_assoc()) {
                        $arrays[] = $rows;
                    }

                    return $arrays;
                }else {
                    return $arrays;
                }
            }
        }

        //UPDATING DATA
        public function UpdateTable($tablename,$array,$uid) {
            $totalFields = count($array);
            $query = "UPDATE $tablename SET ";
            $counter = 1;
            foreach($array as $fieldname=>$value) {
                if($totalFields == $counter) {
                    $query .= "$fieldname = '$value'";
                }else {
                    $query .= "$fieldname = '$value', ";
                }
                $counter++;
            }

            $query .= ",inserted = NOW() WHERE id = '$uid'";
            
            $exe = $this->connect()->query($query);

            return $exe;
        }

        //INSERT DATA
        public function InsertData($tablename,$array) {
            if(isset($tablename) && isset($array)) {
                $count = count($array);
                $counter = 1;
                $query = "INSERT INTO  `$tablename` VALUES(NULL,";
                foreach($array as $key=>$value) {
                    if($count == $counter) 
                        $query .= "'$value',  current_timestamp());";
                    else
                        $query .= "'$value',";
                    $counter++;
                }
                
                $exe = $this->connect()->query($query);
                return $exe;
            }
        }


        //DELETE DATA
        public function DeleteData($tablename,$uid) {
            if(isset($tablename) && isset($uid)) {
                $query = "DELETE FROM $tablename WHERE uid='$uid'";
                $exe = $this->connect()->query($query);

                return $exe;
            }
        }
        //DELETE DATA1
        public function DeleteData1($tablename,$uid, $column) {
            if(isset($tablename) && isset($uid)) {
                $query = "DELETE FROM $tablename WHERE $column='$uid'";
                $exe = $this->connect()->query($query);

                return $exe;
            }
        }

        //FOR UPLOADING FILES
        public function UploadFile($filetempname,$filedestination) {
            //UPLOADING IMAGE
            $uploading = move_uploaded_file($filetempname , $filedestination);
            return $uploading;
        }

        public function RetrieveDataWithLimit($tablename,$limit=null,$array = null)
        {
                if(isset($tablename)) {
                    if($array === null) {
                        $query = "SELECT * FROM $tablename ORDER BY id DESC LIMIT $limit";
                    }else {
                        $totalFields = count($array);
                        $query = "SELECT * FROM $tablename WHERE ";
                        $counter = 1;
                        foreach($array as $fieldname=>$value) {
                            if($totalFields == $counter) {
                                $query .= "$fieldname = '$value' ORDER BY id DESC LIMIT $limit";
                            }else {
                                $query .= "$fieldname = '$value' AND ";
                            }
                            $counter++;
                        }
                    }
                    $exe = $this->connect()->query($query);
                    $arrays = [];
                    if($exe->num_rows > 0) {
                        while($rows = $exe->fetch_assoc()) {
                            $arrays[] = $rows;
                        }
    
                        return $arrays;
                    }else {
                        return $arrays;
                    }
                }
        }

        // public function GetHomePageInfo($tbllist)
        // {
        //     $result = array();
        //     foreach($tbllist as $item)
        //     {
        //         foreach($item as  $key=>$condi)
        //         {
        //             if($key=="gallary_image") $temp_data = $this->retrieveDataWithLimit($key,$condi[0]);
        //             $temp_data = $this->RetriveData($key);
        //             $result[$key] = $temp_data;
        //         }
        //     }
        //     return $result;
        // }

    }
?>