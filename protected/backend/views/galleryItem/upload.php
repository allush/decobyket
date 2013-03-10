<?php
/* @var $this GalleryItemController */
/* @var $model GalleryItem */
?>

<!-- Load Queue widget CSS and jQuery -->
<style type="text/css">@import url(<?php Yii::app()->baseUrl; ?>/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css);</style>

<!-- Load plupload and all it's runtimes and finally the jQuery queue widget -->
<script type="text/javascript" src="<?php Yii::app()->baseUrl; ?>/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="<?php Yii::app()->baseUrl; ?>/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>


<script type="text/javascript">
    // Convert divs to queue widgets when the DOM is ready
    $(function() {
        // Setup html5 version
        $("#html5_uploader").pluploadQueue({
            // General settings
            runtimes : 'html5',
            url : 'upload.php',
            max_file_size : '10mb',
            chunk_size : '1mb',
            unique_names : true,

            // Resize images on clientside if we can
            resize : {width : 1024, height : 682, quality : 100},

            // Specify what files to browse for
            filters : [
                {title : "Image files", extensions : "jpg"}
            ]
        });
    });
</script>

<div id="html5_uploader">
    Ваш браузер не поддерживает HTML5
</div>