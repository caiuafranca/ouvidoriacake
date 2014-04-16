<?
echo $this -> Form -> create('Post', array('action' => 'busca'));
echo $this -> Form -> input('Post.numero_protocolo', array('type' => 'text'));
echo $this -> Form -> end('Buscar');
echo "<br />";

if (!empty($busca)) {
	echo "<strong>Numero de Protocolo: </strong>";
	echo h($busca[0]['Protocolo']['numero_protocolo']) . "<br />";
	echo "<strong>Assunto: </strong>";
	echo h($busca[0]['Post']['assunto']) . " <br />";
	echo "<strong>Mensagem: </strong>";
	echo h($busca[0]['Post']['mensagem']) . "<br />";
	echo "<strong>Situação: </strong>";
	echo h($busca[0]['Post']['status']) . "<br />";
	echo "<strong>Data Abertura: </strong>";
	echo h($busca[0]['Post']['data_menssagem']) . "<br /> <br />";
} else {
	echo "<br /><p> <strong>É preciso inserir um Número do Protocolo<strong></p> <br />";
}
?>
