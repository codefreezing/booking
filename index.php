<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <script type="text/javascript" src="swfupload/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="swfupload/swfobject.js"></script>
    <script type="text/javascript" src="swfupload/jquery.uploadify.v2.1.4.min.js"></script>
    <script type="text/javascript">
    // <![CDATA[
    $(document).ready(function() {
      $('#file_upload').uploadify({
        'uploader'  : 'swfupload/uploadify.swf',
        'script'    : 'swfupload/uploadify.php',
        'cancelImg' : 'swfupload/cancel.png',
        'folder'    : 'uploads',
        'auto'      : true,
        'displayData' : 'speed',
        'onAllComplete' : function(event,data) {
            alert(data.filesUploaded + ' files uploaded successfully!');
          }
      });
    });
    // ]]>
    </script>
</head>    
<body>
<input id="file_upload" type="file" name="file_upload" />
<a href="javascript:$('#file_upload').uploadifyUpload();">Upload Files</a>
</body>
</html>    