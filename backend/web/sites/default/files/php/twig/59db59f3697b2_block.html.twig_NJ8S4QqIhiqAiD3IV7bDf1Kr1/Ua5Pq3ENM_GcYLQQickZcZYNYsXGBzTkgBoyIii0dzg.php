<?php

/* block.html.twig */
class __TwigTemplate_427ceffeef7118469d7753956e2b0d458f0c2f44d3b385e4ec36128cfc86801f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e7edbeebb4f36da24bec650181949b3819c5fb324b4c5a5a7c42bd32ac10713 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7edbeebb4f36da24bec650181949b3819c5fb324b4c5a5a7c42bd32ac10713->enter($__internal_1e7edbeebb4f36da24bec650181949b3819c5fb324b4c5a5a7c42bd32ac10713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "block.html.twig"));

        $tags = array("set" => 33, "if" => 41, "block" => 45);
        $filters = array("clean_class" => 35);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 33
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 35
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 36
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))));
        // line 39
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 41
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 42
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 44
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "</div>
";
        
        $__internal_1e7edbeebb4f36da24bec650181949b3819c5fb324b4c5a5a7c42bd32ac10713->leave($__internal_1e7edbeebb4f36da24bec650181949b3819c5fb324b4c5a5a7c42bd32ac10713_prof);

    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        $__internal_e17970e5a1d4996b03d287727f8ab16c9785b9061f58a2683ccb4022ed28eaff = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17970e5a1d4996b03d287727f8ab16c9785b9061f58a2683ccb4022ed28eaff->enter($__internal_e17970e5a1d4996b03d287727f8ab16c9785b9061f58a2683ccb4022ed28eaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 46
        echo "    <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
      ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    </div>
  ";
        
        $__internal_e17970e5a1d4996b03d287727f8ab16c9785b9061f58a2683ccb4022ed28eaff->leave($__internal_e17970e5a1d4996b03d287727f8ab16c9785b9061f58a2683ccb4022ed28eaff_prof);

    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 47,  91 => 46,  85 => 45,  77 => 50,  75 => 45,  70 => 44,  62 => 42,  60 => 41,  56 => 40,  51 => 39,  49 => 36,  48 => 35,  47 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "block.html.twig", "core/themes/bartik/templates/block.html.twig");
    }
}
