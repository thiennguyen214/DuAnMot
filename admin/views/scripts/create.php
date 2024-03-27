<script>
    // function previewImage(input) {
    //     var thumbImage = document.getElementById('thumbimage');
    //     var choiceFileBtn = document.querySelector('.Choicefile');

    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();

    //         reader.onload = function (e) {
    //             thumbImage.setAttribute('src', e.target.result);
    //             thumbImage.style.display = 'block';
    //             // choiceFileBtn.style.display = 'none'; // Ẩn nút chọn ảnh sau khi đã chọn ảnh
    //         }

    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }

    function previewImage(input) {
        var thumbBox = document.getElementById('thumbbox'); // Lấy thẻ div có id là "thumbbox"

        if (input.files && input.files.length > 0) {
            // Xóa bỏ nội dung cũ của thumbBox trước khi thêm mới
            thumbBox.innerHTML = '';

            for (var i = 0; i < input.files.length; i++) {
                if (input.files[i]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        // Tạo một thẻ div mới cho mỗi ảnh
                        var imageContainer = document.createElement('div');
                        imageContainer.classList.add('image-container'); // Thêm class "image-container"

                        // Tạo một thẻ img mới
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.height = 150; // Thiết lập kích thước cho ảnh
                        img.width = 150;

                        // Tạo một nút hoặc biểu tượng "xóa" gần mỗi ảnh đã chọn
                        var deleteIcon = document.createElement('span');
                        deleteIcon.innerHTML = '&times;'; // Biểu tượng "xóa"
                        deleteIcon.classList.add('delete-icon'); // Thêm class "delete-icon" vào biểu tượng "xóa"

                        // Thêm sự kiện click cho nút xóa để xóa ảnh tương ứng
                        deleteIcon.onclick = function () {
                            thumbBox.removeChild(imageContainer); // Xóa container ảnh
                        };

                        // Thêm thẻ img và nút xóa vào thẻ div thumbBox
                        imageContainer.appendChild(img);
                        imageContainer.appendChild(deleteIcon);

                        // Thêm container ảnh vào thumbbox
                        thumbBox.appendChild(imageContainer);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
    }


</script>