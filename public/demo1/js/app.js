function addCropper(formId){
    var form = document.getElementById(formId)
    form = form[0]
    var jForm = $(form)
    var bs_modal = jForm.find('#modal');
    // console.log(bs_modal)
    var image = form.querySelector('#image');
    console.log(bs_modal)
    var cropper,reader,file;
  
  
    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            bs_modal.modal('show');
        };
  
  
        if (files && files.length > 0) {
            file = files[0];
  
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });
  
    bs_modal.on('shown.bs.modal', function() {
        alert(1234)
        cropper = new Cropper(image, {
            viewMode: 1,
            dragMode: 'move',
            cropBoxMovable: false,
            cropBoxResizable: false,
            preview: '.preview',
            minCropBoxWidth: 158,
            minCropBoxHeight: 80,
            autoCropArea:1
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });
    $(jForm).find("#cancel").click(function() {
        bs_modal.modal('hide');
    })
    $(jForm).find("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            // width: 158,
            // height: 80,
            minWidth: 158, minHeight: 80,
            maxWidth: 4096, maxHeight: 4096,
            imageSmoothingEnabled: true,
            imageSmoothingQuality: 'high',
            zoomOnWheel:false
        });
  
        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
  
            reader.onloadend = function() {
                var base64data = reader.result;
                // console.log(jForm.find("input[name='image']"))
                jForm.find("input[name='base64_image']").val(base64data)
                jForm.find("#image-preview")
                    // .css('background-image', 'url("' + imageUrl + '")')
                    .attr('src', base64data)
                bs_modal.modal('hide');
                console.log(base64data)
                //alert(base64data);
                // $.ajax({
                //     type: "POST",
                //     dataType: "json",
                //     url: "crop_image_upload.php",
                //     data: {image: base64data},
                //     success: function(data) {
                //         bs_modal.modal('hide');
                //         alert("success upload image");
                //     }
                // });
            };
        }, 'image/jpeg', 1);
    });
  
  }
  // addCropper('form')
//   addCropper('form_update_brand')

// document.addEventListener('DOMContentLoaded', function () {
//     var imageInput = document.getElementById('imageInput');
//     var imageToCrop = document.getElementById('imageToCrop');
//     var imagePreview = document.getElementById('imagePreview');
//     var cropModal = $('#cropModal');
//     var cropButton = document.getElementById('cropButton');
//     var cropper;

//     imageInput.addEventListener('change', function (e) {
//         var files = e.target.files;
//         var done = function (url) {
//             imageInput.value = '';
//             imageToCrop.src = url;
//             cropModal.modal('show');
//             if (cropper) {
//                 cropper.destroy();
//             }
//             cropper = new Cropper(imageToCrop, {
//                 viewMode: 1,
//                 aspectRatio: 16 / 9, // Optional: Adjust the aspect ratio if needed
//                 responsive: true,
//                 autoCropArea: 1, // Ensure the crop box is set to the full size of the container
//                 zoomable: true,
//                 ready: function () {
//                     cropper.zoomTo(1); // Automatically zoom to the original size of the image
//                 }
//             });
//         };
//         var reader;
//         var file;
//         var url;

//         if (files && files.length > 0) {
//             file = files[0];

//             if (URL) {
//                 done(URL.createObjectURL(file));
//             } else if (FileReader) {
//                 reader = new FileReader();
//                 reader.onload = function (e) {
//                     done(reader.result);
//                 };
//                 reader.readAsDataURL(file);
//             }
//         }
//     });

//     cropButton.addEventListener('click', function () {
//         var canvas = cropper.getCroppedCanvas();

//         canvas.toBlob(function (blob) {
//             var url = URL.createObjectURL(blob);
//             var reader = new FileReader();
//             reader.readAsDataURL(blob);
//             reader.onloadend = function () {
//                 var base64data = reader.result;
//                 imagePreview.src = base64data;

//                 // Append the cropped image to the form data
//                 var formData = new FormData();
//                 formData.append('croppedImage', blob);

//                 // Example for sending the cropped image to the server
//                 // var xhr = new XMLHttpRequest();
//                 // xhr.open('POST', '/your-upload-endpoint', true);
//                 // xhr.onload = function () {
//                 //     if (xhr.status === 200) {
//                 //         console.log('Image uploaded successfully.');
//                 //     } else {
//                 //         console.error('Image upload failed.');
//                 //     }
//                 // };
//                 // xhr.send(formData);

//                 cropModal.modal('hide');
//             };
//         });
//     });
// });
function previewVideo(event) {
    var video = document.getElementById('videoPreview');
    var source = document.getElementById('videoSource');
    var file = event.target.files[0];
    
    if (file) {
        var url = URL.createObjectURL(file);
        source.src = url;
        video.style.display = 'block';
        video.load();
    } else {
        source.src = '';
        video.style.display = 'none';
    }
}

function removeVideo() {
    var video = document.getElementById('videoPreview');
    var source = document.getElementById('videoSource');
    var input = document.querySelector('input[name="video"]');
    
    source.src = '';
    video.style.display = 'none';
    input.value = ''; // Clear the file input
}