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

/* admin/trajet.html.twig */
class __TwigTemplate_728d37a407be3252f862d4e1723e81c9d602fb9ace762df68e14939a327279f6 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/trajet.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 3
            echo "            <label>Trajet numéro ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "id", []), "html", null, true);
            echo "</label>
                ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trajet"], "reservations", []));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 5
                echo "            <select>
                    <option>Numéro de client ";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", []), "id", []), "html", null, true);
                echo "</option>
                    <option>nombre de passager ";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nbPassager", []), "html", null, true);
                echo "</option>
                    <option>Numéro de telephone ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "user", []), "telportable", []), "html", null, true);
                echo "</option>
                    <option>horaire de depart ";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "horraire", []), "html", null, true);
                echo "</option>
                    <option>Point de prise ";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "pointDePrise", []), "html", null, true);
                echo "</option>
                    <option>Nombre identifiant de la reservation ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", []), "html", null, true);
                echo "</option>
                    <option>date du jour de la reservation ";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateReservation", []), "d/m/Y"), "html", null, true);
                echo "</option>
                    <option>date de depart ";
                // line 13
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateDepart", []), "d/m/Y"), "html", null, true);
                echo "</option>
            </select>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/trajet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 16,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  89 => 8,  85 => 7,  81 => 6,  78 => 5,  74 => 4,  69 => 3,  64 => 2,  55 => 1,  44 => 19,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    {% for trajet in trajets %}
            <label>Trajet numéro {{trajet.id}}</label>
                {% for reservation in trajet.reservations %}
            <select>
                    <option>Numéro de client {{reservation.user.id}}</option>
                    <option>nombre de passager {{reservation.nbPassager}}</option>
                    <option>Numéro de telephone {{reservation.user.telportable}}</option>
                    <option>horaire de depart {{reservation.horraire}}</option>
                    <option>Point de prise {{reservation.pointDePrise}}</option>
                    <option>Nombre identifiant de la reservation {{reservation.id}}</option>
                    <option>date du jour de la reservation {{reservation.dateReservation|date(\"d/m/Y\")}}</option>
                    <option>date de depart {{reservation.dateDepart|date(\"d/m/Y\")}}</option>
            </select>
                {% endfor %}
            <br>
    {% endfor %}
{% endblock %}

{# id/client/nbPassager/tel/vol/heure/pdp/commentaire/info, prix,est payé, opt annulation, a remboursé, date, detail du prix/ #}", "admin/trajet.html.twig", "/home/utilisateur/alsace/alsace-navette/alsace-navette/templates/admin/trajet.html.twig");
    }
}
