<?php

require ("Entities/SpicesEntity.php");

//Database relates code for shop Spices page
class SpicesModel 
{
    //get all spices type from the database and return them in an array. 
    function GetSpicesTypes()
    {
        require 'Credentials.php';
        
        //open connection and select database
    /*      mysql_connect($host,$user,$passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM spices") or die(mysql_error());   
        $types = array();
        
        //Get data from database.
        while($row = mysql_fetch_array($result))
        {
            array_push($types, $row[0]);
        }
        
        //close connection and return result.
        mysql_close();
        return $types;
    } 
     */
    
        $con = mysqli_connect($host, $user, $passwd) or die(mysqli_error($con));
        $sql = mysqli_select_db($con,$database);
        $result = mysqli_query($con,"SELECT DISTINCT type FROM spices") or die(mysqli_error($con));
        $types = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        //Close connection and return result.
        mysqli_close($con);
        return $types;
    }
    
    //Get spicesEntity objects from the datanbase and return them in an array.
    function GetSpicesByType($type)
    {
        require 'Credentials.php';
        
        //open connection and select database
       $con = mysqli_connect($host, $user, $passwd) or die(mysqli_error);
        $sql = mysqli_select_db($con,$database);

        $query = "SELECT * FROM spices WHERE type LIKE '$type'";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        $spicesArray = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $country = $row[4];
            $image = $row[5];
            $review = $row[6];

            //Create coffee objects and store them in an array.
            $coffee = new SpicesEntity(-1, $name, $type, $price, $country, $image, $review);
            array_push($spicesArray, $coffee);
        }
        //Close connection and return result
        mysqli_close($con);
        return $spicesArray;
        
        
        /* mysql_connect($host,$user,$passwd) or die(mysql_error());
        mysql_select_db($database);
        
        $query = "SELECT * FROM spices WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());   
        $spicesArray = array();
        
        //Get data from database.
        while($row = mysql_fetch_array($result))
        {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $country = $row[4];
            $image = $row[5];
            $review = $row[6];
            
            //Create spices object and store them in an array.
            $spices = new SpicesEntity(-1, $name, $type, $price, $country, $image, $review);
            array_push($spicesArray, $spices);
        }
        
        //close connection and return result.
        mysql_close();
        return $spicesArray;        */
    }
    
}
