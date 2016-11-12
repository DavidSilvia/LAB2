<?php
$preguntas = simplexml_load_file('preguntas.xml');
echo '<table border=1 width="700" align="center"> <tr><th>Pregunta</th><th>Respuesta</th><th>Complejidad</th><th>Tema</th></tr>';
foreach ($preguntas->xpath('//assessmentItem') as $pregunta)
{
	$p=$pregunta->itemBody;
	$value=$pregunta->correctResponse;

	echo utf8_decode("<tr><td>$p->p</td>");
	echo utf8_decode("<td>$value->value</td>");
	echo utf8_decode("<td>$pregunta[complexity]</td>");
	echo utf8_decode("<td>$pregunta[subject]</td></tr>");
}
?>