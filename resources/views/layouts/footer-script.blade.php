        <!-- jQuery  -->
        <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/adminlte.js')}}"></script>
        <script src="{{ URL::asset('assets/js/jquery.overlayScrollbars.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ URL::asset('assets/js/waves.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

        <script>
    $(".select2").select2();
</script>
        <script>
            $( document ).ready(function() {
                $('#modal-delete-confirmation').on('show.bs.modal', function (event) {

                    var button = $(event.relatedTarget);
                    var actionTarget = button.data('action-target');
                    var modal = $(this);
                    modal.find('form').attr('action', actionTarget);
                    if (button.data('message') === undefined) {
                    } else if (button.data('message') != '') {
                        modal.find('.custom-message').show().empty().append(button.data('message'));
                        modal.find('.default-message').hide();
                    } else {
                        modal.find('.default-message').show();
                        modal.find('.custom-message').hide();
                    }

                    if (button.data('remove-submit-button') === true) {
                        modal.find('button[type=submit]').hide();
                    } else {
                        modal.find('button[type=submit]').show();
                    }
                });
            });
        </script>
        <script src="{{ URL::asset('assets/js/app.js')}}"></script>
<!--<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    var CKEDITOR_BASEPATH = "{{ URL::asset('js/ckeditor.js')}}";

  CKEDITOR.replace( 'messageArea' );
</script>-->
        @yield('script')

        <!-- App js -->



        @yield('script-bottom')
