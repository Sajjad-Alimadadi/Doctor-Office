/**
 * UI Toasts
 */

'use strict';

(function () {
  // Bootstrap toasts example
  // --------------------------------------------------------------------
  const toastAnimationExample = document.querySelector('.toast-ex'),
    toastAnimationHeaderExample = document.querySelector('.toast-ex .toast-header'),
    toastPlacementExample = document.querySelector('.toast-placement-ex'),
    toastPlacementHeaderExample = document.querySelector('.toast-placement-ex .toast-header'),
    toastAnimationBtn = document.querySelector('#showToastAnimation'),
    toastPlacementBtn = document.querySelector('#showToastPlacement');
  let selectedType, selectedAnimation, selectedPlacement, toast, toastAnimation, toastPlacement;

  // Animation Button click
  if (toastAnimationBtn) {
    toastAnimationBtn.onclick = function () {
      if (toastAnimation) {
        toastDispose(toastAnimation);
      }
      selectedType = document.querySelector('#selectType').value;
      selectedAnimation = document.querySelector('#selectAnimation').value;

      toastAnimationExample.classList.add(selectedAnimation);
      toastAnimationHeaderExample.classList.add(selectedType);
      toastAnimation = new bootstrap.Toast(toastAnimationExample);
      toastAnimation.show();
    };
  }

  // Dispose toast when open another
  function toastDispose(toast) {
    if (toast && toast._element !== null) {
      if (toastPlacementExample) {
        toastPlacementHeaderExample.classList.remove(selectedType);
        DOMTokenList.prototype.remove.apply(toastPlacementExample.classList, selectedPlacement);
      }
      if (toastAnimationExample) {
        toastAnimationExample.classList.remove(selectedAnimation);
        toastAnimationHeaderExample.classList.remove(selectedType);
      }
      toast.dispose();
    }
  }
  // Placement Button click
  if (toastPlacementBtn) {
    toastPlacementBtn.onclick = function () {
      if (toastPlacement) {
        toastDispose(toastPlacement);
      }
      selectedType = document.querySelector('#selectTypeOpt').value;
      selectedPlacement = document.querySelector('#selectPlacement').value.split(' ');

      console.log(selectedType)
      toastPlacementHeaderExample.classList.add(selectedType);
      DOMTokenList.prototype.add.apply(toastPlacementExample.classList, selectedPlacement);
      toastPlacement = new bootstrap.Toast(toastPlacementExample);
      toastPlacement.show();
    };
  }
})();

//Toastr (jquery)
// --------------------------------------------------------------------
$(function () {
  var i = -1;
  var toastCount = 0;
  var $toastlast;
  var getMessage = function () {
    var msgs = [
      "با ترس های ذهنی خود زندگی نکنید. با رویاهای قلب خود هدایت شوید.",
      '<div class="mb-3"><input class="input-small form-control mb-1" value="ورودی متنی"/>&nbsp;<a href="http://johnpapa.net" target="_blank">این یک لینک است</a></div><div class="d-flex"><button type="button" id="okBtn" class="btn btn-danger btn-sm me-2">منو ببند</button><button type="button" id="surpriseBtn" class="btn btn-sm btn-success">منو سورپرایز کن</button></div>',
      'زندگی خودت رو مثل رویاهات بکن',
      'به خودت باور داشته باش!',
      'آرام باش. شکرگزار باش. مثبت باش.',
      'خودت رو قبول کن، عاشق خودت باش!'
    ];
    i++;
    if (i === msgs.length) {
      i = 0;
    }
    return msgs[i];
  };
  var getMessageWithClearButton = function (msg) {
    msg = msg ? msg : 'خودش رو پاک کنه؟';
    msg += '<br /><br /><button type="button" class="btn btn-sm btn-success clear">آره</button>';
    return msg;
  };
  $('#closeButton').click(function () {
    if ($(this).is(':checked')) {
      $('#addBehaviorOnToastCloseClick').prop('disabled', false);
    } else {
      $('#addBehaviorOnToastCloseClick').prop('disabled', true);
      $('#addBehaviorOnToastCloseClick').prop('checked', false);
    }
  });
  $('#showtoast').click(function () {
    var shortCutFunction = $('#toastTypeGroup input:radio:checked').val(),
      isRtl = $('html').attr('dir') === 'rtl',
      msg = $('#message').val(),
      title = $('#title').val() || '',
      $showDuration = $('#showDuration'),
      $hideDuration = $('#hideDuration'),
      $timeOut = $('#timeOut'),
      $extendedTimeOut = $('#extendedTimeOut'),
      $showEasing = $('#showEasing'),
      $hideEasing = $('#hideEasing'),
      $showMethod = $('#showMethod'),
      $hideMethod = $('#hideMethod'),
      toastIndex = toastCount++,
      addClear = $('#addClear').prop('checked'),
      prePositionClass = 'toast-top-right';

    prePositionClass =
      typeof toastr.options.positionClass === 'undefined' ? 'toast-top-right' : toastr.options.positionClass;

    toastr.options = {
      maxOpened: 1,
      autoDismiss: true,
      closeButton: $('#closeButton').prop('checked'),
      debug: $('#debugInfo').prop('checked'),
      newestOnTop: $('#newestOnTop').prop('checked'),
      progressBar: $('#progressBar').prop('checked'),
      positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
      preventDuplicates: $('#preventDuplicates').prop('checked'),
      onclick: null,
      rtl: isRtl
    };

    //Add fix for multiple toast open while changing the position
    if (prePositionClass != toastr.options.positionClass) {
      toastr.options.hideDuration = 0;
      toastr.clear();
    }

    if ($('#addBehaviorOnToastClick').prop('checked')) {
      toastr.options.onclick = function () {
        alert('شما می توانید عمل های سفارشی را پس از محو شدن توست اجرا کنید');
      };
    }
    if ($('#addBehaviorOnToastCloseClick').prop('checked')) {
      toastr.options.onCloseClick = function () {
        alert('شما می توانید عمل های سفارشی را در هنگام کلیک دکمه بستن اجرا کنید');
      };
    }
    if ($showDuration.val().length) {
      toastr.options.showDuration = parseInt($showDuration.val());
    }
    if ($hideDuration.val().length) {
      toastr.options.hideDuration = parseInt($hideDuration.val());
    }
    if ($timeOut.val().length) {
      toastr.options.timeOut = addClear ? 0 : parseInt($timeOut.val());
    }
    if ($extendedTimeOut.val().length) {
      toastr.options.extendedTimeOut = addClear ? 0 : parseInt($extendedTimeOut.val());
    }
    if ($showEasing.val().length) {
      toastr.options.showEasing = $showEasing.val();
    }
    if ($hideEasing.val().length) {
      toastr.options.hideEasing = $hideEasing.val();
    }
    if ($showMethod.val().length) {
      toastr.options.showMethod = $showMethod.val();
    }
    if ($hideMethod.val().length) {
      toastr.options.hideMethod = $hideMethod.val();
    }
    if (addClear) {
      msg = getMessageWithClearButton(msg);
      toastr.options.tapToDismiss = false;
    }
    if (!msg) {
      msg = getMessage();
    }
    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
    $toastlast = $toast;
    if (typeof $toast === 'undefined') {
      return;
    }
    if ($toast.find('#okBtn').length) {
      $toast.delegate('#okBtn', 'click', function () {
        alert('شما منو کلیک کردید. من توست #' + toastIndex + ' بودم. خدانگهدار!');
        $toast.remove();
      });
    }
    if ($toast.find('#surpriseBtn').length) {
      $toast.delegate('#surpriseBtn', 'click', function () {
        alert('سورپراز! شما منو کلیک کردید. من توست #' + toastIndex + ' بودم. شما می‌تونید یک عمل اینجا اجرا کنید.');
      });
    }
    if ($toast.find('.clear').length) {
      $toast.delegate('.clear', 'click', function () {
        toastr.clear($toast, {
          force: true
        });
      });
    }
  });

  function getLastToast() {
    return $toastlast;
  }
  $('#clearlasttoast').click(function () {
    toastr.clear(getLastToast());
  });
  $('#cleartoasts').click(function () {
    toastr.clear();
  });
});
