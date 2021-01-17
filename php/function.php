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

        function tampilAlbum($a,$b){
            $query = mysqli_query($this->do, "SELECT * FROM album WHERE id_album >= $a AND id_album <= $b");
            while($dum = mysqli_fetch_array($query)){
                $result[] = $dum;
            }
            return $result;
        }

        function tampilGenre($a,$b){
            $query = mysqli_query($this->do, "SELECT * FROM genre WHERE id_genre >= $a AND id_genre <= $b");
            while($dum = mysqli_fetch_array($query)){
                $result[] = $dum;
            }
            return $result;
        }

        function tampilLagu(){
            $query= mysqli_query($this->do,"SELECT * FROM music");
            while($dum = mysqli_fetch_array($query)){
                $result[] = $dum;
            }
            return $result;
        }

    }
?>