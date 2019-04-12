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

/* home/home.html.twig */
class __TwigTemplate_a591e687a1012497f5c75b277a03ec36621c3b1518d609916faf8df237436ac1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<!-- <script> alert(\" En poursuivant votre navigation, vous acceptez l‘utilisation de cookies pour activer  certaines fonctionnalités et améliorer nos offres. Pour en savoir plus, consultez notre politique de protection de données personnelles.\"); </script> -->

<div class=\"position-relative overflow-hidden text-center\">
    <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
        <img src=\"images/logo-alsace-navette.png\" alt=\"\">
        <h1 class=\"display-4 font-weight-normal\">Alsace Navette</h1>
        <p class=\"lead font-weight-normal\">Laissez-vous conduire en toute sécurité.</p>
    </div>
</div>

<p class=\"text-center\">ICI ON A UN TRUC QUI EXPLIQUE CE QUE FDAIS LENTREPRISE</p>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/shopping-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  102 => 15,  91 => 12,  82 => 11,  67 => 4,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"generator\" content=\"Jekyll v3.8.5\">

{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"stylesheets/base.css\">
{% endblock %}

{% block body %}

<!-- <script> alert(\" En poursuivant votre navigation, vous acceptez l‘utilisation de cookies pour activer  certaines fonctionnalités et améliorer nos offres. Pour en savoir plus, consultez notre politique de protection de données personnelles.\"); </script> -->

<div class=\"position-relative overflow-hidden text-center\">
    <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
        <img src=\"images/logo-alsace-navette.png\" alt=\"\">
        <h1 class=\"display-4 font-weight-normal\">Alsace Navette</h1>
        <p class=\"lead font-weight-normal\">Laissez-vous conduire en toute sécurité.</p>
    </div>
</div>

<p class=\"text-center\">ICI ON A UN TRUC QUI EXPLIQUE CE QUE FDAIS LENTREPRISE</p>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/shopping-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>

<div class=\"d-md-flex flex-md-equal w-90 my-md-3 pl-md-3\">
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
    <div class=\"shadow-lg  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
        <div class=\"my-3 py-3\">
            <img class=\"img-top-body\" src=\"images/airport-logo.png\">
            <p class=\"lead\" style=\"color:black;\">Petit texte.</p>
            <a href=\"/aeroport\" class=\"btn btn-yellow\">Y Accéder</a>
        </div>
    </div>
</div>


{% endblock %}", "home/home.html.twig", "/home/utilisateur/alsace/alsace-navette/alsace-navette/templates/home/home.html.twig");
    }
}
