<?php

/**
 * Java基礎Lesson06<br>
 * Lesson04、Lesson05で作成したプログラムを修正して、社員クラス、技術者クラスを追加し<br>
 * Listを使用して登録、printメソッドで全て表示するプログラムを作成してください。
 * 
 * @author furuyaK
 * @since PHP 7.0.13
 */

/**
 * 技術者クラス(Engineer)
 */
class Engineer extends Person {
    /**
     * 保有技術
     * @var String
     */
    private $skill;

    /**
     * 技術者の情報を登録するコンストラクタ
     * @param String name 氏名
     * @param String address 住所
     * @param int $age 年齢
     * @param String $skill 保有技術
     * @param String $telephone 電話番号
     */
    function __construct(String $name, String $address, int $age, String $skill, String $telephone) {
        parent::__construct($name, $address, $age, $telephone);
        $this->skill = $skill;
    }

	/**
     * 保有技術を設定する
     * @param String $skill 保有技術
     */
    public function setSkill(String $skill) {
        $this->skill = $skill;
    }
    
	/**
     * 保有技術を取得する
     * @return String $skill 保有技術
     */
    public function getSkill() {
        return $this->skill;
    }

 	/**
     * 登録した情報を出力する
     */
    public function print() {
        print("氏名：" . parent::getName() . "<br />");
        print("住所:" . parent::getAddress() . "<br />");
        print("年齢：" . parent::getAge() . "<br />");
        print("保有技術：$this->skill<br />");
        print("電話番号：" . parent::getTelephone() . "<br />");
        print("<br />");
    }   
}

