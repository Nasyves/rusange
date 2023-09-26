$(document).ready(function(){
 $("#sector").on('change',function(){
 	var countryId-$(this).val();
 	$.ajax({
 		method:"POST",
 		url:"ajax.php",
 		data:{id:countryId},
 		dataType:"html",
 		success:function(data){
 			$("#cell").html(data);
 		}
 	});
 });

 $("#cell").on('change',function(){
 	var cellId-$(this).val();
 	$.ajax({
 		method:"POST",
 		url:"ajax.php",
 		data:{cellId:cellId},
 		dataType:"html",
 		success:function(data){
 			$("#village").html(data);
 		}
 	});
 });
});