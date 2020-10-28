<!DOCTYPE html>
<html>
<head>
	<title>Crear Repo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<?php include('styles.php'); ?>
</head>
<body>
		<div class="container">
			<div class="row mt-4 pt-4">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-12">
							<div class="dropdown-menu col-sm-12">
								<h3>Base 64</h3>
								<a class="dropdown-item" href="#" onclick="mostar(1)">Encode</a>
								<a class="dropdown-item" href="#" onclick="mostar(2)">Decode</a>
								<a class="dropdown-item" href="#" onclick="mostar(3)">Encode HTML</a>
								<a class="dropdown-item" href="#" onclick="mostar(4)">Decode HTML</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="accordion" id="accordionExample">
							  <div class="card collapse show" id="card_1">
							    <div class="card-header">
							      <h2 class="mb-0">
							          Collapsible Group Item #1
							      </h2>
							    </div>
							    <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							    </div>
							  </div>
							  <div class="card collapse" id="card_2">
							    <div class="card-header">
							      <h2 class="mb-0">
							          Collapsible Group Item #2
							      </h2>
							    </div>
							    <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							    </div>
							  </div>
							  <div class="card collapse" id="card_3">
							    <div class="card-header">
							      <h2 class="mb-0">
							          Collapsible Group Item #3
							      </h2>
							    </div>
							    <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							    </div>
							  </div>
							  <div class="card collapse" id="card_4">
							    <div class="card-header">
							      <h2 class="mb-0">
							          Collapsible Group Item #4
							      </h2>
							    </div>
							    <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script >
		function mostar(id){
			$('#card_'+id).collapse('show');
			if (id==1) {
				$('#card_2').collapse('hide');
				$('#card_3').collapse('hide');
				$('#card_4').collapse('hide');
			}else if(id==2){
				$('#card_1').collapse('hide');
				$('#card_3').collapse('hide');
				$('#card_4').collapse('hide');
			}else if(id==3){
				$('#card_1').collapse('hide');
				$('#card_2').collapse('hide');
				$('#card_4').collapse('hide');
			}else{
				$('#card_1').collapse('hide');
				$('#card_2').collapse('hide');
				$('#card_3').collapse('hide');
			}
		}
	</script>
</body>
</html>