<script src="{{ asset('frontend/assets') }}/js/vendor/jquery-min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/contact-form.js"></script>
<script src="{{ asset('frontend/assets') }}/js/jquery-plugin-collection.js"></script>
<script src="{{ asset('frontend/assets') }}/js/vendor/modernizr.js"></script>
<script src="{{ asset('frontend/assets') }}/js/main.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Show dynamic validation errors -->
<script>
    @if (!empty($errors->all()))
        @foreach ($errors->all() as $error)
            toastr.error("{{$error}}",)
        @endforeach
    @endif

</script>

<script>
    $(document).ready(function(){
        // Csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // sweet alert for delete
        $('body').on('click', '.delete-item', function(e){
            e.preventDefault();
            let deleteUrl = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: deleteUrl,
                        success: function(data){
                            if(data.status == 'error'){
                                Swal.fire(
                                'You can not delete!',
                                'This category contain items cant be deleted!',
                                'error'
                            )
                            }else {
                                Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                                window.location.reload();
                            }
                        },
                        error: function(xhr, status, error){
                            console.log(error);
                        }
                    })
                }
            })
        })
    })
    // $(document).ready(function () {
    //     // When the subject dropdown is shown
    //     $('#subjectDropdown').on('click', function (e) {
    //         // Check if the dropdown is already open
    //         if ($(this).next('.dropdown-menu').is(':visible')) {
    //             // If open, remove blur
    //             $('.main_wrapper').removeClass('blurred');
    //         } else {
    //             // If not open, add blur
    //             $('.main_wrapper').addClass('blurred');
    //         }
    //     });
    //
    //     // Close dropdown if clicked outside
    //     $(document).on('click', function (e) {
    //         if (!$(e.target).closest('.subject-dropdown').length) {
    //             $('.main_wrapper').removeClass('blurred');
    //         }
    //     });
    // });


    $(document).ready(function () {
        $('.nav-link.dropdown-toggle').on('click', function () {
            if ($(this).hasClass('show')) {
                $('.main_wrapper').addClass('blurred');
            } else {
                $('.main_wrapper').removeClass('blurred');
            }
        });

        // Also handle clicks outside the dropdown to remove the class when the dropdown closes
        $(document).on('click', function (event) {
            if (!$('.nav-link.dropdown-toggle').is(event.target) ) {
                $('.main_wrapper').removeClass('blurred');
            }
        });
    });

    // $(document).ready(function () {
    //     // When the subject dropdown button is clicked
    //     $('#subjectDropdown').on('click', function (e) {
    //         if ($(this).next('.dropdown-menu').is(':visible')) {
    //             $('.main_wrapper').addClass('blurred');
    //         } else {
    //             $('.main_wrapper').removeClass('blurred');
    //         }
    //     });
    //
    //     $(document).on('click', function (e) {
    //         console.log(!$(e.target).closest('.subject-dropdown').length);
    //         if (!$(e.target).closest('.subject-dropdown').length) {
    //             $('.main_wrapper').removeClass('blurred');
    //         }
    //     });
    // });


</script>

@stack('scripts')

