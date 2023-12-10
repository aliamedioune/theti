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

/* admin/groslot.html.twig */
class __TwigTemplate_2c2c399a771fdf22ac5ac83da383711e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/groslot.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/groslot.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/groslot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Thé Tiotop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "


<br><br>


    <div class=\"container\" >
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\" >
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" >
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \" style=\"background-color: rgba(50, 205, 50, 0.3); border: 1px solid #4CAF50;\">
                           
                            <div class=\"row\">
                                <h2 class=\"text-white\">Le tirage au sort du gros lot aura lieu le ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 26, $this->source); })()), "+30 day"), "d-m-Y"), "html", null, true);
        echo ".</h2>
                            </div>
                            ";
        // line 28
        if ((twig_date_format_filter($this->env, "now", "d-m-Y") <= twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 28, $this->source); })()), "+30 day"), "d-m-Y"))) {
            // line 29
            echo "                            ";
            if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()) == null)) {
                // line 30
                echo "                            <div class=\"row\">
                            <h2 class=\"text-white\">Si vous voulez lancer le tirage au sort du gros lot veuillez cliquer sur le button </h2>
                            </div>
                                <br><br>
                                ";
                // line 35
                echo "                                <a href=\"/admin/groswin\" class=\"btn btn-block\" style=\"background-color: #4CAF50; color: white; padding: 10px 25px; font-size: 18px; font-weight: bold; border: none; border-radius: 5px; box-shadow: 0 4px #999; text-align: center; display: block; margin: 0 auto; transition: background-color 0.2s, box-shadow 0.2s;\">Lancer</a>

                            ";
            }
            // line 38
            echo "                            ";
        }
        // line 39
        echo "                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>   
                      ";
        // line 45
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                     <div class=\"col-md-8\" >
                      <br><br>
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \">
                          
                            <div class=\"row\">
                                <h2 class=\"text-white\">Le gagnant du gros lot de 360€ est : ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "surname", [], "any", false, false, false, 54), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</h2>
                            </div>

                           
                                </div>
                                
                                </div>
                            </div>
                        </div> 
                        ";
        }
        // line 64
        echo "                    </div>
                </div>

                
            </div>



<br><br> <br>



        
 
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>








";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/groslot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 64,  172 => 54,  162 => 46,  160 => 45,  152 => 39,  149 => 38,  144 => 35,  138 => 30,  135 => 29,  133 => 28,  128 => 26,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thé Tiotop{% endblock %}

{% block stylesheets %}
    

{% endblock %}

{% block body %}



<br><br>


    <div class=\"container\" >
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\" >
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" >
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \" style=\"background-color: rgba(50, 205, 50, 0.3); border: 1px solid #4CAF50;\">
                           
                            <div class=\"row\">
                                <h2 class=\"text-white\">Le tirage au sort du gros lot aura lieu le {{date|date_modify(\"+30 day\")|date('d-m-Y')}}.</h2>
                            </div>
                            {% if \"now\"|date('d-m-Y') <= date|date_modify(\"+30 day\")|date('d-m-Y') %}
                            {% if user == null %}
                            <div class=\"row\">
                            <h2 class=\"text-white\">Si vous voulez lancer le tirage au sort du gros lot veuillez cliquer sur le button </h2>
                            </div>
                                <br><br>
                                {# <a href=\"/admin/groswin\" class=\"btn btn-success btn-block\">Lancer </a> #}
                                <a href=\"/admin/groswin\" class=\"btn btn-block\" style=\"background-color: #4CAF50; color: white; padding: 10px 25px; font-size: 18px; font-weight: bold; border: none; border-radius: 5px; box-shadow: 0 4px #999; text-align: center; display: block; margin: 0 auto; transition: background-color 0.2s, box-shadow 0.2s;\">Lancer</a>

                            {% endif %}
                            {% endif %}
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>   
                      {% if user %}
                     <div class=\"col-md-8\" >
                      <br><br>
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 \">
                          
                            <div class=\"row\">
                                <h2 class=\"text-white\">Le gagnant du gros lot de 360€ est : {{ user.user.surname}} {{ user.user.name}}</h2>
                            </div>

                           
                                </div>
                                
                                </div>
                            </div>
                        </div> 
                        {% endif %}
                    </div>
                </div>

                
            </div>



<br><br> <br>



        
 
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>








{% endblock %}", "admin/groslot.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\admin\\groslot.html.twig");
    }
}
