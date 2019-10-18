var SweetAlert2Demo = {
    init: function() {
        $("#m_sweetalert_1").click(function(e) {
            swal("Good job!")
        }), $("#m_sweetalert_2").click(function(e) {
            swal("Here's the title!", "...and here's the text!")
        }), $("#m_sweetalert_3_1").click(function(e) {
            swal("Good job!", "You clicked the button!", "warning")
        }), $("#m_sweetalert_3_2").click(function(e) {
            swal("Good job!", "You clicked the button!", "error")
        }), $("#m_sweetalert_3_3").click(function(e) {
            swal("Good job!", "You clicked the button!", "success")
        }), $("#m_sweetalert_3_4").click(function(e) {
            swal("Good job!", "You clicked the button!", "info")
        }), $("#m_sweetalert_3_5").click(function(e) {
            swal("Good job!", "You clicked the button!", "question")
        }), $("#m_sweetalert_4").click(function(e) {
            swal({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
                confirmButtonText: "Confirm me!",
                confirmButtonClass: "btn btn-focus m-btn m-btn--pill m-btn--air"
            })
        }), $(".m_sweetalert_5").click(function(e) {
            swal({
			 	title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                confirmButtonText: "<span><span>Yes, delete it!</span></span>",
                confirmButtonClass: "btn btn-danger m-btn m-btn--pill m-btn--air m-btn--icon btn-sm",
                showCancelButton: !0,
                cancelButtonText: "<span></i><span>No, thanks</span></span>",
                cancelButtonClass: "btn btn-secondary m-btn m-btn--pill m-btn--icon btn-sm",
            })
        }), $("#m_sweetalert_6").click(function(e) {
            swal({
                position: "top-right",
                type: "success",
                title: "Your work has been saved",
                showConfirmButton: !1,
                timer: 1500
            })
        }), $("#m_sweetalert_7").click(function(e) {
            swal({
                title: "jQuery HTML example",
                html: $("<div>").addClass("some-class").text("jQuery is everywhere."),
                animation: !1,
                customClass: "animated tada"
            })
        }), $("#m_sweetalert_8").click(function(e) {
            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
				confirmButtonClass: "btn btn-danger m-btn m-btn--pill m-btn--air m-btn--icon btn-sm",
				cancelButtonClass: "btn btn-secondary m-btn m-btn--pill m-btn--icon btn-sm",
            }).then(function(e) {
                e.value && swal({
					title: "Deleted!",
					text: "Your file has been deleted.",
					type: "success",
					confirmButtonText: "Done",
					confirmButtonClass: "btn btn-success m-btn m-btn--pill m-btn--air m-btn--icon btn-sm"
				})
            })
        }), $("#m_sweetalert_9").click(function(e) {
            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function(e) {
                e.value ? swal("Deleted!", "Your file has been deleted.", "success") : "cancel" === e.dismiss && swal("Cancelled", "Your imaginary file is safe :)", "error")
            })
        }), $("#m_sweetalert_10").click(function(e) {
            swal({
                title: "Sweet!",
                text: "Modal with a custom image.",
                imageUrl: "https://unsplash.it/400/200",
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: "Custom image",
                animation: !1
            })
        }), $("#m_sweetalert_11").click(function(e) {
            swal({
                title: "Auto close alert!",
                text: "I will close in 5 seconds.",
                timer: 5e3,
                onOpen: function() {
                    swal.showLoading()
                }
            }).then(function(e) {
                "timer" === e.dismiss && console.log("I was closed by the timer")
            })
        })
    }
};
jQuery(document).ready(function() {
    SweetAlert2Demo.init()
});