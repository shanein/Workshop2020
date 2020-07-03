var callBackSuccess = function(data) {
	console.log("donnees api", data)
}

function buttonClickGET() {
	var url = "https://influence.beta.krugazor.eu/api/influencers/0"

	$.get(url, callBackSuccess).done(function() {
		//alert( "second success" );
	})
	.fail(function() {
		alert( "error" );
	})
	.always(function() {
		//alert( "finished" );
	});
}
