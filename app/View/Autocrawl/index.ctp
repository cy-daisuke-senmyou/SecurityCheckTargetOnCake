<script type="text/javascript" charset="UTF-8">
	var click_flg = false;
	$(function(){
		$("#touch").one("click touchstart", function(){
			console.log("touch!");
			if(!click_flg){
				click_flg = true;
				location.href="/autocrawl/end"
			}else{
				return;
			}
		});
	});
</script>

<div id="touch" style="marign:0px auto; padding-top:90px">
	<img src="/img/takarabako01_01.png" />
</div>
