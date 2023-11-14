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

/* employe/gains.html.twig */
class __TwigTemplate_ccbc25a26f15d420f91599e1a465618a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/gains.html.twig", 1);
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

        echo "Gains";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

<br>
<br>
<br>


    <div class=\"container\">






        <div class=\"justify-content-center row\">
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "session", [], "any", false, false, false, 23), "flashbag", [], "any", false, false, false, 23), "get", ["Success"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "<div class=\"alert alert-dismissible alert-primary col-md-8\" >
  <center><h4 class=\"alert-heading\"> ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4></center>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo " 
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


 ";
        // line 51
        if ((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 51, $this->source); })())) {
            echo " 
                <table class=\"table mt-4\" style=\"background-color: rgba(244, 217, 231, 0.8)\" >
        <thead>
            <tr>
                <th>Type de gain</th>
                <th>L'état de gain</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["win"]) {
                // line 62
                echo "            <tr>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["win"], "ticket", [], "any", false, false, false, 63), "title", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                <td>";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 64) == 0)) {
                    echo "<span class=\"badge bg-warning\">Gains pas encore distribué</span> ";
                } else {
                    echo "<span class=\"badge bg-info\">Gains est déja distribué</span>";
                }
                echo "</td>
                <td>";
                // line 65
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 65) == 0)) {
                    // line 66
                    echo "                <form method=\"POST\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_send");
                    echo "\">
                <input type=\"hidden\" value=\"";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["win"], "id", [], "any", false, false, false, 67), "html", null, true);
                    echo "\" name=\"gain_id\">
                <button type=\"submit\" class=\"btn btn-success btn-l\">Donner le gaint</button>
                </form>
        ";
                }
                // line 71
                echo "                
                
                </td>
    
            </tr>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['win'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        </tbody>
    </table>
 ";
        }
        // line 80
        echo " 

</div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<br><br><br>

<br><br>

<br>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/gains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 80,  205 => 78,  193 => 71,  186 => 67,  181 => 66,  179 => 65,  171 => 64,  167 => 63,  164 => 62,  160 => 61,  147 => 51,  122 => 28,  112 => 25,  109 => 24,  105 => 23,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gains{% endblock %}



{% block body %}


<br>
<br>
<br>


    <div class=\"container\">






        <div class=\"justify-content-center row\">
{% for message in app.session.flashbag.get('Success') %}
<div class=\"alert alert-dismissible alert-primary col-md-8\" >
  <center><h4 class=\"alert-heading\"> {{ message }}</h4></center>
</div>
<br>
{% endfor %} 
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


 {% if wins %} 
                <table class=\"table mt-4\" style=\"background-color: rgba(244, 217, 231, 0.8)\" >
        <thead>
            <tr>
                <th>Type de gain</th>
                <th>L'état de gain</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
        {% for win in wins %}
            <tr>
                <td>{{win.ticket.title}}</td>
                <td>{% if win.send == 0 %}<span class=\"badge bg-warning\">Gains pas encore distribué</span> {% else %}<span class=\"badge bg-info\">Gains est déja distribué</span>{% endif %}</td>
                <td>{% if win.send == 0 %}
                <form method=\"POST\" action=\"{{path('app_code_send')}}\">
                <input type=\"hidden\" value=\"{{win.id }}\" name=\"gain_id\">
                <button type=\"submit\" class=\"btn btn-success btn-l\">Donner le gaint</button>
                </form>
        {% endif %}
                
                
                </td>
    
            </tr>
            
        {% endfor %}
        </tbody>
    </table>
 {% endif %} 

</div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<br><br><br>

<br><br>

<br>



{% endblock %}
", "employe/gains.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\employe\\gains.html.twig");
    }
}
