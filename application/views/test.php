<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <script>
        Object.defineProperty(window, "base_url", {
            value: "<?php echo base_url(); ?>",
            writable: false
        });
    </script>
</head>

<body>
    <form method="POST" name="frmTrack">
        <input type="text" name="sf_number" placeholder="SF Number" />
        <button>Process</button>
    </form>

    <div style="margin-top: 20px;">
        <p class="print_output" style="font-size: 13px;"></p>
    </div>

    <script src="<?php echo base_url() ?>metronic_v5.5.5\docs\assets\plugins\jquery\dist\jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("submit", "form[name=frmTrack]", function(e) {   
                var form = $(this);

                e.preventDefault();

                $.ajax({
                    url: base_url + "track/all",
                    type: "POST",
                    data: form.serialize(),
                    dataType: "JSON",
                    cache: false,
                    success: function(json) {
                        var success = json.success,
                            message = json.message,
                            resp    = json.response;

                        if (success) {
                            var output = typeof resp.error != "undefined"? resp.error: resp.routeresponse;

                            $(".print_output").html(output);
                        } else {
                            $(".print_output").html(message);
                        }
                    }
                });
            })
        });
    </script>
</body>
</html>