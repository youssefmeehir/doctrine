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

/* product/add.html.twig */
class __TwigTemplate_75855a7a50e7e95c28f85b4099be82304c7ed9ed011d916571c80738a89ecd1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<h2>Add products</h2>
";
        // line 16
        echo "\t";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'errors');
        echo "
\t<div class=\"d-flex flex-column justify-content-center w-50 mx-auto mt-2 mb-5\" >
\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products.save")]);
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Name\" class=\"required\">Name</label>
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Name", [], "any", false, false, false, 21), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Price\" class=\"required\">Price</label>
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Price", [], "any", false, false, false, 25), 'widget', ["money_pattern" => "DH"]);
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "TTC", [], "any", false, false, false, 28), 'widget', ["checked" => "true"]);
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Quantity\" class=\"required\">Quantity</label>
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Quantity", [], "any", false, false, false, 32), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Category\" class=\"required\">Category</label>
\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Category", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Description\" class=\"required\">Description</label>
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "Description", [], "any", false, false, false, 40), 'widget');
        echo "
\t\t</div>
\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "imageUrl", [], "any", false, false, false, 42), 'row');
        echo "
\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "save", [], "any", false, false, false, 43), 'row', ["label" => "Submit"]);
        echo "
\t\t";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  117 => 43,  113 => 42,  108 => 40,  101 => 36,  94 => 32,  87 => 28,  81 => 25,  74 => 21,  68 => 18,  62 => 16,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
\t<h2>Add products</h2>
{#\t{% if errors|length > 0 %}#}
{#\t<span class=\"alert alert-danger d-block\">#}
{#\t\t{% for error in errors %}#}
{#\t\t\t<span class=\"d-block\">#}
{#\t\t\t\t<span class=\"form-error-icon badge badge-danger text-uppercase\">Error</span> <span class=\"form-error-message\">#}
{#\t\t\t\t\t{{ error.message }}#}
{#\t\t\t\t</span>#}
{#\t\t\t</span>#}
{#\t\t{% endfor %}#}
{#\t</span>#}
{#\t{% endif %}#}
\t{{ form_errors(form) }}
\t<div class=\"d-flex flex-column justify-content-center w-50 mx-auto mt-2 mb-5\" >
\t\t{{ form_start(form, {'method': 'POST', 'action': path('products.save')}) }}
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Name\" class=\"required\">Name</label>
\t\t\t{{ form_widget(form.Name) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Price\" class=\"required\">Price</label>
\t\t\t{{ form_widget(form.Price, {'money_pattern': 'DH'}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_widget(form.TTC, {'checked': 'true'}) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Quantity\" class=\"required\">Quantity</label>
\t\t\t{{ form_widget(form.Quantity) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Category\" class=\"required\">Category</label>
\t\t\t{{ form_widget(form.Category) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"product_Description\" class=\"required\">Description</label>
\t\t\t{{ form_widget(form.Description) }}
\t\t</div>
\t\t{{ form_row(form.imageUrl) }}
\t\t{{ form_row(form.save, { 'label': 'Submit' }) }}
\t\t{{ form_end(form) }}
\t</div>
{% endblock %}", "product/add.html.twig", "/home/wwwroot/sf4/templates/product/add.html.twig");
    }
}
