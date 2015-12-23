<!DOCTYPE html>
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

{//$man['sex']|default='man'}
{//$man['age']+1}
{//$man.name|md5|substr=0,5}
{$now|date='Y-m-d H:i:s',###}
<br>
<volist name="man" id="data" empty=" No data.">
    {$data['name']}-----{$data['age']}<br/>
</volist>
<foreach name="man" item="data">
    {$data['name']}----{$data['age']}<br/>
</foreach>
<br>
<p>eq=  neq!=  gt>  egt>=  lt<  elt<=  heq===  nheq!===</p>

<if condition="$num egt 10">num大于等于10
<else/>num小于10
</if>

<?php dump($file);?>
</body>
</html>