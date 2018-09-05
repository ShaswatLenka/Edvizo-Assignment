
//logic for color selction - to know which colors are selected
var color_arr = [false,false];
var size_arr = [false,false,false];
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
	if(($('#black').prop("checked")!=true) && ($('#blue').prop("checked")!=true)){
		color_blue = false;
		color_black = false;
		color_arr[0] = false;
		color_arr[1] = false;
	}
	var color_data = [color_black,color_blue];
	$.ajax({
		url:'user_controller/color_filter',
		method:"POST",
		data:{'color0':color_data[0],'color1':color_data[1]},
		success : function(data){
			$(".FI").html(data);
		}
	});
}

function sizeFilter(){
	var size_small = false;
	var size_med = false;
	var size_large = false;

	if($('#S').prop("checked")==true){
		size_small= "S";
		size_arr[0]=true;
	}
	if($('#M').prop("checked")==true){
		size_med = "M";
		size_arr[1]=true;
	}
	if($('#L').prop("checked")==true){
		size_large = "L";
		size_arr[2] = true;
	}
	if($('#S').prop("checked")!=true){
		size_small=false;
		size_arr[0]=false;
	}
	if($('#M').prop("checked")!=true){
		size_med = false;
		size_arr[1]=false;
	}
	if($('#L').prop("checked")!=true){
		size_large = false;
		size_arr[2] = false;
	}
// console.log(size_small,size_med,size_large);
$.ajax({
		url:'user_controller/size_filter',
		method:"POST",
		data:{'size0':size_small,'size1':size_med,'size2':size_large},
		success : function(data){
			$(".FI").html(data);
		}
	});
}















