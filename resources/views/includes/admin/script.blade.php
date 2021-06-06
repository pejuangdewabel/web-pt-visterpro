    <script src="{{ url('backend/js/jquery.min.js') }}"></script>
    <script src="{{ url('backend/js/popper.min.js') }}"></script>
    <script src="{{ url('backend/js/moment.min.js') }}"></script>
    <script src="{{ url('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('backend/js/simplebar.min.js') }}"></script>
    <script src='{{ url('backend/>js/daterangepicker.js') }}'></script>
    <script src='{{ url('backend/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ url('backend/js/tinycolor-min.js') }}"></script>
    <script src="{{ url('backend/js/config.js') }}"></script>
    <script src="{{ url('backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
    </script>
    <script src="{{ url('backend/js/apps.js') }}"></script>    
    <script type="text/javascript">
        function Angkasaja(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
        }
    </script>    
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('kata_thumb');
        CKEDITOR.replace('deskripsi');
        CKEDITOR.replace('syarat');
        CKEDITOR.replace('dekat');
        CKEDITOR.replace('description');
    </script>