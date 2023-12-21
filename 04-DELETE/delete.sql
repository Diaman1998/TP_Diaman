La commande DELETE en SQL permet de supprimer des lignes dans une table. En utilisant cette commande associé à WHERE il est possible de sélectionner les lignes concernées qui seront supprimées.
Attention

Avant d’essayer de supprimer des lignes, il est recommandé d’effectuer une sauvegarde de la base de données, ou tout du moins de la table concernée par la suppression. Ainsi, s’il y a une mauvaise manipulation il est toujours possible de restaurer les données.
Syntaxe

La syntaxe pour supprimer des lignes est la suivante :

DELETE FROM `table`
WHERE condition

Attention : s’il n’y a pas de condition WHERE alors toutes les lignes seront supprimées et la table sera alors vide.