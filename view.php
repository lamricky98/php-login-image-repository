<?php 
// Start session 
session_start(); 

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

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
	img{
    		max-width:450px;
    		max-height:450px;
	}
    </style>
</head>
<div class="row">
    <div class="col-md-12">
        <h5><?php echo !empty($galData['title'])?$galData['title']:''; ?></h5>
		
        <?php if(!empty($galData['images'])){ ?>
            <div class="gallery-img">
            <?php foreach($galData['images'] as $imgRow){ ?>
		<div class="img-box" id="imgb_<?php echo $imgRow['id']; ?>">
                <img src="uploads/images/<?php echo $imgRow['file_name']; ?>">
		<?php if (($imgRow['user_id'] == $_SESSION["id"]) || ($_SESSION["username"] == "admin")) { ?>
			<a href="javascript:void(0);" class="badge badge-danger" onclick="deleteImage('<?php echo $imgRow['id']; ?>')">delete</a>
            	<?php } else { } ?>
	    <?php } ?>
            </div>
        <?php } ?>
    </div>
    <a href="index.php" class="btn btn-primary">Back to List</a>
</div>