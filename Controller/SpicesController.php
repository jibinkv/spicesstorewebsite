<?php
require ("Model/SpicesModel.php");

//contains non-database related fundtions for the Spices pape
class SpicesController 
{
    function CreateSpicesDropdownList()
    {
        $spicesModel = new SpicesModel();
        $result = "<form action = '' method = 'post' width = '200px'> 
                Please select a type:  
                <select name = 'types' >
                    <option value = '%' >All</options>
                    " . $this->CreateOptionValues($spicesModel->GetSpicesTypes()) .
                "</select>
                <input type = 'submit' value = 'Search'>
                </form>";
        return $result;
               
    }
    
    Function CreateOptionValues(array $valueArray)
    {
        $result = "";
        
        foreach ($valueArray as $value)
        {
            $result = $result . "<option value ='$value'>$value</option>";
        }
        
        return $result;
    }
    
    Function CreateSpicesTables($types)
    {
        $spicesModel = new SpicesModel();
        $spicesArray = $spicesModel->GetSpicesByType($types);
        $result = "";
        
        //Generate a spices table for each spicesEntity in array
        foreach ($spicesArray as $key => $spices)
        {
            $result = $result.
                    "<table class = 'spicesTable' 
                        <tr>
                            <th rowspan ='6' width = '200px'><img runat = 'server' src = '$spices->image'></th>    
                            <th width = '75px' >Name:</th>
                            <td>$spices->name</td>
                        </tr>
                        
                        <tr>
                            <th>Type:</th>
                            <td>$spices->type</td>
                        </tr>

                        <tr>
                            <th>Price:</th>
                            <td>$spices->price</td>
                        </tr>

                        <tr>
                            <th>Origin:</th>
                            <td>$spices->country</td>
                        </tr>

                        <tr>
                            <td colspan='2'>$spices->review</td>
                        </tr>

                    </table>";
              
        }
        return $result;
    }
   
}

?>
