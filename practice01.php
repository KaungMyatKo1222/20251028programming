<?php
class animal{
    public $name;
    public $type;
    public $voice;
}
$cat = new animal();
$cat->name = 'たま';
$cat->type = '猫';
$cat->voice = 'にゃー';


echo '名前：', $cat->name, '<br>';
echo '種類：', $cat->type , '<br>';
echo '鳴き声：', $cat->voice, '<br>';

$dog = new animal();
$dog -> name = 'ボチ';
$dog -> type = '犬';
$dog -> voice = 'ワンン';

echo '名前：', $dog->name, '<br>';
echo '種類：', $dog->type , '<br>';
echo '鳴き声：', $dog->voice, '<br>';

echo '<br>---------- 練習問題：２ ----------<br>';





class product{
   public $name; //名前
   public $price; //金額
   public $stock; //在庫
   public function disc(){
        echo "名前：{$this->name}<br>";
        echo "金額：{$this->price}<br>";
        echo "在庫：{$this->stock}<br>";
    }
}


//pen：名前：鉛筆、金額：150、在庫：10
$pen = new product;
$pen->name = '鉛筆';
$pen->price = '150';
$pen->stock = '10';
$pen->disc();
//cola：名前：コカ・コーラ、金額：180、在庫：30
$cola = new product;
$cola->name = 'コカ・コーラ';
$cola->price = '180';
$cola->stock = '30';
$cola->disc();
