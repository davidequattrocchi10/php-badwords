<?php
$_POST['paragraph'];
$_POST['word'];
$word_censored = '/\b' . $_POST['word'] . '\b/i';
$replace_paragraph = preg_replace($word_censored, '*** ', $_POST['paragraph']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div>
        <h2>The paragraph</h2>
        <p>
            <?php echo $_POST['paragraph']; ?>
        </p>
        <p>
            <?php echo 'The paragraph is length ' ?>
            <span class="badge text-bg-primary">
                <?php echo strlen($_POST['paragraph']); ?>
            </span>
        </p>
    </div>
    <hr>
    <div>
        <h2>Paragraph transforms "football" with "***"</h2>
        <p>
            <?php echo $replace_paragraph; ?>
        </p>
        <p>
            <?php echo 'The new paragraph is length ' ?>
            <span class="badge text-bg-primary">
                <?php echo strlen($replace_paragraph); ?>
            </span>
        </p>
    </div>
</body>

</html>
<style>
    body {
        padding: 1rem;
    }
</style>