<?php

class Computador_final //Criação da Classe do computador que vai ser montado, onde armazane todas suas peças
{
    public $placa_mae;
    public $processador;
    public $unidade_armazenamento;
    public $placa_video;
    public $gabinete;
    public $fonte;
    public $memoria_ram;
    public $cooler; //Criação dos atributos(hardware), onde vai ser armazenados os valores(modelos) para escolher
    private $valores = array( //atributo de valor, onde define o preço de cada elemento(peça escolhida)
        1 => 1500,  //valor escolhido de 1 a 10, dependendo do elemento escolhido do atributo (modelo de um hardware)
        2 => 990,
        3 => 480,
        4 => 570,
        5 => 510,
        6 => 7330,
        7 => 860,
        8 => 920,
        9 => 230,
        10 => 730,
    );

    //função que pega o valor de cada peça escolhida, e junta na variavel $valorTotal, para dar o preço final do computador
    public function calcularValorEscolhido($PlacaMaeEscolhida, $ProcessadorEscolhido, $UnidadeArmazenamentoEscolhido, $PlacaVideoEscolhida, $GabineteEscolhido, $fonteEscolhida, $memoriaRamEscolhida, $coolerEscolhido)
    {
        $valorTotal = 0;

        /* Verifica se a opção de placa mãe ou outro hardware escolhida está presente no array de valores e, se
         estiver, adiciona o valor da opção escolhida ao valor total do computador */
        if (isset($this->valores[$PlacaMaeEscolhida])) {
            $valorTotal += $this->valores[$PlacaMaeEscolhida];
        }
        if (isset($this->valores[$ProcessadorEscolhido])) {
            $valorTotal += $this->valores[$ProcessadorEscolhido];
        }
        if (isset($this->valores[$UnidadeArmazenamentoEscolhido])) {
            $valorTotal += $this->valores[$UnidadeArmazenamentoEscolhido];
        }
        if (isset($this->valores[$PlacaVideoEscolhida])) {
            $valorTotal += $this->valores[$PlacaVideoEscolhida];
        }
        if (isset($this->valores[$PlacaVideoEscolhida])) {
            $valorTotal += $this->valores[$PlacaVideoEscolhida];
        }
        if (isset($this->valores[$GabineteEscolhido])) {
            $valorTotal += $this->valores[$GabineteEscolhido];
        }
        if (isset($this->valores[$fonteEscolhida])) {
            $valorTotal += $this->valores[$fonteEscolhida];
        }
        if (isset($this->valores[$memoriaRamEscolhida])) {
            $valorTotal += $this->valores[$memoriaRamEscolhida];
        }
        if (isset($this->valores[$coolerEscolhido])) {
            $valorTotal += $this->valores[$coolerEscolhido];
        }
        return $valorTotal; //retorna para a variavel $valorTotal o valor de todas as peças escolhidas
    }
}

$pecas_computador = new Computador_final();//definição do metodo da classe

$pecas_computador->placa_mae = array(//array onde contem os valores associados ao atributo da classe(modelo da peça do computador)
    1 => "Asus Prime B450M Gaming/BR",
    2 => "MSI B450 Tomahawk Max",
    3 => "Gigabyte B550 Aorus Pro AC",//caso selecionado esse valor, o preço e o modelo adicionado seria 480 e a string do valor
    4 => "Asrock B550M Steel Legend",
    5 => "Asus Rog Strix X570-E Gaming",
    6 => "MSI MPG B550 Gaming Carbon WiFi",
    7 => "Gigabyte X570 Aorus Ultra",
    8 => "Asrock Z590 Taichi",
    9 => "Asus Prime X570-Pro",
    10 => "MSI MPG Z490 Gaming Edge WiFi",
);
$pecas_computador->processador = array(
    1 => "Intel Core i9-11900K",
    2 => "AMD Ryzen 9 5950X",
    3 => "Intel Core i7-11700K",
    4 => "AMD Ryzen 7 5800X",
    5 => "Intel Core i5-11600K",
    6 => "AMD Ryzen 5 5600X",
    7 => "Intel Core i3-11100F",
    8 => "AMD Ryzen 3 3300X",
    9 => "Intel Pentium Gold G6400",
    10 => "AMD Athlon 3000G"
);
$pecas_computador->unidade_armazenamento = array(
    1 => "Samsung 970 EVO Plus 1TB NVMe M.2",
    2 => "Crucial MX500 2TB SATA III 2.5",
    3 => "Western Digital Black SN850 500GB NVMe M.2",
    4 => "Kingston A2000 1TB NVMe M.2",
    5 => "Seagate Barracuda 4TB SATA III 3.5",
    6 => "Corsair MP600 Core 1TB NVMe M.2",
    7 => "ADATA XPG SX8200 Pro 2TB NVMe M.2",
    8 => "Toshiba Canvio Flex 2TB USB-C 3.2",
    9 => "Intel Optane 905P 1.5TB U.2",
    10 => "SanDisk Extreme Pro 2TB NVMe M.2"
);

$pecas_computador->placa_video = array(
    1 => "Nvidia GeForce RTX 3090",
    2 => "AMD Radeon RX 6900 XT",
    3 => "Nvidia GeForce RTX 3080 Ti",
    4 => "AMD Radeon RX 6800 XT",
    5 => "Nvidia GeForce RTX 3070",
    6 => "AMD Radeon RX 6700 XT",
    7 => "Nvidia GeForce RTX 3060 Ti",
    8 => "AMD Radeon RX 6600 XT",
    9 => "Nvidia GeForce GTX 1660 Super",
    10 => "AMD Radeon RX 5500 XT"
);

$pecas_computador->gabinete = array(
    1 => "Cooler Master MasterCase H500M ARGB",
    2 => "Lian Li PC-O11 Dynamic Razer Edition",
    3 => "Corsair Obsidian Series 1000D",
    4 => "Fractal Design Define R6 USB-C TG",
    5 => "Phanteks Enthoo Evolv X Digital RGB",
    6 => "Thermaltake Core P90 TG",
    7 => "NZXT H510i Elite Matte White",
    8 => "Be Quiet Dark Base Pro 900",
    9 => "SilverStone Raven RVZ03B",
    10 => "In Win 101C"
);

$pecas_computador->fonte = array(
    1 => "EVGA SuperNOVA 850 T2 850W 80 Plus Titanium",
    2 => "Seasonic Focus GX-1000 1000W 80 Plus Gold",
    3 => "Corsair AX1600i 1600W 80 Plus Titanium",
    4 => "Thermaltake Toughpower PF1 ARGB 1200W 80 Plus Platinum",
    5 => "be quiet! Dark Power Pro 12 1500W 80 Plus Titanium",
    6 => "NZXT C850 850W 80 Plus Gold",
    7 => "Antec High Current Pro Platinum 1300W 80 Plus Platinum",
    8 => "Cooler Master V850 Platinum 850W 80 Plus Platinum",
    9 => "FSP Hydro PTM Pro 1200W 80 Plus Platinum",
    10 => "XPG Core Reactor 1000W 80 Plus Gold"
);
$pecas_computador->memoria_ram = array(
    1 => "Corsair Dominator Platinum RGB 32GB (2x16GB) DDR4 3200MHz C16",
    2 => "G.Skill Trident Z Neo 64GB (2x32GB) DDR4 3600MHz C16",
    3 => "Crucial Ballistix RGB 16GB (2x8GB) DDR4 3600MHz C16",
    4 => "HyperX Predator RGB 128GB (4x32GB) DDR4 3200MHz C16",
    5 => "Patriot Viper Steel DDR4 64GB (4x16GB) 3200MHz C16",
    6 => "ADATA XPG Spectrix D60G 32GB (2x16GB) DDR4 4133MHz C19",
    7 => "Kingston HyperX Fury RGB 16GB (2x8GB) DDR4 3600MHz C17",
    8 => "Team T-Force Delta RGB 32GB (2x16GB) DDR4 3200MHz C16",
    9 => "GeIL Super Luce RGB Sync 64GB (4x16GB) DDR4 3600MHz C16",
    10 => "Ballistix MAX RGB 32GB (2x16GB) DDR4 4400MHz C19"
);
$pecas_computador->cooler = array(
    1 => "Noctua NH-D15 chromax.black",
    2 => "Corsair H150i Elite Capellix",
    3 => "be quiet! Dark Rock Pro 4",
    4 => "Cooler Master MasterLiquid ML360R ARGB",
    5 => "NZXT Kraken X73",
    6 => "Thermaltake Floe DX RGB 360 TT Premium Edition",
    7 => "Deepcool Gamerstorm Castle 360EX",
    8 => "EVGA CLC 360mm All-In-One RGB LED CPU Liquid Cooler",
    9 => "Arctic Liquid Freezer II 360",
    10 => "Cooler Master Hyper 212 RGB Black Edition"
);

//escolhe aleatoriamente um valor de atributo da classe
$PlacaMaeEscolhida = rand(1, count($pecas_computador->placa_mae));
$ProcessadorEscolhido = rand(1, count($pecas_computador->processador));
$UnidadeArmazenamentoEscolhido = rand(1, count($pecas_computador->unidade_armazenamento));
$PlacaVideoEscolhida = rand(1, count($pecas_computador->placa_video));
$GabineteEscolhido = rand(1, count($pecas_computador->gabinete));
$fonteEscolhida = rand(1, count($pecas_computador->fonte));
$memoriaRamEscolhida = rand(1, count($pecas_computador->memoria_ram));
$coolerEscolhido = rand(1, count($pecas_computador->cooler));

//Lista o nome de cada um dos valores de atributos escolhidos como dito acima
echo $pecas_computador->placa_mae[$PlacaMaeEscolhida] . "<br>";
echo $pecas_computador->processador[$ProcessadorEscolhido] . "<br>";
echo $pecas_computador->unidade_armazenamento[$UnidadeArmazenamentoEscolhido] . "<br>";
echo $pecas_computador->placa_video[$PlacaVideoEscolhida] . "<br>";
echo $pecas_computador->gabinete[$GabineteEscolhido] . "<br>";
echo $pecas_computador->fonte[$fonteEscolhida] . "<br>";
echo $pecas_computador->memoria_ram[$memoriaRamEscolhida] . "<br>";
echo $pecas_computador->cooler[$coolerEscolhido] . "<br>";

//pega os valores escolhidos acima e o preço dele de acordo com a sua posição no atributo definido em $valores, e assim fazendo o calculo final juntando todos os valores e atributos
$valorTotal = $pecas_computador->CalcularValorEscolhido($PlacaMaeEscolhida, $ProcessadorEscolhido, $UnidadeArmazenamentoEscolhido, $PlacaVideoEscolhida, $GabineteEscolhido, $fonteEscolhida, $memoriaRamEscolhida, $coolerEscolhido);

//mostra o preço de todos os valores, usando mascara.
echo "<br>Valor total escolhido: R$ " . number_format($valorTotal, 2, ',', '.');

