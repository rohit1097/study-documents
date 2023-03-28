
<?php 
use Magento\Framework\App\Bootstrap;
require __DIR__ . '/../app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);
$obj = $bootstrap->getObjectManager();
$obj->get('\Magento\Framework\App\State')->setAreaCode('frontend');

$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
$connection = $resource->getConnection();
$tableName = $resource->getTableName('directory_country_region_name'); //gives table name with 
 //die('here');
//Update Data into table
//$attribute_id = 25;
//$sql = "UPDATE " . $tableName . "SET multiline_count = 9 WHERE attribute_id =" . $attribute_id;
//$sql = "UPDATE " . $tableName . " SET multiline_count = 8 WHERE attribute_id = " . $attribute_id;

$sql = "INSERT INTO " . $tableName . " (locale, region_id, name) VALUES 
('ar_SA','859', 'أبو ظبي‎'),
('ar_SA','860', 'عجمان'),
('ar_SA','861', 'العين'),
('ar_SA','862', 'دبي'),
('ar_SA','863', 'الفجيرة'),
('ar_SA','864', 'رأس الخيمة'),
('ar_SA','865', 'الشارقة'),
('ar_SA','866', 'أمّ القيوين')";



echo $sql;
$connection->query($sql);

echo 'hello';
die('here');
?>

