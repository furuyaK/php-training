<?php

/*
	Java基礎Lesson03
	配列dataを隣接交換法で昇順にソートして結果を出力するプログラム
*/


/* 配列data作成 */
$aData = array(1,2,3,4,5,6,7,8,9,10,);
// 配列内の値をランダムに並び替える
shuffle($aData);
// 配列のサイズを取得
$iDataSize = count($aData);


/* ソート前の配列の値を出力 */
echo "《ソート前の配列内の値を出力》<br />";
printArray($aData, 1);


/* 隣接交換法で昇順ソート */
echo "<br />《昇順ソート開始》<br />";

// 配列のサイズ-2回繰り返し
for ( $i = 0; $i < $iDataSize - 1; $i++ ) {

	// 値入れ替えフラグ：入れ替え無し
	$bIsChengeFlg = false;
		
	for ( $j = 0; $j < $iDataSize - $i - 1; $j++ ) {
	
		// 値の入れ替えが必要な場合
		if ( $aData[$j] > $aData[$j+1] ) {
		
			$tmp = $aData[$j];
			$aData[$j] = $aData[$j+1];
			$aData[$j+1] = $tmp;
			
			// 値入れ替えフラグ：入れ替えあり
			$bIsChengeFlg = true;
		}
	}
	
	// 値入れ替えが行われなかった場合
	if ( $bIsChengeFlg == false ) {
	
		// ソート処理を終了
		break;
	}
}
echo "《昇順ソート終了》<br />";


/* ソート前の配列の値を出力 */
echo "<br />《ソート後の配列内の値を出力》<br />";
printArray($aData, 1);


/**
 * 配列内の値を出力する関数
 *
 * @param array $aData 配列
 * @param int $iPrintType 出力タイプ
 *             0：配列内の値を全て出力／1：print_r関数で値を出力
 */
function printArray($aData, $iPrintType) {
	
	switch ( $iPrintType ) {
		case 0:
			foreach ( $aData as $number ) {
				echo $number . "<br />";
			}
			break;
		case 1:
			print_r($aData);
			echo "<br />";
			break;
	}
}

