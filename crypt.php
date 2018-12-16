<?PHP
// senha em texto puro a ser criptografada
$senhaTextoPuro = 'senha123';

// criptografa o texto dado acima
$senha = crypt($senhaTextoPuro, base64_encode($senhaTextoPuro));

// exibe a senha codificada
echo $senha;
echo '<br/>';
echo $senhaTextoPuro;
echo '<br/>';

$hash = $senha;
if (crypt($senhaTextoPuro, $hash) === $hash) {
	echo 'Senha OK!';
} else {
	echo 'Senha incorreta!';
}