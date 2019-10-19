<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/x-icon">

    <!-- <script src="sweetalert2.all.min.js"></script> -->
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>

<body>
    <script>
        let timerInterval
        Swal.fire({
            title: "<?= $Title ?>",
            type: "<?= $Type ?>",
            html: "<?= $Desc ?>",
            timer: 2000,
            onClose: () => {
                window.location.replace("<?= $Url ?>");
            }
        });
    </script>
</body>

</html>