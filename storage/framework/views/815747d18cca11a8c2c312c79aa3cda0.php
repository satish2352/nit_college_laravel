<?php $__env->startSection('content'); ?>
<style>
    .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>
<script>
    let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
<div class="container">

<div class="col-sm-12" style="padding:0;">
	<center><h2 style="color:green"><strong>Gallery</strong></h2></center>
	<!--<div class="pull-right"><img src="../up-images/index.html" alt="" class="img-responsive"></div>-->
</div>

</div>
</div><div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px" >
<div class="container">
	<div class="row">
		<div class="row">
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""-->
            <!--       data-image="../up-images/a1.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a1.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""-->
            <!--       data-image="../up-images/a3.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a3.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->

            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""-->
            <!--       data-image="../up-images/a5.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a5.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"-->
            <!--       data-image="../up-images/a6.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a6.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a7.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a7.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->



            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a8.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a8.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a9.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a9.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a10.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a10.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->



            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a11.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a11.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a12.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a12.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a13.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a13.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a14.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a14.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a15.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a15.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a16.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a16.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a17.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a17.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a18.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a18.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a19.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a19.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a20.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a20.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a22.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a22.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a23.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a23.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a24.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a24.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a25.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a25.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a26.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a26.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-xs-6 thumb">-->
            <!--    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"-->
            <!--       data-image="../up-images/a27.jpg"-->
            <!--       data-target="#image-gallery">-->
            <!--        <img class="img-thumbnail"-->
            <!--             src="../up-images/a27.jpg"-->
            <!--             alt="Another alt text">-->
            <!--    </a>-->
            <!--</div>-->
            
            <?php $__currentLoopData = $data_output; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="<?php echo e(Config::get('DocumentConstant.GALLERY_VIEW')); ?><?php echo e($gallery_data['fld_gallery_photo']); ?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="<?php echo e(Config::get('DocumentConstant.GALLERY_VIEW')); ?><?php echo e($gallery_data['fld_gallery_photo']); ?>"
                         alt="Another alt text">
                </a>
            </div>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>    
<div class="container"> 
<div class="row" style="padding:0px">
<div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
<div class="row outer-white">
        <div class="col-sm-12">
            <div>
                <h2></h2>
            </div>
            <div> 
            <div class="row">
           

                 <div class=" col-md-4" style="padding:5px"><!--<img src="../up-images/n1.jpg">--></div>
                 
               <div class=" col-md-4" style="padding:5px"><!--<img src="../up-images/n2 copy.jpg">--></div>
               
               <div class=" col-md-4" style="padding:5px"><!--<img src="../up-images/n3.jpg">--></div>
            </div>  
</div>
</div>        
</div><!-- /.row --></div>
<div class="col-md-1 hidden-sm">&nbsp;</div>
<div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
<!-- <div
style="margin-top: -40px;
margin-bottom: 12px;
text-align: center;
border-radius: 0px 0px 10px 10px;
background-color: #FE9B42;
color: rgb(255, 255, 255);">
<i>Last updated on : 21-02-2019 12:03 PM</i>
</div> -->
	<!--Right col-->
	<div class="col-sm-12 right-col-fix">
	<div>
		 <!--<img src="../visitors/layout_1/design/images/about-snjb-infographic-2.png" alt="" class="img-responsive" style="margin-top:30px; margin-bottom:30px;">-->
	 	</div>
	</div>
</div></div>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nit_final_project\resources\views/website/pages/gallery/polytechnic-gallery.blade.php ENDPATH**/ ?>