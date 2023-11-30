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

/* security/login.html.twig */
class __TwigTemplate_d5d1d63feda6bc29f5d8eabc4791626c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Thé Tiotop";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        
       
        ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    color: #333;
    margin: 0;
    padding: 0;
  }
  .buttonSubmitLogin , .buttonSubmitRegister {
    background-color: #5cb85c !important; /* Green background */
    color: white !important;
    border: none !important;
    padding: 10px 20px !important;
    text-align: center !important;
    text-decoration: none !important;
    display: inline-block !important;
    margin: 4px 2px !important;
    cursor: pointer !important;
    border-radius: 25px !important; /* Rounded borders */
    transition: background-color 0.3s ease !important; /* Smooth transition for hover effect */
}

.buttonSubmitLogin:hover  {
    background-color: #4cae4c !important; /* Slightly darker green on hover */
}

  .secondary-button {
    background-color: #6c757d;
  }

  .secondary-button:hover {
    background-color: #5a6268;
  }

  ";
        // line 51
        echo "
  .header {
    background-color: #4CAF50;
    color: #fff;
    padding: 20px;
    text-align: center;
  }

  .main-content {
    padding: 20px;
  }

  hr {
    border: 0;
    height: 1px;
    background: #ddd;
    margin: 20px 0;
  }

  h1 {
    font-size: 24px;
    color: #333;
  }

  ul {
    list-style: none;
    padding: 0;
  }

  ul li {
    padding: 5px 0;
  }

  .card {
    background: #f9f9f9;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 20px;
  }

  .button {
    background-color: #5cb85c;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
  }

  .button:hover {
    background-color: #4cae4c;
  }

  .secondary-button {
    background-color: #6c757d;
  }

  .secondary-button:hover {
    background-color: #5a6268;
  }
  
  .card-group {
    display: flex;
    justify-content: space-between;
  }

  .card-group > div {
    flex: 1;
    margin-right: 10px;
  }

  .card-group > div:last-child {
    margin-right: 0;
  }

  .input-group {
    margin-bottom: 20px;
  }

  .input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .text-center {
    text-align: center;
  }
</style>

";
        // line 165
        echo "
                   
<br/><br/>

    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-10 \">
            <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
              <center>  <h1 style=\"font-size:35px\"> Bienvenue sur Thé TipTop le jeu-concours! Inscrivez-vous et entrez votre numéro de caisse.</h1>  </center>
              <hr>
               <center>  <p style=\"font-size:20px\">Si vous avez un ticket de caisse ou une facture entre le <b>";
        // line 175
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "closingDate", [], "any", false, false, false, 175), "-30 day"), "d/m/Y"), "html", null, true);
        echo " </b> et le <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "closingDate", [], "any", false, false, false, 175), "d/m/Y"), "html", null, true);
        echo " </b> et supérieure à 49 € vous êtes éligible à  participer à ce jeu de concours.</p></center> 
              <center>  <p style=\"font-size:20px\">Le grand tirage au sort aura lieu le <b>";
        // line 176
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "closingDate", [], "any", false, false, false, 176), "d/m/Y"), "html", null, true);
        echo " </b>pour détermier un gagnant parmi les participants d'un an de thé d'une valeur de 360 €.</b> .</p></center> 
<hr>
                <b><p style=\"font-size:18px\">- Cadeaux à gagner :</p></b>
                 <ul style=\"font-size:16px\">     
                    <div class=\"text-center mt-4\" style=\"display: inline-block; margin-right: 20px;\">
                        <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/Infuseur.jpg"), "html", null, true);
        echo "\" alt=\"Infuseur à thé\" style=\"max-width: 100%; height: auto;\">
                        <p>  l'infuseur à thé.</p>
                    </div>
                    <div class=\"text-center mt-4\" style=\"display: inline-block; margin-right: 20px;\">
                        <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/ThéDetox.jpg"), "html", null, true);
        echo "\" alt=\"Thé Detox\" style=\"max-width: 100%; height: auto;\">
                        <p>  la boite de thé detox.</p>
                    </div>
                    <div class=\"text-center mt-4\" style=\"display: inline-block; margin-right: 20px;\">
                        <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/ThéSignature.jpg"), "html", null, true);
        echo "\" alt=\"Thé Signature\" style=\"max-width: 100%; height: auto;\">
                        <p>  la boite de thé signature.</p>
                    </div>
                    <div class=\"text-center mt-4\" style=\"display: inline-block; margin-right: 20px;\">
                        <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/CoffretDécouverte1.jpg"), "html", null, true);
        echo "\" alt=\"Coffret Découverte 39€\" style=\"max-width: 100%; height: auto;\">
                        <p> coffret découverte 39€.</p>
                    </div>
                    <div class=\"text-center mt-4\" style=\"display: inline-block;\">
                        <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/CoffretDécouverte2.jpg"), "html", null, true);
        echo "\" alt=\"Coffret Découverte 69€\" style=\"max-width: 100%; height: auto;\">
                        <p> coffret découverte 69€.</p>
                    </div>
                    ";
        // line 203
        echo "                 <li>60% des tickets offrent un infuseur à thé</li>
                 <li>20% des tickets offrent une boite de 100g d’un thé detox ou infusion</li>
                 <li>10% des tickets offrent une boite de 100g de thé signature</li>
                 <li>6% des tickets offrent un coffret découverte d’une valeur de 39 €</li>
                 <li>4% des tickets offrent un coffret découverte d’une valeur de 69 €</li>
                 </ul>
                
                    
                <div class=\"card-group\">
                    <div class=\"p-4 card\">
                        <div class=\"card-body\">
                            <form method=\"post\">
                                ";
        // line 215
        if (($context["error"] ?? null)) {
            // line 216
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 216), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 216), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 218
        echo "                                <h1>Connexion</h1>
                                
                                <div class=\"mb-3 input-group\">
                                    <input type=\"email\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"email\" autocomplete=\"email\" required autofocus>
                                </div>
                                <div class=\"mb-2 input-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"mot de passe\" autocomplete=\"current-password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"row mt-3\">
                                        <button type=\"submit\" class=\"btn buttonSubmitLogin btn-block\">Se connecter</button>
                                </div>
                            </form>
         
                        </div>
                    </div>
                    <div class=\"text-white cardCreatAccount py-5 d-md-down-none card\">
                        <div class=\"text-center card-body\">
                            <div>
                                <h2 class=\"text-white\">Créer un compte</h2>
                                <p>Si vous souhaitez participer au jeu-concours et voir l'historique de vos gains, vous devez créer un compte.</p>
                                <a href=\"/register\">
                                    <button tabindex=\"-1\" class=\"mt-3 btn buttonSubmitRegister\">Rejoindre !</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script>



   
</script>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 226,  289 => 221,  284 => 218,  278 => 216,  276 => 215,  262 => 203,  256 => 197,  249 => 193,  242 => 189,  235 => 185,  228 => 181,  220 => 176,  214 => 175,  202 => 165,  105 => 51,  69 => 9,  65 => 8,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
