<div class="row">
    <div class="col-lg text-center">
        <h3 class="text-primary">Your Uploaded Image</h3>
        <img class="img-fluid img-thumbnail" src="images/<?php echo $filename; ?>">
        <span>
            <a href="images/<?php echo $filename; ?>" download="">Download Image</a>
        </span>
    </div>
    <div class="col-lg text-center">
        <h3 class="text-primary">Converted WEBP Image</h3>
        <img class="img-fluid img-thumbnail" src="images/<?php echo $webpImage; ?>">
        <span>
            <a href="images/<?php echo $webpImage; ?>" download="">Download Image</a>
        </span>
    </div>
</div>
<div class="row">
    <div class="col text-center">
        <a href=".">
            <input type="submit" class="btn btn-primary" value="Convert another image"></input>
        </a>
    </div>
</div>