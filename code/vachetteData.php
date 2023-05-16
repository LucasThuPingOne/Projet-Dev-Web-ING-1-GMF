<?php 
$cnx = mysqli_connect('localhost:3306', 'user', 'password1');
if (mysqli_connect_errno($cnx)) {
    echo mysqli_connect_error();
};
$boolRes = mysqli_select_db($cnx, 'php');
if (!$boolRes) throw new Exception($base.' introuvable');
$file = "../data"."/allo.json";
$data = file_get_contents($file);
$data_cat = json_decode($data);
$len = sizeof($data_cat);
$req ="USE php;\n";
for ($i=0; $i < $len; $i++) { 
    $j = 0;
    foreach ($data_cat[$i] as $key => $value) {
        $data1[$j] = $value;
        $j = $j + 1;
    }
    $req = $req . "INSERT INTO `allo` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('".$data1[0]."', '".$data1[1]."', '".$data1[2]."', '".$data1[3]."', '".$data1[4]."', ".$data1[5].", ".$data1[6].");\n";
}

$file = "../data"."/formation.json";
$data = file_get_contents($file);
$data_cat = json_decode($data);
$len = sizeof($data_cat);
for ($i=0; $i < $len; $i++) { 
    $j = 0;
    foreach ($data_cat[$i] as $key => $value) {
        $data1[$j] = $value;
        $j = $j + 1;
    }
    $req = $req . "INSERT INTO `formation` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('".$data1[0]."', '".$data1[1]."', '".$data1[2]."', '".$data1[3]."', '".$data1[4]."', ".$data1[5].", ".$data1[6].");\n";
}

$file = "../data"."/objet.json";
$data = file_get_contents($file);
$data_cat = json_decode($data);
$len = sizeof($data_cat);
for ($i=0; $i < $len; $i++) { 
    $j = 0;
    foreach ($data_cat[$i] as $key => $value) {
        $data1[$j] = $value;
        $j = $j + 1;
    }
    $req = $req . "INSERT INTO `objet` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('".$data1[0]."', '".$data1[1]."', '".$data1[2]."', '".$data1[3]."', '".$data1[4]."', ".$data1[5].", ".$data1[6].");\n";
}

$file = "../data"."/User.json";
$data = file_get_contents($file);
$data_cat = json_decode($data);
$len = sizeof($data_cat);
for ($i=0; $i < $len; $i++) { 
    $j = 0;
    foreach ($data_cat[$i] as $key => $value) {
        $data1[$j] = $value;
        $j = $j + 1;
    }
    $req = $req . "INSERT INTO `user` (`nom`, `prenom`, `login`, `password`) VALUES ('".$data1[0]."', '".$data1[1]."', '".$data1[2]."', '".$data1[3]."');\n";
}
file_put_contents("vachetteData.sql", $req);

?>