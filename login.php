<?php 

include 'includes/bootstrap.php';

$log=DB::getInstance()->query("SELECT * FROM users WHERE username  =  ? AND password = ?",array($_POST['username'],$_POST['pwd']));
$logr=$log->results();
$res=[];
if($log->rowCount())
{
	$res['status']=true;
	$res['id']=$logr[0]->id;
}else{
	$res['status']=false;
}

print_r(json_encode($res));
