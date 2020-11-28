<?php $__env->startSection('title', 'Venues'); ?>

<?php $__env->startSection('subheader', 'Venues'); ?>
<?php $__env->startSection('subheader-link', route('venues.index')); ?>

<?php $__env->startSection('subheader-action', 'Create'); ?>

<?php $__env->startSection('pagevendorsstyles'); ?>
    <link href="<?php echo e(asset('assets/plugins/custom/uppy/uppy.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">
                            <strong>
                                Whoops!
                            </strong>
                            There were some problems with your input. <br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="la la-close"></i></span>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile"
                     id="kt_page_portlet">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Create New Venue
                                <small>Fill in the details below</small>
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="javascript:history.go(-1)" class="btn btn-clean kt-margin-r-10">
                                <i class="la la-arrow-left"></i>
                                <span class="kt-hidden-mobile">Back</span>
                            </a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-brand" id="save-btn">
                                    <i class="la la-check"></i>
                                    <span class="kt-hidden-mobile">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <form class="kt-form" id="venue-form" action="<?php echo e(route('venues.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-8">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body">
                                            <h3 class="kt-section__title kt-section__title-lg">Venue
                                                Info:</h3>
                                            <div class="form-group row">
                                                <label class="col-3 col-form-label">Venue Image</label>
                                                <div class="col-9">
                                                    <div class="kt-uppy <?php $__errorArgs = ['venue_image_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kt_uppy_3">
                                                        <div class="kt-uppy__drag"></div>
                                                        <div class="kt-uppy__informer"></div>
                                                        <div class="kt-uppy__progress"></div>
                                                        <div class="kt-uppy__thumbnails"></div>
                                                    </div>
                                                    <?php $__errorArgs = ['venue_image_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <span class="form-text text-muted">
                                                        Leave this blank if you do not wish to set the venue image.
                                                    </span>
                                                    <input type="hidden" name="venue_image_path" id="venue_image_path" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-3 col-form-label">Venue Name</label>
                                                <div class="col-9">
                                                    <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                           name="name" type="text" placeholder="Venue Name" maxlength="80"
                                                           value="<?php echo e(old('name')); ?>">
                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-3 col-form-label">Description</label>
                                                <div class="col-9">
                                                    <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" placeholder="Venue Description" rows="3" maxlength="200"><?php echo e(old('description')); ?></textarea>
                                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-3 col-form-label">Capacity (persons)</label>
                                                <div class="col-9">
                                                    <input class="form-control <?php $__errorArgs = ['capacity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="capacity" placeholder="Capacity" value="<?php echo e(old('capacity')); ?>">
                                                    <?php $__errorArgs = ['capacity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div
                                                class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-section kt-section--last">
                                                <div class="kt-section__body">
                                                    <h3 class="kt-section__title kt-section__title-lg">Air Conditioning:</h3>
                                                    <div class="form-group row">
                                                        <label class="col-3 col-form-label">Air Conditioned</label>
                                                        <div class="col-9">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label class="kt-option">
                                                                        <span class="kt-option__control">
                                                                            <span class="kt-radio kt-radio--bold kt-radio--brand">
                                                                                <input type="radio" name="air_conditioned" value="1" checked>
                                                                                <span></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="kt-option__label">
                                                                            <span class="kt-option__head">
                                                                                <span class="kt-option__title">
                                                                                    Air Conditioned
                                                                                </span>
                                                                            </span>
                                                                            <span class="kt-option__body">
                                                                                The venue is air conditioned.
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label class="kt-option">
                                                                        <span class="kt-option__control">
                                                                            <span class="kt-radio kt-radio--bold kt-radio--brand">
                                                                                <input type="radio" name="air_conditioned" value="0">
                                                                                <span></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="kt-option__label">
                                                                            <span class="kt-option__head">
                                                                                <span class="kt-option__title">
                                                                                    Not Air Conditioned
                                                                                </span>
                                                                            </span>
                                                                            <span class="kt-option__body">
                                                                                The venue is not air conditioned.
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                            <div class="kt-section kt-section--last">
                                                <div class="kt-section__body">
                                                    <h3 class="kt-section__title kt-section__title-lg">Venue Activation:</h3>
                                                    <div class="form-group row">
                                                        <label class="col-3 col-form-label">Venue Active</label>
                                                        <div class="col-9">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label class="kt-option">
                                                                        <span class="kt-option__control">
                                                                            <span class="kt-radio kt-radio--bold kt-radio--brand">
                                                                                <input type="radio" name="active" value="1" checked>
                                                                                <span></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="kt-option__label">
                                                                            <span class="kt-option__head">
                                                                                <span class="kt-option__title">
                                                                                    Active
                                                                                </span>
                                                                            </span>
                                                                            <span class="kt-option__body">
                                                                                Venue is active and can be booked.
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label class="kt-option">
                                                                        <span class="kt-option__control">
                                                                            <span class="kt-radio kt-radio--bold kt-radio--brand">
                                                                                <input type="radio" name="active" value="0">
                                                                                <span></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="kt-option__label">
                                                                            <span class="kt-option__head">
                                                                                <span class="kt-option__title">
                                                                                    Inactive
                                                                                </span>
                                                                            </span>
                                                                            <span class="kt-option__body">
                                                                                Venue is inactive and cannot be booked.
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagevendorsscripts'); ?>
    <script src="<?php echo e(asset('assets/plugins/custom/uppy/uppy.bundle.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
    <script>
        "use strict";

        var KTUppy = function () {
            const XHR = Uppy.XHRUpload;
            const ProgressBar = Uppy.ProgressBar;
            const StatusBar = Uppy.StatusBar;
            const FileInput = Uppy.FileInput;
            const Informer = Uppy.Informer;

            var initUppy3 = function(){
                var id = '#kt_uppy_3';

                var uppyDrag = Uppy.Core({
                    autoProceed: true,
                    restrictions: {
                        maxFileSize: 1000000, // 1mb
                        maxNumberOfFiles: 1,
                        minNumberOfFiles: 1,
                        allowedFileTypes: ['image/*']
                    }
                });

                uppyDrag.use(Uppy.DragDrop, { target: id + ' .kt-uppy__drag' });
                uppyDrag.use(ProgressBar, {
                    target: id + ' .kt-uppy__progress',
                    hideUploadButton: false,
                    hideAfterFinish: false
                });
                uppyDrag.use(Informer, { target: id + ' .kt-uppy__informer'  });
                uppyDrag.use(XHR, {
                    endpoint: '<?php echo e(route('files.images.store')); ?>',
                    method: 'POST',
                    fieldName: 'file',
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    },
                });

                uppyDrag.on('complete', function(file) {
                    var imagePreview = "";
                    $.each(file.successful, function(index, value){
                        var imageType = /image/;
                        var thumbnail = "";
                        if (imageType.test(value.type)){
                            thumbnail = '<div class="kt-uppy__thumbnail"><img src="'+value.uploadURL+'"/></div>';
                        }
                        var sizeLabel = "bytes";
                        var filesize = value.size;
                        if (filesize > 1024){
                            filesize = filesize / 1024;
                            sizeLabel = "kb";
                            if(filesize > 1024){
                                filesize = filesize / 1024;
                                sizeLabel = "MB";
                            }
                        }
                        $('#venue_image_path').val(value.response.body.image_path);
                        imagePreview += '<div class="kt-uppy__thumbnail-container" data-id="'+value.id+'">'+thumbnail+' <span class="kt-uppy__thumbnail-label">'+value.name+' ('+ Math.round(filesize, 2) +' '+sizeLabel+')</span><span data-id="'+value.id+'" class="kt-uppy__remove-thumbnail"><i class="flaticon2-cancel-music"></i></span></div>';
                    });

                    $(id + ' .kt-uppy__thumbnails').append(imagePreview);
                });

                $(document).on('click', id + ' .kt-uppy__thumbnails .kt-uppy__remove-thumbnail', function(){
                    var imageId = $(this).attr('data-id');

                    $.ajax({
                        url: '<?php echo e(route('files.images.destroy')); ?>',
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'},
                        data: {
                            image_path: $('#venue_image_path').val(),
                        },
                        error: function() {
                            $.notify({
                                icon: 'glyphicon glyphicon-warning-sign',
                                message: 'An error has occurred',
                            }, { type: 'danger'});
                        },
                        success: function(data) {
                            uppyDrag.removeFile(imageId);
                            $(id + ' .kt-uppy__thumbnail-container[data-id="'+imageId+'"').remove();
                            $("#venue_image_path").val('');
                        },
                    });
                });
            }

            return {
                init: function() {
                    initUppy3();
                }
            };
        }();

        var KTFormControls = function () {
            var formValidation = function () {
                $( "#venue-form" ).validate({
                    rules: {
                        name: {
                            required: true,
                            maxlength: 80,
                        },
                        description: {
                            required: true,
                            maxlength: 200
                        },
                        capacity: {
                            required: true,
                            min: 1,
                        }
                    },
                    //display error alert on form submit
                    invalidHandler: function(event, validator) {
                        swal.fire({
                            "title": "",
                            "text": "There are some errors in your submission. Please correct them.",
                            "type": "error",
                            "confirmButtonClass": "btn btn-secondary",
                        });

                        event.preventDefault();
                    },
                    submitHandler: function (form) {
                        form.submit();
                    }
                });
            }

            return {
                init: function() {
                    formValidation();
                }
            };
        }();

        $(document).ready(function () {
            $("#save-btn").click(function () {
                $("#venue-form").submit(); // Submit the form
            });

            KTUppy.init();
            KTFormControls.init();
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\xampp\htdocs\system\resources\views/superadmin/venues/create.blade.php ENDPATH**/ ?>