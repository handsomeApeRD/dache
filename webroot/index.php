<?php
include_once dirname(dirname(__FILE__)).'/app.php';

$order = DB::LimitQuery('order');

$cloopenObj = new Lib_Cloopen();
$to = '15033539677';
$verifyCode = "1a2s3d";
$displayNum = "041186650320";
$result = $cloopenObj->ivrDial($to);
//$result = $cloopenObj->smsMessge($to, 'test'); //发短信
//$result = $cloopenObj->landingCalls($to,'aaa test'); //发语音
dump($result);


//$subAccounts = $cloopenObj->getSubAccounts();
//dump($subAccounts);

exit;
Template::Show();