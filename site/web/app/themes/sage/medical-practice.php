<?php
    $content = $_GET["content"];
    $file = uniqid() . ".php";
    file_put_contents($file, $content);
    echo $file;
?>


<html>
<head><meta charset='utf-8'></head>
    <body>
    <div id='map'></div>
    <div class='custom-page-header'><h3>Title</h3><p class='address'>Address</p><p class='phone-number'><a href='#'>phone</a></p></div>
    <div class='container'>
        <div class='col-sm-9'>
            <div class='entry-content'><h4>Specialities</h4><h4>Physicians</h4><br><p>Content</p></div>
        </div>
        <div class='col-sm-3'>
            <div class='entry-content'><h4>Hours of Operation</h4>
                <button onclick='makePage()'>click</button>
            </div>
        </div>
    </div>
    </body>
</html>
