$(document).ready(function(){
	$.get("https://jsonplaceholder.typicode.com/posts/1", function(data){
		var pessoa = data;
		for(var propName in pessoa){
			propValue = pessoa[propName];
		 	console.log(propValue + ", ");
		}
	});
});