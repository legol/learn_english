
function onClick_saveSentences() {
	alert($("#new_sentence").val());

	var utilities = new Utilities();
	utilities.init();

	utilities.commit('http://192.168.91.129:10001/index.php?c=hh&m=saveSentence', {input: $("#new_sentence").val()}, null, null);
}
