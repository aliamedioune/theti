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

/* home/profil.html.twig */
class __TwigTemplate_cc5a76e13026ada7e7f93fcf0e51ce46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseEmploye.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseEmploye.html.twig", "home/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<style>
        :root {
            --main-color: #76b947; /* Primary color from the navbar */
            --text-color: #333; /* Text color for readability */
            --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Main font family */
        }

        /* Card styles */
        
        /* Heading styles */
        .card h1 {
            color: var(--main-color);
            font-family: var(--font-family);
        }

        /* Body text styles */
             .card , .card-body {
            font-family: var(--font-family);
            background: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
            }
        

        /* Label and value styles */
        .label, .value {
            font-size: 18px;
            color: var(--text-color);
        }

        /* Bold labels for a visual hierarchy */
        .label {
            font-weight: bold;
        }

        /* Consistent bottom margin for rows */
        .row {
            margin-bottom: 10px;
        }

        /* Custom horizontal rule to match the color theme */
        hr {
            border-top-color: var(--main-color);
        }

        /* Media queries for responsive adjustments */
        @media (max-width: 768px) {
            .label, .value {
                font-size: 16px;
            }
        }
    </style>
<br><br>
<br> <br> <br>

<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8 col-lg-8 col-xl-8\">
                <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.9)\">
                    <div class=\"card-body\" style=\"background-color: rgba(50, 205, 50, 0.3); border: 1px solid #4CAF50;\">
                       <center> <h1>Mon Profil</h1> </center>
                        <hr />
                       
                            <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Prénom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 80), "surname", [], "any", false, false, false, 80), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
<br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>      <label style=\"font-size:18px\">Nom :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>

                            <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                <b>  <label style=\"font-size:18px\">Adresse :<label> </b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 107), "address", [], "any", false, false, false, 107), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                 <b>     <label style=\"font-size:18px\">Ville :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 120), "city", [], "any", false, false, false, 120), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>
                                                        <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Pays :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 133), "country", [], "any", false, false, false, 133), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>

                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Email :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 147), "email", [], "any", false, false, false, 147), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                            </div>


                                                             <br>
                          <div class=\"row\">
                              <div class=\"col-5\">
                                    <div class=\"input-group\">
                                  <b>    <label style=\"font-size:18px\">Statut :<label></b>
                                    </div>
                               </div>
                               <div class=\"col-7\">
                                <div class=\"input-group\">
                                    <label style=\"font-size:18px\">";
        // line 162
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 162), "roles", [], "any", false, false, false, 162)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo "<label>
                                </div>
                               </div>
                               <br>
                            </div>
                            
                    </div>
                      <div class=\"text-center\">
                        <!-- Bouton qui, quand cliqué, rendra le formulaire de modification visible -->
                        <button onclick=\"toggleEditForm()\" class=\"btn btn-primary\">Modifier</button>
                    </div>
                    <div id=\"editForm\" style=\"display:none;\">
                            <div class=\"card mt-4\">
                                <div class=\"card-body\">
                                    <h2>Modifier Mon Profil</h2>
                                    ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surname", [], "any", false, false, false, 178), 'row');
        echo "
                                    ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 179), 'row');
        echo "
                                    ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 180), 'row');
        echo "
                                    ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 181), 'row');
        echo "
                                    ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 182), 'row');
        echo "
                                    ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 183), 'row');
        echo "
                                    <!-- Ajoutez ici des form_row pour les autres champs -->
                                    <button type=\"submit\" class=\"btn btn-success\">Sauvegarder les modifications</button>
                                    ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                                </div>
                            </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
<script>
    function toggleEditForm() {
        var form = document.getElementById('editForm');
        if (form.style.display === \"none\") {
            form.style.display = \"block\";
        } else {
            form.style.display = \"none\";
        }
    }
</script>




";
    }

    public function getTemplateName()
    {
        return "home/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 186,  276 => 183,  272 => 182,  268 => 181,  264 => 180,  260 => 179,  256 => 178,  252 => 177,  234 => 162,  216 => 147,  199 => 133,  183 => 120,  167 => 107,  150 => 93,  134 => 80,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/profil.html.twig", "/var/www/html/templates/home/profil.html.twig");
    }
}
