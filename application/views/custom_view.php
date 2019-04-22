<html>
<head>
    <title>File Upload In Codeigniter</title>
</head>
<body>
<?php echo $error;?> 
<?php echo form_open_multipart('upload_controller/do_upload');?>
<?php echo "<input type='file' name='userfile' size='20' />"; ?>
<?php echo  form_label('ชื่อ'); ?>
<?php echo  form_input('link'); ?>

<?php 
$option = array(
    'website' => 'website',
    'design' => 'design',
    'other' => 'other',
);

echo form_dropdown('typework',$option,'website');

?>








<?php echo "<input type='submit' name='submit' value='upload' /> ";?>
<?php echo "</form>"?>
</body>
</html>