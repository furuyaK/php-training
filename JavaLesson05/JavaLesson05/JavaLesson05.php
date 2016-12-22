<?php
/**
 *  Java基礎Lesson05<br>
 * Lesson04で作成したPersonクラスをListを使用して複数登録し、<br>
 * 登録したデータを全て出力するプログラム
 * 
 * @author furuyaK
 * @since PHP 7.0.13
 */
require_once 'Person.php';

// Personクラスのデータ保持用
$arrPerson = array();

// データを追加する
array_push($arrPerson, new Person("佐藤太郎", "東京都", 20, "030123456"));
array_push($arrPerson, new Person("山田花子", "青森県", 80, "0170123456"));
array_push($arrPerson, new Person("木村 次郎", "京都府", 38, "0750123456"), new Person("木村 三郎", "沖縄", 27, "0850123456"));

// 登録したデータの件数分繰り返し
foreach ($arrPerson as $person) {
    // データを出力する
    $person->print();
}
