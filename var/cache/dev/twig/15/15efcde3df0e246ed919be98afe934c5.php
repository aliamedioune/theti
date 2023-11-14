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

/* bienvenueImportcadeau.html.twig */
class __TwigTemplate_6566bf0e2400db72a8eb5a85602a8de5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bienvenueImportcadeau.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bienvenueImportcadeau.html.twig"));

        // line 1
        echo "
<html>
    <head>
   
    <meta charset=\"UTF-8\">
    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
    <link href=\"https://fonts.googleapis.com/css?family=Amaranth&display=swap\" rel=\"stylesheet\"> 
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\"></script>
    
    
        ";
        // line 17
        echo "        
        ";
        // line 19
        echo "         ";
        // line 20
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
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
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ribbon.svg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"container padding\">

                <div>
                    <a href=\"/\">
                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    ";
        // line 101
        echo "                </div>




";
        // line 115
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 115), "roles", [], "any", true, true, false, 115))) {
            // line 116
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "roles", [], "any", false, false, false, 116), 0, [], "array", false, false, false, 116) == "ROLE_ADMIN")) {
                // line 117
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
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 129
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "roles", [], "any", false, false, false, 129), 0, [], "array", false, false, false, 129) == "ROLE_EMPLOYE")) {
                // line 130
                echo "                        <nav>  <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
                               <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
                        </nav>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 134
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "roles", [], "any", false, false, false, 134), 0, [], "array", false, false, false, 134) == "ROLE_USER")) {
                // line 135
                echo "                <nav>    <a class=\"navbar-brand\" href=\"/bienvenu\">TeaTipTop</a>
    
                <a class=\"nav-link\" href=\"/bienvenu\" id=\"ticketsRecord\">Mes gains</a>
                       <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
           </nav>

        ";
            } else {
                // line 143
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
            // line 153
            echo "           <nav>
                    <a href=\"/\" class=\"upper\">Accueil</a>
                    <a href=\"The\" class=\"upper\">thés</a>
                   
                    <a href=\"\" class=\"upper\">contact</a>
                    <a href=\"/login\" class=\"upper\">Se connecter</a>
                    <a href=\"about\" class=\"upper\">notre histoire</a>
                </nav>
";
        }
        // line 162
        echo "





























            </div>

        </header>
        ";
        // line 195
        $this->displayBlock('body', $context, $blocks);
        // line 196
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
            
    
        
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 195
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "bienvenueImportcadeau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 195,  272 => 196,  270 => 195,  235 => 162,  224 => 153,  212 => 143,  202 => 135,  200 => 134,  194 => 130,  192 => 129,  178 => 117,  175 => 116,  173 => 115,  166 => 101,  161 => 98,  152 => 92,  80 => 23,  76 => 22,  72 => 21,  69 => 20,  67 => 19,  64 => 17,  55 => 9,  53 => 8,  51 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
    <head>
   
    <meta charset=\"UTF-8\">
    {# <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> #}
    {# <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"> #}
    {# <link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\"> #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
    <link href=\"https://fonts.googleapis.com/css?family=Amaranth&display=swap\" rel=\"stylesheet\"> 
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\"></script>
    
    
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        
        {# <link rel=\"stylesheet\" href=\"{{ asset('bootstrap.css') }}\"> #}
         {# <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('style.css') }}\"> #}

    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/flexslider.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/normalize.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/style.css\") }}\">
    
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
            <img src=\"{{asset(\"assets/img/ribbon.svg\")}}\" alt=\"\">

            <div class=\"container padding\">

                <div>
                    <a href=\"/\">
                        <img src=\"{{asset(\"assets/img/logo.png\")}}\" alt=\"\">
                    </a>
                    {# <p><span id=\"panier\">Mon panier</span><i class=\"fas fa-shopping-cart\"></i><span id=\"priceheader\">42,00€</span></p> #}
                </div>




{# 
                <nav>
                    <a href=\"/\" class=\"upper\">Accueil</a>
                    <a href=\"The\" class=\"upper\">thés</a>
              
                    <a href=\"\" class=\"upper\">contact</a>
                    <a href=\"/login\" class=\"upper\">Se connecter</a>
                    <a href=\"about\" class=\"upper\">notre histoire</a>
                </nav>  #}
{% if app.user is not null and app.user.roles is defined %}
        {% if app.user.roles[0]== \"ROLE_ADMIN\" %}
            <nav>
             
              <a class=\"navbar-brand\" href=\"/admin\">TeaTipTop</a>
              <a class=\"nav-link\" href=\"/employe\">Gestion des gains</a>
              <a class=\"nav-link\" href=\"#\" id=\"newsletter\">Data</a>
               <a class=\"nav-link\" href=\"/admin/groslot\">Le gros lot</a>
               <a class=\"nav-link\" href=\"/admin/users\">Utilisateur</a>
               <a class=\"nav-link\" href=\"/admin/employee\">Employee</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
           
            </nav>
        {% elseif app.user.roles[0]== \"ROLE_EMPLOYE\" %}
                        <nav>  <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
                               <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
                        </nav>
        {% elseif app.user.roles[0]== \"ROLE_USER\" %}
                <nav>    <a class=\"navbar-brand\" href=\"/bienvenu\">TeaTipTop</a>
    
                <a class=\"nav-link\" href=\"/bienvenu\" id=\"ticketsRecord\">Mes gains</a>
                       <a class=\"nav-link\" style=\"color:white;\" href=\"/profil\">Mon profil</a>
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
           </nav>

        {% else  %}
           <nav>
                    <a href=\"/\" class=\"upper\">Accueil</a>
                    <a href=\"The\" class=\"upper\">thés</a>
                   
                    <a href=\"\" class=\"upper\">contact</a>
                    <a href=\"/login\" class=\"upper\">Se connecter</a>
                    <a href=\"about\" class=\"upper\">notre histoire</a>
                </nav>
        {% endif %}
{% else  %}
           <nav>
                    <a href=\"/\" class=\"upper\">Accueil</a>
                    <a href=\"The\" class=\"upper\">thés</a>
                   
                    <a href=\"\" class=\"upper\">contact</a>
                    <a href=\"/login\" class=\"upper\">Se connecter</a>
                    <a href=\"about\" class=\"upper\">notre histoire</a>
                </nav>
{% endif %}






























            </div>

        </header>
        {% block body %}{% endblock %}
        <footer>

            

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
            
    
        
    </body>
</html>", "bienvenueImportcadeau.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\bienvenueImportcadeau.html.twig");
    }
}
