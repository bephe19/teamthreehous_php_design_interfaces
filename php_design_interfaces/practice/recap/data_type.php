<?php  

$data_type_scalar=[
    "Magang TOP",
    168,
    12.6,
    true,
    false,
    ["siswa","mentor"],
    ["alamat"=>"Green Lake City","kota"=>"Tangerang"]
];

foreach ($data_type_scalar as $key)
{
    if(is_scalar($key))
    {
        echo gettype($key)." Scalar Type".PHP_EOL;
    }
}

 echo isset($data_type_scalar)? "Ditemukan" : "Tidak ditemukan"; //ternary

 //if logic
 if(isset($data_type_scalar)){
     echo "Ditrmukan";
 }else{
     echo "Tidak Iitemukan";
 }

 echo PHP_EOL;

 $empty_data=[
     "",
     "0",
     0,
     0.0,
     false,
     NULL
 ];

 foreach($empty_data as $key)
 {
     if(empty($key))
     {
         echo gettype($key) . "is Empty" .PHP_EOL;
     }
 }