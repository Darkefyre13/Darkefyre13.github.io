<!DOCTYPE HMTL>

<head>

</head>

<body>

    -= Item Creation =-
    Name: <input type="text" name="name" value="<?php echo $ItemName;?>">
    <?php
    $ItemName = "";
    $Arrylgth = ;
    $itemArry = preg_split ("/\,/", $ItemName);
    $Arrylgth = count($itemArry;)
    for ($i=0; $i < $Arrylgth; $i++) { 
        echo "event.create("$itemArry[$i]").displayName("$itemArry[i]")"
    }
    
?>
</body>
