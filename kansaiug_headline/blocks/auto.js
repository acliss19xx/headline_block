ccmValidateBlockForm = function() {
	
	if ($('select[name=fontsize]').val() == '' || $('select[name=fontsize]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 文字の大きさ');
	}


	return false;
}
