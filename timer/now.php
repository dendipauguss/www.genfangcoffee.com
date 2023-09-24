        <script src="../akses/jquery/jquery.js"></script>
       <script src="../akses/jquery/jquery.min.js"></script>

<body style="background-image: url(bord.png); background-size: 100%">
     
       <script type="text/javascript">
$(document).ready(function(){
 function real(){
  $.ajax({
      url:'timer.php', 
       
success:function(result){
  $("#hasilna").html(result);
  
}
    });

}
 setInterval(real,1000);
});
</script>  



<div id="hasilna" ></div>
</body>