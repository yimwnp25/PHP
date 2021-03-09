<?php
    Class Database{
        public $dbConn;
        public function connect(){
            define ("host" , "localhost");
            define ("dbuser" , "root");
            define ("password" , "");
            define ("database" , "my_shop");
            $this->dbConn = new mysqli(host,dbuser,password,database);

            $mysql = $this->dbConn;
            if($mysql->connect_error)
                die("Database Connecttion Error,Error No. : ".
                $mysql->connect_error."|".$mysql->connect_error."<br>");
            else {
                echo "Database connect Successful...<br>";
                echo "current ".$mysql->character_set_name()."<br>";
                $mysql->set_charset("utf8");
            }
        }
        public function update_customer($source,$distination){
                $mysql = $this->dbConn;
                $updateQuery = "update customer 
                                set country = '{$distination}'
                                where country = '{$source}'";
                $rsUpdate = $mysql->query($updateQuery);
                if($mysql->affected_rows!=0){
                    echo "Update {$mysql->affected_rows} rows<br>";
                }
        }
        public function update_customer_data($source,$info){
            $mysql = $this->dbConn;
            $updateQuery = "update customer 
                            set Title       = ' {$info['title']}' ,
                                FirstName   = ' {$info['name']}' ,
                                LastName    = ' {$info['surname']}' ,
                                country     = ' {$info['country']}'
                                where id    = ' {$source}'";
            print($updateQuery);
            $mysql->query($updateQuery);
            if($mysql->affected_rows>0){
                echo "Update {$mysql->affected_rows} rows <br>";
            }
        }
        public function disconnect(){
            $mysql = $this->dbConn;
            $mysql->close();
            echo "Close Database successful...<br>";
        }

        public function show_alldata($tablename="customer"){
            $mysql = $this->dbConn;
            $SQL_Query = "Select * from {$tablename}";
            $result = $mysql->query($SQL_Query);
            echo  "Num rows:{$result->num_rows}<br>
                Field count{$result->field_count}<br>
                Affected rows:{$mysql->affected_rows}<br>";
            
            echo "<table border = '1'>";
            echo "<tr><td colspan=4>customer information</td></tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                foreach($row as $key => $value){
                    echo "<td>{$value}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

        }

        public function show_customerbyid($tablename,$id){
            $mysql = $this->dbConn;
            $SQL_Query = "Select * from {$tablename} where Id={$id}";
            //echo $SQL_Query."<br>";
            $result = $mysql->query($SQL_Query);
            return $result->fetch_assoc();
            }
        public function selbyid($tablename="customer"){
            $mysql = $this->dbConn;
            $SQL_Query = "Select Id from {$tablename}";
            $result = $mysql->query($SQL_Query);
            return $result->fetch_all(MYSQLI_ASSOC);
            }
        public function del_customer($source){
            $mysql = $this->dbConn;
            $delQuery = "DELETE FROM customer WHERE Id = '$source'";
            echo "<br>";
            print($delQuery);
            $mysql->query($delQuery);
            if($mysql->affected_rows!=0){
                echo "Update {$mysql->affected_rows} rows<br>";
        } 
        }
    }
?>