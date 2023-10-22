<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"    >
    <title>Latihan</title>


</head>
<body >
    <style type="text/css">
            .pertama{
            border: 3px solid black;
            width:148px;
            height:150px;
            margin-left:600px;
            margin-top:230px;
            padding-right:2px;
            display:table;
            background:blue;
            }
            
            .atas{
            border: 3px solid black;
            width:40px;
            height:44px;
            margin-left:4px;
            margin-top:5px;
            padding-battom:3px;
            text-align:center;
            background:white;
        }
        
        .tengah{
            display:flex;
            }

            .tengah p{
            border: 3px solid black;
            width:40px;
            height:33px;
            margin-left:4px;
            margin-top:5px;
            margin-bottom:5px;
            padding-top:13px;
            text-align:center;
            background:white;
        }
        
        .bawah{
            display:flex;
        }
        
        .bawah p{
            border: 3px solid black;
            width:40px;
            height:33px;
            margin-left:4px;
            margin-top:0px;
            margin-bottom:5px;
            padding-top:13px;
            text-align:center;
            background:white;
            }

    </style>



    <?php

    $a = "A";
    $b = "B";
    $c = "C";
    ?>

    <div class="pertama">
        <div class="atas">
            <p><?php echo $a ?></p>
        </div>
        
        <div class="tengah">
            <p><?php echo $a ?></p>
            <p><?php echo $b ?></p>
        </div>
        
        
        <div class="bawah">
            <p><?php echo $a ?></p>
            <p><?php echo $b ?></p>
            <p><?php echo $c ?></p>
        </div>
    </div>
    
    
</body>
</html>