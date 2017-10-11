<?php

/* core/themes/classy/templates/block/block.html.twig */
class __TwigTemplate_2b14f98ef4f9bb4b271ccc66dd0a76b118926783c53cb8003b4cd6f01807ce2a extends Twig_Template
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
        $__internal_a4a714fa14523694d73180354f86728676b3f9c04419cc15c96099a82d05bcec = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a714fa14523694d73180354f86728676b3f9c04419cc15c96099a82d05bcec->enter($__internal_a4a714fa14523694d73180354f86728676b3f9c04419cc15c96099a82d05bcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block.html.twig"));

        $tags = array("set" => 29, "if" => 37, "block" => 41);
        $filters = array("clean_class" => 31);
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

        // line 29
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 32
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))));
        // line 35
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 37
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 38
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 40
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "</div>
";
        
        $__internal_a4a714fa14523694d73180354f86728676b3f9c04419cc15c96099a82d05bcec->leave($__internal_a4a714fa14523694d73180354f86728676b3f9c04419cc15c96099a82d05bcec_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5e61882811b01d9259640201294ec8bdbb696e98f5ee5befa1cf86807349014 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e61882811b01d9259640201294ec8bdbb696e98f5ee5befa1cf86807349014->enter($__internal_b5e61882811b01d9259640201294ec8bdbb696e98f5ee5befa1cf86807349014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_b5e61882811b01d9259640201294ec8bdbb696e98f5ee5befa1cf86807349014->leave($__internal_b5e61882811b01d9259640201294ec8bdbb696e98f5ee5befa1cf86807349014_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  85 => 41,  77 => 44,  75 => 41,  70 => 40,  62 => 38,  60 => 37,  56 => 36,  51 => 35,  49 => 32,  48 => 31,  47 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/block/block.html.twig", "/var/www/d8-react/web/core/themes/classy/templates/block/block.html.twig");
    }
}
