// ------file upload STEP 1-----

var imgUpload = document.getElementById('upload-img')
  , imgPreview = document.getElementById('img-preview')
  , imgUploadForm = document.getElementById('form-upload')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, true);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;

  if (!!totalFiles) {
    imgPreview.classList.remove('img-thumbs-hidden');
  }

  for (var i = 0; i < totalFiles; i++) {
    wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    removeBtn = document.createElement("span");
    nodeRemove = document.createTextNode('x');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreview.appendChild(wrapper);

    $('.remove-btn').click(function () {
      $(this).parent('.wrapper-thumb').remove();
    });
  }
}
// form 1 thmnail img

//----------step-2 all img upload-----------
// engine_upper_cover
$(document).ready(function() {
    $('#engine_upper_cover_images').change(previewImgs);

    function previewImgs(event) {
        var imgPreview = $('#step2-img-preview');
        var totalFiles = event.target.files.length;

        if (totalFiles) {
            imgPreview.removeClass('img-thumbs-hidden');
        }

        for (var i = 0; i < totalFiles; i++) {
            var wrapper = $('<div>').addClass('wrapper-thumb');
            var removeBtn = $('<span>').addClass('remove-btn').text('x');
            var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

            wrapper.append(img).append(removeBtn);
            imgPreview.append(wrapper);

            removeBtn.click(function() {
                $(this).parent('.wrapper-thumb').remove();
            });
        }
    }
});
//engine shield cover
    $(document).ready(function() {
    $('#engine_shield_cover_images').change(previewShieldCoverImgs);

    function previewShieldCoverImgs(event) {
        var imgPreview = $('#shield-cover-img-preview');
        var totalFiles = event.target.files.length;

        if (totalFiles) {
            imgPreview.removeClass('img-thumbs-hidden');
        }

        for (var i = 0; i < totalFiles; i++) {
            var wrapper = $('<div>').addClass('wrapper-thumb');
            var removeBtn = $('<span>').addClass('remove-btn').text('x');
            var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

            wrapper.append(img).append(removeBtn);
            imgPreview.append(wrapper);

            removeBtn.click(function() {
                $(this).parent('.wrapper-thumb').remove();
            });
        }
    }
});
//engine mounts
$(document).ready(function() {
  $('#engine_mounts_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#engine-mounts-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//bonnet hinge holder
$(document).ready(function() {
  $('#bonnet_hinge_holder_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#bonnet-hinge-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//trbo peference holder
$(document).ready(function() {
  $('#turbo_preference_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#turbo_preference-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//fender peference holder
$(document).ready(function() {
  $('#fender_liners_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#fender-liners-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//drive belt holder
$(document).ready(function() {
  $('#drive_belt_pulleys_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#drive-belt-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//engine oil filler
$(document).ready(function() {
  $('#engine_oil_filler_cap_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#engine-oil-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//radiator
$(document).ready(function() {
  $('#radiator_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#radiatorr-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//engine oil leaks
$(document).ready(function() {
  $('#engine_oil_leaks_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#engine-oil-leaks-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//engine oil consition
$(document).ready(function() {
  $('#engine_oil_condition_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#engine-oil-condition-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//coolant condition
$(document).ready(function() {
  $('#coolant_condition_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#collant-condition-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//coolant cap
$(document).ready(function() {
  $('#coolant_cap_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#coolant-cap-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//hoses pipes
$(document).ready(function() {
  $('#hoses_pipes_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#hosespipes-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//exhst img
$(document).ready(function() {
  $('#exhaust_system_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#exhasut-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//exhst img
$(document).ready(function() {
  $('#visible_rust_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#visible-rust-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-3 all img upload-----------
//flid level condition img
$(document).ready(function() {
  $('#fluid_level_condition_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#fluid-level-condition-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//transmission flid leaks img
$(document).ready(function() {
  $('#transmission_fluid_leaks_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#transmission-fluid-leaks-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//transmission flid leaks img
$(document).ready(function() {
  $('#gear_selector_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#gear-selector-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-4 all img upload-----------

//front sspension img
$(document).ready(function() {
  $('#front_suspension_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#front-sspension-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//rear sspension img
$(document).ready(function() {
  $('#rear_suspension_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#rear-sspension-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//rear left img
$(document).ready(function() {
  $('#rear_left_tyre_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#rear-left-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//rear right tyre img
$(document).ready(function() {
  $('#rear_right_tyre_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#rear-right-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//front right img
$(document).ready(function() {
  $('#front_right_tyre_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#front-right-tyre-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//front left tyre img
$(document).ready(function() {
  $('#front_left_tyre_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#front-left-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-5 all img upload-----------
//key remote img
$(document).ready(function() {
  $('#key_remote_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#key-remote-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//entertainment system img
$(document).ready(function() {
  $('#entertainment_system_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#entertainment-system-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//windows entertainment img
$(document).ready(function() {
  $('#windows_operation_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#windows-operation-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//wseats entertainmwnt img
$(document).ready(function() {
  $('#seats_adjustment_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#seats-adjustment-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//door lock nclok
$(document).ready(function() {
  $('#door_lock_unlock_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#door-lock-unlock-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//ac control cooling
$(document).ready(function() {
  $('#ac_control_cooling_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#ac_control-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//cneter console
$(document).ready(function() {
  $('#center_console_buttons_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#center-console-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//cameras img
$(document).ready(function() {
  $('#cameras_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#cameras-images-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//gases img
$(document).ready(function() {
  $('#gauges_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#gauges-images-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//rear view side
$(document).ready(function() {
  $('#rear_view_side_mirror_elec_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#rear-view-side-mirror-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//ac grills
$(document).ready(function() {
  $('#ac_grilles_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#ac-grilles-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//staring ignition
$(document).ready(function() {
  $('#starting_ignition_system_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#starting-ignition-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//brake lights
$(document).ready(function() {
  $('#brake_lights_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#brake-lights-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//Head lights
$(document).ready(function() {
  $('#headlights_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#headlights-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//fog lights
$(document).ready(function() {
  $('#fog_lights_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#fog-lights-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//Reverse lights
$(document).ready(function() {
  $('#reverse_lights_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#reverse-lights-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//high beans img
$(document).ready(function() {
  $('#high_beams_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#high-beams-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//no of plates img
$(document).ready(function() {
  $('#no_plates_lights_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#no-plates-lights-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//indicator hazardos img
$(document).ready(function() {
  $('#indicators_hazards_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#indicators-hazards-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//wipers-img-preview img
$(document).ready(function() {
  $('#wipers_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#wipers-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});


//soft img img
$(document).ready(function() {
  $('#soft_closing_doors_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#soft-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//sonrood img
$(document).ready(function() {
  $('#sunroof_moonroof_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#sunroof-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//interior img
$(document).ready(function() {
  $('#interior_lights_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#interior-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//crise img
$(document).ready(function() {
  $('#cruise_control_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#crise-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-6 all img upload-----------


//roof lining img
$(document).ready(function() {
  $('#roof_lining_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#roof-lining-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//rear view img
$(document).ready(function() {
  $('#rear_view_mirror_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#rear-view-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//steeing wheel img
$(document).ready(function() {
  $('#steering_wheel_upholstery_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#steering-wheel-upholstery-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//seats phiolstery img
$(document).ready(function() {
  $('#seats_upholstery_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#seats-upholstery-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//gear img
$(document).ready(function() {
  $('#gear_lever_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#gear-lever-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//trnk lining img
$(document).ready(function() {
  $('#trunk_lining_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#trunk-lining-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//armest img
$(document).ready(function() {
  $('#amrest_side_pockets_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#amrest-side-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//dashbiard img
$(document).ready(function() {
  $('#dashboard_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#dashboard-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//floo=r mastes img
$(document).ready(function() {
  $('#floor_mates_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#floor-mates-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//dooe imges img
$(document).ready(function() {
  $('#doors_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#doors-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//feont windscrrn img
$(document).ready(function() {
  $('#front_windscreen_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#front-windscreen-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//rear windscrrn img
$(document).ready(function() {
  $('#rear_windscreen_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#rear-windscreen-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-8 all img upload-----------'

//exterior img
$(document).ready(function() {
  $('#exterior_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#exterior-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-9 all img upload-----------'
//interior 9
$(document).ready(function() {
  $('#interior_images_form9').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#interior9-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-10 all img upload-----------'
//engine bay ndercarriage
$(document).ready(function() {
  $('#engine_bay_undercarriage_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#engine-bay-undercarriage-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//ndergarriage electric form
$(document).ready(function() {
    $('#undercarriage_images').change(previewShieldCoverImgs);
  
    function previewShieldCoverImgs(event) {
        var imgPreview = $('#undercarriage-preview');
        var totalFiles = event.target.files.length;
  
        if (totalFiles) {
            imgPreview.removeClass('img-thumbs-hidden');
        }
  
        for (var i = 0; i < totalFiles; i++) {
            var wrapper = $('<div>').addClass('wrapper-thumb');
            var removeBtn = $('<span>').addClass('remove-btn').text('x');
            var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));
  
            wrapper.append(img).append(removeBtn);
            imgPreview.append(wrapper);
  
            removeBtn.click(function() {
                $(this).parent('.wrapper-thumb').remove();
            });
        }
    }
  });


//----------step-11 all img upload-----------'
//vehicle diagnostic report 
$(document).ready(function() {
  $('#vehicle_diagnostic_report_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#vehicle-diagnostic-report-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});


//----------step-13 all img upload-----------'
//Frnk condition
$(document).ready(function() {
  $('#frunk_condition_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#frnkcondition-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//ndercarriage 
$(document).ready(function() {
  $('#undercarriage_shield_cover_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#undercarriage-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//bonnet hinge 
$(document).ready(function() {
  $('#bonnet_hinge_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#bonnethinge-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});


//fenders imgaes
$(document).ready(function() {
  $('#fenders_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#fen-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//radiator imgaes
$(document).ready(function() {
  $('#radiator_cover_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#rad-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//coolant condition imgaes
$(document).ready(function() {
  $('#coolant_condition_cover_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#coolant-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//coolant cap imgaes
$(document).ready(function() {
  $('#coolant_cap_cover_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#coolantcap-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//hoses cover imgaes
$(document).ready(function() {
  $('#hoses_cover_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#hoses-cover-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//visible img preview imgaes
$(document).ready(function() {
  $('#visible_cover_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#visiblecover-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-14 all img upload-----------'

//charging previre preview imgaes
$(document).ready(function() {
  $('#charging_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#charging-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//chring preview imgaes
// $(document).ready(function() {
//   $('#charging_feature_images').change(previewShieldCoverImgs);

//   function previewShieldCoverImgs(event) {
//       var imgPreview = $('#chargingfeatre-img-preview');
//       var totalFiles = event.target.files.length;

//       if (totalFiles) {
//           imgPreview.removeClass('img-thumbs-hidden');
//       }

//       for (var i = 0; i < totalFiles; i++) {
//           var wrapper = $('<div>').addClass('wrapper-thumb');
//           var removeBtn = $('<span>').addClass('remove-btn').text('x');
//           var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

//           wrapper.append(img).append(removeBtn);
//           imgPreview.append(wrapper);

//           removeBtn.click(function() {
//               $(this).parent('.wrapper-thumb').remove();
//           });
//       }
//   }
// });

//chring preview imgaes
$(document).ready(function() {
  $('#charging_feature_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#chargingfeatre-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//visible img preview imgaes
$(document).ready(function() {
  $('#electric_motor_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#electric-motor-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});

//----------step-15 all img upload-----------'
//frnk trnk condition
$(document).ready(function() {
  $('#frunk_trunk_images').change(previewShieldCoverImgs);

  function previewShieldCoverImgs(event) {
      var imgPreview = $('#frunktrunk-img-preview');
      var totalFiles = event.target.files.length;

      if (totalFiles) {
          imgPreview.removeClass('img-thumbs-hidden');
      }

      for (var i = 0; i < totalFiles; i++) {
          var wrapper = $('<div>').addClass('wrapper-thumb');
          var removeBtn = $('<span>').addClass('remove-btn').text('x');
          var img = $('<img>').addClass('img-preview-thumb').attr('src', URL.createObjectURL(event.target.files[i]));

          wrapper.append(img).append(removeBtn);
          imgPreview.append(wrapper);

          removeBtn.click(function() {
              $(this).parent('.wrapper-thumb').remove();
          });
      }
  }
});




//-------- step 2 all img pload end -----------------

// var imgUpload = document.getElementById('step2-upload')
//   , imgPreview = document.getElementById('step2-img-preview')
//   , imgUploadForm = document.getElementById('form-upload2')
//   , totalFiles
//   , previewTitle
//   , previewTitleText
//   , img;

// imgUpload.addEventListener('change', previewImgs, true);

// function previewImgs(event) {
//   totalFiles = imgUpload.files.length;

//      if(!!totalFiles) {
//     imgPreview.classList.remove('img-thumbs-hidden');
//   }

//   for(var i = 0; i < totalFiles; i++) {
//     wrapper = document.createElement('div');
//     wrapper.classList.add('wrapper-thumb');
//     removeBtn = document.createElement("span");
//     nodeRemove= document.createTextNode('x');
//     removeBtn.classList.add('remove-btn');
//     removeBtn.appendChild(nodeRemove);
//     img = document.createElement('img');
//     img.src = URL.createObjectURL(event.target.files[i]);
//     img.classList.add('img-preview-thumb');
//     wrapper.appendChild(img);
//     wrapper.appendChild(removeBtn);
//     imgPreview.appendChild(wrapper);

//     $('.remove-btn').click(function(){
//       $(this).parent('.wrapper-thumb').remove();
//     });    
//   }
// }
//------------------------------

function battery(charge) {
  var index = 0;
  $(".battery .bar").each(function () {
    var power = Math.round(charge / 10);
    if (index != power) {
      $(this).addClass("active");
      index++;
    } else {
      $(this).removeClass("active");
    }
  });
}

$(".battery .bar").click(function () {
  battery(parseInt($(this).data("power")));
});

battery(0); // (67%) Any number 100 or lower will work, Including decimals.


// --------electric battery condition------

var position,
  lastPosition,
  canSlide = false,
  range = $(".range"),
  input = range.find("input"),
  maxPoints = input.attr("max"),
  minPoints = input.attr("min"),
  prevVal = input.attr("min");

range.on("mousedown touchstart", rangeSliderInit);
range.on("mousemove touchmove", rangeSliderUpdate);
range.on("mouseup touchend", rangeSliderStop);

function pointerEvents(e) {
  var pos = { x: 0, y: 0 };

  if (
    e.type == "touchstart" ||
    e.type == "touchmove" ||
    e.type == "touchend" ||
    e.type == "touchcancel"
  ) {
    var touch = e.changedTouches[0];
    pos.x = touch.pageX;
    pos.y = touch.pageY;
  } else if (
    e.type == "mousedown" ||
    e.type == "mouseup" ||
    e.type == "mousemove" ||
    e.type == "mouseover" ||
    e.type == "mouseout" ||
    e.type == "mouseenter" ||
    e.type == "mouseleave"
  ) {
    pos.x = e.pageX;
    pos.y = e.pageY;
  }

  return pos;
}

function rangeSliderInit() {
  canSlide = true;
}

function rangeSliderUpdate(e) {
  if (!canSlide || maxPoints == 0) return;

  var position = pointerEvents(e),
    dial = range.find(".dial"),
    dialRadius = dial.width() / 2,
    coords = {
      x: position.x - range.offset().left,
      y: position.y - range.offset().top
    },
    radius = range.width() / 2,
    atan = Math.atan2(coords.x - radius, coords.y - radius),
    deg = Math.ceil(-atan / (Math.PI / 180) + 180);

  if (prevVal <= 1 && lastPosition - position.x >= 0) deg = 0;
  if (prevVal >= 359 && lastPosition - position.x <= 0) deg = 360;

  var x =
    Math.ceil((radius - 5) * Math.sin(deg * Math.PI / 180)) + radius + "px",
    y =
      Math.ceil((radius - 5) * -Math.cos(deg * Math.PI / 180)) + radius + "px",
    points = Math.ceil(deg * maxPoints / 360);

  //move dial
  dial.css({ transform: "translate(" + x + "," + y + ")" });

  //show range progress
  if (deg <= 180) {
    range.find(".right .blocker").css({ transform: "rotate(" + deg + "deg)" });
    range.find(".left .blocker").css({ transform: "rotate(0)" });
  } else {
    range.find(".right .blocker").css({ transform: "rotate(180deg" });
    range
      .find(".left .blocker")
      .css({ transform: "rotate(" + (deg - 180) + "deg)" });
  }

  //show value
  range.find(".count").text(points).val(points);

  prevVal = deg;
  lastPosition = position.x;
}

function rangeSliderStop() {
  canSlide = false;
}


// ----------------------------------------------


function download(canvas, filename) {
  var lnk = document.createElement('a'),
    e;
  lnk.download = filename;
  lnk.href = canvas.toDataURL("image/png;base64");

  if (document.createEvent) {
    e = document.createEvent("MouseEvents");
    e.initMouseEvent("click", true, true, window,
      0, 0, 0, 0, 0, false, false, false,
      false, 0, null);

    lnk.dispatchEvent(e);
  } else if (lnk.fireEvent) {
    lnk.fireEvent("onclick");
  }
}


// ------------step-wizard-------------
$(document).ready(function () {
  $('.nav-tabs > li a[title]').tooltip();

  //Wizard
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

    var target = $(e.target);

    if (target.parent().hasClass('disabled')) {
      return false;
    }
  });

  $(".next-step").click(function (e) {

    var active = $('.wizard .nav-tabs li.active');
    active.next().removeClass('disabled');
    nextTab(active);

  });
  $(".prev-step").click(function (e) {

    var active = $('.wizard .nav-tabs li.active');
    prevTab(active);

  });
});

function nextTab(elem) {
  $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
  $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function () {
  $('.nav-tabs li.active').removeClass('active');
  $(this).addClass('active');
});

$(".flatpickr1").flatpickr();
$(".flatpickr2").flatpickr();
$(".flatpickr3").flatpickr();
$(".flatpickr4").flatpickr();



