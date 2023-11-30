<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dexxx.html.twig */
class __TwigTemplate_9f24935168ce5e0dfe782beec0f86258 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"fr\">
<head>
   
    <meta charset=\"UTF-8\">
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
    <link href=\"https://fonts.googleapis.com/css?family=Amaranth&display=swap\" rel=\"stylesheet\"> 
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\"></script>
    
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.css"), "html", null, true);
        echo "\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
       
        ";
        // line 21
        echo "        
         ";
        // line 23
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    
    <title>Accueil - Cup Of Tea</title>
    </head>
    <body>
                <style>
                /* Réduire la taille du texte de l'annonce en haut de la page */
header p {
  font-size: 0.8em; /* Ajustez la taille de la police selon vos besoins */
  margin: 0;
  padding: 5px 0; /* Ajustez le padding pour réduire la hauteur */
  text-align: center;
  background: #someColor; /* Remplacez #someColor par la couleur désirée */
}

/* Assurer que les images ne dépassent pas la hauteur souhaitée du header */
header img {
  height: auto; /* Conserve le ratio d'aspect */
  max-height: 50px; /* Ajustez à la hauteur désirée */
}

/* Ajuster le padding du conteneur */
.container.padding {
  padding: 10px 0; /* Ajustez le padding vertical pour réduire la hauteur */
}

/* Style du panier */
#panier {
  font-weight: bold;
}

#priceheader {
  margin-left: 5px;
}

/* Ajuster le style de la navigation */
nav {
  display: flex;
  align-items: center; /* Ceci aligne les éléments de la nav verticalement */
}

nav a {
  text-decoration: none;
  color: #ffffff; /* Couleur du texte */
  padding: 10px 15px; /* Ajustez le padding pour contrôler la taille des liens */
  font-size: 0.9em; /* Réduire la taille de la police si nécessaire */
  text-transform: uppercase; /* Conserver les lettres en majuscules */
}

nav a:hover {
  background: #darkerColor; /* Couleur de survol */
}

/* Assurer que le header ne soit pas trop grand */
header {
  overflow: hidden; /* Cela empêchera les débordements si les images sont trop grandes */
  height: auto; /* Ou spécifiez une hauteur fixe si vous voulez une hauteur spécifique */
}

/* Vous pouvez aussi vouloir ajouter une media query pour ajuster la taille sur les écrans plus petits */
@media (max-width: 768px) {
  /* Ajoutez ici des styles pour écrans plus petits */
}


                </style>
        <header>

            <p>Livraison offerte à partir de 65€ d'achat!</p>
            <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ribbon.svg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"container padding\">

                <div>
                    <a href=\"/\">
                        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    ";
        // line 104
        echo "                </div>




";
        // line 118
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 118)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 118), "roles", [], "any", true, true, false, 118))) {
            // line 119
            echo "        ";
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 119), "roles", [], "any", false, false, false, 119)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_ADMIN")) {
                // line 120
                echo "            <nav>
             
              <a class=\"navbar-brand\" href=\"/admin\">TeaTipTop</a>
              <a class=\"nav-link\" href=\"/employe\">Gestion des gains</a>
              <a class=\"nav-link\" href=\"#\" id=\"newsletter\">Data</a>
               <a class=\"nav-link\" href=\"/admin/groslot\">Le gros lot</a>
               <a class=\"nav-link\" href=\"/admin/users\">Utilisateur</a>
               <a class=\"nav-link\" href=\"/admin/employee\">Employee</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
           
            </nav>
        ";
            } elseif (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 132
($context["app"] ?? null), "user", [], "any", false, false, false, 132), "roles", [], "any", false, false, false, 132)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) == "ROLE_EMPLOYE")) {
                // line 133
                echo "                        <nav>  <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
                               <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
                        </nav>
        ";
            } elseif (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 137
($context["app"] ?? null), "user", [], "any", false, false, false, 137), "roles", [], "any", false, false, false, 137)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) == "ROLE_USER")) {
                // line 138
                echo "                <nav>    <a class=\"navbar-brand\" href=\"/bienvenu\">TeaTipTop</a>
    
                <a class=\"nav-link\" href=\"/bienvenu\" id=\"ticketsRecord\">Mes gains</a>
                       <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
           </nav>

        ";
            } else {
                // line 146
                echo "           <nav>
                    <a href=\"/\" class=\"upper\">Accueil</a>
                    <a href=\"The\" class=\"upper\">thés</a>
                   
                    <a href=\"\" class=\"upper\">contact</a>
                    <a href=\"/login\" class=\"upper\">Se connecter</a>
                    <a href=\"about\" class=\"upper\">notre histoire</a>
                </nav>
        ";
            }
        } else {
            // line 156
            echo "           <nav>
                    <a href=\"/\" class=\"upper\">Accueil</a>
                    <a href=\"The\" class=\"upper\">thés</a>
                   
                    <a href=\"\" class=\"upper\">contact</a>
                    <a href=\"/login\" class=\"upper\">Se connecter</a>
                    <a href=\"about\" class=\"upper\">notre histoire</a>
                </nav>
";
        }
        // line 165
        echo "





























            </div>

        </header>
        ";
        // line 198
        $this->displayBlock('body', $context, $blocks);
        // line 199
        echo "        <footer>

            

                <div id=\"assurance\">
                    <div class=\"container flexassu\">
                        <nav>
                            <a href=\"\" class=\"upper\"><i class=\"fas fa-lock\"></i>paiment sécurisé</a>
                            <a href=\"\" class=\"upper\"><i class=\"fas fa-truck\"></i>livraison offerte</a>
                            <a href=\"\" class=\"upper\"><i class=\"fas fa-money-bill-alt\"></i>carte de fidélité</a>
                            <a href=\"\" class=\"upper\"><i class=\"fas fa-phone\"></i>service client</a>
                            <a href=\"\" class=\"upper\"><i class=\"fas fa-check-circle\"></i>garantie qualité</a>
                        </nav>
                    </div>
                </div>

                <div id=\"liste\">
                    <div class=\"container flexul\">
                        <ul>
                            <li><h4 class=\"upper\">cup of tea</h4></li>
                            <li><a href=\"\">Notre histoire</a></li>
                            <li><a href=\"\">Nos boutiques</a></li>
                            <li><a href=\"\">Le thé de A à Z</a></li>
                            <li><a href=\"\">Espace Clients Professionnels</a></li>
                            <li><a href=\"\">Recrutement</a></li>
                            <li><a href=\"\">Contactez-nous!</a></li>
                            <li><a href=\"\">L'Ecole du thé</a></li>
                        </ul>
                        <ul>
                            <li><h4 class=\"upper\">commander en ligne</h4></li>
                            <li><a href=\"\">Première visite</a></li>
                            <li><a href=\"\">Aide - FAQ</a></li>
                            <li><a href=\"\">Service client</a></li>
                            <li><a href=\"\">Suivre ma commande</a></li>
                            <li><a href=\"\">Conditions générales de vente</a></li>
                            <li><a href=\"\">Information légales</a></li>
                            
                        </ul>
                        <ul>
                            <li><h4 class=\"upper\">suivez-nous</h4></li>
                            <li><a href=\"\">Notre histoire</a></li>
                            <li><a href=\"\">Nous boutiques</a></li>
                            <li><a href=\"\">le Thé de A à Z</a></li>
                            <li><a href=\"\">Espace cliets professionnels</a></li> 
                        </ul>
                    </div>
                </div>
                <div id=\"footer\" class=\"padding\">
                    <div class=\"container\">
                        
                        <p style=\"text-decoration: underline;\" ><a>Ce site web est fictif et a été créé uniquement à des fins éducatives et de démonstration. Aucun produit ou service réel n'est offert ici. Toutes les informations et les éléments présents sur ce site sont simulés. Merci de ne pas fournir d'informations personnelles ou sensibles.</a>.</p>
                    </div>

                    
                </div>
            </div>

        </footer>
            
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
    
        <script type=\"text/javascript\" charset=\"utf-8\">
        \$(window).load(function() {
            \$('.flexslider').flexslider();
        });
        </script>
    </body>
</html>";
    }

    // line 198
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "dexxx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 198,  333 => 259,  271 => 199,  269 => 198,  234 => 165,  223 => 156,  211 => 146,  201 => 138,  199 => 137,  193 => 133,  191 => 132,  177 => 120,  174 => 119,  172 => 118,  165 => 104,  160 => 101,  151 => 95,  79 => 26,  75 => 25,  71 => 24,  68 => 23,  65 => 21,  59 => 17,  51 => 11,  49 => 10,  47 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dexxx.html.twig", "/var/www/html/templates/dexxx.html.twig");
    }
}
