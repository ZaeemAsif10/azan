
<script>
    @if(session('message'))
     toastr.success("{{ session('message') }}");
 @elseif(session('error'))
     toastr.error("{{ session('error') }}");
 @endif
 $('.dropify').dropify();
</script>