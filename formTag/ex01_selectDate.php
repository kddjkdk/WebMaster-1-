﻿<?
$cday=date("d");
$cmonth=date("m");
$cyear=date("Y");
echo("<form action=ex02_showDate.php method=post>");		// ��¥ǥ��.php ���Ͽ� ���� ����

echo "<TD align=left><select name=day>";		// ���� ����
$i=1;
while($i<32) {
    if ($cday == $i) {
      echo "<option selected> $i";
      }
    else  {
      echo "<option> $i";
      }
    $i=$i+1;
    }
echo "</select>";

echo "/<select name=month>";				// ���� ����
$i=1;
while($i<13) {
    if ($cmonth == $i) {
      echo "<option selected> $i";
      }
    else  {
      echo "<option> $i";
      }
    $i=$i+1;
    }
echo "</select>";

echo "/<select name=year>";				// �⵵�� ����
echo "<option selected> $cyear";
echo "</select></TD>";
echo "<P><input type=submit value=�����ϱ�><P>";
echo "</form>";
?>



