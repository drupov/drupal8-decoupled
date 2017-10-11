<?php

/* core/themes/classy/templates/form/form-element.html.twig */
class __TwigTemplate_c1b0dc1db824b50c20b0a69e9a06081882039643c0740c44451d14fd9e353519 extends Twig_Template
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
        $__internal_7c8fa641e681d9cf68be57eaa52945b28bda7e86f4b609f8e46ff96ef4bb0f77 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8fa641e681d9cf68be57eaa52945b28bda7e86f4b609f8e46ff96ef4bb0f77->enter($__internal_7c8fa641e681d9cf68be57eaa52945b28bda7e86f4b609f8e46ff96ef4bb0f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/form-element.html.twig"));

        $tags = array("set" => 48, "if" => 67);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 48
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
(isset($context["type"]) ? $context["type"] : null))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
(isset($context["type"]) ? $context["type"] : null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 53
(isset($context["name"]) ? $context["name"] : null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
(isset($context["name"]) ? $context["name"] : null))), 6 => ((!twig_in_filter(        // line 55
(isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((        // line 56
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 57
(isset($context["errors"]) ? $context["errors"] : null)) ? ("form-item--error") : ("")));
        // line 61
        $context["description_classes"] = array(0 => "description", 1 => (((        // line 63
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 66
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 67
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 68
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 70
        echo "  ";
        if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
            // line 71
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
            echo "</span>
  ";
        }
        // line 73
        echo "  ";
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 74
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 78
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        // line 79
        if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
            // line 80
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
            echo "</span>
  ";
        }
        // line 82
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 85
        echo "  ";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 86
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "</strong>
    </div>
  ";
        }
        // line 90
        echo "  ";
        if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 91
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
            echo ">
      ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 95
        echo "</div>
";
        
        $__internal_7c8fa641e681d9cf68be57eaa52945b28bda7e86f4b609f8e46ff96ef4bb0f77->leave($__internal_7c8fa641e681d9cf68be57eaa52945b28bda7e86f4b609f8e46ff96ef4bb0f77_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 95,  136 => 92,  131 => 91,  128 => 90,  122 => 87,  119 => 86,  116 => 85,  110 => 83,  107 => 82,  101 => 80,  99 => 79,  94 => 78,  88 => 75,  83 => 74,  80 => 73,  74 => 71,  71 => 70,  65 => 68,  63 => 67,  58 => 66,  56 => 63,  55 => 61,  53 => 57,  52 => 56,  51 => 55,  50 => 54,  49 => 53,  48 => 52,  47 => 51,  46 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/form/form-element.html.twig", "/var/www/d8-react/web/core/themes/classy/templates/form/form-element.html.twig");
    }
}
