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

/* admin/index.html.twig */
class __TwigTemplate_8b6fe5584d48d48172552c391247b82f extends Template
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
        return "dexxx.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("dexxx.html.twig", "admin/index.html.twig", 1);
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
        echo "    ";
        // line 7
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
<nav  id=\"topSideBar\">
  
</nav>


       


<section class=\"wrapper\" id=\"blockStatistique\">
  <div class=\"row row-cols-1 row-cols-md-1 g-4 mb-4²\" >
    <div class=\"col mb-4\">
      <div class=\"card bg-light\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Tickets restant</h5>
          <p class=\"card-text\">";
        // line 26
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["ticketsdis"]) || array_key_exists("ticketsdis", $context) ? $context["ticketsdis"] : (function () { throw new RuntimeError('Variable "ticketsdis" does not exist.', 26, $this->source); })())) - twig_length_filter($this->env, (isset($context["ticketwin"]) || array_key_exists("ticketwin", $context) ? $context["ticketwin"] : (function () { throw new RuntimeError('Variable "ticketwin" does not exist.', 26, $this->source); })()))), "html", null, true);
        echo "  /100   Tickets </p>
        </div>
      </div>
    </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2 g-4 \">
      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 33
            echo "      <div class=\"col\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
            <p class=\"card-text\">tickets restant : ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "ticketsLeft", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>

  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aboutUs"]) || array_key_exists("aboutUs", $context) ? $context["aboutUs"] : (function () { throw new RuntimeError('Variable "aboutUs" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 45
            echo "  <input type=\"hidden\" class=\"aboutUsInfo\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "aboutUs", [], "any", false, false, false, 45), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "count", [], "any", false, false, false, 45), "html", null, true);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 48
            echo "  <input type=\"hidden\" class=\"cityInfo\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "city", [], "any", false, false, false, 48), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "count", [], "any", false, false, false, 48), "html", null, true);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " 

  <div class=\"container\">
    
    <div class=\"row mt-4\">
    <div class=\"col-6\">
<div class=\"card border-primary \" style=\"max-width: 70rem;\">
      <div class=\"card-header\">Comment les participants ont appris l'existance du jeu :</div>
      <div class=\"card-body\">
        <div class=\"chart-container mt-3\" style=\"position: relative; height:60vh; width:28vw ;\">
          <canvas id=\"myChart\" width=\"50\" height=\"50\"></canvas>
        </div>
      </div>
</div>
</div>

 <div class=\"col-6\">
<div class=\"card border-primary\" style=\"max-width: 80rem;\">

     <div class=\"card-header\">Localisation des participants (5 maximum) :</div>
      <div class=\"card-body\">
        <div class=\"chart-container mt-4\" style=\"position: relative; height:60vh; width:28vw\">
          <canvas id=\"myChartBar\" width=\"50\" height=\"50\"></canvas>
        </div>
      </div>
    </div>
</div>
  </div>

</section>

<section class=\"wrapper\" id=\"blockNewsletter\" hidden=true>
<div class=\"app d-flex mt-5 flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\">
                <div class=\"card-group\">
                    <div class=\"text-white py-5 d-md-down-none card blockBackgroundNewsletter\">
                        <div class=\"text-center card-body blockBackgroundNewsletter\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <p> <b>";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["newsLetterCustomerNB"]) || array_key_exists("newsLetterCustomerNB", $context) ? $context["newsLetterCustomerNB"] : (function () { throw new RuntimeError('Variable "newsLetterCustomerNB" does not exist.', 90, $this->source); })()), "html", null, true);
        echo " </b> clients qui ce sont inscris à la newsletter.</p>
                                <p>Télécharger un fichier CSV contenant leurs email :</p>
                                <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Mails");
        echo "\" class=\"btn btn-success\">Télécharger</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <br><br><br>
  <br><br><br><br>
  <br><br><br><br>
</section>



<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\"></script>
<script>

  var topSideBar = document.getElementById('topSideBar');
  baseUrl = topSideBar.dataset.baseurl;

  ";
        // line 116
        echo "  titleAboutUs = [];
  countAboutUs = [];
  aboutUsInfo = document.getElementsByClassName('aboutUsInfo');
  for(i=0;i<aboutUsInfo.length;i++){
    data = aboutUsInfo[i].value;
    data = data.split(\"-\");
    titleAboutUs.push(data[0]);
    countAboutUs.push(parseInt(data[1]));
  }

  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: titleAboutUs,
          datasets: [{
              data: countAboutUs,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 206, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(255, 159, 64, 0.5)'
              ]
          }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    }
  });

";
        // line 157
        echo "
  titleCity = [];
  countCity = [];
  cityInfo = document.getElementsByClassName('cityInfo');
  for(i=0;i<cityInfo.length;i++){
    data = cityInfo[i].value;
    data = data.split(\" \");
    
    titleCity.push(data[0]);
    countCity.push(parseInt(data[1]));
  }

  const ctxBar = document.getElementById('myChartBar').getContext('2d');
  const myChartBar = new Chart(ctxBar, {
     type: 'doughnut',
      data: {
          labels: titleCity,
          datasets: [{
              data: countCity,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 206, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(255, 159, 64, 0.5)'
              ]
          }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    }
  });

";
        // line 200
        echo "\$(document).on('click','#statistiques',function(e){
    e.preventDefault();
    blockStatistique = document.getElementById('blockStatistique');
    blockNewsletter = document.getElementById('blockNewsletter');
    blockStatistique.hidden = false;
    blockNewsletter.hidden = true;
});
\$(document).on('click','#newsletter',function(e){
    e.preventDefault();
    blockStatistique = document.getElementById('blockStatistique');
    blockNewsletter = document.getElementById('blockNewsletter');
    blockStatistique.hidden = true;
    blockNewsletter.hidden = false;
});

";
        // line 216
        echo "\$(document).on('click','#sendNewsletter',function(e){
    emailInfo = document.getElementsByClassName('emailInfo');
    csvContent = \"data:text/csv;charset=utf-8,\";
    for(i=0;i<emailInfo.length;i++){
      csvContent += emailInfo[i].value + \"\\r\\n\";
    }
      var encodedUri = encodeURI(csvContent);
      var link = document.createElement(\"a\");
      link.setAttribute(\"href\", encodedUri);
      link.setAttribute(\"download\", \"customers_email.csv\");
      document.body.appendChild(link);
      link.click();
});

</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 216,  356 => 200,  312 => 157,  270 => 116,  244 => 92,  239 => 90,  197 => 50,  186 => 48,  181 => 47,  170 => 45,  166 => 44,  162 => 42,  151 => 37,  147 => 36,  142 => 33,  138 => 32,  129 => 26,  112 => 11,  102 => 10,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dexxx.html.twig' %}

{% block title %}Thé Tiotop{% endblock %}

{% block stylesheets %}
    {# <link rel=\"stylesheet\" href=\"{{ asset('dashboard.css') }}\"> #}
    
{% endblock %}

{% block body %}

<nav  id=\"topSideBar\">
  
</nav>


       


<section class=\"wrapper\" id=\"blockStatistique\">
  <div class=\"row row-cols-1 row-cols-md-1 g-4 mb-4²\" >
    <div class=\"col mb-4\">
      <div class=\"card bg-light\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Tickets restant</h5>
          <p class=\"card-text\">{{  ticketsdis|length - ticketwin|length }}  /100   Tickets </p>
        </div>
      </div>
    </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2 g-4 \">
      {% for ticket in tickets %}
      <div class=\"col\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">{{ ticket.title }}</h5>
            <p class=\"card-text\">tickets restant : {{ ticket.ticketsLeft }}</p>
          </div>
        </div>
      </div>
      {% endfor %}
    </div>

  {% for about in aboutUs %}
  <input type=\"hidden\" class=\"aboutUsInfo\" value=\"{{ about.aboutUs }}-{{ about.count }}\"/>
  {% endfor %}
  {% for city in cities %}
  <input type=\"hidden\" class=\"cityInfo\" value=\"{{ city.city }} {{ city.count }}\"/>
  {% endfor %}
 

  <div class=\"container\">
    
    <div class=\"row mt-4\">
    <div class=\"col-6\">
<div class=\"card border-primary \" style=\"max-width: 70rem;\">
      <div class=\"card-header\">Comment les participants ont appris l'existance du jeu :</div>
      <div class=\"card-body\">
        <div class=\"chart-container mt-3\" style=\"position: relative; height:60vh; width:28vw ;\">
          <canvas id=\"myChart\" width=\"50\" height=\"50\"></canvas>
        </div>
      </div>
</div>
</div>

 <div class=\"col-6\">
<div class=\"card border-primary\" style=\"max-width: 80rem;\">

     <div class=\"card-header\">Localisation des participants (5 maximum) :</div>
      <div class=\"card-body\">
        <div class=\"chart-container mt-4\" style=\"position: relative; height:60vh; width:28vw\">
          <canvas id=\"myChartBar\" width=\"50\" height=\"50\"></canvas>
        </div>
      </div>
    </div>
</div>
  </div>

</section>

<section class=\"wrapper\" id=\"blockNewsletter\" hidden=true>
<div class=\"app d-flex mt-5 flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\">
                <div class=\"card-group\">
                    <div class=\"text-white py-5 d-md-down-none card blockBackgroundNewsletter\">
                        <div class=\"text-center card-body blockBackgroundNewsletter\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <p> <b>{{ newsLetterCustomerNB }} </b> clients qui ce sont inscris à la newsletter.</p>
                                <p>Télécharger un fichier CSV contenant leurs email :</p>
                                <a href=\"{{path('Mails')}}\" class=\"btn btn-success\">Télécharger</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <br><br><br>
  <br><br><br><br>
  <br><br><br><br>
</section>



<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\"></script>
<script>

  var topSideBar = document.getElementById('topSideBar');
  baseUrl = topSideBar.dataset.baseurl;

  {# DONUTS #}
  titleAboutUs = [];
  countAboutUs = [];
  aboutUsInfo = document.getElementsByClassName('aboutUsInfo');
  for(i=0;i<aboutUsInfo.length;i++){
    data = aboutUsInfo[i].value;
    data = data.split(\"-\");
    titleAboutUs.push(data[0]);
    countAboutUs.push(parseInt(data[1]));
  }

  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: titleAboutUs,
          datasets: [{
              data: countAboutUs,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 206, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(255, 159, 64, 0.5)'
              ]
          }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    }
  });

{# BAR #}

  titleCity = [];
  countCity = [];
  cityInfo = document.getElementsByClassName('cityInfo');
  for(i=0;i<cityInfo.length;i++){
    data = cityInfo[i].value;
    data = data.split(\" \");
    
    titleCity.push(data[0]);
    countCity.push(parseInt(data[1]));
  }

  const ctxBar = document.getElementById('myChartBar').getContext('2d');
  const myChartBar = new Chart(ctxBar, {
     type: 'doughnut',
      data: {
          labels: titleCity,
          datasets: [{
              data: countCity,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 206, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(255, 159, 64, 0.5)'
              ]
          }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    }
  });

{# SWITCH DATA AND STATISTIQUE #}
\$(document).on('click','#statistiques',function(e){
    e.preventDefault();
    blockStatistique = document.getElementById('blockStatistique');
    blockNewsletter = document.getElementById('blockNewsletter');
    blockStatistique.hidden = false;
    blockNewsletter.hidden = true;
});
\$(document).on('click','#newsletter',function(e){
    e.preventDefault();
    blockStatistique = document.getElementById('blockStatistique');
    blockNewsletter = document.getElementById('blockNewsletter');
    blockStatistique.hidden = true;
    blockNewsletter.hidden = false;
});

{# GET EMAIL #}
\$(document).on('click','#sendNewsletter',function(e){
    emailInfo = document.getElementsByClassName('emailInfo');
    csvContent = \"data:text/csv;charset=utf-8,\";
    for(i=0;i<emailInfo.length;i++){
      csvContent += emailInfo[i].value + \"\\r\\n\";
    }
      var encodedUri = encodeURI(csvContent);
      var link = document.createElement(\"a\");
      link.setAttribute(\"href\", encodedUri);
      link.setAttribute(\"download\", \"customers_email.csv\");
      document.body.appendChild(link);
      link.click();
});

</script>

{% endblock %}", "admin/index.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\admin\\index.html.twig");
    }
}
