<?

echo "����� �̸��� $NAME, ��ȣ�� $PASS <p>";
echo "����� �����ϴ� ������ $FOOD1 $FOOD2 $FOOD3 �Դϴ�.<p>";
echo "����� �����ϴ� �ֿϵ����� $PET <p>";
echo "����� ������ $JOB <p>";

$opinion = str_replace("���� �Ұ� : ",'', $INTEXT);

echo "����� �Է��� �ǰ��� $opinion <p>";

$host = 'giantstar115.dothome.co.kr';
$user = 'giantstar115';
$pw = '';
$dbName ="ex01";
$mysqli = new mysqli($host, $user, $pw, $dbName);

if($mysqli){
	echo "
}

?>
