<?php

/*
	Java基礎Lesson02
	配列dataを逐次決定法で昇順にソートして結果を出力するプログラム
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


/* 逐次決定法で昇順ソート */
echo "<br />《昇順ソート開始》<br />";
// 配列のサイズ-1回繰り返し
for ( $i = 0; $i < $iDataSize; $i++ ) {

	// 最小値の配列位置保持用変数
	$iMin = $i;

	for ( $j = $i + 1; $j < $iDataSize; $j++ ) {
	
		// 小さな値が見つかった場合
		if ( $aData[$iMin] > $aData[$j] ) {
		
			// 最小値の配列位置保持用変数を更新
			$iMin = $j;
		}
	}
	
	// 値の入れ替えが必要な場合
	if ( $iMin != $i ) {
	
		// 値の入れ替えを実施
		$tmp = $aData[$i];
		$aData[$i] = $aData[$iMin];
		$aData[$iMin] = $tmp;
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

