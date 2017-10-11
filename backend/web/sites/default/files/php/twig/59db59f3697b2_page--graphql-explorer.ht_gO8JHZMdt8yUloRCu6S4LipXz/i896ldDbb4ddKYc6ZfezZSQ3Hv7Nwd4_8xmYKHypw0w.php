<?php

/* modules/contrib/graphql/modules/graphql_graphiql/templates/page--graphql-explorer.html.twig */
class __TwigTemplate_cad67b91c4f208bd07caee2b86720afa1b3cba6891f457b2d98698fdf7fb34b6 extends Twig_Template
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
        $__internal_097df89e8498bbb071d1e58784d1c531f28de4fc572d60741d4fb047aa8b14ce = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_097df89e8498bbb071d1e58784d1c531f28de4fc572d60741d4fb047aa8b14ce->enter($__internal_097df89e8498bbb071d1e58784d1c531f28de4fc572d60741d4fb047aa8b14ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/graphql/modules/graphql_graphiql/templates/page--graphql-explorer.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div id=\"graphql-explorer\"></div>
";
        
        $__internal_097df89e8498bbb071d1e58784d1c531f28de4fc572d60741d4fb047aa8b14ce->leave($__internal_097df89e8498bbb071d1e58784d1c531f28de4fc572d60741d4fb047aa8b14ce_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/graphql/modules/graphql_graphiql/templates/page--graphql-explorer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/graphql/modules/graphql_graphiql/templates/page--graphql-explorer.html.twig", "/var/www/d8-react/web/modules/contrib/graphql/modules/graphql_graphiql/templates/page--graphql-explorer.html.twig");
    }
}
