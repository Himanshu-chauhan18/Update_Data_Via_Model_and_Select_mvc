<?php
class Welcome extends Controller
{
   
    function __construct()
    {
        parent::__construct();
    }

   public function index()
    {  
			$this->view->render('login/show_page');	
    }

   
public function  read()
{
	$login_model = $this->loadModel('Login');
	$arr=$login_model->read(); 
	// echo "<pre>";print_r($arr);echo "</pre>";

         ?>
		 
		<thead >
      <th>FullName</th>
      <th>Division Name</th>
      <th>Designation Name</th>
      <th>Location Name</th>
      <th>Action</th>
	  <thead>
		  <?php
foreach($arr as $row){
	?>
 <tr>
			<td><?php echo $row->fullName; ?></td>
			<td><?php echo $row->DivName; ?></td>
			<td><?php echo $row->DesignName; ?></td>
			<td><?php echo $row->LocationName; ?></td>	
			<td>
			<a class="btn btn-warning update" data-id="<?php echo $row->Id; ?>"><i class="fa fa-edit"></i></a>
            </td>
			</tr>
			<?php
	}
	
	?>
  <?php

}

public function updateFn()
{
$id=$_POST['id'];
$table1=$_POST['table1'];
$table2=$_POST['table2'];
$login_model = $this->loadModel('Login');
$arr2=$login_model->updateFn($id,$table1,$table2); 
echo json_encode($arr2);
}

public function table2()
{
	$tableName=$_POST['tableName'];
	$login_model = $this->loadModel('Login');
	$arr1=$login_model->getTableValues($tableName); 
	echo json_encode($arr1);
}

}