<?php ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container mt-4">
        <div class="text-center">
            <h1>Studento registracija</h1>
        </div>
        <form action="response.php" method="post" class="mx-auto">
            <div class="mb-3 ">
                <label for="vardas" class="form-label">Vardas</label>
                <input type="vardas" class="form-control" name="vardas" placeholder="Vardas">
            </div>
            <div class="mb-3">
                <label for="pavarde" class="form-label">Pavarde</label>
                <input type="pavarde" class="form-control" name="pavarde" placeholder="Pavardė">
            </div>

            <p>Lytis:</p>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Vyras">
                <label class="form-check-label" for="inlineRadio1">Vyras</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Moteris">
                <label class="form-check-label" for="inlineRadio2">Moteris</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio" id="inlineRadio3" value="Kita">
                <label class="form-check-label" for="inlineRadio3">Kita</label>
            </div>

            <p>Į paskaitas važiuosiu su:</p>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="check_list[]" id="inlineCheckbox1" value="Dviračiu">
                <label class="form-check-label" for="inlineCheckbox1">Dviračiu</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="check_list[]" id="inlineCheckbox2" value="Mašina">
                <label class="form-check-label" for="inlineCheckbox2">Mašina</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="check_list[]" id="inlineCheckbox3" value="Autobusu">
                <label class="form-check-label" for="inlineCheckbox3">Autobusu</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="check_list[]" id="inlineCheckbox4" value="Eisiu pėsčias /-čia">
                <label class="form-check-label" for="inlineCheckbox4">Eisiu pėsčias /-čia</label>
            </div>

            <div class="">
                <p>Kokiame mieste studijuojate:</p>


                <select class="form-select" name="dropdown">
                    <option selected>Pasirinkite...</option>
                    <option value="Vilnius">Vilnius</option>
                    <option value="Kaunas">Kaunas</option>
                    <option value="Klaipėda">Klaipėda</option>
                </select>
            </div>

            <div class="mt-3">
                <p>Trumpai apie save:</p>

                <div class="form-floating">
                    <textarea class="form-control" name="textarea" placeholder="Apie save..." id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-light mt-3">Įrašyti</button>


        </form>

    </div>



</body>

</html>