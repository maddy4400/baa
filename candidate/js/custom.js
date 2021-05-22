
// nav fixed
// $(window).scroll(function() {
//     if ($(this).scrollTop() > 1){  
//         $('.navbar').addClass("scroll-nav");
//       }
//       else{
//         $('.navbar').removeClass("scroll-nav");
//       }
//     });

// scroll top

// $(document).on('scroll', function() {
//     if ($(window).scrollTop() > 100) {
//         $('.scroll-top-wrapper').addClass('show');
//     } else {
//         $('.scroll-top-wrapper').removeClass('show');
//     }
// });
// $('.scroll-top-wrapper').on('click', scrollToTop);

// function scrollToTop() {
//     verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
//     element = $('body');
//     offset = element.offset();
//     offsetTop = offset.top;
//     $('html, body').animate({
//         scrollTop: offsetTop
//     }, 500, 'linear');
// }

// AOS.init();

// $(window).on('load', function(){
//     $('.loader-slide').addClass('open');
//     $('#loader').addClass('hide');
// });
const inputs = document.querySelectorAll('.inputfile');

for(let input of inputs) {
  const label = input.nextElementSibling;
  const labelVal = label.innerHTML;
  
  input.addEventListener('change', (e) => {
    let fileName = '';
    if(input.files && input.files.length > 1) {
      fileName = (input.getAttribute('data-multiple-caption') || '').replace('{count}', input.files.length);
    } else {
      fileName = e.target.value.split('\\').pop();
    }
    
    if(fileName) {
      label.querySelector('span').innerHTML = fileName;
    } else {
      label.innerHTML = labelVal;
    }
  })
}


// hide show
$(".edit-username").click(function(){
  $(".username-display").addClass('d-none');
  $(".username-input").removeClass('d-none');
  $(".edit-username").addClass('d-none');
});
$(".save-username").click(function(){
  $(".username-display").removeClass('d-none');
  $(".username-input").addClass('d-none');
  $(".edit-username").removeClass('d-none');
});

$(".edit-password").click(function(){
  $(".password-display").addClass('d-none');
  $(".password-input").removeClass('d-none');
  $(".edit-password").addClass('d-none');
});
$(".save-passowrd").click(function(){
  $(".password-display").removeClass('d-none');
  $(".password-input").addClass('d-none');
  $(".edit-password").removeClass('d-none');
});


// dropzone

var dropzone = new Dropzone('#demo-upload', {
  previewTemplate: document.querySelector('#preview-template').innerHTML,
  parallelUploads: 2,
  thumbnailHeight: 120,
  thumbnailWidth: 120,
  maxFilesize: 3,
  filesizeBase: 1000,
  thumbnail: function(file, dataUrl) {
    if (file.previewElement) {
      file.previewElement.classList.remove("dz-file-preview");
      var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
      for (var i = 0; i < images.length; i++) {
        var thumbnailElement = images[i];
        thumbnailElement.alt = file.name;
        thumbnailElement.src = dataUrl;
      }
      setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
    }
  }

});

// Now fake the file upload, since GitHub does not handle file uploads
// and returns a 404
var minSteps = 6,
    maxSteps = 60,
    timeBetweenSteps = 100,
    bytesPerStep = 100000;

dropzone.uploadFiles = function(files) {
  var self = this;

  for (var i = 0; i < files.length; i++) {

    var file = files[i];
    totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

    for (var step = 0; step < totalSteps; step++) {
      var duration = timeBetweenSteps * (step + 1);
      setTimeout(function(file, totalSteps, step) {
        return function() {
          file.upload = {
            progress: 100 * (step + 1) / totalSteps,
            total: file.size,
            bytesSent: (step + 1) * file.size / totalSteps
          };

          self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
          if (file.upload.progress == 100) {
            file.status = Dropzone.SUCCESS;
            self.emit("success", file, 'success', null);
            self.emit("complete", file);
            self.processQueue();
            //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
          }
        };
      }(file, totalSteps, step), duration);
    }
  }
}


/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("panel-sticky").style.left = "0";
  $('.overlay').removeClass("d-none");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("panel-sticky").style.left = "-80%"; 
  $('.overlay').addClass("d-none");
} 

