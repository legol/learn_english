function onClick_saveSentences() {
	alert($("#new_sentence").val());

	var utilities = new Utilities();
	utilities.init();

	console.log(window.location.origin);

	utilities.post(
		window.location.origin + '/index.php?c=sentences&m=saveSentence',
		{input: $("#new_sentence").val()},
		onSentenceSaved,
		onSaveSentenceError
	);
}

function onSentenceSaved(response) {
	alert('hello');

	window.appController.loadData();
}

function onSaveSentenceError(response) {
	alert('error');
}
