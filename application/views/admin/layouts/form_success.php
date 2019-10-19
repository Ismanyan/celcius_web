<html>

<head>
    <title>Form Success</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>

<body>
    <script>
        let timerInterval
        Swal.fire({
            title: 'Add Product Success',
            type: 'success',
            html: 'click OK to continue',
            timer: 2000,
            onClose: () => {
                window.location.replace("<?= base_url('admin/product') ?>");
            }
        });
    </script>
</body>

</html>