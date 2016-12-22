<?php
/**
 * Java基礎Lesson04<br>
 * 個人クラス(Person)を作成し、<br>
 * Personに登録した情報をPersonクラスのprintメソッドで出力するプログラム
 * 
 * @author furuyaK
 * @since PHP 7.0.13
 */
require_once 'Person.php';

// 情報を登録する
$person1 = new Person("佐藤太郎", "東京都", 20, "030123456");
$person2 = new Person("山田花子", "青森県", 80, "0170123456");
$person3 = new Person("木村 次郎", "京都府", 38, "0750123456");

// 登録した情報を出力する
$person1->print();
$person2->print();
$person3->print();