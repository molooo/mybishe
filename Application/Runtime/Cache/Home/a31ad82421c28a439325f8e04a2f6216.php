<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        *{
            font-family: 微软雅黑;
            font-size: 20px;
        }
    </style>
</head>
<body>




<?php echo (date('Y-m-d H:i:s',$now)); ?>
<br>
<?php if(is_array($man)): $i = 0; $__LIST__ = $man;if( count($__LIST__)==0 ) : echo " No data." ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['name']); ?>-----<?php echo ($data['age']); ?><br/><?php endforeach; endif; else: echo " No data." ;endif; ?>
<?php if(is_array($man)): foreach($man as $key=>$data): echo ($data['name']); ?>----<?php echo ($data['age']); ?><br/><?php endforeach; endif; ?>
<br>
<p>eq=  neq!=  gt>  egt>=  lt<  elt<=  heq===  nheq!===</p>

<?php if($num >= 10): ?>num大于等于10
<?php else: ?>num小于10<?php endif; ?>

<?php dump($file);?>
</body>
</html>