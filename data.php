<?php include "base_template_fooyter.php"; ?>

<script>
	$(document).ready(function(){
		var myTable =$('#datatable').DataTable({
			"ajax": {
				type : "POST",
				url : '<?php echo $baseURL;?>api.keyword.php',
				data : function(d){
					d.type= "1";
				}}
				}
			}
		}
	}