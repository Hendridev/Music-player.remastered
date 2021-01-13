<?php 
    class dbase{
        var $host = "localhost";
        var $usr = "root";
        var $pw = "";
        var $d_base = "Elohymn";
        var $do = "";

        function __construct(){
            $this->do = mysqli_connect($this->host,$this->usr,$this->pw,$this->d_base);
            if(mysqli_connect_error()){
                echo "connection fail !" . mysqli_connect_error();
            }
        }

        function tampilAlbum(){
            $query = mysqli_query($this->do, "SELECT * FROM album");
            while($dum = mysqli_fetch_array($query)){
                $result[] = $dum;
            }
            return $result;
        }

    }
?>