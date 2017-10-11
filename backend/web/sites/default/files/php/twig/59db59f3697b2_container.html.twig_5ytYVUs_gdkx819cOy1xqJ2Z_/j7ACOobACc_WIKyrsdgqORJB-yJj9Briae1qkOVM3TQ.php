<?php

/* core/themes/classy/templates/form/container.html.twig */
class __TwigTemplate_421f7116dc6af52c7c8928df8f050a76e063ce912cc4da3fb4eb8435a87b6619 extends Twig_Template
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
        $__internal_4b116490e196d71accc4cf2bfb25f5e1d530bfe4dcb71eeca54d1b3102eb5d66 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b116490e196d71accc4cf2bfb25f5e1d530bfe4dcb71eeca54d1b3102eb5d66->enter($__internal_4b116490e196d71accc4cf2bfb25f5e1d530bfe4dcb71eeca54d1b3102eb5d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/container.html.twig"));

        $tags = array("set" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 23
        $context["classes"] = array(0 => ((        // line 24
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 25
(isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : ("")));
        // line 28
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_4b116490e196d71accc4cf2bfb25f5e1d530bfe4dcb71eeca54d1b3102eb5d66->leave($__internal_4b116490e196d71accc4cf2bfb25f5e1d530bfe4dcb71eeca54d1b3102eb5d66_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 28,  48 => 25,  47 => 24,  46 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/form/container.html.twig", "/var/www/d8-react/web/core/themes/classy/templates/form/container.html.twig");
    }
}
