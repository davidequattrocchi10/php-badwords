<!-- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. 
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi 
(***) tutte le occorrenze della parola da censurare -->

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
    <h2>Insert a paragraph and a word to be censored</h2>

    <form action="process-form.php" method="post">
        <div class="form-group mb-3">
            <label for="paragraph">Your Paragraph</label>
            <textarea class="form-control" name="paragraph" placeholder="Insert Your Paragraph" maxlength="800" rows="3"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="word">Word to be censored</label>
            <input class="form-control" type="text" name="word" placeholder="Insert Your Word">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>
<style>
    body {
        padding: 1rem;
    }
</style>