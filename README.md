##Apontamentos sobre POO com PHP

###Construtores e destrutores

São métodos especiais ou 'mágicos'. O Construtor ( __construct ) é sempre chamado quando
ocorre a instanciação de um objeto, a partir de uma classe(modelo de objeto).
No construtor é possível inicializar variáveis do objeto. Ex:

```

<?php>
    class Carro extends Veiculo {
            public $teto_solar = true;

            function __construct($placa, $cor) {
                $this->placa = $placa;
                $this->cor = $cor;
            }


```

O Destrutor ( __desctruct ) 

É invocado sempre quando o script onde está a classe em questão termina de ser executado.
Nele é possível liberar referências. Após ser executado, o GarbageCollector do PHP irá liberar a memória
dos objetos correspondentes assim que possível.

Ex:

```

class Foo {
    private $bar = array();

    public function __construct() {
         $this->bar = range(1, 1000000);//Gera um grande vetor
    }

    public function __destruct() {
         $this->bar = null;//libera variável
    }
}

```

```

class Conexao {
    private $link = null;
    public function __construct() { //Auto-conecta
         $this->link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
    }

    public function __destruct() {
         mysqli_close($this->link);//desconecta
         $this->link = null;
    }
}

```

###getter e setters
