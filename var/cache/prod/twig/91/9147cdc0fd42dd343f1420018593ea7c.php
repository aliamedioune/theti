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

/* home/The.html.twig */
class __TwigTemplate_ad32cfe86d69427f8ced5b30cf095ff2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/The.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<main id=\"the\">
            
        <section>
            <div class=\"container padding\">
\t\t\t\t
               <h1>Notre carte des thés</h1>
               <h2><span>Thé noir</span></h2>
               <p>Le thé noir, que les chinois appellent thé rouge en référence à la couleur cuivrée de son infusion, est un thé complètement oxydé. La fabrication du thé noir, se fait en cinq étapes : le fleurissage, le roulage, l'oxydation, la torréfaction et le triage. Cette dernière opération permet de différencier les différents grades.</p>
\t\t\t\t
               <div class=\"thélist\">
                  <figure>
                     <figcaption>Blue of London</figcaption>
                     <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product3_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">9,00€</p>
                  <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Thé des Lords</figcaption>
                     <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product6_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">8,20€</p>
                  <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Thé des vahinés</figcaption>
                     <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product3_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">9,40€</p>
                  <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
               </div>
\t\t\t\t
            </div>
\t\t\t 
        </section>
\t\t  
         <section>
            <div class=\"container padding\">
\t\t\t\t
               <h2><span>Thé vert</span></h2>
               <p>Réputé pour ses nombreuses vertus grâce à sa richesse en antioxydants, le thé vert désaltère, tonifie, apaise, fortifie et procure une incontestable sensation de bien-être. Délicat et peu amer, il est apprécié à tout moment de la journée et propose une palette d'arômes très variés : végétal, minéral, floral, fruité.</p>
\t\t\t\t
               <div class=\"thélist\">
                  <figure>
                     <figcaption>Thé du hammam</figcaption>
                     <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">8,40€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Vive le thé!</figcaption>
                     <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product4_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">6,80€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Thé des alizés</figcaption>
                     <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product5_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">9,30€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t
               </div>
\t\t\t\t
            </div>
\t\t\t 
         </section>
\t\t  
         <section>
            <div class=\"container padding\">
\t\t\t\t
               <h2><span>Thé Oolong</span></h2>
               <p>Les Oolong, que les chinois appellent thé bleu-vert en référence à la couleur de leurs feuilles infusées, sont des thés semi-oxydés : leur oxydation n'a pas été menée à son terme. Spécialités de Chine et de Taïwan, il en existe une grande variété, en fonction de la région de culture, de l'espèce du théier ou encore du processus de fabrication. </p>
               <div class=\"thélist\">
                  <figure>
                     <figcaption>Vive les fêtes</figcaption>
                     <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product8_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">11,10€</p>
                  <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Fleur d'orangé Oolong</figcaption>
                     <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product9_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">10,90€</p>
                  <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Oolong 7 agrumes</figcaption>
                     <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product10_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">13,20€</p>
                  <a href=\"produit\" class=\"upper achat\">voir ce produit</a>
               </div>
\t\t\t\t
            </div>
\t\t\t 
         </section>
         <section>
            <div class=\"container padding\">
               <h2><span>Thé blanc</span></h2>
               <p>Le thé blanc est une spécialité de la province du Fujian. De toutes les familles de thé, c'est celle dont la feuille est la moins transformée par rapport à son état naturel. Non oxydé, le thé blanc ne subit que deux opérations : un flétrissage et une dessication. Il existe deux grands types de thés blancs : les Aiguilles d'Argent et les Bai Mu Dan. </p>
               <div class=\"thélist\">
                  <figure>
                     <figcaption>Thé des songes blancs</figcaption>
                     <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product11_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">12,00€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Bai mu dan</figcaption>
                     <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product12_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">9,50€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Aguilles d'Argent</figcaption>
                     <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product13_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">47,20€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
               </div>
\t\t\t\t
            </div>
\t\t\t 
         </section>
\t\t  
         <section>
            <div class=\"container padding\">
\t\t\t\t
               <h2><span>Rooibos</span></h2>
               <p>Le Rooibos (appelé thé rouge bien qu'il ne s'agisse pas de thé) est une plante poussant uniquement en Afrique du Sud et qui ne contient pas du tout de théine. Son infusion donne une boisson très agréable, ronde et légèrement sucrée. Riche en antioxydants, faible en tanins et dénué de théine, le Rooibos peut être dégusté en journée comme en soirée.  </p>
               <div class=\"thélist\">
                  <figure>
                     <figcaption>Roobois à la verveine</figcaption>
                     <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product14_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">7,00€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Spicy Passion</figcaption>
                     <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product15_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">9,00€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
                  <figure>
                     <figcaption>Rooibos des amants</figcaption>
                     <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/product16_big.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  </figure>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolorem pariatur, ea nesciunt qui adipisci. Ratione a voluptates exercitationem accusamus debitis sapiente, autem, totam illum sint dolor, molestias ipsam dolorum.</p>
                  <p>A partir de</p>
                  <p class=\"prix\">8,20€</p>
                  <a href=\"\" class=\"upper achat\">voir ce produit</a>
\t\t\t\t   
               </div>
\t\t\t\t
            </div>
\t\t\t 
         </section>
\t\t  
    </main>

    ";
    }

    public function getTemplateName()
    {
        return "home/The.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 188,  266 => 179,  254 => 170,  230 => 149,  218 => 140,  206 => 131,  185 => 113,  173 => 104,  161 => 95,  137 => 74,  125 => 65,  113 => 56,  89 => 35,  77 => 26,  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/The.html.twig", "/var/www/html/templates/home/The.html.twig");
    }
}
