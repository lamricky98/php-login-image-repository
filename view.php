<?php 
if(empty($_GET['id'])){ 
    header("Location: manage.php"); 
} 
 
// Include and initialize DB class 
require_once 'DB.class.php'; 
$db = new DB(); 
 
$conditions['where'] = array( 
    'id' => $_GET['id'], 
); 
$conditions['return_type'] = 'single'; 
$galData = $db->getRows($conditions); 
?>

<div class="row">
    <div class="col-md-12">
        <h5><?php echo !empty($galData['title'])?$galData['title']:''; ?></h5>
		
        <?php if(!empty($galData['images'])){ ?>
            <div class="gallery-img">
            <?php foreach($galData['images'] as $imgRow){ ?>
		<div class="img-box" id="imgb_<?php echo $imgRow['id']; ?>">
                <img src="uploads/images/<?php echo $imgRow['file_name']; ?>">
		<a href="javascript:void(0);" class="badge badge-danger" onclick="deleteImage('<?php echo $imgRow['id']; ?>')">delete</a>
            <?php } ?>
            </div>
        <?php } ?>
    </div>
    <a href="index.php" class="btn btn-primary">Back to List</a>
</div>