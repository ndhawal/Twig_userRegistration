jQuery("#SignUpForm").validate({
    rules: {
        name: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        pass: {
            required: true,
            minlength: 5,
            maxlength: 10
        },
        company: {
            required: true,

        },
        phoneno: {
            required: true,
        }
    },
    messages: {
        name: {
            required: "** This is required field **",
        },
        email: {
            required: "** This is required field **",
            email: "** Please enter a valid email address **"
        },
        pass: {
            required: "** Password is mandatory **",
            minlength: "** Password must me more than 5 charecters **",
            maxlength: "** Password must me less than 10 charecters **"
        },
        company: {
            required: "**this field is required**",

        },
        phoneno: {
            required: "** phonenumber is mandatory **",

        }
    }

})
jQuery("#LoginForm").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        pass: {
            required: true,
        }
    },
    messages: {
        email: {
            required: "** This is required field **"
        },
        pass: {
            required: "** This is required field **"
        },
    },
    
})
jQuery("#Docname").validate({
    rules: {
        text: {
            required: true,
        }
    },
    messages: {
        text: {
            required: "** This is required field **",
        }
    }
    
})
