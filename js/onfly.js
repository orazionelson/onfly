// Put your custom code here
$("#onfly-page").on("pageshow", function(e) {
    //console.log("Ready to bring the awesome.");
    var sugList = $("#suggestions");
	var sugWidth = $('#onflysearch').width();

	$('#suggestions').width(sugWidth);
	
    $("#onflysearch").on("input", function(e) {
        var text = $(this).attr('value').toLowerCase();
        if(text.length < 1) {
            sugList.html("");
            sugList.listview("refresh");
        } else {
            $.post("ajax2.php",{value:text}, function(res,code) {
                var str = "";
                for(var i=0, len=res.length; i<len; i++) {
                    str += "<li><a href=\"#\" class=\"goto\" title=\""+res[i]+"\">"+res[i]+"</a></li>";
                }
                sugList.html(str);
                sugList.listview("refresh");
                //console.dir(res);
                
                $('.goto').click(function(){
					$('#messages').empty();
					$('#suggestions').empty();
					
					var tag=$(this).attr('title');
					
					$('#onflysearch').attr('value', tag);
					//alert($(this).attr('title'));
					
					$.post('ajax3.php', { tag : tag }, function(searchq){$('#messages').append(searchq).trigger('create');});
				});	
                 
            },"json");
            
        
        }
    }).focus(function(){$(this).val('');});
   $('.keywords').load('ajax4.php'); 
});
