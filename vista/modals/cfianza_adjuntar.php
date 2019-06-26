<div  id="archivoCarta" style="display:none" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document" style="max-width: 70%">
		<div class="modal-content" style="height: 90%">
			<div class="modal-header">
				<h5 class="modal-title" id="smallmodalLabel">Carta fianza escaneada </h5>
        		<button type="button" class="btn-success" onClick="newSrc();"><img src="../images/icon/2.png"></button>
        		<!--<button type="button" class="btn-success" onClick="cfanterior1();"><img src="../images/icon/1.png"></button>
        		<button type="button" class="btn-success" onClick="cfanterior2();"><img src="../images/icon/0.png"></button>-->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" name="close" >
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<input type="text" id="archivo" name="archivo">
			<input type="text" id="id" name="id">
			<div class="embed-container" style="max-height: 900px">
        <iframe width="560" height="315" id="FrameID" name="Frame" src="" class="col-lg-12"></iframe>
			</div>
			<input type="hidden" id="id" name="id">
		</div>
	</div>
</div>

<script type="text/javascript">
  function newSrc() {
    var newSrc = document.getElementById("archivo").value;
    document.getElementById("FrameID").src=newSrc;
    //document.getElementById("FrameID").src="../doc/Cartas Fianzas Pendientes.pdf";
  }

  function cfanterior1() {
    var neSrc = document.getElementById("archivoanterior").value;
    document.getElementById("FrameID").src="../doc/archivo 11.jpg";
  }
  function cfanterior2() {
    var neSrc = document.getElementById("archivoanterior").value;
    document.getElementById("FrameID").src="../doc/132-480-1-PB.pdf";
  }
</script>

<style>
.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>