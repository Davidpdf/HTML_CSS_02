<?php require __DIR__ . "/_header.php"; ?>

<style>
    table, tr, th, td {
        border: 1px solid black;
    }

</style>

<h2>Tabelas</h2>

<p><strong>table</strong> &rarr; Cria uma tabela.</p>
<p><strong>tr</strong> &rarr; table row &rarr; Cria uma linha na tabela.</p>
<p><strong>th</strong> &rarr; table header &rarr; Cria uma célula de cabeçalho dentro da linha.</p>
<p><strong>td</strong> &rarr; table data &rarr; Cria uma célula de dados dentro da linha.</p>
<p><strong>colspan</strong> &rarr; Expande coluna &rarr; Esse atributo espande uma célula na mesma linha.</p>
<p><strong>rowspan</strong> &rarr; Expande linha &rarr; Esse atributo espande uma célula para a linha seguinte.</p>

<table style="border: 1px solid black">

    <tr>
        <th style="background: gray">Nome</th>
        <th style="background: gray">E-mail</th>
        <th style="background: gray">Nascimento</th>
    </tr>

    <tr>
        <td>Joca da Silva</td>
        <td>joca@silva.com</td>
        <td>10/11/1980</td>
    </tr>

    <tr>
        <td>Setembrino Trocatapas</td>
        <td>set@brino.com</td>
        <td>23/12/1979</td>
    </tr>

    <tr>
        <td>Marineuza Siriliano</td>
        <td>mari@neuza.com</td>
        <td>02/02/2000</td>
    </tr>

    <tr>
        <td>Edilineuza Carmisona</td>
        <td>edir@carmo.com</td>
        <td>10/04/1971</td>
    </tr>

</table>

<h3>Outra tabela</h3>

<table>

    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Seção</th>
        <th>Subseção</th>
    </tr>

    <tr>
        <td>Bicicleta</td>
        <td>R$1000,00</td>
        <td colspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Bola</td>
        <td>R$20,00</td>
        <td>Esportes</td>
        <td>Bolas</td>
    </tr>

    <tr>
        <td>Patins</td>
        <td>R$500,00</td>
        <td colspan="2" rowspan="2">Veículos</td>
    </tr>

    <tr>
        <td>Patinete</td>
        <td>R$700,00</td>
    </tr>

</table>

<!--
    Exercício: Crie mais uma tabela simples representando dados em 4 colunas e 6 linhas.
-->

<table>

<h4>Exercício_01</h4>

<tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
</tr>

<tr>

<td>a</td>
<td>a</td>
<td>a</td>
<td>a</td>

</tr>

<tr>

<td>b</td>
<td>b</td>
<td>b</td>
<td>b</td>

</tr>

<tr>

<td>c</td>
<td>c</td>
<td>c</td>
<td>c</td>

</tr>

<tr>

<td>d</td>
<td>d</td>
<td>d</td>
<td>d</td>

</tr>

<tr>

<td>e</td>
<td>e</td>
<td>e</td>
<td>e</td>

</tr>

<tr>

<td>f</td>
<td>f</td>
<td>f</td>
<td>f</td>

</tr>
</table>

<h5>Exercício 2</h5>

<table>

<tr>

<th>Utensílios</th>
<th>Comidas</th>
<th>Bebidas</th>

</tr>

<tr>

<td>Faca</td>
<td>Pão</td>
<td>Suco</td>

</tr>

<tr>

<td>Copos</td>
<td>Presunto</td>
<td>Leite</td>

</tr>

<tr>

<td>Pratos</td>
<td>Manteiga</td>
<td>Nescau</td>

</tr>

</table>


<?php require __DIR__ . "/_footer.php"; ?>