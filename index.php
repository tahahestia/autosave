<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div style="height: 100vh;display: flex;justify-content: center;align-items: center;width:100vw;">
           <div class="container">
        <form>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="dat" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="dat" name="dat">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="pays" class="form-label">Pays</label>
                        <input type="text" class="form-control" id="pays" name="pays">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="sexe" class="form-label">Sexe</label>
                        <select class="form-select" name="sexe" id="sexe">
                            <option value="">--</option>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="tel" class="form-label">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="tel" name="tel">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="emploi" class="form-label">Situation professionelle</label>
                        <select class="form-select" name="emploi" id="emploi">
                            <option value="">--</option>
                            <option value="Etudiant">Etudiant</option>
                            <option value="Sans emploi">Sans emploi</option>
                            <option value="Salarié">Salarié</option>
                            <option value="Retraité">Retraité</option>
                            <option value="Indépendant">Indépendant</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="etat" class="form-label">Etat civil</label>
                        <select class="form-select" name="etat" id="etat">
                            <option value="">--</option>
                            <option value="Célibataire">Célibataire</option>
                            <option value="Marié">Marié</option>
                            <option value="Veuf">Veuf</option>
                            <option value="Divorcé">Divorcé</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>