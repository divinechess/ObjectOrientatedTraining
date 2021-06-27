<?php

class Signup {

    private $data = array();
    private $filename = '';

    public function sanitise($data){
        foreach ($data as $key => $value){
            $data[$key] = $data;



        }
        $this->data = $data;
        return $this; // returning the class for the next method chain
    }

    public function save(){
        $old_data = file_get_contents($this->filename);
        $old_array = json_decode($old_data);

        $old_array[] = $this->data;
        $string = json_encode($old_array);
        file_put_contents($this->filename, $string);

    }

    public function file($filename){  //receive a filename and checks if exists
        if (!file_exists($filename)){
            file_put_contents($filename,''); // creates if it doesn't

        }
        $this->filename = $filename; //set filename on class so it can be picked up by save_file()
        return $this;  // return class a second time for method chain

    }


    public function read (){
        $data = file_get_contents($this->filename);
        return json_decode($data);

    }

}

if (count($_POST)>0) {
    $signup1 = new Signup();
    $signup1->sanitise($_POST)->file('mydata.json')->save();
    $result = $signup1->file('mydata.json')->read();
    //echo "<pre>";
    echo print_r($result);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="username" placeholder="username"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit" value="signup">
    </form>

</body>
</html>
