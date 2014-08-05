<div class="page8" style="float:left; margin:10px; width:678px; height:28px; border:0px solid #F0F0F0">

<div class=page style="width=20; float:right; font-size:13px; padding:3px 5px; border:1px solid; background-color:#007AAE;">
<?php
if($return_rows<$limit)
{

}
else
{
$next=$startrow+$limit;
}

$prev=$startrow-$limit;

if($prev>=0)
echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'&subcatid='.$id.'"><font color=white>Previous</font></a>';

if($return_rows==$limit)
echo '| <a href="'.$_SERVER['PHP_SELF'].'?startrow='.$next.'&subcatid='.$id.'"><font color=white>Next</font></a>';
?>
</div>

</div>