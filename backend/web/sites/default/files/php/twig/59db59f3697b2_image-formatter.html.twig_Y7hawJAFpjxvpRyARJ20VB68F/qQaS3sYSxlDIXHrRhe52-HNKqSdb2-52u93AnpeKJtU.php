<?php

/* core/themes/classy/templates/field/image-formatter.html.twig */
class __TwigTemplate_b990021d9c53bb62452fd087f46528a41d0dcfebc30a9afe45ba263b28f82647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c05ff76b5404afa13dd1a18d5c0e8611afff85c30b8d292754bb2b9049a2e311 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05ff76b5404afa13dd1a18d5c0e8611afff85c30b8d292754bb2b9049a2e311->enter($__internal_c05ff76b5404afa13dd1a18d5c0e8611afff85c30b8d292754bb2b9049a2e311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/image-formatter.html.twig"));

        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 16
            echo "  <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
            echo "</a>
";
        } else {
            // line 18
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
            echo "
";
        }
        
        $__internal_c05ff76b5404afa13dd1a18d5c0e8611afff85c30b8d292754bb2b9049a2e311->leave($__internal_c05ff76b5404afa13dd1a18d5c0e8611afff85c30b8d292754bb2b9049a2e311_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  48 => 16,  46 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/field/image-formatter.html.twig", "/var/www/d8-react/web/core/themes/classy/templates/field/image-formatter.html.twig");
    }
}
