// JavaScript Document
$(
  function(){ 
  	//change the bg color of the 
  	$('.tabs').click(
		function(){
			var id=this.id;
			showContent(id);
		}
  	);
	function showContent(id){
		hideAllContent();
		$('#content'+id).fadeIn();
		$('#'+id).addClass('activeTab');
	}
	function hideAllContent(){
		$('.content').hide();
		$('.tabs').removeClass('activeTab');
	}
	showContent(1);
	

});