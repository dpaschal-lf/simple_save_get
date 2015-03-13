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
            
            file_put_contents('animalfile.txt',$_POST['animal_input']."\n",FILE_APPEND);//put the contents of $_POST['animal_input'] into the file 'animalfile.txt'.  FILE_APPEND causes the next contents to be added to the end of the file, rather than replacing it
            
        }
    ?>
    
    <?php
        
        $file_contents = file_get_contents('animalfile.txt');//get the contents of our file 
        $data_array = explode("\n",$file_contents); //break up the string into an array elemeny every time a newline character (\n) is encountered
        foreach($data_array as $value)  //loop through each part of the array
        {
            print("<div>$value</div>");  //and print a new div for each item
        }
    ?>
    



</body>
</html>