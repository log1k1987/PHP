<?php

/* index.twig */
class __TwigTemplate_72fd85312920535ae10c254534e929047173a7fff26a59710b0a75d2f59b63ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<h1>Шаблон twig</h1>
Перебираю массив: <br>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "    * ";
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "<br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "    No users have been found.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<br>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  41 => 7,  33 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "C:\\php\\PHP_loftschool\\Twig\\index.twig");
    }
}
