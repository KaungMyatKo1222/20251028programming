<?php
class dog{
    private $type;
    private $age;
    private $gender; //0 メス　1オス
    public function __construct($type,$age,$gender){
        $this->type = $type;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function disc(){
        echo '<br>-----------------<br>';
        echo '犬種：' , $this->type , '<br>';
        echo '年齢' , $this->type , '才<br>';
        echo '性別：' , $this->getGender() , '<br>';
    }
    public function getGender(){
        if($this->gender === 0){
            return 'オス';
        }else{
            return 'メス';
        }
    }
}
//トイプードル：2才：メス
$dog1 = new dog('トイプードル',2,0);
//チワワ：1才：オス
$dog2 = new dog('チワワ',1,1);
//柴犬：3才：オス
$dog3 = new dog('チワワ',3,1);


//出力
$dog1->disc();
$dog2->disc();
$dog3->disc();
