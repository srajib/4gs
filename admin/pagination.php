<div class=page style="width=20; float:right;font-size:1.3em;border:1px solid;background-color:#A52A2A;">
<?php
if($return_rows<$limit)
{

}
else
{
$next=$startrow+$limit;
}

$prev=$startrow-$limit;
$key='';
if($searchterm!="")
{
$key='&searchterm='.$searchterm;
}

if($prev>=0)
echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.$key.'"><font color=white>Previous</font></a>';

if($return_rows==$limit)
echo '| <a href="'.$_SERVER['PHP_SELF'].'?startrow='.$next.$key.'"><font color=white>Next</font></a>';
?>
</div>