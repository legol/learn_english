
function onClick_saveSentences() {
	alert($("#new_sentence").val());

	var utilities = new Utilities();
	utilities.init();

	console.log(window.location.origin);

	utilities.commit(window.location.origin + '/index.php?c=hh&m=saveSentence', {input: $("#new_sentence").val()}, null, null);
}
