<?php

	/*
		Java��bLesson01
		1����100�܂ł̐����̂����A3�̔{����3�����l���o�͂���v���O����
	*/
	// 1����100�܂ŌJ��Ԃ�
	for ( $num=1; $num <= 100; $num++ ) {
	
		// 3�̔{����3�����l�̏ꍇ
		if ( isCheckNum3($num) ) {
			// �l���o��
			print($num . "<br />");
		}

	}
	
	/**
	 * ������3�̔{����������3�����l���𔻒肷��֐�
	 *
	 * @param $num �����l
	 * @return ���茋�� true/false
	 */
	function isCheckNum3($num) {
		
		// 3�̔{���̏ꍇ
		if ( $num%3 == 0 ) {
			return true;
		}
		// 3����(�������3���܂�)�l�̏ꍇ
		else if ( strpos($num,"3") !== false ) {
			return true;
		}
		// ��L�ȊO�̏ꍇ
		else {
			return false;
		}
	}
