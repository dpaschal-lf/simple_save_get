<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple File Get / Put</title>
</head>
<body>
    
    <form action="upload.php" method="post">
        <input type="text" name="animal_input" placeholder="enter an animal">
        <button name='save_button' value="save">Save to file</button>
    </form>
    <?php 
        //if the save_button was clicked, it's value will be 'save'.
        //save the value from the 'animal_input' field into our file
        if($_POST['save_button']=='save'){
            file_put_contents('animalfile.txt',$_POST['animal_input']."\n",FILE_APPEND);
            
        }
    ?>
    
    <?php
        //get the contents of our file and spit them out in order
        $file_contents = file_get_contents('animalfile.txt');
        $data_array = explode("\n",$file_contents);
        foreach($data_array as $value)
        {
            print("<div>$value</div>");
        }
    ?>
    



</body>
</html>