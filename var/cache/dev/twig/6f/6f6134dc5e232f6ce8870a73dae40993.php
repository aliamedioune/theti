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

/* home/mentions.html.twig */
class __TwigTemplate_7cf4b4884a4a1f470d48942b15ea8a65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/mentions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<br>
 <div class=\"container\" >
<center><h2>Conditions générales de vente</h2></center>
<br><br><br><br>
<h2>1 - Édition du site </h2>

<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet http://dsp-archiwebf21-aa.fr/ l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:

Propriétaire du site : ThéTipTop - Contact : marc.verriere.pro@gmail.com 0662822726 - Adresse : 9 place lachambeaudie.

Identification de l'entreprise : SAS ThéTipTop au capital social de 1500000€ - SIREN : 82390047800011 - RCS ou RM : - Adresse postale : 9 place lachambeaudie

Directeur de la publication : FuriousDuck - Contact : ThéTipTop.

Hébergeur : AutreGoocle Cloud Platform https://console.cloud.google.com/?hl=fr

Délégué à la protection des données : Marc Verriere - marc.verriere.pro@gmail.com </p>

<br>
<h2>2 - Propriété intellectuelle et contrefaçons.</h2>

<p>ThéTipTop est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.

Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de ThéTipTop.

Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.

</p>
<br>
<h2>3 - Limitations de responsabilité.</h2>
<p>
ThéTipTop ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://dsp-archiwebf21-aa.fr/.

ThéTipTop décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur http://dsp-archiwebf21-aa.fr/.

ThéTipTop s’engage à sécuriser au mieux le site http://dsp-archiwebf21-aa.fr/, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.

Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. ThéTipTop se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.

Le cas échéant, ThéTipTop se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).
</p>
<br>
<h2>4 - CNIL et gestion des données personnelles.</h2>
<p>
Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site http://dsp-archiwebf21-aa.fr/ dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : Marc Verriere - marc.verriere.pro@gmail.com.

Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...)
</p>
<br>
<h2>5 - Liens hypertextes et cookies </h2>
<p>
Le site http://dsp-archiwebf21-aa.fr/ contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers http://dsp-archiwebf21-aa.fr/.

La navigation sur le site http://dsp-archiwebf21-aa.fr/ est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.

Un \"cookie\" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.

Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.

Les cookies sont enregistrés pour une durée maximale de 6 mois.

Pour plus d'informations sur la façon dont nous faisons usage des cookies.

</p>
<br>
<h2>6 - Droit applicable et attribution de juridiction.</h2>
<p>
Tout litige en relation avec l’utilisation du site http://dsp-archiwebf21-aa.fr/ est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.
</p>
</div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 


{% block body %}
<br>
 <div class=\"container\" >
<center><h2>Conditions générales de vente</h2></center>
<br><br><br><br>
<h2>1 - Édition du site </h2>

<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet http://dsp-archiwebf21-aa.fr/ l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:

Propriétaire du site : ThéTipTop - Contact : marc.verriere.pro@gmail.com 0662822726 - Adresse : 9 place lachambeaudie.

Identification de l'entreprise : SAS ThéTipTop au capital social de 1500000€ - SIREN : 82390047800011 - RCS ou RM : - Adresse postale : 9 place lachambeaudie

Directeur de la publication : FuriousDuck - Contact : ThéTipTop.

Hébergeur : AutreGoocle Cloud Platform https://console.cloud.google.com/?hl=fr

Délégué à la protection des données : Marc Verriere - marc.verriere.pro@gmail.com </p>

<br>
<h2>2 - Propriété intellectuelle et contrefaçons.</h2>

<p>ThéTipTop est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.

Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de ThéTipTop.

Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.

</p>
<br>
<h2>3 - Limitations de responsabilité.</h2>
<p>
ThéTipTop ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://dsp-archiwebf21-aa.fr/.

ThéTipTop décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur http://dsp-archiwebf21-aa.fr/.

ThéTipTop s’engage à sécuriser au mieux le site http://dsp-archiwebf21-aa.fr/, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.

Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. ThéTipTop se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.

Le cas échéant, ThéTipTop se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).
</p>
<br>
<h2>4 - CNIL et gestion des données personnelles.</h2>
<p>
Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site http://dsp-archiwebf21-aa.fr/ dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : Marc Verriere - marc.verriere.pro@gmail.com.

Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...)
</p>
<br>
<h2>5 - Liens hypertextes et cookies </h2>
<p>
Le site http://dsp-archiwebf21-aa.fr/ contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers http://dsp-archiwebf21-aa.fr/.

La navigation sur le site http://dsp-archiwebf21-aa.fr/ est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.

Un \"cookie\" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.

Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.

Les cookies sont enregistrés pour une durée maximale de 6 mois.

Pour plus d'informations sur la façon dont nous faisons usage des cookies.

</p>
<br>
<h2>6 - Droit applicable et attribution de juridiction.</h2>
<p>
Tout litige en relation avec l’utilisation du site http://dsp-archiwebf21-aa.fr/ est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.
</p>
</div>
 {% endblock %}", "home/mentions.html.twig", "C:\\Users\\ASUS ROG STRIX\\Desktop\\bac+5\\apprendre\\Nouveau dossier\\Tiptop101123\\Tiptop\\Tiptop\\templates\\home\\mentions.html.twig");
    }
}
