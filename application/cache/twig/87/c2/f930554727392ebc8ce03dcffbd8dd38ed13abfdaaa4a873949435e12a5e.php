<?php

/* sidebar-menu.html */
class __TwigTemplate_87c2f930554727392ebc8ce03dcffbd8dd38ed13abfdaaa4a873949435e12a5e extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_menu"]) ? $context["list_menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menus"]) {
            // line 3
            echo "    <ul class=\"widget widget-menu unstyled\">
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 5
                echo "        <li>";
                echo (isset($context["menu"]) ? $context["menu"] : null);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "sidebar-menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  51 => 10,  47 => 9,  43 => 8,  35 => 6,  27 => 4,  19 => 1,  234 => 102,  229 => 81,  211 => 103,  208 => 102,  206 => 101,  192 => 93,  179 => 82,  177 => 81,  174 => 80,  168 => 78,  166 => 77,  158 => 71,  156 => 70,  136 => 53,  129 => 51,  123 => 49,  121 => 48,  112 => 45,  110 => 44,  107 => 43,  101 => 41,  99 => 40,  92 => 36,  86 => 33,  83 => 32,  77 => 30,  75 => 29,  72 => 28,  60 => 20,  52 => 17,  48 => 16,  37 => 7,  34 => 6,  32 => 5,  23 => 3,  394 => 201,  382 => 191,  373 => 188,  370 => 187,  366 => 186,  356 => 178,  344 => 174,  340 => 172,  336 => 171,  328 => 165,  316 => 161,  312 => 159,  308 => 158,  300 => 152,  292 => 147,  286 => 143,  283 => 142,  280 => 141,  278 => 140,  275 => 139,  262 => 128,  253 => 125,  250 => 124,  246 => 123,  238 => 117,  230 => 112,  224 => 6,  221 => 107,  218 => 4,  216 => 105,  213 => 104,  205 => 99,  198 => 96,  194 => 94,  181 => 83,  172 => 80,  169 => 79,  165 => 78,  152 => 68,  148 => 67,  142 => 64,  138 => 63,  132 => 52,  128 => 59,  122 => 56,  118 => 47,  114 => 53,  102 => 44,  91 => 36,  80 => 28,  73 => 23,  70 => 27,  68 => 21,  62 => 17,  56 => 15,  54 => 14,  50 => 13,  45 => 11,  39 => 7,  31 => 4,  28 => 4,);
    }
}
