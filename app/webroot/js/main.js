$(function(){
		$('#transaction_symbol').change(function(){
			var number = $(this).val();
			//var name = $(this).text();
			//console.log(number);
			//console.log(name);
			var url = "http://socialtrading.herokuapp.com/getjson";
			$.ajax({
				type:"GET",
				dataType:'json',
				number:number,
				url:'http://finance.google.com/finance/info?client=ig&q=TPE:1101',
				success:
			    function(data) {
			    	console.log(url);
			    	console.log(data);
			        },
			    error:
			    function() {
			    	console.log('error');
			    }	

		});

});
	});