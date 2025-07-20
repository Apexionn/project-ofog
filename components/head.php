<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= isset($TITLE) ? $TITLE . ' | ' : '' ?>HIMTI - One Family One Goal</title>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

<?php if(isset($USE_BOOTSTRAP) && $USE_BOOTSTRAP == true):?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php endif;?>

<?php if(isset($USE_TAILWIND) && $USE_TAILWIND == true):?>
    <link href="assets/css/tailwind.css" rel="stylesheet">
<?php endif;?>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

<!-- Apply custom stylesheet -->
<link rel="stylesheet" href="assets/css/style.css">

<!-- Icons -->
<link rel="icon" href="assets/img/organization-logo/himti-icon.svg" type="image/svg">