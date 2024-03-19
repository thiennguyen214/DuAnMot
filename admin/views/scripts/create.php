<script>
    function previewImage(input) {
        var thumbImage = document.getElementById('thumbimage');
        var choiceFileBtn = document.querySelector('.Choicefile');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                thumbImage.setAttribute('src', e.target.result);
                thumbImage.style.display = 'block';
                // choiceFileBtn.style.display = 'none'; // Ẩn nút chọn ảnh sau khi đã chọn ảnh
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>