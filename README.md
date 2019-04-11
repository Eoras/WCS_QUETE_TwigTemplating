# PHP AVANCE - Twig template
- **QUÊTE** - PHP Avancé - *Twig*
----
**Challenge**

Crée un projet PHP (avec un dossier public et src). Crée un fichier index.php dans le dossier public. Dans ce fichier, crée un simple tableau indexé numériquement :

`$products = ['product1', 'product2', 'product3', 'product4', 'product5'];`
Tu peux changer le nom des produits si tu te sens inspiré ;-)

Installe Twig via composer et implémente-le dans ton projet.

Crée un fichier base.html.twig, dans un dossier src/View, reprenant une structure HTML de base, dont tes autres vues vont hériter. Tu y chargeras Bootstrap et créeras un minimum de structure HTML (une navbar, un container-fluid....). Tu peux créer un fichier de style personnalisé qui sera appelé par le fichier.
Crée une vue index.html.twig dans le dossier src/View, qui sera appelée par ton fichier index.php, et à laquelle tu passeras ton tableau $products lors de l’appel à la méthode render()..
Dans cette vue, en utilisant la syntaxe de Twig, tu boucleras sur le tableau et tu afficheras les produits dans des cards Bootstrap, à raison de 3 cards par ligne.
Envoie le résultat sur un repository github et poste le lien en solution

**Critères de validation**
- Pour corriger, clone le projet et pense à lancer un `composer install`.
- Twig est correctement implémenté dans le projet (fichier public/index.php).
- Il y a un fichier Twig `index.html.twig` et `base.html.twig` dans le dossier de src/View.
- La syntaxe de Twig est correctement utilisée (il doit y avoir `au minimum une boucle).
- Le fichier index.html.twig étend bien le fichier base.html.twig, qui reprend la structure HTML de base et charge Bootstrap.
- Au minimum, les blocs title et content sont surchargés dans le fichier index.html.twig.
- Dans ton navigateur, la page index.php affiche bien les 5 produits, à raison de 3 par ligne.

> [WildCodeSchool](https://wildcodeschool.fr/)









