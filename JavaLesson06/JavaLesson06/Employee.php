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
 * 社員クラス(Employee)
 */
class Employee extends Person {
    /**
     * 所属部署名
     * @var String
     */
    private $section;

    /**
     * 社員の情報を登録するコンストラクタ
     * @param String name 氏名
     * @param int $age 年齢
     * @param String $section 所属部署名
     * @param String $telephone 電話番号
     */
    function __construct(String $name, int $age, String $section, String $telephone) {
        parent::__construct($name, "", $age, $telephone);
        $this->section = $section;
    }

	/**
     * 所属部署名を設定する
     * @param String $section 所属部署名
     */
    public function setSection(String $section) {
        $this->section = $section;
    }
    
	/**
     * 所属部署名を取得する
     * @return String $telephone 電話番号
     */
    public function getSection() {
        return $this->section;
    }

 	/**
     * 登録した情報を出力する
     */
    public function print() {
        print("氏名：" . parent::getName() . "<br />");
        print("年齢：" . parent::getAge() . "<br />");
        print("所属部署名：$this->section<br />");
        print("電話番号：" . parent::getTelephone() . "<br />");
        print("<br />");
    }   
}

