<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Auto Loading Bootstrap Modal on Page Load</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title text-center">Would you let us know how we're doing?</h5>
<!--                 <button type="button" class="close" data-dismiss="modal">&times;</button>
 -->            </div>
            <div class="modal-body">
                <a href="feedback.php">Sure, I'll take a survey</a>
                <div style="opacity: 50%;">OR</div>
                <a href="payment1.php">Sorry, no time right now</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>