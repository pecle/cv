<div class="panel panel-default panel-info">
	<div class="panel-heading">
	  <h4 class="panel-title">
	    <a class="myPanelHeader" data-parent="#accordion" href="#competences"></a>
	  </h4>
	</div>

	<div id="competences" class="panel-collapse collapse in">
	  <div class="panel-body">

		<div class="panel-group" id="accordion">
		  <div class="panel">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a class="myPanelHeader" data-toggle="collapse" data-parent="#accordion" href="#prog_web">
		          Programmation Web
		        </a>
		      </h4>
		    </div>
		    <div id="prog_web" class="panel-collapse collapse in">
		      <div class="panel-body">
		        <?php include_once('parts/prog_web.php'); ?>
		      </div>
		    </div>
		  </div>
		  <div class="panel">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a class="myPanelHeader" data-toggle="collapse" data-parent="#accordion" href="#prog">
		          Programmation logicielle
		        </a>
		      </h4>
		    </div>
		    <div id="prog" class="panel-collapse collapse">
		      <div class="panel-body">
		        <?php include_once('parts/prog.php'); ?>
		      </div>
		    </div>
		  </div>
		  <div class="panel">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a class="myPanelHeader" data-toggle="collapse" data-parent="#accordion" href="#langues">
		          Langues
		        </a>
		      </h4>
		    </div>
		    <div id="langues" class="panel-collapse collapse">
		      <div class="panel-body">
		      	<?php include_once('parts/langues.php'); ?> 
		      </div>
		    </div>
		  </div>
		</div>

	  </div>
	</div>

	<div class="panel-heading">
	  <h4 class="panel-title">
	    <a class="myPanelHeader" data-parent="#accordion" href="#competences"></a>
	  </h4>
	</div>
</div>
