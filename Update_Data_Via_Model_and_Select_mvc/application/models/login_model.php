<?php


class LoginModel
{
   
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
  
    public function read()
    { 

       $sql= 'select Id,concat(FirstName,LastName) as fullName,OrgId,(select Name from Division where Id=employeemaster.Division) as DivName,(select Name from Designation where Id=employeemaster.Designation) as DesignName ,(select Name from Location where Id=employeemaster.Location) as LocationName from employeemaster';
       $query = $this->db->query($sql);
       $query->execute();
     
       $arr=$query->fetchAll();
       return $arr;       
	}

  function  getTableValues($tableName){
       $sql1= "Select * from $tableName";
       $query1 = $this->db->query($sql1);
       $query1->execute();
       $arr1=$query1->fetchAll();
       return $arr1;       
    }

    function updateFn($id,$table1,$table2)
    {
        $sql2 ="UPDATE employeemaster SET $table1 = '$table2' WHERE Id = $id";
        $query2 = $this->db->query($sql2);
        $query2->execute();
    }    
}
