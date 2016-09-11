<section id="gallery">
	<div class="row">
		<div class="container">
		    <h1 class="page-header">Thumbnail Gallery</h1>

		    
		    <div class="row">
		    	<div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" 
			        data-image="images/demo8.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo8.jpg" alt="Short alt text">
			        </a>
			    </div>
			    
			    <div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="The car i dream about" data-caption="If you sponsor me, I can drive this car" 
			        data-image="images/demo4.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo4.jpg" alt="A alt text">
			        </a>
			    </div>
			    
			    <div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-caption="And if there is money left, my girlfriend will receive this car" 
			        data-image="images/demo3.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo3.jpg" alt="Another alt text">
			        </a>
			    </div>

			    <div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-caption="And if there is money left, my girlfriend will receive this car" 
			        data-image="images/demo2.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo2.jpg" alt="Another alt text">
			        </a>
			    </div>
		    </div>

		    
		    <div class="row">
		    	<div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" 
			        data-image="images/demo8.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo8.jpg" alt="Short alt text">
			        </a>
			    </div>
			    
			    <div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="The car i dream about" data-caption="If you sponsor me, I can drive this car" 
			        data-image="images/demo4.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo4.jpg" alt="A alt text">
			        </a>
			    </div>
			    
			    <div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-caption="And if there is money left, my girlfriend will receive this car" 
			        data-image="images/demo3.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo3.jpg" alt="Another alt text">
			        </a>
			    </div>

			    <div class="col-lg-3 col-md-4 col-xs-6">
			        <a class="gallery-item" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-caption="And if there is money left, my girlfriend will receive this car" 
			        data-image="images/demo2.jpg" data-target="#image-gallery">
			            <img class="img-responsive" src="images/demo2.jpg" alt="Another alt text">
			        </a>
			    </div>
		    </div>




		</div>
</section>



<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>