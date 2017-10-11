<?php

/* core/themes/classy/templates/user/user.html.twig */
class __TwigTemplate_bfde7a0cabc910b92522cc47276ffe1610f10d921564b14f2e0ff5b247003eed extends Twig_Template
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
        $__internal_2c9e6a3fda6c9a2b88af026b64c839b144da5b52556b74db5e4b8135e463b2a9 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9e6a3fda6c9a2b88af026b64c839b144da5b52556b74db5e4b8135e463b2a9->enter($__internal_2c9e6a3fda6c9a2b88af026b64c839b144da5b52556b74db5e4b8135e463b2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/user/user.html.twig"));

        $tags = array("if" => 20);
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

        // line 19
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true));
        echo ">
  ";
        // line 20
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
        // line 23
        echo "</article>
";
        
        $__internal_2c9e6a3fda6c9a2b88af026b64c839b144da5b52556b74db5e4b8135e463b2a9->leave($__internal_2c9e6a3fda6c9a2b88af026b64c839b144da5b52556b74db5e4b8135e463b2a9_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  53 => 21,  51 => 20,  46 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/user/user.html.twig", "/var/www/d8-react/web/core/themes/classy/templates/user/user.html.twig");
    }
}
