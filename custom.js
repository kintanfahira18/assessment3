$("#formValidation").validate({
    rules: {
        username: {
            minlength: 2
        },
        email:{
            email:true
        },
        no_handphone:{
            number:true,
            minlength: 14,
            maxlength: 15,
        }
    },
    messages: {
        username:{
            required: "Please enter your name",
            minlength: "Name at least 2 characters "
        },
        email:"Please enter your email",
        no_handphone:"Please enter your phone",
        address:"Please enter your address"
    },

    submitHandler: function (form) {
        form.submit();
    }
})