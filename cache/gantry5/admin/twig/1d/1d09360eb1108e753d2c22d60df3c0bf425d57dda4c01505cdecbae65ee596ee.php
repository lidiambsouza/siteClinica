<?php

/* forms/fields/gantry/particles.html.twig */
class __TwigTemplate_0baedf92f2da4d8667e570d89b80fabfe3ecdb8cf27c039b1bf3b35c38fe8cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . (((isset($context["layout"]) || array_key_exists("layout", $context))) ? (_twig_default_filter(($context["layout"] ?? null), "field")) : ("field"))) . ".html.twig"), "forms/fields/gantry/particles.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["outline"] = (($this->getAttribute(($context["field"] ?? null), "outline", array())) ? ($this->getAttribute(($context["field"] ?? null), "outline", array())) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "outline_field", array())))));
        // line 4
        $context["particles"] = (($this->getAttribute(($context["field"] ?? null), "particles", array())) ? ($this->getAttribute(($context["field"] ?? null), "particles", array())) : (((($context["outline"] ?? null)) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", array()), "getParticleInstances", array(0 => ($context["outline"] ?? null), 1 => $this->getAttribute(($context["field"] ?? null), "particle", array()), 2 => false), "method")) : (""))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("label", $context, $blocks);
        echo "
    <div><span class=\"particle-label-subtype badge\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "particle", array()), "html", null, true);
        echo "</span></div>
";
    }

    // line 11
    public function block_input($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 13
        if (($context["particles"] ?? null)) {
            // line 14
            echo "            <div class=\"input-group\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["particles"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["particle"]) {
                // line 16
                echo "                    <label for=\"";
                echo twig_escape_filter($this->env, (((($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", array()), (($context["scope"] ?? null) . ($context["name"] ?? null)))) : ((($context["scope"] ?? null) . ($context["name"] ?? null)))) . "-") . $context["id"]), "html", null, true);
                echo "\">
                        <input
                                id=\"";
                // line 18
                echo twig_escape_filter($this->env, (((($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", array()), (($context["scope"] ?? null) . ($context["name"] ?? null)))) : ((($context["scope"] ?? null) . ($context["name"] ?? null)))) . "-") . $context["id"]), "html", null, true);
                echo "\"
                                type=\"radio\"
                                name=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["name"] ?? null))), "html", null, true);
                echo "\"
                                value=\"";
                // line 21
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"
                                required=\"required\"
                                ";
                // line 23
                if ((($context["value"] ?? null) == $context["id"])) {
                    echo "checked=\"checked\"";
                }
                // line 24
                echo "                        />
                        <span>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["particle"], "title", array()), "html", null, true);
                echo "</span>
                        <i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
                    </label>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['particle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </div>
        ";
        } else {
            // line 31
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_NO_INHERITANCE_SELECT_OUTLINE"), "html", null, true);
            echo "
        ";
        }
        // line 33
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/particles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  105 => 31,  101 => 29,  91 => 25,  88 => 24,  84 => 23,  79 => 21,  75 => 20,  70 => 18,  64 => 16,  60 => 15,  57 => 14,  55 => 13,  50 => 12,  47 => 11,  41 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/gantry/particles.html.twig", "C:\\xampp\\htdocs\\centromedico\\administrator\\components\\com_gantry5\\templates\\forms\\fields\\gantry\\particles.html.twig");
    }
}
