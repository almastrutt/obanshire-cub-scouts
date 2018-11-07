<div id="displayChoose"></div>

<h2>Add New Image to Gallery </h2>

<form method="post" action="../config/insert_gallery.php" enctype="multipart/form-data">
    <label for="caption">Caption</label>
    <input type="text" name="caption" id="as" maxlength="50" required="required"
    autofocus="autofocus" placeholder="Enter caption"/>
    
    <label for="file">Upload File</label>
    <input type="file" name="file" id="choosefile"/>
    
    <input type="submit" name="insert" value="Upload" id="submit-button"/>
</form>    