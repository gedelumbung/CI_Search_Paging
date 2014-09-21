Kota / Kabupaten :<br/>
<select name="id_rt" id="id_rt">
    <?php
		foreach($rt->result_array() as $k)
		{
			echo "<option value='".$k['id_kab']."'>".$k['nama_kab']."</option>";
		}
    ?>
	</select>
	<div id="rt">
	
    </div>
     <script type="text/javascript"> 
	  	$("#id_desa").change(function(){
	    		var id_desa = {id_desa:$("#id_desa").val()};
	    		$('#id_rt').attr("disabled",true);
	    		$.ajax({
						type: "POST",
						url : "http://localhost/oprek-ci/index.php/sinkron/rt",
						data: id_desa,
						success: function(msg){
							$('#rt').html(msg);
						}
				  	});
	    });
	   </script> 