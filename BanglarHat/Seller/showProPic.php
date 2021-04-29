<?php  
require_once 'control/proPicInfo.php';

$picture = fetchProPic($_GET['id']);

?>

<!DOCTYPE html>
<html>

<body>


<img width="100px" src="uploads/<?php echo $picture['image'] ?>" >
</body>
</html>