<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="src/jquery.table2excel.js"></script>
<!-- The javascript plugin to display page loading on top-->

<!-- Page specific javascripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $("#sampleTable").DataTable();
</script>
<script>

    function confirmDelete(event, element) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

        swal({
            title: "Cảnh báo",
            text: "Bạn có chắc chắn muốn xóa không?",
            buttons: ["Hủy bỏ", "Đồng ý"],
        }).then((willDelete) => {
            if (willDelete) {
                // Nếu người dùng đồng ý, chạy link href
                window.location.href = element.href;
                swal("Đã xóa thành công.!", {});
            }
        });
    }

</script>