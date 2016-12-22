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
 * 個人クラス(Person)
 */
class Person {
    /**
     * 氏名
     * @var String
     */
    private $name;
    /**
     * 住所
     * @var String
     */
    private $address;
    /**
     * 年齢
     * @var int
     */
    private $age;
    /**
     * 電話番号
     * @var String
     */
    private $telephone;

    /**
     * 個人の情報を登録するコンストラクタ
     * @param String name 氏名
     * @param String $address 住所
     * @param int $age 年齢
     * @param String $telephone 電話番号
     */
    function __construct(String $name, String $address, int $age, String $telephone) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
        $this->telephone = $telephone;
    }

	/**
     * 氏名を設定する
     * @param String $name 氏名
     */
    public function setName(String $name) {
        $this->name = $name;
    }
    
	/**
     * 氏名を取得する
     * @return String $name 氏名
     */
    public function getName() {
        return $this->name;
    }

	/**
     * 住所を設定する
     * @param String $address 住所
     */
    public function setAddress(String $address) {
        $this->address = $address;
    }
    
	/**
     * 住所を取得する
     * @return String $name 住所
     */
    public function getAddress() {
        return $this->address;
    }

	/**
     * 年齢を設定する
     * @param int $age 年齢
     */
    public function setAge(int $age) {
        $this->age = $age;
    }
    
	/**
     * 年齢を取得する
     * @return int $age 年齢
     */
    public function getAge() {
        return $this->age;
    }

	/**
     * 電話番号を設定する
     * @param String $telephone 電話番号
     */
    public function setTelephone(String $telephone) {
        $this->telephone = $telephone;
    }
    
	/**
     * 電話番号を取得する
     * @return String $telephone 電話番号
     */
    public function getTelephone() {
        return $this->telephone;
    }

 	/**
     * 登録した情報を出力する
     */
    public function print() {
        print("氏名：$this->name<br />");
        print("住所：$this->address<br />");
        print("年齢：$this->age<br />");
        print("電話番号：$this->telephone<br />");
        print("<br />");
    }   
}

