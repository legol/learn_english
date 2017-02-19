function onClick_saveSentences() {
	alert($("#new_sentence").val());

	var utilities = new Utilities();
	utilities.init();

	console.log(window.location.origin);

	utilities.commit(window.location.origin + '/index.php?c=sentences&m=saveSentence', {input: $("#new_sentence").val()}, onSentenceSaved, null);
}

function onSentenceSaved(response) {
	alert('hello');
}
