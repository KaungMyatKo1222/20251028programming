<?php
class character{
    private $name;
    private $HP; //体力
    private $EXP; //経験値
    private $attack;//攻撃力
    private $defense;//防御力
    //インスタンス時に実行されるコンストラクタ
    function __construct($name){
        //初期化処理
        $this->name = $name;
        $this->HP = rand(1,100);
        $this->EXP = 0;
        $this->attack = rand(1,10);
        $this->defense = rand(1,10);
    }
    public function disc(){
        echo "名前：{$this->name}<br>";
        echo "HP:{$this->HP}、攻撃力{$this->attack}、防御力{$this->defense}<br>";
    }
    //getデータを出力するメソッド
    public function getHP(){ return $this->HP; }
    public function getAttack(){ return $this->attack; }
    public function getDefense(){ return $this->defense; }
    //set データをセットするメソッド
    public function setHP($hp){ $this->HP = $hp;}
    public function setEXP($exp){ $this->EXP = $hp;}
}


$user = new character('ユーザ');
$user->disc();
echo 'HP:' , $user->getHP() , '<br>';
echo '攻撃力:' , $user->getAttack() , '<br>';
echo '防御力:' , $user->getDefense() , '<br>';


$monster = new character('モンスター');
$monster->disc();




function attack($user,$npc){


    //どちらかのHPが無くなるまで戦う
    while($user->getHP() > 0 && $npc->getHP() > 0){
        echo '<br>------------------<br>';
        //ユーザの攻撃
        $ncpHP = $npc->getHP() - $user->getAttack();
        $npc->setHP($ncpHP);
        $npc->disc();
        //NCPの攻撃
        $userHP = $user->getHP() - $npc->getAttack();
        $user->setHP($userHP);
        $user->disc();
        echo '<br>------------------<br>';
        //sleep(3);//3秒停止
    }
    if($user->getHP() < 0 ){
        echo '負けました<br>';
    }else{
        echo '勝ちました<br>';
         $user->disc();
    }


};


attack($user,$monster);
