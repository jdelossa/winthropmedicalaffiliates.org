<?php
/**
 * Template Name: Medical Practice Page Template
 */
?>

<script>
//    $.ajax({
//        type: 'GET',
//        url: '/wma.json',
//        success: function(response){
//            var specialty = [];
//            $.each(response,function(key,response){
//                $.unique(specialty.sort());
//                specialty.sort();
//                specialty.push(response.special);
//            });
//            console.log(specialty);
//        }
//    });


    function makePage(){
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200)
                alert("webpage " + xmlhttp.responseText + " was successfully created!");
        };

        var content = "<html><head><meta charset=\'utf-8\' /> </head><body><div id='map>'</div><div class='custom-page-header'><h3>Title</h3> <p class='address'>Address</p> <p class='phone-number'><a href='#'>phone</a></p> </div> <div class='container'> <div class='col-sm-9'> <div class='entry-content'> <h4>Specialities</h4> <h4>Physicians</h4><br> <p>Content</p> </div> </div> <div class='col-sm-3'> <div class='entry-content'> <h4>Hours of Operation</h4> <button onclick='makePage()'>click</button> </div> </div> </div><script>alert(\'test\')</script></body></html>";
        xmlhttp.open("GET","makePage.php?content=" + content,true);
        xmlhttp.send();
    }

</script>

<?php
$content = $_GET["content"];
$file = uniqid() . ".html";
file_put_contents($file, $content);
echo $file;
?>




