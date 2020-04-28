<!DOCTYPE html>
<html>
<head>
<title>CALCULATOR</title>
</head>
<body>
<table width="50%" align="center" border="1" >
<form method="POST">
<tr>
<th>Enter First Value</th>
<th colspan="3"><input type="text" name="fvalue" placeholder="Enter First Value"></th>
</tr>
<tr>
<th>Enter Second Value</th>
<th colspan="3"><input type="text" name="svalue" placeholder="Enter Second Value"></th>
</tr>
<tr>
<th><input type="submit" name="add" value="Add"></th>
<th><input type="submit" name="sub" value="Sub"></th>
<th><input type="submit" name="div" value="Div"></th>
<th><input type="submit" name="mul" value="Mul"></th>
</tr>
<tr>
<th>RESULT</th>

<th colspan="3">


<input type="text" placeholder="<?php echo calc() ;?>" disabled="disabled"></th>
</tr>
</form>
</table>

<?php
function add($a,$b)
{
$c=$a+$b;
return $c;
}
function sub($a,$b)
{
$c=$a-$b;
return $c;
}
function div($a,$b)
{
$c=$a/$b;
return $c;
}
function mul($a,$b)
{
$c=$a*$b;
return $c;
}
function calc()
{
if(isset($_REQUEST['add']))
{
$add1=$_REQUEST['fvalue'];
$add2=$_REQUEST['svalue'];
$o=add($add1,$add2);
echo $o;
}

elseif(isset($_REQUEST['sub']))
{
$add1=$_REQUEST['fvalue'];
$add2=$_REQUEST['svalue'];
$o=sub($add1,$add2);
echo $o;
}
elseif(isset($_REQUEST['div']))
{
$add1=$_REQUEST['fvalue'];
$add2=$_REQUEST['svalue'];
$o=div($add1,$add2);
echo $o;
}

elseif(isset($_REQUEST['mul']))
{
$add1=$_REQUEST['fvalue'];
$add2=$_REQUEST['svalue'];
$o=mul($add1,$add2);
echo $o;
}

}

// function display_val()
// {

// }
?>
</body>
</html>
<?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
echo date('d-m-Y H:i:s');
?>