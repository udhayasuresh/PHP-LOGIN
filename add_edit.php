<?php 
    session_start();
    require("config.php");
    if(isset($_POST['form_data'])) :
        $date = $db->real_escape_string($_POST['date']);
        $code = $db->real_escape_string($_POST['code']);
        $name = $db->real_escape_string($_POST['name']);
        $place = $db->real_escape_string($_POST['place']);
        $time = $db->real_escape_string($_POST['time']);
		$emp_sign = $db->real_escape_string($_POST['emp_sign']);
		$status = $db->real_escape_string($_POST['status']);
		$auth_sign = $db->real_escape_string($_POST['auth_sign']);
		//$s_price = $db->real_escape_string($_POST['s_price']);
		//$batch = $db->real_escape_string($_POST['batch']);
        $id = ($_POST['id']!="") ? $_POST['id'] : '';
        if($id!="") :
        	$query = " UPDATE gatepass SET date= '$date', code='$code',
             name='$name', place ='$place', time='$time',
             emp_sign='$emp_sign',status='$status',auth_sign='$auth_sign'
			  WHERE id=$id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO gatepass SET date= '$date', code='$code',
             name='$name', place ='$place', time='$time',
             emp_sign='$emp_sign',status='$status',auth_sign='$auth_sign'
			 ";
        	$msg = "Successfully Inserted Your Record"; 
		
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:gatepass.php");
    endif;
    
    if(isset($_POST['ct_id'])) :
        $id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($id!="") :
            $query = "DELETE FROM gatepass WHERE id =$id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>

