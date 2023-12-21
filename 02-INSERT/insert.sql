SQL INSERT INTO

L’insertion de données dans une table s’effectue à l’aide de la commande INSERT INTO. Cette commande permet au choix d’inclure une seule ligne à la base existante ou plusieurs lignes d’un coup.
Insertion d’une ligne à la fois

Pour insérer des données dans une base, il y a 2 syntaxes principales :

    Insérer une ligne en indiquant les informations pour chaque colonne existante (en respectant l’ordre)
    Insérer une ligne en spécifiant les colonnes que vous souhaiter compléter. Il est possible d’insérer une ligne renseignant seulement une partie des colonnes

Insérer une ligne en spécifiant toutes les colonnes

La syntaxe pour remplir une ligne avec cette méthode est la suivante :

INSERT INTO table VALUES ('valeur 1', 'valeur 2', ...)

Cette syntaxe possède les avantages et inconvénients suivants :

    Obliger de remplir toutes les données, tout en respectant l’ordre des colonnes
    Il n’y a pas le nom de colonne, donc les fautes de frappe sont limitées. Par ailleurs, les colonnes peuvent être renommées sans avoir à changer la requête
    L’ordre des colonnes doit resté identique sinon certaines valeurs prennent le risque d’être complétée dans la mauvaise colonne

Insérer une ligne en spécifiant seulement les colonnes souhaitées

Cette deuxième solution est très similaire, excepté qu’il faut indiquer le nom des colonnes avant “VALUES”. La syntaxe est la suivante :

INSERT INTO table (nom_colonne_1, nom_colonne_2, ...
 VALUES ('valeur 1', 'valeur 2', ...)

A noter : il est possible de ne pas renseigner toutes les colonnes. De plus, l’ordre des colonnes n’est pas important.