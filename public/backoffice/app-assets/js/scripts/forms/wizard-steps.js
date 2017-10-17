/*=========================================================================================
    File Name: wizard-steps.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Wizard tabs with numbers setup
$(".number-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Wizard tabs with icons setup
$(".icons-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Vertical tabs form wizard setup
$(".vertical-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Validate steps wizard

// Show form
var form = $(".steps-validation").show();

var wiz = $(".steps-validation");
wiz.steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    enableAllSteps: false,
    transitionEffect: 2,
    transitionEffectSpeed:500,
    titleTemplate: '<span class="step">#index#</span> #title#',
    enableCancelButton: true,
    enablePagination: true,

    /* Labels */
    labels: {
        cancel: "Cancel",
        current: "current step:",
        pagination: "Pagination",
        finish: "accept",
        next: "Next",
        previous: "Previous",
        loading: "Loading ..."
    },
    /* Events */
    // onStepChanging: function (event, currentIndex, newIndex) { return true; },
        // onFinishing: function (event, currentIndex) { return true; },
        // onFinished: function (event, currentIndex) { },
    onStepChanged: function (event, currentIndex, priorIndex) {
        /*console.log("cambio");
        console.log(this.$);*/
        if (currentIndex === 3 )
        {
            console.log(currentIndex);
            $("a[href='#previous']").hide();
            $('a[href$="cancel"]').text('Go to BinatyTree');
            // $('a[href$="previous"]').text('new register');
            wiz.find("[aria-label=Pagination]").append('<li class="" aria-disabled="true"><a class="imp-sub" href="http://localhost:8002/users/new">New User</a></li>');
        }else{
            $('a[href$="cancel"]').text('Cancel');
            $('a[href$="previous"]').text('Previous');
        }
    }.bind(this),

    onStepChanging: function (event, currentIndex, newIndex)
    {
        // console.log("cambiando");
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18)
        {
            console.log(currentIndex);
            // return false;
            // enablePagination:false;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },

    onCanceled: function (event) {
        console.log("cancel");
        console.log(event);
        window.location.href = tree;
    },

    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        console.log("accept");
        window.location.href = home;
    }
});

// Initialize validation
$(".steps-validation").validate({
    ignore: 'input[type=hidden]', // ignore hidden fields
    errorClass: 'danger',
    successClass: 'success',
    highlight: function(element, errorClass) {
        $(element).removeClass(errorClass);
    },
    unhighlight: function(element, errorClass) {
        $(element).removeClass(errorClass);
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element);
    },
    rules: {
        email: {
            email: true
        }
    }
});


// Initialize plugins
// ------------------------------
// Date & Time
$('.datetime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'MM/DD/YYYY h:mm A'
    }
});