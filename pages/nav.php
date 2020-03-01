<script type="text/javascript">
	$(function(){
		$(".btn-nav").click(function(){
			var alamat=$(this).attr("data-url");
			$.ajax({
				type:"post",
				url:alamat,
				success:function(data){
					var a=data.length;
					if(data.substring(a-4,a)===".php"){
						$("#konten").empty();
						$("#konten").load(data);
					}else{
						$("#konten").empty();
						$("#konten").html(data);
					}
				},
				error:function(data){
					$("#konten").html("404 page not found");
				}
			});
		});

		$("#frm-input").submit(function(){
			var data1=$(this).serialize();
			var url1=$(this).attr("data-url");
			$.ajax({
				type:"post",
				url:url1,
				data:data1,
				success:function(data){
					$("#konten").empty();
					$("#konten").html(data);
				},
				error:function(data){
					$("#konten").html("404 page not found");
				}
			})
		});
	})

	$(function(){
		$(".tabel-data").dataTable();
		$(".select2").select2();
	});
</script>