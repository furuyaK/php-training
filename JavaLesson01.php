<?php

	/*
		Java基礎Lesson01
		1から100までの整数のうち、3の倍数と3がつく値を出力するプログラム
	*/
	// 1から100まで繰り返す
	for ( $num=1; $num <= 100; $num++ ) {
	
		// 3の倍数か3がつく値の場合
		if ( isCheckNum3($num) ) {
			// 値を出力
			print($num . "<br />");
		}

	}
	
	/**
	 * 引数が3の倍数もしくは3がつく値かを判定する関数
	 *
	 * @param $num 整数値
	 * @return 判定結果 true/false
	 */
	function isCheckNum3($num) {
		
		// 3の倍数の場合
		if ( $num%3 == 0 ) {
			return true;
		}
		// 3がつく(文字列に3を含む)値の場合
		else if ( strpos($num,"3") !== false ) {
			return true;
		}
		// 上記以外の場合
		else {
			return false;
		}
	}
