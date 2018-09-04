
var color_arr = [false,false];
function colorFilter(){
	var color_black = false; 
	var color_blue = false;
	if($('#black').prop("checked")==true && !color_arr[0] ){
		color_black = "black";
		color_arr[0]=true;
		if(color_arr[1]){
			color_blue = "blue";
		}
	}
	else if($('#blue').prop("checked")==true && !color_arr[1]){
		color_blue = "blue";
		color_arr[1] = true;
		if(color_arr[0]){
			color_black = "black";
		}
	}
	else if($('#black').prop("checked")!=true){
		color_black = false;
		color_arr[0] = false;
		if(color_arr[1]){
			color_blue = "blue";
		}
	}
	else if($('#blue').prop("checked")!=true){
		color_blue = false;
		color_arr[1] = false;
		if(color_arr[0]){
			color_black="black";
		}
	}
	var color_data = [color_black,color_blue];
	// console.log(color_black,color_blue);
	$.ajax({
		url:'user_controller/color_filter',
		method:"POST",
		data:{'color0':color_data[0],'color1':color_data[1]},
		success : function(data){
			//console.log(data);
			$(".FI").html(data);
		}
	});
}
