<?php

/* gallery.php */
class __TwigTemplate_334739c7206914ede336c6872ddbefa8ed1f61b282dd6742feedf5bb31403d32 extends Twig_Template
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
        echo "<div class=\"container\">
\t<div class=\"row\">

\t\t  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 5
            echo "
\t\t \t";
            // line 6
            echo $context["image"];
            echo "
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "gallery.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/* 	<div class="row">*/
/* */
/* 		  {% for image in images %}*/
/* */
/* 		 	{{ image }}*/
/* 		  {% endfor %}*/
/* 	</div>*/
/* </div>*/
