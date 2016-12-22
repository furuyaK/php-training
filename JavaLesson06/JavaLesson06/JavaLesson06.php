<?php
/**
 * Java基礎Lesson06<br>
 * Lesson04、Lesson05で作成したプログラムを修正して、社員クラス、技術者クラスを追加し<br>
 * Listを使用して登録、printメソッドで全て表示するプログラムを作成してください。
 * 
 * @author furuyaK
 * @since PHP 7.0.13
 */
require_once 'Person.php';
require_once 'Employee.php';
require_once 'Engineer.php';

// データ保持用
$arrPerson = array();

// データを追加する
array_push($arrPerson, new Person("佐藤太郎", "東京都", 20, "030123456"));
array_push($arrPerson, new Person("山田花子", "青森県", 80, "0170123456"));
array_push($arrPerson, new Person("木村 次郎", "京都府", 38, "0750123456"), new Person("木村 三郎", "沖縄", 27, "0850123456"));
array_push($arrPerson, new Employee("原田大輔", 15 ,"金融システム部", "0170123459"));
array_push($arrPerson, new Engineer("大塚理沙子", "愛知県", 30 ,"英検３級", "0270123459"));

// 登録したデータの件数分繰り返し
foreach ($arrPerson as $person) {
    // データを出力する
    $person->print();
}
