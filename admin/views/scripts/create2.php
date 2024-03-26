<script>
    const allCheckbox = document.getElementById("all");
    const otherCheckboxes = document.querySelectorAll(
        'input[type="checkbox"]:not(#all)'
    );

    allCheckbox.addEventListener("change", function () {
        if (this.checked) {
            otherCheckboxes.forEach((checkbox) => {
                checkbox.checked = true;
            });
        } else {
            otherCheckboxes.forEach((checkbox) => {
                checkbox.checked = false;
            });
        }
    });
</script>