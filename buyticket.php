<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc_header.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="fix-menu">
    <?php include('inc_nav.php'); ?>
    <div style="height: 100px !important;"></div>
    <section class="login p-fixed d-flex text-center">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="text-center">
                        <img src="" width="20%" alt="">
                    </div>
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form action="" method="POST" class="md-float-material">
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Y I E W Cinema</h3>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Prince</label>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Theerawat</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Movie Name</label>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">TENET (EN)</label>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Show Time</label>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">19:00</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Theatre</label>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">5</label>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Seat</label>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">P4, P5</label>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="button"
                                            class="btn btn-danger btn-md waves-effect text-center m-b-20" onclick="myBtn()">Cancel</button>
                                        <button type="submit"
                                            class="btn btn-primary btn-md waves-effect text-center m-b-20">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <script>
        function myBtn() {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your Tickets has been deleted.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your Tickets is safe',
                        'error'
                    )
                }
            })
        }
    </script>
</body>

</html>