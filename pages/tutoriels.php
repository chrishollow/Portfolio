<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Portfolio - Tutoriels</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    <?php include "menu.php";?>
        <div id="global">

        <main class="textuto">
        <article>
        <h1><a href="https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Positioning">Tutoriels </a>: CSS3 - Montrer les différents types de positionnement en CSS </h1>
        <p>Le positionnement permet de modifier le cours classique de la mise en page pour produire des effets intéressants. Vous souhaitez modifier légèrement le placement de boîtes par rapport à leur position par défaut dans la mise en page, et donner ainsi une touche d'originalité à votre page ? Vous souhaitez créer un élément d'interface utilisateur flottant au‑dessus d'autres parties de la page, et/ou que cet élément reste fixé à la même place dans la fenêtre du navigateur, quel que soit le point de défilement de la page ? Le positionnement est l'outil qu'il vous faut, il rend de tels agencements possibles.</p>
        <p>Il y a différents types de positionnement que vous pouvez appliquer à des éléments HTML. Pour utiliser un type particulier de positionnement sur un élément, nous utilisons la propriété CSS "position".</p>
        
        </article>

        <article class="static">
        <h1>Static</h1>
        <p>Comportement normal (par défaut). L'élément est alors positionné dans le flux avec sa position. Les propriétés top, right, bottom, left et z-index ne s'appliquent pas.</p>
        </article>

        <article class="relative">
        <h1>Relative</h1>
        <p>L'élément est positionné dans le flux normal du document puis décalé, par rapport à lui-même, selon les valeurs fournies par top, right, bottom et left. Le décalage n'a pas d'impact sur la position des autres éléments. Donc l'espace fourni à l'élément sur la page est le même que celui fourni avec static. Cette valeur crée un nouveau contexte d'empilement lorsque z-index ne vaut pas auto. L'effet de cette valeur n'est pas défini pour les éléments table-*-group, table-row, table-column, table-cell et table-caption</p>
        </article>

        <article class="absolute">
        <h1>Absolute</h1>
        <p>L'élément est retiré du flux normal et aucun espace n'est créé pour l'élément sur la page. Il est ensuite positionné par rapport à son ancêtre le plus proche qui est positionné s'il y en a un ou par rapport au bloc englobant initial sinon. La position finale de l'élément est déterminée par les valeurs de top, right, bottom et left. Cette valeur crée un nouveau contexte d'empilement lorsque z-index ne vaut pas auto. Les éléments positionnés de façon absolue peuvent avoir des marges, ces marges ne fusionnent pas avec les autres marges.</p>
        </article>

        <article class="fixed">
        <h1>Fixed</h1>
        <p>L'élément est retiré du flux normal et aucun espace n'est laissé pour l'élément. L'élément est positionné relativement au bloc englobant initial formé par la zone d'affichage (viewport), sauf si un des ancêtres a une propriété transform, perspective ou filter qui est différente de 'nulle' ; dans ce cas, c'est l'élément ancêtre qui joue le rôle de bloc englobant. Cela empêche le défilement lorsque la page est parcourue (ou lors de l'impression, le positionne à cette position fixe pour chaque page). Cette valeur crée toujours un nouveau contexte d'empilement. Certaines incohérences existent entre les navigateurs quant au rôle de perspective et filter pour la définition du bloc englobant. La valeur finale de l'élément est déterminée par les valeurs de top, right, bottom et left. Cette valeur crée toujours un nouveau contexte d'empilement. Pour les documents imprimés, cela se traduit par le placement de l'élément au même endroit pour chacune des pages.</p>
        </article>

        <article class="sticky">
        <h1>Sticky</h1>
        <p>La position de la boîte est calculée en fonction du flux normal du document. Ensuite, la boîte est décalée par rapport à son ancêtre de défilement le plus proche et par rapport à son bloc englobant selon les valeurs de top, right, bottom et left. Dans tous les cas, y compris avec les éléments table, cela n'affecte pas la position des autres éléments. Cette valeur entraîne toujours la création d'un nouveau contexte d'empilement. On notera qu'un tel élément « adhèrera » à l'ancêtre le plus proche qui dispose d'un mécanisme de défilement (c'est-à-dire quand overflow vaut hidden, scroll, auto ou overlay) même si cet ancêtre n'est pas nécessairement l'ancêtre de défilement le plus proche : cette valeur ne fonctionnera pas dans un élément pour lequel la propriété vaut overflow: hidden ou auto.</p>
        </article>

        <article class="comparaison">
        <h1>Comparaison entre 2 tutos vidéos</h1>
            <h2>Vidéo tutoriel 1 : <a href="https://www.youtube.com/watch?v=jx5jmI0UlXU">Learn CSS Position In 9 Minutes</a></h2>
            <p>Dans cette vidéo Youtube, le créateur essaye un peu rapidement de nous expliquer le fonctionnement des différents types de positionnement CSS. Il commence par la position relative, puis la position absolute et fixed, en démontrant comment celles-ci se comportent entre elles. Il finit par survoler la position sticky sans entrer dans les détails car selon lui, celle-ci a des propriétés plus spécifiques où il en parle plus en profondeur dans une autre de ces vidéos.</p>
            <h2>Vidéo tutoriel 2 : <a href="https://www.youtube.com/watch?v=UO8ed-JB4So">CSS Positioning Tutorial - Relative vs. Absolute vs. Fixed vs. Sticky | Crash Course</a></h2>
            <p>Dans cette vidéo, bien plus longue que la dernière, le youtubeur passe en revue le positionnement CSS en détails. Il commence par expliquer chacune d'entre elles, ainsi que le fonctionnement des propriétés left, right, top, bottom qui les contiennent. Le vidéaste du tutoriel va encore plus loin en démontrant le comportement des positions dans le Document Flow en comparant ceux en "Block" à ceux "Inline".</p>
            <h2>En conclusion...</h2>
            <p>Ces deux vidéos expliquent relativement bien comment fonctionne le positionnement en CSS se comporte. Cependant le youtubeur de la première vidéo affirme qu'au bout de son tutoriel, on sera capable d'utiliser parfaitement le positionnement CSS, pourtant il ne les passe en revue que brièvement. Tandis que le deuxième tutoriel est bien plus complet et plus encore, celui-ci explique chacunes des positions en détails, particulèrement le position sticky, qui est la plus récente et a des caractéristiques plus complexes qui nécessite plus d'attention que les autres. C'est pour quoi je recommande le deuxième tutoriel si on veut apprendre le positionnement CSS.</p>

         </article>
        </main>

        </div>
    </body>
</html>