
<!DOCTYPE html>
<html>
<head>
   
   <link rel= "stylesheet" href="decoration.css">

   
   
   </head>
   
<style>



.rangeslider{
	width: 50%;
}

.myslider {
	-webkit-appearance: none;
	background: #99a8ac ;
	width: 25%;
	height: 5px;
	opacity: 2;
}


.myslider::-webkit-slider-thumb {
	-webkit-appearance: none;
	cursor: pointer;
	background: rgb(17, 82, 100); ;
	width: 10%;
	height: 10px;
}


.myslider:hover {
	opacity: 1;
}


</style>
<body>






<form action="php1.php" method = "POST">

    <?php 
    include ("php1.php")

    ?>
   
   
<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor1" style = "color:rgb(32, 115, 138);" ><small><strong>motor1:</strong> </small></lable>
<input type="range" min="0" max="180" value="0"
				class="myslider" id="motor1" name= "motor1"  >
 <span id="demo" class="ml-10" style = "color:rgb(32, 115, 138);" ></span>
</div>

<script>
var rangeslider = document.getElementById("motor1");
var output = document.getElementById("demo");
output.innerHTML = rangeslider.value;

rangeslider.oninput = function() {
output.innerHTML = this.value;
}
</script>






<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor2" style = "color:rgb(32, 115, 138);" ><small><strong>motor2:</strong> </small></lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor2" name= "motor2">
     <span id="demo2" style = "color:rgb(32, 115, 138);"></span>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor2");
    var output2 = document.getElementById("demo2");
    output2.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output2.innerHTML = this.value;
    }
    </script>






<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor3"style = "color:rgb(32, 115, 138);"  ><small><strong>motor3:</strong> </small></lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor3" name= "motor3">
     <span id="demo3" style = "color:rgb(32, 115, 138);"></span>
    </div>
    
    <script>
    var rangeslider= document.getElementById("motor3");
    var output3 = document.getElementById("demo3");
    output3.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output3.innerHTML = this.value;
    }
    </script>





<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor4"style = "color:rgb(32, 115, 138);" ><small><strong>motor4:</strong> </small></lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor4" name= "motor4">
     <span id="demo4" style = "color:rgb(32, 115, 138);"></span>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor4");
    var output4 = document.getElementById("demo4");
    output4.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output4.innerHTML = this.value;
    }
    </script>





<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor5" style = "color:rgb(32, 115, 138);" ><small><strong>motor5:</strong> </small></lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor5" name= "motor5">
     <span id="demo5" style = "color:rgb(32, 115, 138);"></span>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor5");
    var output5 = document.getElementById("demo5");
    output5.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output5.innerHTML = this.value;
    }
    </script>





<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor6" style = "color:rgb(32, 115, 138);" ><small><strong>motor6:</strong> </small></lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor6" name= "motor6">
     <span id="demo6" style = "color:rgb(32, 115, 138);"></span>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor6");
    var output6 = document.getElementById("demo6");
    output6.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output6.innerHTML = this.value;
    }
</script>

<br>
<input class= "save" type= "submit" value ="save" name ="save" >
    <input class= "run" type= "submit" value ="run" name ="run" >
    

<div class="col" >

<input class= "D_right" type= "submit" value ="R" name ="D_right" id="D_right" style="color:CYAN"  >

</div>

<script>
var rangeslider = document.getElementById("D_right");
rangeslider.oninput = function() {

}




</script>

<div class="col">

<input class= "D_left" type= "submit" value ="L" name ="D_left" id="D_left" style="color:CYAN">

</div>

<script>
var rangeslider = document.getElementById("D_left");
rangeslider.oninput = function() {

}
</script>




<div class="col">

<input class= "D_forward" type= "submit" value ="F" name ="D_forward" id="D_forward" style="color:CYAN" >

</div>

<script>
var rangeslider = document.getElementById("D_forward");
rangeslider.oninput = function() {

}
</script>



<div class="col">

<input class= "D_backward" type= "submit" value ="B" name ="D_backward" id="D_backward" style="color:CYAN" >

</div>

<script>
var rangeslider = document.getElementById("D_backward");
rangeslider.oninput = function() {

}
</script>


<div class="col">

<input class= "D_stop" type= "submit" value ="Stop" name ="D_stop" id="D_stop" style="color:CYAN" >

</div>

<script>
var rangeslider = document.getElementById("D_stop");
rangeslider.oninput = function() {

}
</script>


</body>
</html>
