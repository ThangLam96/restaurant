/*<img src="images/facebook.png" class="top-img">*/
var src = "";
$(".top-img").mouseenter(function(){
src = $(this).attr('src');   /* thuoc tinh src*/ 
var image = src.split("/")[1]; /*tách từ "đến / thì ngưng*/
var name = image.split(".")[0];/*sau dấu / tách đến . thì ngưng*/
name = name+"-hover."+image.split(".")[1];
var new_src = src.split("/")[0]+"/"+name;
console.log(new_src); 
$(this).attr('src',new_src);
})
$(".top-img").mouseleave(function(){
$(this).attr('src', src);
})